import { Injectable } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { CookieService } from 'ngx-cookie-service';
@Injectable({
  providedIn: 'root'
})
export class UserService {
      // Http Options
      httpOptions = {
        headers: new HttpHeaders({
         'Content-Type': 'application/json'
         })};
    constructor(private http: HttpClient, private cookies: CookieService) {}

    login(user: any): Observable<any> {
      return this.http.post('http://127.0.0.1:8000/api/login', JSON.stringify(user), this.httpOptions);
    }
    register(user: any): Observable<any> {
      return this.http.post('http://127.0.0.1:8000/api/register', JSON.stringify(user), this.httpOptions);
    }
    setToken(token: string) {
      this.cookies.set('token', token);
    }
    getToken() {
      return this.cookies.get('token');
    }
    getUserLogged() {
      const token = this.getToken();
      // Aquí iría el endpoint para devolver el usuario para un token
    }
    deley(){
      this.cookies.delete('token');
    }
}
