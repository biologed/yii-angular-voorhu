import {NgModule} from '@angular/core';

import {CommonModule, NgOptimizedImage} from '@angular/common';
import {AuthComponent} from './auth.component';
import {RouterLink, RouterOutlet} from "@angular/router";
import {TuiSvgModule} from "@taiga-ui/core";

import {LogoComponent} from "../icons/logo/logo.component";

export const svgIcons = [
  LogoComponent,
]
@NgModule({
  declarations: [
    AuthComponent
  ],
  exports: [
    AuthComponent
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
export class AuthModule { }
