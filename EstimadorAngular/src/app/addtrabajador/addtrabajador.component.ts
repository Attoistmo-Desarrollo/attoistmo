import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-addtrabajador',
  templateUrl: './addtrabajador.component.html',
  styleUrls: ['./addtrabajador.component.css']
})
export class AddtrabajadorComponent implements OnInit {
  @Input () public guardardato: any = [];
  @Output () public trabajadorchange = new EventEmitter<any> ();
  id = 0;
  nombre = '';
  area = '';
  comboarea = [];

  constructor() {
    this.comboarea.push({valor: 'analisis'});
    this.comboarea.push({valor: 'desarrollo'});
    this.comboarea.push({valor: 'diseño'});
    this.comboarea.push({valor: 'pruebas'});
  }

  ngOnInit(): void {
  }
  agregar() {
    this.trabajadorchange.emit({id: this.id, id_estimador: 1, nombre: this.nombre, area: this.area });
    alert('se agrego al trabajador');
    this.limpiar();
  }
  limpiar() {
    this.id = null;
    this.nombre = '';
  }
}
