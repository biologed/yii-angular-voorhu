import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-logo',
  templateUrl: './logo.component.html',
  styleUrls: []
})
export class LogoComponent {
  @Input() width: number | undefined = 256;
  @Input() height: number | undefined = 56;
}
