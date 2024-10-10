import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MenuCaisseComponent } from './menu-caisse.component';

describe('MenuCaisseComponent', () => {
  let component: MenuCaisseComponent;
  let fixture: ComponentFixture<MenuCaisseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [MenuCaisseComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(MenuCaisseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
