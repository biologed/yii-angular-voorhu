import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {catchError, map, Observable, of} from 'rxjs';
import {environment} from "../../environments/environment";
export interface AuthInterface {
  status: boolean;
  message: string;
  method: string;
}
@Injectable({
  providedIn: 'any'
})
export class AuthService {
  public httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };
  public status = (localStorage.getItem('status')) as string;
  constructor(private httpClient: HttpClient) {}
  doLogin(username: string, password: string): Observable<AuthInterface> {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.login,
      {
        username,
        password,
      },
      this.httpOptions
    );
  }
  doRegister(username: string, email: string, password: string, language: string): Observable<AuthInterface> {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.register,
      {
        username,
        email,
        password,
        language,
      },
      this.httpOptions
    );
  }
  doActivation(token: string | null): Observable<AuthInterface> {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.activation,
      {
        token
      },
      this.httpOptions
    ).pipe(
      map(data => {
          return data
      })
    );
  }
  getStatus(): Observable<boolean> {
    if (environment.development) {
      return of(false);
    }
    if (this.status !== null) {
      return of(Boolean(this.status));
    }
    return this.httpClient.get<AuthInterface>(
      environment.authUrl.status,
      this.httpOptions
    ).pipe(
      map(data => {
        localStorage.setItem('status', String(data.status));
        return data.status
      }),
      catchError(() => {
        return of(false);
      })
    )
  }
  doEpicLogin(code: string) {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.epic.login,
      {
        code,
      },
      this.httpOptions
    );
  }

  doEpicRegister(email: string, code: string, language: string) {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.epic.register,
      {
        email,
        code,
        language
      },
      this.httpOptions
    );
  }
}
