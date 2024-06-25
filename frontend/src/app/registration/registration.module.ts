import {NgModule} from '@angular/core';

import {CommonModule} from '@angular/common';
import {RegistrationComponent} from './registration.component';
import {ReactiveFormsModule} from '@angular/forms';
import {TuiButtonModule, TuiErrorModule} from "@taiga-ui/core";
import {TuiFieldErrorPipeModule, TuiInputModule, TuiInputPasswordModule} from "@taiga-ui/kit";
import {RouterLink} from "@angular/router";
@NgModule({
  declarations: [
    RegistrationComponent
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
  ]
})
export class RegistrationModule {}
