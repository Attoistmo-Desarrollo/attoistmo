import { TestBed } from '@angular/core/testing';

import { CalibracionUsuarioService } from './calibracion-usuario.service';

describe('CalibracionUsuarioService', () => {
  let service: CalibracionUsuarioService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CalibracionUsuarioService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
