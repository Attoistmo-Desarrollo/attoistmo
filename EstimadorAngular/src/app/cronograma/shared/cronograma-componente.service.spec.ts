import { TestBed } from '@angular/core/testing';

import { CronogramaComponenteService } from './cronograma-componente.service';

describe('CronogramaComponenteService', () => {
  let service: CronogramaComponenteService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CronogramaComponenteService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
