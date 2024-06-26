import {NgModule} from '@angular/core';

import {CommonModule, NgOptimizedImage} from '@angular/common';
import {AuthComponent} from './auth.component';
import {RouterLink, RouterOutlet} from "@angular/router";

//icons
import {LogoComponent} from "../icons/logo/logo.component";
import {TuiSvgModule} from "@taiga-ui/core";
@NgModule({
  declarations: [
    AuthComponent
  ],
  exports: [
    AuthComponent
  ],
  imports: [
    CommonModule,
    LogoComponent,
    NgOptimizedImage,
    RouterLink,
    RouterOutlet,
    TuiSvgModule,
  ]
})
export class AuthModule { }
