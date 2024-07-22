import {Component, OnDestroy, OnInit} from '@angular/core';
import {Router} from "@angular/router";
import {AuthService} from "../services/auth.service";
import {map, Subject, takeUntil} from "rxjs";
@Component({
  selector: 'app-auth',
  templateUrl: 'auth.component.html',
  styleUrls: ['auth.component.less']
})
export class AuthComponent implements OnDestroy, OnInit {
  private readonly destroy$ = new Subject<void>();
  private activationCode: string | null;
  private userStatus: boolean;
  constructor(
    private router: Router,
    private authService: AuthService  ) {}
  ngOnInit(): void {
    this.authService.getStatus().pipe(
      map(status => (
        this.userStatus = status
      )),
      takeUntil(this.destroy$)
    ).subscribe();
    if (this.userStatus) {
      this.router.navigate(['/']).then();
    }
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
