import { Component } from '@angular/core';
import { CasesService } from '../../cases.service';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html'
})

export class SidebarComponent {
  sideNav;
  data = { pui: [], cases: [] };
  casesCount = {};
  casesOutside = [];

  constructor(cases: CasesService) {
    this.sideNav = cases.routes;
    this.data.pui = cases.data.pui;
    this.data.cases = cases.data.cases;
    this.casesCount = cases.data.suspectedCases;
    this.casesOutside = cases.data.casesOutside;
  }
}
