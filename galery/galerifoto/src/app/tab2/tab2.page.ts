import { Component } from '@angular/core';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  tebakan : number;
  angkarandom : number;
  kondisi : boolean =  false;
  constructor() {}
  ngOnInit()
  {
    this.angkarandom = Math.floor(Math.random() * (5 - 1) + 1);
  }
  CekAngka()
  {
    if(this.tebakan==this.angkarandom)
    {
      this.kondisi=true;
    }
    else
    {
      this.kondisi=false;
    }
  }
}
