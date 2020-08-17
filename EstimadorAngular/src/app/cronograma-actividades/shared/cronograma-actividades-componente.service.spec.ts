import { TestBed } from '@angular/core/testing';

import { CronogramaActividadesComponenteService } from './cronograma-actividades-componente.service';

describe('CronogramaActividadesComponenteService', () => {
  let service: CronogramaActividadesComponenteService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CronogramaActividadesComponenteService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
