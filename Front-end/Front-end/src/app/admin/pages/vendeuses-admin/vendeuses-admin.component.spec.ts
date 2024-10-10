import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VendeusesAdminComponent } from './vendeuses-admin.component';

describe('VendeusesAdminComponent', () => {
  let component: VendeusesAdminComponent;
  let fixture: ComponentFixture<VendeusesAdminComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [VendeusesAdminComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(VendeusesAdminComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
