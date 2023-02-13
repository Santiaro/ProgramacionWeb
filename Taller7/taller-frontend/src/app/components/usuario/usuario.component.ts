import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';
import { ApiService } from 'src/app/services/api.service';

@Component({
  selector: 'app-usuario',
  templateUrl: './usuario.component.html',
  styleUrls: ['./usuario.component.css']
})
export class UsuarioComponent implements OnInit {
  form = new FormGroup({
    name: new FormControl(''),
    lastname: new FormControl(''),
    username: new FormControl(''),
    email: new FormControl(''),
    password: new FormControl(''),
    password2: new FormControl(''),
    address: new FormControl(''),
    doc: new FormControl(''),
    phone: new FormControl(''),
    birthDay: new FormControl('')
  });

  constructor(
    private router:Router,
    private api:ApiService
  ) { }

  ngOnInit(): void {
  }

  navigate(path: string){
    this.router.navigate(['/' + path]);
  }

  insert(){
    let data = this.form.value;
    console.log('data', data);
    this.api.insert('persona', this.form.value).subscribe(res => {
      console.log(res);
    });
  }

  read(){
    
  }

  update(){
    
  }

  delete(){
    
  }

  
}
