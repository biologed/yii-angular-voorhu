import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {map, Observable} from 'rxjs';
import {environment} from "../../environments/environment";
import {RootInterface} from "../interfaces/boosty.interface";
@Injectable({
  providedIn: 'any'
})
export class BoostyService {
  public httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json; charset=utf-8',
      'Accept': '*/*',
      'Host': 'https://boosty.to',
      'mode': 'no-cors'
    })
  };
  constructor(private httpClient: HttpClient) {}
  getTotalMembersCount(): Observable<number> {
    return this.httpClient.get<RootInterface>(
      environment.boosty,
      this.httpOptions
    ).pipe(
      map(data=> {
        return data.count.subscribers
      })
    );
  }
}
