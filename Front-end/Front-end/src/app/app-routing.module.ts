import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { InterfaceInitialeComponent } from './caisses/page/panier/interface-initiale/interface-initiale.component';
import { InterfaceInitialeClientsComponent } from './caisses/page/clients/interface-initiale-clients/interface-initiale-clients.component';
import { LoginComponent } from './caisses/login/login.component';
const routes: Routes = [
  {path: '',component: InterfaceInitialeComponent},
  { path: 'clients', component: InterfaceInitialeClientsComponent },
  { path: 'login', component: LoginComponent },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
