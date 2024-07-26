import {Component, Inject, Injector, OnDestroy} from '@angular/core';
import {AbstractControl, FormBuilder, ReactiveFormsModule, ValidationErrors, Validators} from '@angular/forms';
import {TuiButtonModule, TuiDialogService, TuiErrorModule} from "@taiga-ui/core";
import {TuiValidationError} from "@taiga-ui/cdk";
import {AuthService} from "../../services/auth.service";
import {Subject, takeUntil} from "rxjs";
import {PolymorpheusComponent} from "@tinkoff/ng-polymorpheus";
import {DialogComponent} from "../../tui-dialog/dialog.component";
import {TranslateModule, TranslateService} from "@ngx-translate/core";
import {CommonModule} from "@angular/common";
import {RouterLink} from "@angular/router";
import {TuiFieldErrorPipeModule, TuiInputModule, TuiInputPasswordModule} from "@taiga-ui/kit";

const tuiComponents = [
  TuiFieldErrorPipeModule,
  TuiErrorModule,
  TuiInputModule,
  TuiInputPasswordModule,
  TuiButtonModule,
];
const emailRegExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const latinCharRegExp = /^[0-9a-zA-Z]+$/;
@Component({
  standalone: true,
  selector: 'app-registration',
  templateUrl: 'registration.component.html',
  styleUrls: ['registration.component.less'],
  imports: [
    CommonModule,
    ReactiveFormsModule,
    RouterLink,
    TranslateModule,
    ...tuiComponents,
  ]
})
export class RegistrationComponent implements OnDestroy {
  private readonly destroy$ = new Subject<void>();
  private LatinCharValidator(control: AbstractControl): ValidationErrors | null {
    return control.value && latinCharRegExp.test(control.value)
      ? null : {
        error: new TuiValidationError('Используйте только латинские символы')
      };
  };
  private emailValidator(control: AbstractControl): ValidationErrors | null {
    return control.value && emailRegExp.test(control.value)
      ? null : {
        error: new TuiValidationError('Используйте корректный адрес электронной почты')
      };
  };
  public readonly registerForm;
  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private translate: TranslateService,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService,
    @Inject(Injector) private readonly injector: Injector
  ) {
    this.registerForm = this.formBuilder.group({
      username: ['', [Validators.required, Validators.minLength(5), Validators.maxLength(16), this.LatinCharValidator]],
      email: ['', [Validators.required, Validators.minLength(5), this.emailValidator]],
      password: ['', [Validators.required, Validators.minLength(5)]],
      confirmPassword: ['', [Validators.required, Validators.minLength(5)]]
    });
  }
  onSubmit(): void {
    const username: string | null = this.registerForm.controls.username.value;
    const email: string | null = this.registerForm.controls?.email?.value;
    const password: string | null = this.registerForm.controls?.password?.value;
    const confirmPassword: string | null = this.registerForm.controls?.confirmPassword?.value;
    const language: string = this.translate.currentLang;
    if (password !== confirmPassword) {
      this.registerForm.controls.confirmPassword.setErrors(new TuiValidationError('The passwords must match'));
    }
    if (username !== null && email !== null && password !== null && confirmPassword !== null) {
      this.authService.doRegister(username, email, password, language).pipe(
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
    ).subscribe();
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
