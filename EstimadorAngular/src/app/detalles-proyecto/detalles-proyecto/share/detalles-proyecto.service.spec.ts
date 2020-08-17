import { TestBed } from '@angular/core/testing';

import { DetallesProyectoService } from './detalles-proyecto.service';

describe('DetallesProyectoService', () => {
  let service: DetallesProyectoService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(DetallesProyectoService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
