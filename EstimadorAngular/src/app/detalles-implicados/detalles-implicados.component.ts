import { Component, OnInit } from '@angular/core';
import { DetallesImplicadosService } from './share/detalles-implicados.service';
import { data } from 'jquery';

@Component({
  selector: 'app-detalles-implicados',
  templateUrl: './detalles-implicados.component.html',
  styleUrls: ['./detalles-implicados.component.css']
})
export class DetallesImplicadosComponent implements OnInit {
  detalleImpli: any;

  constructor(public detallesImplicadosService: DetallesImplicadosService) { }

  ngOnInit(){
    this.detallesImplicadosService.getDetalleImpli().subscribe(data => {
      this.detalleImpli = data;
    });
  }

}
