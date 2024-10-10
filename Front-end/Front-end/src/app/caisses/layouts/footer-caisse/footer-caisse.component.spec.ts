import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FooterCaisseComponent } from './footer-caisse.component';

describe('FooterCaisseComponent', () => {
  let component: FooterCaisseComponent;
  let fixture: ComponentFixture<FooterCaisseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [FooterCaisseComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(FooterCaisseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
