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
    {title: "Ready for Unreal Engine 5", desc: "Keeping up with the times - say NO to old technologies! Each part of the plugin is optimized to work with Unreal Engine 5.", src: "assets/media/unreal.jpg"},
    {title: "Yandex SDK 7", desc: "We use the full power of the latest SDK from Yandex - we don't use outdated libraries, and we don't advise you not to. Every part of the plugin is maximally optimized to work as fast as possible for all users.", src: "assets/media/ads.jpg"},
    {title: "Affordable Price", desc: "A lot of people are trying to stop us! But we don't cry to moms like other plugin developers! We rise to the occasion and shove our price down their throats! Why are we doing this? FOR DEMOCRACY!", src: "assets/media/price.jpg"},
    {title: "Our Ideology", desc: "Our ideology is simple - give users an opportunity to earn more and enthusiasts a powerful mobile app development tool.", src: "assets/media/objectives.jpg"},
    {title: "Support", desc: "We are actively developing our community, we are in touch with you on any issue, we will support you if there are difficulties, come join us!", src: "assets/media/discord.jpg"},
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
