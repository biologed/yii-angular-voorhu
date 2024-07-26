import {Component, Inject, Injector, OnDestroy} from '@angular/core';
import {AbstractControl, FormBuilder, ReactiveFormsModule, ValidationErrors, Validators} from '@angular/forms';
import {TuiButtonModule, TuiDialogService, TuiErrorModule} from "@taiga-ui/core";
import {TuiValidationError} from "@taiga-ui/cdk";
import {AuthService} from "../../services/auth.service";
import {Router, RouterLink} from "@angular/router";
import {Subject, takeUntil} from "rxjs";
import {PolymorpheusComponent} from "@tinkoff/ng-polymorpheus";
import {DialogComponent} from "../../tui-dialog/dialog.component";
import {TranslateModule} from "@ngx-translate/core";
import {EpicComponent} from "../../icons/epic/epic.component";
import {TuiFieldErrorPipeModule, TuiInputModule, TuiInputPasswordModule} from "@taiga-ui/kit";
import {AsyncPipe} from "@angular/common";

const svgIcons = [
  EpicComponent,
];
const tuiComponents = [
  TuiButtonModule,
  TuiInputModule,
  TuiFieldErrorPipeModule,
  TuiErrorModule,
  TuiInputPasswordModule,
];
const latinCharRegExp = /^[0-9a-zA-Z]+$/;
@Component({
  standalone: true,
  selector: 'app-login',
  templateUrl: 'login.component.html',
  styleUrls: ['login.component.less'],
  imports: [
    AsyncPipe,
    TranslateModule,
    ReactiveFormsModule,
    RouterLink,
    ...tuiComponents,
    ...svgIcons,
  ]
})
export class LoginComponent implements OnDestroy {
  private readonly destroy$ = new Subject<void>();
  private LatinCharValidator(control: AbstractControl): ValidationErrors | null {
    return control.value && latinCharRegExp.test(control.value)
      ? null : {
        error: new TuiValidationError('Используйте только латинские символы')
      };
  };
  public readonly loginForm;
  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService,
    @Inject(Injector) private readonly injector: Injector
  ) {
    this.loginForm = this.formBuilder.group({
      username: ['', [Validators.required, Validators.minLength(5), this.LatinCharValidator]],
      password: ['', [Validators.required, Validators.minLength(5)]]
    });
  }
  onSubmit(): void {
    const username: string | null = this.loginForm.controls.username.value
    const password: string | null = this.loginForm.controls.password.value;
    if (username !== null && password !== null) {
      this.authService.doLogin(username, password).pipe(
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
    ).subscribe();
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
