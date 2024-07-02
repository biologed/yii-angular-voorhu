import {ChangeDetectionStrategy, Component, Inject} from '@angular/core';
import {AbstractControl, FormBuilder, ValidationErrors, Validators} from '@angular/forms';
import {TuiDialogService} from "@taiga-ui/core";
import {TuiValidationError} from "@taiga-ui/cdk";
import {AuthService} from "../services/auth.service";
import {Router} from "@angular/router";

const latinCharRegExp = /^[0-9a-zA-Z]+$/;
const emailRegExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.less'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class RegistrationComponent {
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
  registerForm;
  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router,
    @Inject(TuiDialogService) private readonly dialogs: TuiDialogService
  ) {
    this.registerForm = this.formBuilder.group({
      username: ['', [Validators.required, Validators.minLength(5), this.LatinCharValidator]],
      email: ['', [Validators.required, Validators.minLength(5), this.emailValidator]],
      password: ['', [Validators.required, Validators.minLength(5)]],
      confirmPassword: ['', [Validators.required, Validators.minLength(5)]]
    });
  }
  showDialog(label: string | undefined, type?: string): void {
    this.dialogs.open(label, {
      label: type || 'Error',
      size: 'm',
    }).subscribe();
  }
  onSubmit(): void {
    const username: string | null = this.registerForm.controls.username.value;
    const email: string | null = this.registerForm.controls?.email?.value;
    const password: string | null = this.registerForm.controls?.password?.value;
    const confirmPassword: string | null = this.registerForm.controls?.confirmPassword?.value;

    if (password !== confirmPassword) {
      this.registerForm.controls.confirmPassword.setErrors(new TuiValidationError('The passwords must match'));
      this.registerForm.controls.password.setErrors(new TuiValidationError('The passwords must match'));
    }
    if (username !== null && email !== null && password !== null && confirmPassword !== null) {
      this.authService.doRegister(username, email, password).subscribe({
        next: data => {
          this.showDialog(data.message, 'success');
        },
        error: err => {
          this.showDialog(err.error.message);
        }
      })
    }
  }
}
