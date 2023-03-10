import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AlumnoComponent } from './alumno/alumno.component';
import { CursosComponent } from './cursos/cursos.component';
import { DocenteComponent } from './docente/docente.component';
import { HomeComponent } from './home/home.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'home', component: HomeComponent },
  { path: 'alumnos', component: AlumnoComponent },
  { path: 'docentes' , component: DocenteComponent },
  { path: 'cursos', component:CursosComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }