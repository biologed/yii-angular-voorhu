import {AfterViewInit, Component, Renderer2} from '@angular/core';
@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: []
})
export class AppComponent implements AfterViewInit {
  readonly mode = 'onDark';
  constructor(private renderer: Renderer2) {}
  ngAfterViewInit() {
    this.renderer.setStyle(this.renderer.selectRootElement('#loader'), 'display', 'none')
  }
}
