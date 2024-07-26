import {CUSTOM_ELEMENTS_SCHEMA, NgModule} from '@angular/core';

import {HomeComponent} from './home.component';
import {BrowserModule} from "@angular/platform-browser";
import {BrowserAnimationsModule} from "@angular/platform-browser/animations";
import {CommonModule, NgOptimizedImage} from "@angular/common";
import {httpInterceptorProviders} from '../http.interceptor';

import {TranslateModule} from "@ngx-translate/core";
import {TuiLinkModule, TuiRootModule, TuiSvgModule} from "@taiga-ui/core";
import {SwiperComponent} from "../swiper/swiper.component";
import {RouterLink, RouterOutlet} from "@angular/router";
import {LanguageSwitcherComponent} from "../language-switcher/language-switcher.component";
import {NgxCountAnimationDirective} from "ngx-count-animation";

//icons
import {LogoComponent} from "../icons/logo/logo.component";
import {DiscordComponent} from "../icons/discord/discord.component";
import {GithubComponent} from "../icons/github/github.component";
import {BoostyComponent} from "../icons/boosty/boosty.component";
import {BoostyWithTextComponent} from "../icons/boosty-with-text/boosty-with-text.component";
import {DiscordWithTextComponent} from "../icons/discord-with-text/discord-with-text.component";

const tuiComponents = [
  TuiRootModule,
  TuiSvgModule,
  TuiLinkModule,
];
export const svgIcons = [
  LogoComponent,
  BoostyComponent,
  DiscordComponent,
  GithubComponent,
  BoostyWithTextComponent,
  DiscordWithTextComponent
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
    SwiperComponent,
    RouterLink,
    RouterOutlet,
    TranslateModule,
    LanguageSwitcherComponent,
    NgxCountAnimationDirective,
    ...tuiComponents,
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
