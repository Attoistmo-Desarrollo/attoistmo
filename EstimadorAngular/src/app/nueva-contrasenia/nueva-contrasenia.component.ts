import { Component, OnInit } from '@angular/core';
import swal from 'sweetalert';
import { Router, ActivatedRoute, Params } from '@angular/router';


@Component({
  selector: 'app-nueva-contrasenia',
  templateUrl: './nueva-contrasenia.component.html',
  styleUrls: ['./nueva-contrasenia.component.css']
})
export class NuevaContraseniaComponent implements OnInit {

  constructor(
    private _router: Router
  ) { }

  ngOnInit(): void {
  }

  cambioFinalizado(): void{
    swal("¡Proceso exitoso!");
    this._router.navigate(['/']);
  }

}
