import { Injectable } from '@angular/core';
import {EventEmitter } from '@angular/core';
@Injectable({
  providedIn: 'root'
})
export class TotalService {

  private total: number = 0;
  totalUpdated: EventEmitter<number> = new EventEmitter();

  setTotal(total: number) {
    this.total = total;
    this.totalUpdated.emit(total); 
  }

  getTotal(): number {
    return this.total;
  }
}
