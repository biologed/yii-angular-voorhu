import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {map, Observable} from 'rxjs';
import {environment} from "../../environments/environment";
export interface BoostyInterface {
  result: number;
}
@Injectable({
  providedIn: 'any'
})
export class BoostyService {
  public httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };
  constructor(private httpClient: HttpClient) {}
  getTotalMembersCount(): Observable<number> {
    return this.httpClient.get<BoostyInterface>(
      environment.boosty,
      this.httpOptions
    ).pipe(
      map(data=> {
        return data.result
      })
    )
  }
}
