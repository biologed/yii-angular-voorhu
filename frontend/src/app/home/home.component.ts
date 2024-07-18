import {ChangeDetectionStrategy, Component, Inject, TemplateRef} from '@angular/core';
import {trigger, state, style, animate, transition} from '@angular/animations';
import {AuthService} from "../services/auth.service";
import {Observable} from "rxjs";
import {ActivatedRoute, Router} from "@angular/router";
import {TuiDialogService} from "@taiga-ui/core";
import {DiscordService} from "../services/discord.service";
import {BoostyService} from "../services/boosty.service";
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
export class HomeComponent {
  navigationState: navigationStateInterface = {
    'voorhu': 'active',
    'adscorelite': 'inactive'
  };
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
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService
  ) {
    this.isLogin$ = this.authService.getStatus();
    this.discordTotalMembersCount$ = this.discordService.getTotalMembersCount();
    this.boostyTotalMembersCount$ = this.boostyService.getTotalMembersCount();
    if (this.router.url.split('?')[0] === '/activation') {
      this.activatedRoute.queryParamMap.subscribe(map => {
        this.activationToken = map.get('token');
        if (this.activationToken !== null) {
          this.authService.doActivation(this.activationToken).subscribe({
            next: data => {
              this.showDialog(data.message, 'success');
            },
            error: err => {
              this.showDialog(err.error.message);
            }
          });
        }
      });
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
  toggleNavigation(menuName: string, event: Event) {
    event.preventDefault();
    this.navigationState[menuName] = (this.navigationState[menuName] === 'inactive' ? 'active' : 'inactive');
  }
}
