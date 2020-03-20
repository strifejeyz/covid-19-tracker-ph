import {Component} from '@angular/core';
import {CasesService} from './cases.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
})
export class AppComponent {
  title: string;
  routes = [];

  constructor(cases: CasesService) {
    this.title = cases.title;
    this.routes = cases.routes;
  }
}
