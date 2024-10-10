import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class OrderService {
  apiUrl = "https://caisse.alldepot.com.tn/api";

  constructor(private httpClient:HttpClient) { }

  getOrders(){
    return this.httpClient.get<any[]>(`${this.apiUrl}/order`);
  }

  getOneOrder( id:any ){
    return this.httpClient.get<any>(`${this.apiUrl}/order/${id}`);
  }

  getOneOrderByCodeOrder( code:any ){
    return this.httpClient.get<any>(`${this.apiUrl}/order/codeOrder/${code}`);
  }

  getOneOrderByDate( date_db:any, date_fin:any ){
    return this.httpClient.get<any>(`${this.apiUrl}/order/date/${date_db}/${date_fin}`);
  }


  addOrder( Order:any ){
    return this.httpClient.post<any>(`${this.apiUrl}/order/add`, Order);
  }
}
