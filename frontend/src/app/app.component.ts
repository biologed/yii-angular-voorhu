import {AfterViewInit, ChangeDetectionStrategy, Component, Renderer2} from '@angular/core';
@Component({
  selector: 'app-app',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.less'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class AppComponent implements AfterViewInit {
  readonly mode = 'onDark';
  constructor(private renderer: Renderer2) {}
  ngAfterViewInit() {
    this.renderer.setStyle(this.renderer.selectRootElement('#loader'), 'display', 'none')
  }
}
