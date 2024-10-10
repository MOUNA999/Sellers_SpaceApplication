import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InterfaceInitialeClientsComponent } from './interface-initiale-clients.component';

describe('InterfaceInitialeClientsComponent', () => {
  let component: InterfaceInitialeClientsComponent;
  let fixture: ComponentFixture<InterfaceInitialeClientsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [InterfaceInitialeClientsComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(InterfaceInitialeClientsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
