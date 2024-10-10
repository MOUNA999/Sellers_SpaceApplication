import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InterfaceInitialeComponent } from './interface-initiale.component';

describe('InterfaceInitialeComponent', () => {
  let component: InterfaceInitialeComponent;
  let fixture: ComponentFixture<InterfaceInitialeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [InterfaceInitialeComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(InterfaceInitialeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
