import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {map, Observable} from 'rxjs';
import {environment} from "../../environments/environment";
import {RootInterface} from "../interfaces/discord.interface";
@Injectable({
  providedIn: 'any'
})
export class DiscordService {
  public httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };
  constructor(private httpClient: HttpClient) {}
  getTotalMembersCount(): Observable<number> {
    return this.httpClient.get<RootInterface>(
      environment.discord,
      this.httpOptions
    ).pipe(
      map(data=> {
        return data.approximate_member_count
      })
    );
  }
}
