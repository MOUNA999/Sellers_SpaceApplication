import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListemenucaisseComponent } from './listemenucaisse.component';

describe('ListemenucaisseComponent', () => {
  let component: ListemenucaisseComponent;
  let fixture: ComponentFixture<ListemenucaisseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ListemenucaisseComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ListemenucaisseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
