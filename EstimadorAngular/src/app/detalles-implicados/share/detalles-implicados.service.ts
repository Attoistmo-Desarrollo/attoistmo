import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DetallesImplicadosService {
  detallesImpli: String[] = [];

  constructor(private http: HttpClient) { }

  getDetalleImpli(): Observable<any>{
    return this.http.get('http://localhost:8000/api/detalleimpli');
  }
}
