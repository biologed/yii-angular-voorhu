import {Component, Input} from '@angular/core';
@Component({
  standalone: true,
  selector: 'app-svg-discord',
  templateUrl: 'discord.component.html',
  styleUrls: ['discord.component.less']
})
export class DiscordComponent {
  @Input() width: number | undefined = 36;
  @Input() height: number | undefined = 36;
}
