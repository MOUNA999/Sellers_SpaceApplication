import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class CategorieService {

  apiUrl = "https://caisse.alldepot.com.tn/api";

  constructor(private httpClient:HttpClient) { }

  getCategories(){
    return this.httpClient.get<any[]>(`${this.apiUrl}/categorie`);
  }
  getOneCategory( id:any ){
    return this.httpClient.get<any>(`${this.apiUrl}/categorie/${id}`);
  }

  updateCategory( Category:any ){
    return this.httpClient.put<any>(`${this.apiUrl}/categorie/update/${Category.id}`, Category);
  }


  addCategory( Category:any ){
    return this.httpClient.post<any>(`${this.apiUrl}/categorie/add`, Category);
  }

  deleteCategory( id:any ){
    return this.httpClient.delete<any>(`${this.apiUrl}/categorie/delete/${id}`, id);
  }
}
