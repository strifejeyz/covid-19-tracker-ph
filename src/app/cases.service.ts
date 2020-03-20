import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class CasesService {
  title = 'Covid-19 Cases Tracker';

  /* Routes */
  routes = [
    { link: '/', text: 'Cases History' },
    // { link: 'cases/regions', text: 'Cases (By Region)' },
    { link: 'mm-checkpoints', text: 'Checkpoints (Metro Manila)' },
  ];

  /* Containers */
  data = { pui: [], cases: [], casesOutside: [], suspectedCases: [], checkpoints: [] };

  /* API */
  API = {
    cases: 'https://coronavirus-ph-api.now.sh/cases',
    casesOutside: 'https://coronavirus-ph-api.now.sh/cases-outside-ph',
    suspectedCases: 'https://coronavirus-ph-api.now.sh/suspected-cases',
    pui: 'https://coronavirus-ph-api.now.sh/patients-under-investigation',
    checkpoints: 'https://coronavirus-ph-api.now.sh/mm-checkpoints',
  };

  /* Fetch data from API */
  constructor(private http: HttpClient) {
    this.data.pui = this.fetch(this.API.pui);
    this.data.cases = this.fetch(this.API.cases);
    this.data.checkpoints = this.fetch(this.API.checkpoints);
    this.data.casesOutside = this.fetch(this.API.casesOutside);
    this.data.suspectedCases = this.fetch(this.API.suspectedCases);
  }

  /* Automate */
  private fetch(apiUrl) {
    const content = [];
    this.http.get(apiUrl).toPromise().then(data => {
      for (const key in data) {
        if (data.hasOwnProperty(key)) {
          content.push(data[key]);
        }
      }
    });
    return content;
  }
}
