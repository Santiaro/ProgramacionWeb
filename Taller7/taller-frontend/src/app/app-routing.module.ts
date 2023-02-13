import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CiudadComponent } from './components/ciudad/ciudad.component';
import { DocumentoComponent } from './components/documento/documento.component';
import { UsuarioComponent } from './components/usuario/usuario.component';

const routes: Routes = [
  { path: 'personas', component: UsuarioComponent },
  { path: 'documentos', component: DocumentoComponent },
  { path: 'ciudades', component: CiudadComponent },
  { path: '', redirectTo: '/personas', pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
