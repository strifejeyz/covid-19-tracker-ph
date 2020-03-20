import { Component } from '@angular/core';
import { CasesService } from '../cases.service';

@Component({
  selector: 'app-cases',
  styleUrls: ['./cases.component.css'],
  templateUrl: './cases.component.html',
})

export class CasesComponent {
  data = [];
  constructor(cases: CasesService) {
    this.data = cases.data.cases;
  }

}
