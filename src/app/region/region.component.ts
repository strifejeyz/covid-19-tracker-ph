import { Component } from '@angular/core';
import { CasesService } from '../cases.service';

@Component({
  selector: 'app-region',
  styleUrls: ['./region.component.css'],
  templateUrl: './region.component.html',
})

export class RegionCasesComponent {
  cases = [];
  constructor(resource: CasesService) {
    this.cases = resource.data.pui;
  }

}
