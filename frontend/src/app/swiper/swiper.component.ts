import {AfterViewInit, Component, ElementRef, ViewChild} from '@angular/core';
import {register, SwiperContainer} from 'swiper/element/bundle';
import {SwiperOptions} from "swiper/types";
import {Swiper} from "swiper";
@Component({
  selector: 'app-swiper',
  templateUrl: './swiper.component.html',
  styleUrls: ['./swiper.component.less']
})
export class SwiperComponent implements AfterViewInit {
  @ViewChild('swiperRef', { static: true }) private swiperRef: ElementRef | undefined;
  private swiperElement: SwiperContainer;
  public swiperConfig: SwiperOptions = {
    createElements: false,
    grabCursor: true,
    pagination: false,
    autoplay: false,
    breakpoints: {
      1080: {
        slidesPerView: 2,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true
      },
      2560: {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        loop: false
      },
    },
  };
  swiper?: Swiper;
  slides: {title: string, desc: string, src: string}[] = [
    {title: "slider.first.title", desc: "slider.first.desc", src: "assets/media/unreal.jpg"},
    {title: "slider.second.title", desc: "slider.second.desc", src: "assets/media/ads.jpg"},
    {title: "slider.third.title", desc: "slider.third.desc", src: "assets/media/price.jpg"},
    {title: "slider.fourth.title", desc: "slider.fourth.desc", src: "assets/media/objectives.jpg"},
    {title: "slider.fifth.title", desc: "slider.fifth.desc", src: "assets/media/discord.jpg"},
  ];
  ngAfterViewInit(): void {
    register();
    this.swiperElement = this.swiperRef?.nativeElement;
    Object.assign(this.swiperConfig, {
      panoramaEffect: {
        depth: 150,
        rotate: 45
      }
    });
    Object.assign(this.swiperElement, this.swiperConfig);
    this.swiperElement.initialize();
  }
}
