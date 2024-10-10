import { Component, OnInit, HostListener,Output, EventEmitter } from '@angular/core';
import { ProductService } from '../../../../services/products/product.service';
import { TotalService } from '../../../../services/total.service';

@Component({
  selector: 'app-panier',
  templateUrl: './panier.component.html',
  styleUrl: './panier.component.css'
})
export class PanierComponent implements OnInit {

  @Output() totalUpdated: EventEmitter<number> = new EventEmitter();
  ligneCommande: any = [];
  lastBarcode: any = '';
  lastBarcodeinput: any = '';
  total: string = '0.00';
  barcodeNotFound: boolean = false;
  @HostListener('window:keydown', ['$event'])
  handleKeyboardEvent(event: KeyboardEvent) {
    if (/\d/.test(event.key)) {
      this.lastBarcode += event.key;
    }

    if (event.key === 'Enter') {
      this.lastBarcode = this.lastBarcode.replace(/\s+/g, '');
      this.lastBarcodeinput = this.lastBarcode;
      this.lastBarcode = '';
      this.addCodeBarre();
    }
  }
  constructor(private productService: ProductService, private totalService: TotalService) {

  }
  ngOnInit(): void {
    this.getTest();
  }

  getTest() {
    console.log('test');
    if (this.lastBarcodeinput) {
      this.productService.getProductByBarcode(this.lastBarcodeinput)
        .subscribe(
          (data: any) => {
            console.log('API Response:', data);
            if (data[0]) {
              this.addProductToLigneCommande(data[0]);
              this.barcodeNotFound = false;
            }
            else {
              this.barcodeNotFound = true;
            }

          },
          error => {
            console.error(error);
          }
        );
    }
  }

  addCodeBarre() {
    this.getTest();
  }



  addProductToLigneCommande(product: any) {
    console.log('Product:', product);
    const existingProduct = this.ligneCommande.find((ligne: any) => ligne.code_a_barre === product.code_a_bar);
    if (existingProduct) {
      existingProduct.qnt += 1;
      let totalBrut = existingProduct.prix * existingProduct.qnt;
      let remiseMontant = (totalBrut * existingProduct.remise) / 100;
      let totalNet = totalBrut - remiseMontant;
      existingProduct.total = totalNet.toFixed(2);
      this.updateTotal();
    } else {
      let ligne: any = {
        code_a_barre: product.code_a_bar,
        libelle: product.libelle,
        taille: product.taille,
        couleur: product.couleur,
        prix: product.prix,
        remise: product.remise,
        qnt: 1
      };
      let totalBrut = ligne.prix * ligne.qnt;
      let remiseMontant = (totalBrut * ligne.remise) / 100;
      let totalNet = totalBrut - remiseMontant;
      ligne.total = totalNet.toFixed(2);

      this.ligneCommande.push(ligne);

      this.total = this.ligneCommande.reduce((acc: number, ligne: any) => acc + parseFloat(ligne.total), 0).toLocaleString('fr-FR', { minimumFractionDigits: 2 });
      this.updateTotal();
    }
    console.log('ligneCommande:', this.ligneCommande);


  }
  getTotal(): number {
    let total = 0;
    this.ligneCommande.forEach((ligne: any) => {
      total += ligne.total;
    });
    return total;
  }



  updateTotal() {
    const total = this.ligneCommande.reduce((acc: number, ligne: any) => acc + parseFloat(ligne.total), 0);
    this.totalUpdated.emit(total);
    this.totalService.setTotal(total);
  }

  plus(ligne: any) {
    ligne.qnt += 1;
    let totalBrut = ligne.prix * ligne.qnt;
    let remiseMontant = (totalBrut * ligne.remise) / 100;
    let totalNet = totalBrut - remiseMontant;
    ligne.total = totalNet.toFixed(2);
    this.updateTotal();
  }
  moins(ligne: any) {
    let qnt = ligne.qnt - 1;
    if (qnt > 0) {
      ligne.qnt -= 1;
      let totalBrut = ligne.prix * ligne.qnt;
      let remiseMontant = (totalBrut * ligne.remise) / 100;
      let totalNet = totalBrut - remiseMontant;
      ligne.total = totalNet.toFixed(2);
      this.updateTotal();
    }

  }
  delete(i: number): void {
    if (i >= 0 && i < this.ligneCommande.length) {
      this.ligneCommande.splice(i, 1);
      this.updateTotal();
    }
  }
}
