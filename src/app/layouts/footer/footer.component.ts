import { Component } from '@angular/core';

@Component({
  selector: 'app-footer',
  template: `
    <div class="c">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="https://github.com/strifejeyz">Perhaps, a thumbs up?</a>
            </li>
            <li class="list-inline-item">/</li>
            <li class="list-inline-item">
                <a href="https://github.com/strifejeyz/covid-19-tracker-ph">Source Code</a>
            </li>
        </ul>
    </div>
      <p class="c">&copy; Jesse Strife 2020. All rights reserved.</p>
  `
})

export class FooterComponent {

}
