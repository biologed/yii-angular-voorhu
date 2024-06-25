import {CUSTOM_ELEMENTS_SCHEMA, NgModule} from "@angular/core";
import {CommonModule, NgOptimizedImage} from "@angular/common";
import {SwiperComponent} from "./swiper.component";
import {SwiperDirective} from "./swiper.directive";
@NgModule({
  declarations: [SwiperComponent],
  imports: [CommonModule, NgOptimizedImage, SwiperDirective],
  exports: [SwiperComponent],
  schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class SwiperModule {}
