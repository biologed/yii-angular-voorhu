import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-boosty-with-text',
  templateUrl: 'boosty-with-text.component.html',
  styleUrls: ['boosty-with-text.component.less']
})
export class BoostyWithTextComponent {
  @Input() width: number | undefined = 124;
  @Input() height: number | undefined = 34;
}
