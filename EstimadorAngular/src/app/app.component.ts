import { Component } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { UserService } from './shared/user.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Estimador';
  boleano = false;

  constructor(public router: Router, public userService: UserService) {
    if (!userService.getToken()) {
      this.router.navigate(['login']);

    } else {
      this.boleano = true;
      this.router.navigate(['insumo']);
    }
  }

}
