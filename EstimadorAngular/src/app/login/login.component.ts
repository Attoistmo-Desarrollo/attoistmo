import { Component, OnInit } from '@angular/core';
import { UserService } from '../shared/user.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  email: string;
  password: string;

  constructor(public userService: UserService, private route: Router) { }


  login() {
    const user = {email: this.email, password: this.password};
    this.userService.login(user).subscribe( data => {
      this.userService.setToken(data.token);
      this.route.navigate(['/insumo']);
      window.location.reload();
    });
  }

  ngOnInit(): void {
  }

}
