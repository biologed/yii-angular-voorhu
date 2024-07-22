import {ChangeDetectionStrategy, Component, Inject, Injector, OnDestroy, OnInit} from '@angular/core';
import {AbstractControl, FormBuilder, ValidationErrors, Validators} from '@angular/forms';
import {TuiDialogService} from "@taiga-ui/core";
import {TuiValidationError} from "@taiga-ui/cdk";
import {AuthService} from "../services/auth.service";
import {ActivatedRoute, Router} from "@angular/router";
import {map, Subject, takeUntil} from "rxjs";
import {PolymorpheusComponent} from "@tinkoff/ng-polymorpheus";
import {DialogComponent} from "../tui-dialog/dialog.component";
import {TranslateService} from "@ngx-translate/core";
const emailRegExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
@Component({
  selector: 'app-epic',
  templateUrl: 'epic.component.html',
  styleUrls: ['epic.component.less'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class EpicComponent implements OnDestroy, OnInit {
  private readonly destroy$ = new Subject<void>();
  private activationCode: string | null;
  private emailValidator(control: AbstractControl): ValidationErrors | null {
    return control.value && emailRegExp.test(control.value)
      ? null : {
        error: new TuiValidationError('Используйте корректный адрес электронной почты')
      };
  };
  public readonly epicForm;
  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router,
    private activatedRoute: ActivatedRoute,
    private translate: TranslateService,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService,
    @Inject(Injector) private readonly injector: Injector
  ) {
    this.epicForm = this.formBuilder.group({
      email: ['', [Validators.required, Validators.minLength(5), this.emailValidator]]
    });
  }
  ngOnInit(): void {
    this.activatedRoute.queryParamMap.pipe(
      map(map => (
        this.activationCode = map.get('code')
      )),
      takeUntil(this.destroy$)
    ).subscribe();
    if (this.activationCode === null || this.activationCode.length !== 32) {
      this.router.navigate(['/auth/login']).then();
    } else {
      this.authService.doEpicLogin(this.activationCode).pipe(
        takeUntil(this.destroy$)
      ).subscribe({
        next: () => {
          this.router.navigate(['/']).then();
        },
        error: err => {
          this.showDialog(err.error.message);
        }
      });
    }
  }
  onSubmit(): void {
    const email: string | null = this.epicForm.controls?.email?.value;
    const language: string = this.translate.currentLang;
    if (email !== null && this.activationCode !== null && this.activationCode.length === 32) {
      this.authService.doEpicRegister(email, this.activationCode, language).pipe(
        takeUntil(this.destroy$)
      ).subscribe({
        next: data => {
          this.showDialog(data.message, 'Success');
        },
        error: err => {
          this.showDialog(err.error.message);
        }
      });
    }
  }
  showDialog(body: string | undefined, label?: string): void {
    this.dialogs$.open(
      new PolymorpheusComponent(DialogComponent, this.injector),
      {
        data: {
          label: label,
          body: body,
        },
      },
    ).pipe(
      takeUntil(this.destroy$)
    ).subscribe({
      complete: () => {
        this.router.navigate(['/']).then();
      }
    });
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
