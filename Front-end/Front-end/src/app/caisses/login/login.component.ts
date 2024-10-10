import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../services/authentification/auth.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent implements OnInit {
  login: string = '';
  password: string = '';
  error: string = '';
  constructor(private authService: AuthService, private router: Router) { }

  ngOnInit(): void {
  }

  auth(): void {
    this.authService.authSeller({ login: this.login, password: this.password })
      .subscribe((response: any) => {
        if (response.success) {
          this.router.navigate(['/']); 
        } else {
          this.error = response.message;
        }
      }, (error: any) => {
        this.error = 'An error occurred while logging in.';
      });
  }

}
