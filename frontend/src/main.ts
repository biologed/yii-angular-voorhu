import {AppComponent} from "./app/app.component";
import {bootstrapApplication} from "@angular/platform-browser";
import {enableProdMode} from "@angular/core";

import {appConfig} from './app/app.config';
import {environment} from "./environments/environment";

if (!environment.development) {
  enableProdMode();
}
bootstrapApplication(AppComponent, appConfig).catch((err) => console.error(err));
