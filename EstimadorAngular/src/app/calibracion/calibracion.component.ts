import { Component, OnInit, ViewChild, OnDestroy } from '@angular/core';
// import { MatPaginator } from '@angular/material/paginator';


export interface PeriodicElement {
  name: string;
  position: number;
  weight: number;
  symbol: string;
}

const ELEMENT_DATA: PeriodicElement[] = [
  { position: 1, name: 'Hydrogen', weight: 1.0079, symbol: 'H' },
  { position: 2, name: 'Helium', weight: 4.0026, symbol: 'He' },
  { position: 3, name: 'Lithium', weight: 6.941, symbol: 'Li' },
  { position: 4, name: 'Beryllium', weight: 9.0122, symbol: 'Be' },
  { position: 5, name: 'Boron', weight: 10.811, symbol: 'B' },
  { position: 6, name: 'Carbon', weight: 12.0107, symbol: 'C' },
  { position: 7, name: 'Nitrogen', weight: 14.0067, symbol: 'N' },
  { position: 8, name: 'Oxygen', weight: 15.9994, symbol: 'O' },
  { position: 9, name: 'Fluorine', weight: 18.9984, symbol: 'F' },
  { position: 10, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 11, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 12, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 13, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 14, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 15, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 16, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 17, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 18, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 19, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 20, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 21, name: 'Neon', weight: 20.1797, symbol: 'Ne' },
  { position: 22, name: 'Neon', weight: 20.1797, symbol: 'Ne' },

];




@Component({
  selector: 'app-calibracion',
  templateUrl: './calibracion.component.html',
  styleUrls: ['./calibracion.component.css']
})
export class CalibracionComponent implements OnInit, OnDestroy {
  id = 0;
  proyecto = '';
  fase = '';
  constructor() { }
  
  ngOnInit(): void {

   this.id= 1;
   this.proyecto= 'Hydrogen';
   this.fase= 'ok';

   this.id= 2;
   this.proyecto= 'Hydrogen';
   this.fase= 'ok';
 
  }

  ngOnDestroy(): void {
    // Do not forget to unsubscribe the event

  }

}




