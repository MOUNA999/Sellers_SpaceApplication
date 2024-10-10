import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ProductService {
  apiUrl = "https://caisse.alldepot.com.tn/api";

  constructor(private httpClient: HttpClient) { }

  getProducts() {
    return this.httpClient.get<any>(`${this.apiUrl}/product`);
  }
  getOneProduct(id: any) {
    return this.httpClient.get<any>(`${this.apiUrl}/product/${id}`);
  }

  updateProduct(Product: any) {
    return this.httpClient.put<any>(`${this.apiUrl}/product/update/${Product.id}`, Product);
  }

  getProductByBarcode(barcode: any) {
    return this.httpClient.get(`${this.apiUrl}/product/codeBar/${barcode}`);
  }


  getProductsByReference(id: any) {
    return this.httpClient.get<any>(`${this.apiUrl}/product/reference/${id}`);
  }


  addProduct(Product: any) {
    return this.httpClient.post<any>(`${this.apiUrl}/product/add`, Product);
  }


  getProductsByCategoryId(categoryId: number): Observable<any> {
    return this.httpClient.get<any>(`${this.apiUrl}/category/${categoryId}`);
  }
}
