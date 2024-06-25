import {NgModule} from '@angular/core';

import {CommonModule} from '@angular/common';
import {LoginComponent} from './login.component';
import {ReactiveFormsModule} from "@angular/forms";
import {TuiButtonModule, TuiErrorModule} from "@taiga-ui/core";
import {TuiFieldErrorPipeModule, TuiInputModule, TuiInputPasswordModule} from "@taiga-ui/kit";
import {RouterLink} from "@angular/router";

//icons
import {EpicComponent} from "../icons/epic/epic.component";
@NgModule({
  declarations: [
    LoginComponent
  ],
  imports: [
    CommonModule,
    ReactiveFormsModule,
    TuiFieldErrorPipeModule,
    TuiErrorModule,
    TuiInputModule,
    TuiInputPasswordModule,
    TuiButtonModule,
    RouterLink,
    EpicComponent,
  ]
})
export class LoginModule {}
