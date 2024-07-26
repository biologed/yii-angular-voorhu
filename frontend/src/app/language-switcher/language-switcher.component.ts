import {Component} from '@angular/core';
import {TranslateService} from '@ngx-translate/core';
import {animate, state, style, transition, trigger} from "@angular/animations";
@Component({
  standalone: true,
  selector: 'app-language-switcher',
  templateUrl: 'language-switcher.component.html',
  styleUrls: ['language-switcher.component.less'],
  animations: [
    trigger('langSwitch', [
      state('en', style({
        backgroundImage: 'url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA5MDAgNDUwIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMwMTIxNjkiIGQ9Ik03OTkuMzggMEg1MjV2MTM3LjE5TDc5OS4zOCAwek05MDAgMzk5LjY5VjMwMEg3MDAuNjJMOTAwIDM5OS42OXpNOTAwIDE1MFY1MC4zMUw3MDAuNjIgMTUwSDkwMHpNMzc1IDBIMTAwLjYyTDM3NSAxMzcuMTlWMHpNMCAzMDB2OTkuNjlMMTk5LjM4IDMwMEgwek0xMDAuNjIgNDUwSDM3NVYzMTIuODFMMTAwLjYyIDQ1MHpNNTI1IDQ1MGgyNzQuMzhMNTI1IDMxMi44MVY0NTB6TTAgNTAuMzFWMTUwaDE5OS4zOEwwIDUwLjMxeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I2M4MTAyZSIgZD0ibTgzMi45MiAwLTMwMCAxNTBoMTM0LjE2TDkwMCAzMy41NFYwaC02Ny4wOHpNNTMyLjkyIDMwMGwzMDAgMTUwSDkwMHYtMzMuNTRMNjY3LjA4IDMwMEg1MzIuOTJ6TTM2Ny4wOCAxNTAgNjcuMDggMEgwdjMzLjU0TDIzMi45MiAxNTBoMTM0LjE2ek0yMzIuOTIgMzAwIDAgNDE2LjQ2VjQ1MGg2Ny4wOGwzMDAtMTUwSDIzMi45MnoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNmZmYiIGQ9Ik00OTUgNDUwaDMwVjMxMi44MUw3OTkuMzggNDUwaDMzLjU0bC0zMDAtMTUwaDEzNC4xNkw5MDAgNDE2LjQ2di0xNi43N0w3MDAuNjIgMzAwSDkwMHYtMzBINDk1djE4MHpNNDA1IDBoLTMwdjEzNy4xOUwxMDAuNjIgMEg2Ny4wOGwzMDAgMTUwSDIzMi45MkwwIDMzLjU0djE2Ljc3TDE5OS4zOCAxNTBIMHYzMGg0MDVWMHpNMCAyNzB2MzBoMTk5LjM4TDAgMzk5LjY5djE2Ljc3TDIzMi45MiAzMDBoMTM0LjE2bC0zMDAgMTUwaDMzLjU0TDM3NSAzMTIuODFWNDUwaDMwVjI3MEgwek01MzIuOTIgMTUwbDMwMC0xNTBoLTMzLjU0TDUyNSAxMzcuMTlWMGgtMzB2MTgwaDQwNXYtMzBINzAwLjYyTDkwMCA1MC4zMVYzMy41NEw2NjcuMDggMTUwSDUzMi45MnoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNjODEwMmUiIGQ9Ik00OTUgMGgtOTB2MTgwSDB2OTBoNDA1djE4MGg5MFYyNzBoNDA1di05MEg0OTVWMHoiLz4NCjwvc3ZnPg==)',
        transform: 'rotate(0)'
      })),
      state('ru', style({
        backgroundImage: 'url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA5MDAgNDUwIj4NCjxwYXRoIGQ9Ik0wIDBoOTAwdjE1MEgwVjB6IiBzdHlsZT0iZmlsbDojZmZmIi8+DQo8cGF0aCBkPSJNMCAzMDBoOTAwdjE1MEgwVjMwMHoiIHN0eWxlPSJmaWxsOiNkNTJiMWUiLz4NCjxwYXRoIGQ9Ik0wIDE1MGg5MDB2MTUwSDBWMTUweiIgc3R5bGU9ImZpbGw6IzAwMzlhNiIvPg0KPC9zdmc+)',
        transform: 'rotate(360deg)'
      })),
      transition('ru => en', animate('900ms cubic-bezier(0.68, -0.55, 0.265, 1.55)')),
      transition('en => ru', animate('900ms cubic-bezier(0.68, -0.55, 0.265, 1.55)'))
    ])
  ]
})
export class LanguageSwitcherComponent {
  public language = localStorage.getItem('language') as string;
  constructor(
    private translate: TranslateService
  ) {
    if (this.language === null) {
      this.language = this.translate.getDefaultLang();
      localStorage.setItem('language', this.translate.getDefaultLang());
    }
  }
  changeSiteLanguage(): void {
    this.language = (this.language === 'ru') ? 'en' : 'ru';
    this.translate.use(this.language);
    localStorage.setItem('language', this.language);
  }
}
