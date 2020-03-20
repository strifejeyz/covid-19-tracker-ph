/* Components */
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';


/* Modules */
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { FooterComponent } from './layouts/footer/footer.component';
import { SidebarComponent } from './layouts/sidebar/sidebar.component';
import { HttpClientModule } from '@angular/common/http';

/* Covid-Components */
import { CasesComponent } from './cases/cases.component';
import { RegionCasesComponent } from './region/region.component';
import { CheckPointsComponent } from './check-points/check-points.component';
import { CasesOutsidePhComponent } from './cases-outside-ph/cases-outside-ph.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'cases/regions', component: RegionCasesComponent },
  { path: 'mm-checkpoints', component: CheckPointsComponent },
];

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    CasesComponent,
    FooterComponent,
    SidebarComponent,
    RegionCasesComponent,
    CheckPointsComponent,
    CasesOutsidePhComponent,
  ],
  imports: [
    FormsModule,
    BrowserModule,
    HttpClientModule,
    RouterModule.forRoot(
      routes,
      { enableTracing: true }
    )
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
