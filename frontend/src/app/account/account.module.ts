import {NgModule} from '@angular/core';

import {CommonModule, NgOptimizedImage} from '@angular/common';
import {AccountComponent} from './account.component';
import {RouterLink, RouterOutlet} from "@angular/router";
import {TuiSvgModule} from "@taiga-ui/core";

import {LogoComponent} from "../icons/logo/logo.component";

export const svgIcons = [
  LogoComponent,
]
@NgModule({
  declarations: [
    AccountComponent
  ],
  exports: [
    AccountComponent
  ],
  imports: [
    CommonModule,
    NgOptimizedImage,
    RouterLink,
    RouterOutlet,
    TuiSvgModule,
    ...svgIcons,
  ]
})
export class AccountModule { }
