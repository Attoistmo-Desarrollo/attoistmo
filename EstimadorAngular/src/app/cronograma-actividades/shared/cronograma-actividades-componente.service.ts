import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CronogramaActividadesComponenteService {
  constructor(private http: HttpClient) { }

  getCroAct(): Observable<any> {
    return this.http.get('http://localhost:8000/api/cronogramaactividades');
  }
}
