import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {catchError, map, Observable, of} from 'rxjs';
import {environment} from "../../environments/environment";
export interface AccountInterface {
  info: string;
  method: string;
}
@Injectable({
  providedIn: 'any'
})
export class AccountService {
  public httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };
  constructor(private httpClient: HttpClient) {}
  getAccountInfo(): Observable<any> {
    return this.httpClient.get<AccountInterface>(
      environment.authUrl.status,
      this.httpOptions
    ).pipe(
      map(data => {
        return data.info
      }),
      catchError(() => {
        return of(false);
      })
    )
  }
}
