import { Component } from '@angular/core';
import { CasesService } from '../cases.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
  title: string;
  casesCount: {};
  casesOutside = [];
  data = { pui: [], cases: [], casesOutside: [] };

  constructor(cases: CasesService) {
    this.title = cases.title;
    this.data.cases = cases.data.cases;
    this.casesCount = cases.data.suspectedCases;
    this.casesOutside = cases.data.casesOutside;
  }




}
