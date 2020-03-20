import { Component } from '@angular/core';
import { CasesService } from '../cases.service';


@Component({
  selector: 'app-check-points',
  templateUrl: './check-points.component.html',
  styleUrls: ['./check-points.component.css']
})
export class CheckPointsComponent {
  checkpoints = [];

  constructor(cases: CasesService) {
    this.checkpoints = cases.data.checkpoints;
  }

}
