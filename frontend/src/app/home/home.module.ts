import {CUSTOM_ELEMENTS_SCHEMA, NgModule} from '@angular/core';

import {HomeComponent} from './home.component';
import {BrowserModule} from "@angular/platform-browser";
import {BrowserAnimationsModule} from "@angular/platform-browser/animations";
import {CommonModule, NgOptimizedImage} from "@angular/common";
import {httpInterceptorProviders} from '../http.interceptor';

import {TranslateModule} from "@ngx-translate/core";
import {TuiLinkModule, TuiRootModule, TuiSvgModule} from "@taiga-ui/core";
import {SwiperModule} from "../swiper/swiper.module";
import {RouterLink, RouterOutlet} from "@angular/router";
import {LanguageSwitcherComponent} from "../language-switcher/language-switcher.component";
import {NgxCountAnimationDirective} from "ngx-count-animation";

//icons
import {LogoComponent} from "../icons/logo/logo.component";
import {BoostyComponent} from "../icons/boosty/boosty.component";
import {DiscordComponent} from "../icons/discord/discord.component";
import {GithubComponent} from "../icons/github/github.component";
export const svgIcons = [
  LogoComponent,
  BoostyComponent,
  DiscordComponent,
  GithubComponent,
]
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
    TuiRootModule,
    TuiSvgModule,
    TuiLinkModule,
    TranslateModule,
    LanguageSwitcherComponent,
    NgxCountAnimationDirective,
    ...svgIcons,
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
