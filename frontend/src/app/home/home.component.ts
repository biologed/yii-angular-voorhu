import {ChangeDetectionStrategy, Component, Inject, Injector, OnDestroy, TemplateRef} from '@angular/core';
import {trigger, state, style, animate, transition} from '@angular/animations';
import {AuthService} from "../services/auth.service";
import {map, Observable, Subject, takeUntil} from "rxjs";
import {ActivatedRoute, Router} from "@angular/router";
import {TuiDialogService} from "@taiga-ui/core";
import {DiscordService} from "../services/discord.service";
import {BoostyService} from "../services/boosty.service";
import {PolymorpheusComponent} from "@tinkoff/ng-polymorpheus";
import {DialogComponent} from "../tui-dialog/dialog.component";
type navigationStateInterface = Record<string, string>;
@Component({
  selector: 'app-home',
  templateUrl: 'home.component.html',
  styleUrls: ['home.component.less'],
  animations: [
    trigger('toggleHeight', [
      state('inactive', style({
        height: '0',
        opacity: '0'
      })),
      state('active', style({
        height: '*',
        opacity: '1'
      })),
      transition('inactive => active', animate('200ms ease-in')),
      transition('active => inactive', animate('200ms ease-out'))
    ])
  ],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class HomeComponent implements OnDestroy {
  private readonly destroy$ = new Subject<void>();
  public readonly navigationState: navigationStateInterface = {'voorhu': 'active', 'adscorelite': 'inactive'};
  public activationToken: string | null;
  public isLogin$: Observable<boolean>;
  public discordTotalMembersCount$: Observable<number>
  public boostyTotalMembersCount$: Observable<number>;
  public templateLogout: TemplateRef<unknown>;
  constructor(
    private authService: AuthService,
    private discordService: DiscordService,
    private boostyService: BoostyService,
    private router: Router,
    private activatedRoute: ActivatedRoute,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService,
    @Inject(Injector) private readonly injector: Injector
  ) {
    this.isLogin$ = this.authService.getStatus();
    this.discordTotalMembersCount$ = this.discordService.getTotalMembersCount();
    this.boostyTotalMembersCount$ = this.boostyService.getTotalMembersCount();
    if (this.router.url.split('?')[0] === '/activation') {
      this.activatedRoute.queryParamMap.pipe(
        map(map => (
          this.activationToken = map.get('token')
        )),
        takeUntil(this.destroy$)
      ).subscribe();
      if (this.activationToken !== null && this.activationToken.length === 32) {
        this.authService.doActivation(this.activationToken).pipe(
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
  toggleNavigation(menuName: string, event: Event) {
    event.preventDefault();
    this.navigationState[menuName] = (this.navigationState[menuName] === 'inactive' ? 'active' : 'inactive');
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
