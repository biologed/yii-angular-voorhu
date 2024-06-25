import {CUSTOM_ELEMENTS_SCHEMA, NgModule} from '@angular/core';

import {HomeComponent} from './home.component';
import {BrowserModule} from "@angular/platform-browser";
import {BrowserAnimationsModule} from "@angular/platform-browser/animations";
import {CommonModule, NgOptimizedImage} from "@angular/common";

import {httpInterceptorProviders} from '../http.interceptor';
import {TuiLinkModule, TuiRootModule, TuiSvgModule} from "@taiga-ui/core";
import {SwiperModule} from "../swiper/swiper.module";
import {RouterLink, RouterOutlet} from "@angular/router";

//icons
import {LogoComponent} from "../icons/logo/logo.component";
import {BoostyComponent} from "../icons/boosty/boosty.component";
import {DiscordComponent} from "../icons/discord/discord.component";
@NgModule({
  declarations: [
    HomeComponent
  ],
  imports: [
    CommonModule,
    BrowserModule,
    BrowserAnimationsModule,
    NgOptimizedImage,
    SwiperModule,
    RouterLink,
    RouterOutlet,
    LogoComponent,
    BoostyComponent,
    DiscordComponent,
    TuiRootModule,
    TuiSvgModule,
    TuiLinkModule,
  ],
  providers: [
    httpInterceptorProviders
  ],
  schemas: [
    CUSTOM_ELEMENTS_SCHEMA,
  ],
  exports: [
    HomeComponent
  ],
  bootstrap: [HomeComponent]
})
export class HomeModule {}
