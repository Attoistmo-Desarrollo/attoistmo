import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NuevaContraseniaComponent } from './nueva-contrasenia.component';

describe('NuevaContraseniaComponent', () => {
  let component: NuevaContraseniaComponent;
  let fixture: ComponentFixture<NuevaContraseniaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NuevaContraseniaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NuevaContraseniaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
