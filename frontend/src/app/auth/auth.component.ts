import {Component} from '@angular/core';
import {Router} from "@angular/router";

@Component({
  selector: 'app-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.less']
})
export class AuthComponent {
  constructor(
    private router: Router
  ) {
    if (this.router.url !== '/auth/registration') {
      this.router.navigate(['/auth/login']).then();
    }
  }
}
