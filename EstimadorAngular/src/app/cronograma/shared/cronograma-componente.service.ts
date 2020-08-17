import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CronogramaComponenteService {
  constructor(private http: HttpClient) { }

  getCronograma(): Observable<any> {
    return this.http.get('http://localhost:8000/api/cronograma');
  }
}
