import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CalibracionUsuarioComponent } from './calibracion-usuario.component';

describe('CalibracionUsuarioComponent', () => {
  let component: CalibracionUsuarioComponent;
  let fixture: ComponentFixture<CalibracionUsuarioComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CalibracionUsuarioComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CalibracionUsuarioComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
