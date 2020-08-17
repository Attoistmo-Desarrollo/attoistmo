import { Addinsumo } from './../../addinsumo/shared/Addinsumo';
import { Addtrabajador } from './../../addtrabajador/shared/addtrabajador';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Estimacion } from './estimacion';

@Injectable({
  providedIn: 'root'
})
export class EstimacionService {
  apiURL = 'http://127.0.0.1:8000/api';
  // Http Options
  httpOptions = {
   headers: new HttpHeaders({
    'Content-Type': 'application/json'
    })};

  constructor(private http: HttpClient) { }
  // inicio metodo para servicios REST
create(datos: {}): Observable<Estimacion> {
  return this.http.post<Estimacion>(this.apiURL + '/estimadorinsumos', JSON.stringify(datos),
   this.httpOptions)
   .pipe(
  retry(1),
  catchError(this.handleError)
  );
}
crearInsumo(dato: {}): Observable<Addinsumo> {
   return this.http.post<Addinsumo>(this.apiURL + '/insumos', JSON.stringify(dato),
   this.httpOptions)
   .pipe(
    retry(1),
    catchError(this.handleError)
    );
}
crearTrabajador(data: {}): Observable <Addtrabajador> {
  return this.http.post<Addtrabajador>(this.apiURL + '/trabajadors', JSON.stringify(data),
  this.httpOptions)
   .pipe(
    retry(1),
    catchError(this.handleError)
    );
}
// fin de metodo REST
// atrapando Error handling
handleError(error: { error: { message: string; }; status: any; message: any; }) {
  let errorMessage = '';
  if (error.error instanceof ErrorEvent) {
    // Get client-side error
    errorMessage = error.error.message;
  } else {
    // Get server-side error
    errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
  }
  window.alert(errorMessage);
  return throwError(errorMessage);
}
}
