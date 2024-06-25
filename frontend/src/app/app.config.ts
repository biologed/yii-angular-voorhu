import {ApplicationConfig, importProvidersFrom, provideExperimentalZonelessChangeDetection} from '@angular/core';
import {provideRouter} from '@angular/router';
import {provideClientHydration} from '@angular/platform-browser';
import {provideHttpClient, withFetch} from '@angular/common/http';
import {provideAnimationsAsync} from "@angular/platform-browser/animations/async";

import {routes} from './app.routes';
import {NG_EVENT_PLUGINS} from "@tinkoff/ng-event-plugins";

import {TuiDialogModule, TuiModeModule, TuiRootModule, TuiThemeNightModule} from "@taiga-ui/core";

export const appConfig: ApplicationConfig = {
  providers: [
    NG_EVENT_PLUGINS,
    provideRouter(routes),
    importProvidersFrom(
      TuiRootModule,
      TuiThemeNightModule,
      TuiDialogModule,
      TuiModeModule,
    ),
    provideClientHydration(),
    provideHttpClient(withFetch()),
    provideAnimationsAsync(),
    provideExperimentalZonelessChangeDetection()
  ],
};
