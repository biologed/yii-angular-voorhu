import {NgModule} from '@angular/core';
import {CommonModule} from "@angular/common";
import {RouterOutlet} from "@angular/router";
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import {TranslateModule} from '@ngx-translate/core';
import {TuiDialogModule, TuiModeModule, TuiRootModule, TuiThemeNightModule} from "@taiga-ui/core";
import {AppComponent} from './app.component';

const tuiComponents = [
  TuiRootModule,
  TuiThemeNightModule,
  TuiDialogModule,
  TuiModeModule
];
@NgModule({
  declarations: [
    AppComponent,
  ],
  bootstrap: [AppComponent],
  imports: [
    CommonModule,
    BrowserAnimationsModule,
    TranslateModule.forRoot(),
    RouterOutlet,
    ...tuiComponents
  ],
  providers: [
  ]
})
export class AppModule {}
