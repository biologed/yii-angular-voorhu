import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-boosty',
  templateUrl: 'boosty.component.html',
  styleUrls: ['boosty.component.less']
})
export class BoostyComponent {
  @Input() width: number | undefined = 36;
  @Input() height: number | undefined = 36;
}
