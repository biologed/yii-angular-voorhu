import {Component} from '@angular/core';
import {
  TranslateService,
} from '@ngx-translate/core';
import {animate, state, style, transition, trigger} from "@angular/animations";
@Component({
  selector: 'app-language-switcher',
  templateUrl: './language-switcher.component.html',
  styleUrls: ['./language-switcher.component.less'],
  imports: [],
  animations: [
    trigger('langSwitch', [
      state('en', style({
        backgroundImage: 'url(/assets/media/flag-en.svg)',
        transform: 'rotate(0)'
      })),
      state('ru', style({
        backgroundImage: 'url(/assets/media/flag-ru.svg)',
        transform: 'rotate(360deg)'
      })),
      transition('ru => en', animate('900ms cubic-bezier(0.68, -0.55, 0.265, 1.55)')),
      transition('en => ru', animate('900ms cubic-bezier(0.68, -0.55, 0.265, 1.55)'))
    ])
  ],
  standalone: true
})
export class LanguageSwitcherComponent {
  public language = localStorage.getItem('language') as string || 'ru';
  constructor(
    private translate: TranslateService
  ) {
    // this.translate.onLangChange.subscribe((event: LangChangeEvent) => {
    //   console.log('onLangChange', event);
    // });
    // this.translate.onTranslationChange.subscribe((event: TranslationChangeEvent) => {
    //   console.log('onTranslationChange', event);
    // });
    // this.translate.onDefaultLangChange.subscribe((event: DefaultLangChangeEvent) => {
    //   console.log('onDefaultLangChange', event);
    // });
  }
  changeSiteLanguage(): void {
    this.language = (this.language === 'ru') ? 'en' : 'ru';
    this.translate.use(this.language);
    localStorage.setItem('language', this.language);
  }
}
