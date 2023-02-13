import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private API = 'https://localhost:8000/api';

  constructor(
    private http:HttpClient,
  ) {}

  insert(model:string, data:any):Observable<any> {
    return this.http.post(this.API+'/'+model+'/insertar', data);
  }

  search(model:string, doc:number):Observable<any> {
    return this.http.get(this.API+'/'+model+'/'+doc);
  }

  update(model:string, doc:number, data:any):Observable<any> {
    return this.http.put(this.API+'/'+model+'/actualizar/'+doc, data);
  }

  delete(model:string, doc:number, data:any):Observable<any> {
    return this.http.delete(this.API+'/'+model+'/borrar/'+doc, data);
  }
}
