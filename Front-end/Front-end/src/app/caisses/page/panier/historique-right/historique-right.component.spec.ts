import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HistoriqueRightComponent } from './historique-right.component';

describe('HistoriqueRightComponent', () => {
  let component: HistoriqueRightComponent;
  let fixture: ComponentFixture<HistoriqueRightComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HistoriqueRightComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(HistoriqueRightComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
