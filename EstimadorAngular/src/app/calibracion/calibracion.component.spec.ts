import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CalibracionComponent } from './calibracion.component';

describe('CalibracionComponent', () => {
  let component: CalibracionComponent;
  let fixture: ComponentFixture<CalibracionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CalibracionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CalibracionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
