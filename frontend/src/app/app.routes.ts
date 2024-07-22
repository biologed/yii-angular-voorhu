import {Routes} from '@angular/router';
import {HomeComponent} from "./home/home.component";
import {LoginComponent} from "./login/login.component";
import {RegistrationComponent} from "./registration/registration.component";
import {AuthComponent} from "./auth/auth.component";
import {EpicComponent} from "./epic/epic.component";
import {AccountComponent} from "./account/account.component";
export const routes: Routes = [
  {
    path: '',
    component: HomeComponent,
    loadChildren: () => import('./home/home.module').then(m => m.HomeModule),
  },
  {
    path: 'activation',
    component: HomeComponent,
    loadChildren: () => import('./home/home.module').then(m => m.HomeModule),
  },
  {
    path: 'account',
    component: AccountComponent,
    loadChildren: () => import('./account/account.module').then(m => m.AccountModule),
  },
  {
    path: 'auth',
    component: AuthComponent,
    loadChildren: () => import('./auth/auth.module').then(m => m.AuthModule),
    children: [
      {
        path: 'login',
        component: LoginComponent,
        loadChildren: () => import('./login/login.module').then(m => m.LoginModule),
      },
      {
        path: 'epic',
        component: EpicComponent,
        loadChildren: () => import('./epic/epic.module').then(m => m.EpicModule),
      },
      {
        path: 'registration',
        component: RegistrationComponent,
        loadChildren: () => import('./registration/registration.module').then(m => m.RegistrationModule),
      },
    ]
  },
];
