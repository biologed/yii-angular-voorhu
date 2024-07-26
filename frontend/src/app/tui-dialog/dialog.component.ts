import {Component, Inject, OnDestroy} from '@angular/core';
import {TuiButtonModule, TuiDialogContext} from "@taiga-ui/core";
import {POLYMORPHEUS_CONTEXT} from "@tinkoff/ng-polymorpheus";
import {Subject} from "rxjs";
import {CommonModule} from "@angular/common";
import {TranslateModule} from "@ngx-translate/core";
import {TuiAutoFocusModule} from "@taiga-ui/cdk";

const tuiComponents = [
  TuiButtonModule,
  TuiAutoFocusModule,
];
@Component({
  standalone: true,
  selector: 'app-dialog',
  templateUrl: 'dialog.component.html',
  styleUrls: ['dialog.component.less'],
  imports: [
    CommonModule,
    TranslateModule,
    ...tuiComponents,
  ]
})
export class DialogComponent implements OnDestroy {
  private readonly destroy$ = new Subject<void>();
  constructor(
    @Inject(POLYMORPHEUS_CONTEXT) private readonly context: TuiDialogContext<void>
  ) {}
  get label(): string {
    if (this.context.data !== null && this.context.data !== undefined && this.context.data['label']) {
      return this.context.data['label'];
    }
    return 'errors.header';
  }
  get body(): string {
    if (this.context.data !== null && this.context.data !== undefined && this.context.data['body']) {
      return this.context.data['body'];
    }
    return '';
  }
  close(): void {
    this.context.completeWith();
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
