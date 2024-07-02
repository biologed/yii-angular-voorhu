import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {ReactiveFormsModule} from "@angular/forms";
import {RouterLink} from "@angular/router";

import {LoginComponent} from './login.component';
import {TuiButtonModule, TuiErrorModule, TuiLinkModule} from "@taiga-ui/core";
import {TuiFieldErrorPipeModule, TuiInputModule, TuiInputPasswordModule} from "@taiga-ui/kit";
import {TranslateModule} from "@ngx-translate/core";
import {EpicComponent} from "../icons/epic/epic.component";
export const svgIcons = [
  EpicComponent,
]
export const tuiComponents = [
  TuiFieldErrorPipeModule,
  TuiErrorModule,
  TuiInputModule,
  TuiInputPasswordModule,
  TuiButtonModule,
]
@NgModule({
  declarations: [
    LoginComponent
  ],
  imports: [
    CommonModule,
    ReactiveFormsModule,
    RouterLink,
    EpicComponent,
    TranslateModule,
    ...tuiComponents,
    ...svgIcons,
  ]
})
export class LoginModule {}
