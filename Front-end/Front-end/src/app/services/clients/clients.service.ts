import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class ClientsService {

  constructor(private httpClient: HttpClient) { }
  apiUrl = "https://caisse.alldepot.com.tn/api";
  getClients(): Observable<any[]> {
    return this.httpClient.get<any[]>(`${this.apiUrl}/clients`);
  }
}
