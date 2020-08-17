import { Component, OnInit } from '@angular/core';
import { DetallesProyectoService } from './share/detalles-proyecto.service';
import { data } from 'jquery';

@Component({
  selector: 'app-detalles-proyecto',
  templateUrl: './detalles-proyecto.component.html',
  styleUrls: ['./detalles-proyecto.component.css']
})
export class DetallesProyectoComponent implements OnInit {
  detalle: any;

  constructor(public detallesProyectoService: DetallesProyectoService) { }

  ngOnInit() {
    this.detallesProyectoService.getDetalle().subscribe(data => {
      this.detalle = data;
    });
  }

}
