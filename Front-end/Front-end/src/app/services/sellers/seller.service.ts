import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class SellerService {

  apiUrl = "https://caisse.alldepot.com.tn/api";

  constructor(private httpClient:HttpClient) { }

  getSellers(){
    return this.httpClient.get<any[]>(`${this.apiUrl}/vendeuse`);
  }
  getOneSellers( id:any ){
    return this.httpClient.get<any>(`${this.apiUrl}/vendeuse/${id}`);
  }

  updateSeller( Seller:any ){
    return this.httpClient.put<any>(`${this.apiUrl}/vendeuse/${Seller.id}`, Seller);
  }


  addSeller( Seller:any ){
    return this.httpClient.post<any>(`${this.apiUrl}/vendeuse`, Seller);
  }

  deleteSeller( id:any ){
    return this.httpClient.delete<any>(`${this.apiUrl}/vendeuse/delete/${id}`, id);
  }
}
