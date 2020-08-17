import { CronogramaActividadesComponenteService } from './shared/cronograma-actividades-componente.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-cronograma-actividades',
  templateUrl: './cronograma-actividades.component.html',
  styleUrls: ['./cronograma-actividades.component.css']
})
export class CronogramaActividadesComponent implements OnInit {
  cronAct: any;

  constructor(public croActService: CronogramaActividadesComponenteService) { }

  ngOnInit() {
    this.croActService.getCroAct().subscribe(data => {
      this.cronAct = data;
    });
  }
}
