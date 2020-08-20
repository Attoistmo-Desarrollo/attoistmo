import { Component, OnInit } from '@angular/core';
import { UserService } from '../shared/user.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {

  constructor(public userService: UserService, private route: Router) { }

  ngOnInit(): void {
  }
  cerrar() {
    this.userService.deley();
    // this.route.navigate(['login']);
  }

}
