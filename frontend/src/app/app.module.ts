import {NgModule} from '@angular/core';

import {CommonModule} from "@angular/common";
import {BrowserModule} from "@angular/platform-browser";
import {RouterLink, RouterOutlet} from "@angular/router";
import {BrowserAnimationsModule} from "@angular/platform-browser/animations";

import {TuiDialogModule, TuiModeModule, TuiRootModule, TuiThemeNightModule} from "@taiga-ui/core";

import {AppComponent} from './app.component';

@NgModule({
  declarations: [
    AppComponent,
  ],
  bootstrap: [AppComponent],
  imports: [
    CommonModule,
    BrowserModule,
    BrowserAnimationsModule,
    RouterLink,
    RouterOutlet,
    TuiRootModule,
    TuiThemeNightModule,
    TuiDialogModule,
    TuiModeModule
  ],
  providers: [
  ]
})
export class AppModule {}
