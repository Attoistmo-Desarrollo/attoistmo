import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AddinsumoComponent } from './addinsumo.component';

describe('AddinsumoComponent', () => {
  let component: AddinsumoComponent;
  let fixture: ComponentFixture<AddinsumoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AddinsumoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AddinsumoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
