import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, tap } from 'rxjs';
import { Router } from '@angular/router';
@Injectable({
  providedIn: 'root'
})
export class AuthService {

  apiUrl = "https://caisse.alldepot.com.tn/api";

  constructor(private httpClient: HttpClient, private router: Router) { }

  authSeller(credentials: any): Observable<any> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': 'Basic ' + btoa(`${credentials.login}:${credentials.password}`)
    });
    return this.httpClient.post<any>(`${this.apiUrl}/vendeuse`, credentials, { headers })
      .pipe(
        tap((response: any) => {
          console.log('Response:', response);
          if (response.error) {
         console.log('Try Again!');
            this.router.navigate(['/login']);
          }
          else{
            console.log('Login successful!');
            this.router.navigate(['/']);
          }
        })
      );
  }
}
