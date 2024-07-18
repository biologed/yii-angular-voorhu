import {Component, Inject} from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {window} from "rxjs";
import {AuthService} from "../services/auth.service";
import {TuiDialogService} from "@taiga-ui/core";
@Component({
  selector: 'app-auth',
  templateUrl: 'auth.component.html',
  styleUrls: ['auth.component.less']
})
export class AuthComponent {
  public activationCode: string | null;
  constructor(
    private router: Router,
    private activatedRoute: ActivatedRoute,
    private authService: AuthService,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService
  ) {
    if (this.router.url.split('?')[0] === '/auth/epic') {
      this.activatedRoute.queryParamMap.subscribe(map => {
        this.activationCode = map.get('code');
        if (this.activationCode === null || this.activationCode.length !== 32) {
          this.router.navigate(['/auth/login']).then();
        }
        this.authService.doEpicLogin(this.activationCode).subscribe({
          next: () => {
            this.router.navigate(['/']).then();
          },
          error: err => {
            this.showDialog(err.error.message);
          }
        });
      });
    }
    else if (this.router.url !== '/auth/registration') {
      this.router.navigate(['/auth/login']).then();
    }
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

  protected readonly window = window;
}
