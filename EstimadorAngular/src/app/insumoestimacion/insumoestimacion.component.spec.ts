import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { InsumoestimacionComponent } from './insumoestimacion.component';

describe('InsumoestimacionComponent', () => {
  let component: InsumoestimacionComponent;
  let fixture: ComponentFixture<InsumoestimacionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InsumoestimacionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InsumoestimacionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
