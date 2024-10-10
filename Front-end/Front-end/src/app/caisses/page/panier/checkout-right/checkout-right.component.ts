import { Component,OnInit } from '@angular/core';
import { TotalService } from '../../../../services/total.service';

@Component({
  selector: 'app-checkout-right',
  templateUrl: './checkout-right.component.html',
  styleUrl: './checkout-right.component.css'
})
export class CheckoutRightComponent implements OnInit {
  total: number = 0;

  constructor(private totalService: TotalService) { }

  ngOnInit(): void {
    this.totalService.totalUpdated.subscribe((total: number) => {
      this.total = total;
    });
  }
}
