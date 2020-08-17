import { Component, OnInit } from '@angular/core';
import swal from 'sweetalert';
//*************************************************************************** */
import { CalibracionUsuarioService } from "../calibracion-usuario/share/calibracion-usuario.service";
import { data } from 'jquery';
//*************************************************************************** */

@Component({
  selector: 'app-calibracion-usuario',
  templateUrl: './calibracion-usuario.component.html',
  styleUrls: ['./calibracion-usuario.component.css']
})
export class CalibracionUsuarioComponent implements OnInit {
  calibracion: any;

  enviar() {
    // alert("Revisión Guardada");
    // swal("Hello world!");
    swal('Revisión Guardada');
  }

  // constructor() { }

  // ngOnInit(): void {
  // }

//*************************************************************************** */
  constructor(public calibracionUsuarioService: CalibracionUsuarioService) { }

  ngOnInit(){
    // this.calibracionUsuarioService.add("prueba");
    // this.calibracionUsuarioService.getCalibracion();
    this.calibracionUsuarioService.getCalibracion().subscribe(data => {
      this.calibracion = data;
      // console.log(data);
    });
  }
//*************************************************************************** */

}