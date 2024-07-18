import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-discord-with-text',
  templateUrl: 'discord-with-text.component.html',
  styleUrls: ['discord-with-text.component.less']
})
export class DiscordWithTextComponent {
  @Input() width: number | undefined = 124;
  @Input() height: number | undefined = 34;
}
