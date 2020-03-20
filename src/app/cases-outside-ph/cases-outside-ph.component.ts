import { Component } from '@angular/core';
import {CasesService} from '../cases.service';

@Component({
  selector: 'app-cases-outside-ph',
  templateUrl: './cases-outside-ph.component.html',
})
export class CasesOutsidePhComponent {
  casesOutSidePh = [];

  constructor(cases: CasesService) {
    this.casesOutSidePh = cases.data.casesOutside;
    console.log(this.casesOutSidePh);
  }
}
