import { Component } from '@angular/core';
import { Alumno } from '../models/Alumno';

@Component({
  selector: 'app-alumno',
  templateUrl: './alumno.component.html',
  styleUrls: ['./alumno.component.scss']
})
export class AlumnoComponent {
  alumnos: Alumno[] = [
    {
      id: 1,
      firstname: "Ricardo",
      lastname: "Martiez",
      age: 15
    },
    {
      id: 2,
      firstname: "Oscar",
      lastname: "Perea",
      age: 15
    },
    {
      id: 3,
      firstname: "Manuel",
      lastname: "Hernandez",
      age: 25
    }
  ]
}
