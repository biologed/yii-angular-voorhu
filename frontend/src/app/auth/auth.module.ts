import {NgModule} from '@angular/core';

import {CommonModule, NgOptimizedImage} from '@angular/common';
import {AuthComponent} from './auth.component';
import {RouterLink, RouterOutlet} from "@angular/router";

//icons
import {LogoComponent} from "../icons/logo/logo.component";
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
  ]
})
export class AuthModule { }
