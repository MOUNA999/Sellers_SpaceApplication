import { Component, OnInit } from '@angular/core';
import { ClientsService } from '../../../../services/clients/clients.service';

@Component({
  selector: 'app-liste-clients',
  templateUrl: './liste-clients.component.html',
  styleUrl: './liste-clients.component.css'
})
export class ListeClientsComponent implements OnInit {
  clients: any[] = [];

  constructor(private clientsService: ClientsService) { }

  ngOnInit(): void {
    console.log('Component initialized');
    this.clientsService.getClients().subscribe((clients: any[]) => {
      console.log('API response:', clients);
      this.clients = clients;
      console.log('Clients array:', this.clients);
    }, (error: any) => {
      console.error('Error:', error);
    });
  }


  
}
