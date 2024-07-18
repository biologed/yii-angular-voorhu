import {ChangeDetectionStrategy, Component, Inject} from '@angular/core';
import {AbstractControl, FormBuilder, ValidationErrors, Validators} from '@angular/forms';
import {TuiDialogService} from "@taiga-ui/core";
import {TuiValidationError} from "@taiga-ui/cdk";
import {AuthService} from "../services/auth.service";
import {ActivatedRoute, Router} from "@angular/router";
const emailRegExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
@Component({
  selector: 'app-epic',
  templateUrl: 'epic.component.html',
  styleUrls: ['epic.component.less'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class EpicComponent {
  private activationCode: string | null;
  private emailValidator(control: AbstractControl): ValidationErrors | null {
    return control.value && emailRegExp.test(control.value)
      ? null : {
        error: new TuiValidationError('Используйте корректный адрес электронной почты')
      };
  };
  epicForm;
  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router,
    private activatedRoute: ActivatedRoute,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService
  ) {
    this.epicForm = this.formBuilder.group({
      email: ['', [Validators.required, Validators.minLength(5), this.emailValidator]]
    });
  }
  showDialog(label: string | undefined, type?: string): void {
    this.dialogs$.open(label, {
      label: type || 'Error',
      size: 'm',
    }).subscribe({
      complete: () => {
        this.router.navigate(['/']).then();
      }
    });
  }
  onSubmit(): void {
    const email: string | null = this.epicForm.controls?.email?.value;
    this.activatedRoute.queryParamMap.subscribe(map => {
      this.activationCode = map.get('code');
      if (email !== null && this.activationCode !== null && this.activationCode.length === 32) {
        this.authService.doEpicRegister(email, this.activationCode).subscribe({
          next: data => {
            this.showDialog(data.message);
          },
          error: err => {
            this.showDialog(err.error.message);
          }
        });
      }
    });
  }
}
