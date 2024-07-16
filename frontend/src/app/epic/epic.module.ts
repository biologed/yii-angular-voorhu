import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {ReactiveFormsModule} from "@angular/forms";
import {RouterLink} from "@angular/router";

import {EpicComponent} from './epic.component';
import {TuiButtonModule, TuiErrorModule} from "@taiga-ui/core";
import {TuiFieldErrorPipeModule, TuiInputModule, TuiInputPasswordModule} from "@taiga-ui/kit";
import {TranslateModule} from "@ngx-translate/core";
export const svgIcons = [
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
    EpicComponent
  ],
  imports: [
    CommonModule,
    ReactiveFormsModule,
    RouterLink,
    TranslateModule,
    ...tuiComponents,
    ...svgIcons,
  ]
})
export class EpicModule {}
