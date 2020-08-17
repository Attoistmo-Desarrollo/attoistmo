import { CronogramaComponenteService } from './shared/cronograma-componente.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-cronograma',
  templateUrl: './cronograma.component.html',
  styleUrls: ['./cronograma.component.css']
})
export class CronogramaComponent implements OnInit {
  cronograMA: any;

  constructor(public cronogramaService: CronogramaComponenteService) { }

  ngOnInit() {
    this.cronogramaService.getCronograma().subscribe(data => {
      this.cronograMA = data;
    });
  }
}
