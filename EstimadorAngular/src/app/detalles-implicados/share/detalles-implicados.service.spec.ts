import { TestBed } from '@angular/core/testing';

import { DetallesImplicadosService } from './detalles-implicados.service';

describe('DetallesImplicadosService', () => {
  let service: DetallesImplicadosService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(DetallesImplicadosService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
