import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-addinsumo',
  templateUrl: './addinsumo.component.html',
  styleUrls: ['./addinsumo.component.css']
})
export class AddinsumoComponent implements OnInit {
  @Input () public guardarinsumo: any = [];
  @Output () public insumoschange = new EventEmitter<any> ();
  public filesToUpload: Array<File>;
  nombreinsumo = '';
  formato = '';
  descripcion = '';
  archivo;
  file;
  constructor() { }

  ngOnInit(): void {
  }
  agregar() {
    this.insumoschange.emit({nombre: this.nombreinsumo, tipo: this.formato, descripcion: this.descripcion, id_estimador: 1});
    alert('se agrego el insumo');
    this.limpiar();
  }
  fileChangeEvent(fileInput: any) {
    this.filesToUpload = fileInput.target.files as Array<File>;
    console.log(this.filesToUpload);
    setTimeout(() => {
      this.rellenarDatos();
    }, 5000);
  }
  limpiar() {
    this.nombreinsumo = '';
    this.formato = '';
    this.descripcion = '';
    this.archivo = null;
    this.file = null;

  }
rellenarDatos() {
  // tslint:disable-next-line:prefer-for-of
  for (let i = 0; i < this.filesToUpload.length; i++) {
    this.file = this.filesToUpload[i];
    this.nombreinsumo = this.file.name;
    this.formato = this.file.type;
    console.log(this.nombreinsumo);
  }
}

}
