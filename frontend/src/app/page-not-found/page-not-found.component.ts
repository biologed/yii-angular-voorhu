import {Component} from '@angular/core';
import {NgOptimizedImage} from "@angular/common";
import {TranslateModule} from "@ngx-translate/core";
import {RouterLink} from "@angular/router";
@Component({
  standalone: true,
  selector: 'app-page-not-found',
  templateUrl: 'page-not-found.component.html',
  styleUrls: ['page-not-found.component.less'],
  imports: [
    NgOptimizedImage,
    TranslateModule,
    RouterLink
  ]
})
export class PageNotFoundComponent {
  constructor(
  ) {
  }
}
