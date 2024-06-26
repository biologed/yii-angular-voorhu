import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-github',
  templateUrl: './github.component.html',
  styleUrls: ['./github.component.less']
})
export class GithubComponent {
  @Input() width: number | undefined = 36;
  @Input() height: number | undefined = 36;
}
