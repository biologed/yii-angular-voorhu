import {Component, OnDestroy, OnInit} from '@angular/core';
import {Router, RouterLink, RouterOutlet} from "@angular/router";
import {AuthService} from "../services/auth.service";
import {map, Subject, takeUntil} from "rxjs";
import {CommonModule, NgOptimizedImage} from "@angular/common";
import {TuiSvgModule} from "@taiga-ui/core";
import {LogoComponent} from "../icons/logo/logo.component";

const tuiComponents = [
  TuiSvgModule,
];
const svgIcons = [
  LogoComponent,
];
@Component({
  standalone: true,
  selector: 'app-auth',
  templateUrl: 'auth.component.html',
  styleUrls: ['auth.component.less'],
  imports: [
    CommonModule,
    NgOptimizedImage,
    RouterOutlet,
    ...tuiComponents,
    ...svgIcons,
    RouterLink,
  ]
})
export class AuthComponent implements OnDestroy, OnInit {
  private readonly destroy$ = new Subject<void>();
  private userStatus: boolean;
  constructor(
    private router: Router,
    private authService: AuthService
  ) {}
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
