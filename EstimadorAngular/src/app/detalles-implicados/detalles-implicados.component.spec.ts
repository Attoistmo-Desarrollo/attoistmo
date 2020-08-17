import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DetallesImplicadosComponent } from './detalles-implicados.component';

describe('DetallesImplicadosComponent', () => {
  let component: DetallesImplicadosComponent;
  let fixture: ComponentFixture<DetallesImplicadosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DetallesImplicadosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DetallesImplicadosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
