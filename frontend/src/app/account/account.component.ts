import {Component, Inject, Injector, OnDestroy, OnInit} from '@angular/core';
import {Router, RouterLink, RouterOutlet} from "@angular/router";
import {TuiDialogService, TuiSvgModule} from "@taiga-ui/core";
import {map, Subject, takeUntil} from "rxjs";
import {PolymorpheusComponent} from "@tinkoff/ng-polymorpheus";
import {DialogComponent} from "../tui-dialog/dialog.component";
import {AuthService} from "../services/auth.service";
import {LogoComponent} from "../icons/logo/logo.component";
import {CommonModule, NgOptimizedImage} from "@angular/common";

const svgIcons = [
  LogoComponent,
];
@Component({
  standalone: true,
  selector: 'app-account',
  templateUrl: 'account.component.html',
  styleUrls: ['account.component.less'],
  imports: [
    CommonModule,
    NgOptimizedImage,
    RouterLink,
    RouterOutlet,
    TuiSvgModule,
    ...svgIcons,
  ]
})
export class AccountComponent implements OnDestroy, OnInit {
  private readonly destroy$ = new Subject<void>();
  private userStatus: boolean;
  constructor(
    private router: Router,
    private authService: AuthService,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService,
    @Inject(Injector) private readonly injector: Injector,
  ) {}
  ngOnInit(): void {
    this.authService.getStatus().pipe(
      map(status => (
        this.userStatus = status
      )),
      takeUntil(this.destroy$)
    ).subscribe();
    if (!this.userStatus) {
      this.router.navigate(['/']).then();
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
