import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MenuCaisseLeftComponent } from './menu-caisse-left.component';

describe('MenuCaisseLeftComponent', () => {
  let component: MenuCaisseLeftComponent;
  let fixture: ComponentFixture<MenuCaisseLeftComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [MenuCaisseLeftComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(MenuCaisseLeftComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
