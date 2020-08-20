import { Component, OnInit } from '@angular/core';
import {Router} from '@angular/router';
import { UserService } from '../shared/user.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  email: string;
  password: string;
  confirmPassword: string;
  nombre: string;
  apellido: string;

  constructor(public userService: UserService, private route: Router) {}

  register() {
    const user = { name: this.nombre, surname: this.apellido, email: this.email, password: this.password};
    this.userService.register(user).subscribe(data => {
      // this.userService.setToken(data.token);
      if (data.status === 'ok') {
        alert ('se Agrego el registro');
      } else {
        alert (data.status);
      }
      this.limpiar();
      this.route.navigate(['']);
    });
  }
  limpiar() {
    this.email = '';
    this.password = '';
    this.confirmPassword = '';
    this.nombre = '';
    this.apellido = '';

  }
  ngOnInit(): void {
  }

}
