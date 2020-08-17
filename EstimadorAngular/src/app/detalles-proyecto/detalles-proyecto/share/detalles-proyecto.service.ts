import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DetallesProyectoService {

  detallesPro: String[] = [];

  add(detalle:string) {
    this.detallesPro.push(detalle);
  }

  clear() {
    this.detallesPro = [];
  }

  constructor(private http: HttpClient) { }

  getDetalle(): Observable<any>{
    return this.http.get('http://localhost:8000/api/detalles1');
  }
}
