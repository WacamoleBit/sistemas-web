import { Component } from '@angular/core';
import { Curso } from '../models/Curso';

@Component({
  selector: 'app-cursos',
  templateUrl: './cursos.component.html',
  styleUrls: ['./cursos.component.scss']
})
export class CursosComponent {
  cursos: Curso[] = [
    {
      NRC: 33234,
      name: "Tecnologías Web",
      turn: "Matutino"
    },
    {
      NRC: 33412,
      name: "Tecnologías Web",
      turn: "Vespertino"
    },
    {
      NRC: 32254,
      name: "Desarrollo de software",
      turn: "Matutino"
    },
    {
      NRC: 32216,
      name: "Desarrollo de software",
      turn: "Vespertino"
    }
  ]
}
