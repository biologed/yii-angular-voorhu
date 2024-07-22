import {Component, Inject, Injector, OnDestroy} from '@angular/core';
import {Router} from "@angular/router";
import {TuiDialogService} from "@taiga-ui/core";
import {Subject, takeUntil} from "rxjs";
import {PolymorpheusComponent} from "@tinkoff/ng-polymorpheus";
import {DialogComponent} from "../tui-dialog/dialog.component";
@Component({
  selector: 'app-account',
  templateUrl: 'account.component.html',
  styleUrls: ['account.component.less']
})
export class AccountComponent implements OnDestroy {
  private readonly destroy$ = new Subject<void>();
  constructor(
    private router: Router,
    @Inject(TuiDialogService) private readonly dialogs$: TuiDialogService,
    @Inject(Injector) private readonly injector: Injector
  ) {}
  showDialog(body: string | undefined, label?: string): void {
    this.dialogs$.open(
      new PolymorpheusComponent(DialogComponent, this.injector),
      {
        data: {
          label: label,
          body: body,
        },
      },
    ).pipe(
      takeUntil(this.destroy$)
    ).subscribe({
      complete: () => {
        this.router.navigate(['/']).then();
      }
    });
  }
  ngOnDestroy(): void {
    this.destroy$.next();
    this.destroy$.complete();
  }
}
