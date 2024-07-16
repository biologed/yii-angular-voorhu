import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {map, Observable} from 'rxjs';
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
  doRegister(username: string, email: string, password: string): Observable<AuthInterface> {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.register,
      {
        username,
        email,
        password,
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
      map(data=> {
          return data
      })
    );
  }
  getStatus(): Observable<boolean> {
    return this.httpClient.get<AuthInterface>(
      environment.authUrl.status,
      this.httpOptions
    ).pipe(
      map(data=> {
        return data.status
      })
    );
  }
  doEpicLogin(code: string | null) {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.epic.login,
      {
        code,
      },
      this.httpOptions
    );
  }
  doEpicRegister(email: string, code: string) {
    return this.httpClient.post<AuthInterface>(
      environment.authUrl.epic.register,
      {
        email,
        code,
      },
      this.httpOptions
    );
  }
}
