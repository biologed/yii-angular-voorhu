import {ChangeDetectionStrategy, Component, Inject} from '@angular/core';
import {AbstractControl, FormBuilder, ValidationErrors, Validators} from '@angular/forms';
import {TuiDialogService} from "@taiga-ui/core";
import {TuiValidationError} from "@taiga-ui/cdk";
import {AuthService} from "../services/auth.service";
import {Router} from "@angular/router";
const latinCharRegExp = /^[0-9a-zA-Z]+$/;
@Component({
  selector: 'app-login',
  templateUrl: 'login.component.html',
  styleUrls: ['login.component.less'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class LoginComponent  {
  private LatinCharValidator(control: AbstractControl): ValidationErrors | null {
    return control.value && latinCharRegExp.test(control.value)
      ? null : {
        error: new TuiValidationError('Используйте только латинские символы')
      };
  };
  loginForm;
  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService
  ) {
    this.loginForm = this.formBuilder.group({
      username: ['', [Validators.required, Validators.minLength(5), this.LatinCharValidator]],
      password: ['', [Validators.required, Validators.minLength(5)]]
    });
  }
  showDialog(label: string | undefined, type?: string): void {
    this.dialogs$.open(label, {
      label: type || 'Error',
      size: 'm',
    }).subscribe();
  }
  onSubmit(): void {
    const username: string | null = this.loginForm.controls.username.value
    const password: string | null = this.loginForm.controls.password.value;
    if (username !== null && password !== null) {
      this.authService.doLogin(username, password).subscribe({
        next: () => {
          this.router.navigate(['/']).then();
        },
        error: err => {
          this.showDialog(err.error.message);
        }
      });
    }
  }
}
