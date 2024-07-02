import {ApplicationConfig, importProvidersFrom, provideExperimentalZonelessChangeDetection} from '@angular/core';
import {provideRouter} from '@angular/router';
import {provideClientHydration} from '@angular/platform-browser';
import {provideHttpClient, withFetch} from '@angular/common/http';
import {provideAnimationsAsync} from "@angular/platform-browser/animations/async";

import {routes} from './app.routes';
import {NG_EVENT_PLUGINS} from "@tinkoff/ng-event-plugins";

import {TuiDialogModule, TuiModeModule, TuiRootModule, TuiThemeNightModule} from "@taiga-ui/core";
import {TranslateModule} from "@ngx-translate/core";
import {I18nModule} from "./i18n/i18n.module";
import {provideNgxCountAnimations} from "ngx-count-animation";

export const appConfig: ApplicationConfig = {
  providers: [
    NG_EVENT_PLUGINS,
    provideRouter(routes),
    importProvidersFrom(
      TuiRootModule,
      TuiThemeNightModule,
      TuiDialogModule,
      TuiModeModule,
      TranslateModule,
      I18nModule
    ),
    provideClientHydration(),
    provideNgxCountAnimations({
      duration: 1_000,
    }),
    provideHttpClient(withFetch()),
    provideAnimationsAsync(),
    provideExperimentalZonelessChangeDetection(), provideClientHydration()
  ],
};
