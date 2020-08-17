import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CronogramaActividadesComponent } from './cronograma-actividades.component';

describe('CronogramaActividadesComponent', () => {
  let component: CronogramaActividadesComponent;
  let fixture: ComponentFixture<CronogramaActividadesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CronogramaActividadesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CronogramaActividadesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
