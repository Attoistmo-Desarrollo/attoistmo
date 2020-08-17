import { Component, OnInit } from '@angular/core';
import swal from 'sweetalert';

@Component({
  selector: 'app-recuperacion',
  templateUrl: './recuperacion.component.html',
  styleUrls: ['./recuperacion.component.css']
})
export class RecuperacionComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  correoEnviado(): void{
    swal('¡Envio exitoso!', 'En breve se proporcionara una nueva contraseña en tu email');
  }

}
