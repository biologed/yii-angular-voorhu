import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {DialogComponent} from './dialog.component';
import {TuiButtonModule} from "@taiga-ui/core";
import {TuiAutoFocusModule} from "@taiga-ui/cdk";
import {TranslateModule} from "@ngx-translate/core";
export const svgIcons = [
]
export const tuiComponents = [
  TuiButtonModule,
  TuiAutoFocusModule,
]
@NgModule({
  declarations: [
    DialogComponent
  ],
  imports: [
    CommonModule,
    TranslateModule,
    ...tuiComponents,
    ...svgIcons,
  ]
})
export class DialogModule {}
