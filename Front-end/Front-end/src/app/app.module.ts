import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuAdminComponent } from './admin/layouts/menu-admin/menu-admin.component';
import { FooterAdminComponent } from './admin/layouts/footer-admin/footer-admin.component';
import { ListemenuadminComponent } from './admin/layouts/listemenuadmin/listemenuadmin.component';
import { ProfileAdminComponent } from './admin/pages/profile-admin/profile-admin.component';
import { VendeusesAdminComponent } from './admin/pages/vendeuses-admin/vendeuses-admin.component';
import { ProductsAdminComponent } from './admin/pages/products/products-admin/products-admin.component';
import { CategoryAdminComponent } from './admin/pages/products/category-admin/category-admin.component';
import { FooterCaisseComponent } from './caisses/layouts/footer-caisse/footer-caisse.component';
import { ListemenucaisseComponent } from './caisses/layouts/listemenucaisse/listemenucaisse.component';
import { MenuCaisseComponent } from './caisses/layouts/menu-caisse/menu-caisse.component';
import { InterfaceInitialeComponent } from './caisses/page/panier/interface-initiale/interface-initiale.component';
import { PanierComponent } from './caisses/page/panier/panier/panier.component';
import { CheckoutRightComponent } from './caisses/page/panier/checkout-right/checkout-right.component';
import { HistoriqueRightComponent } from './caisses/page/panier/historique-right/historique-right.component';
import { HttpClient } from '@angular/common/http';
import { HttpClientModule } from '@angular/common/http';
import { MenuCaisseLeftComponent } from './caisses/page/layouts/menu-caisse-left/menu-caisse-left.component';
import { InterfaceInitialeClientsComponent } from './caisses/page/clients/interface-initiale-clients/interface-initiale-clients.component';
import { ListeClientsComponent } from './caisses/page/clients/liste-clients/liste-clients.component';
import { LoginComponent } from './caisses/login/login.component';
import { ProductComponent } from './caisses/page/product/product.component';
@NgModule({
  declarations: [
    AppComponent,
    MenuAdminComponent,
    FooterAdminComponent,
    ListemenuadminComponent,
    ProfileAdminComponent,
    VendeusesAdminComponent,
    ProductsAdminComponent,
    CategoryAdminComponent,
    FooterCaisseComponent,
    ListemenucaisseComponent,
    MenuCaisseComponent,
    InterfaceInitialeComponent,
    PanierComponent,
    CheckoutRightComponent,
    HistoriqueRightComponent,
    MenuCaisseLeftComponent,
    InterfaceInitialeClientsComponent,
    ListeClientsComponent,
    LoginComponent,
    ProductComponent,

  ],
  imports: [
    BrowserModule,
    AppRoutingModule, FormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
