import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-epic',
  templateUrl: './epic.component.html',
  styleUrls: []
})
export class EpicComponent {
  @Input() width: number | undefined = 32;
  @Input() height: number | undefined = 32;
}
