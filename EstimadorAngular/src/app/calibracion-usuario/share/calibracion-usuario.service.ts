import { Injectable } from '@angular/core';

//***************************************************************** */
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";
//***************************************************************** */

@Injectable({
  providedIn: 'root'
})
export class CalibracionUsuarioService {
//***************************************************************** */

// httpOptions = {
//   headers: new HttpHeaders({
//    'Content-Type': 'application/json'
//    })};

  calibracionUsu: String[] = [];

  add(calibracion:string) {
    this.calibracionUsu.push(calibracion);
  }

  clear() {
    this.calibracionUsu = [];
  }
//**************************************************************** */
  // constructor() { }
  constructor(private http: HttpClient) { 
    // this.http.get('http://localhost:8000/detalles');
  }

  getCalibracion(): Observable<any>{
    // this.http.get('http://localhost:8000/detalles').subscribe(data =>{ 
    //   console.log(data);
    // });
    // console.log("Esto de ejecutara antes que el console log de arriba");
    return this.http.get('http://localhost:8000/api/detalles');
  }
}
