import { Component } from '@angular/core';
import { Docente } from '../models/Docente';

@Component({
  selector: 'app-docente',
  templateUrl: './docente.component.html',
  styleUrls: ['./docente.component.scss']
})
export class DocenteComponent {
  docentes: Docente[] = [
    {
      personalNumber: 4141231,
      firstname: "Rafael",
      lastname: "Rojano"
    },
    {
      personalNumber: 5123123,
      firstname: "Katia",
      lastname: "Blanco"
    },
    {
      personalNumber: 9412876,
      firstname: "Fredy",
      lastname: "Castañeda"
    },
    {
      personalNumber: 6235243,
      firstname: "Itzel",
      lastname: "Reyes"
    }
  ]
}
