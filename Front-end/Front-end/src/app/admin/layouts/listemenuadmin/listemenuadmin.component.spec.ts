import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListemenuadminComponent } from './listemenuadmin.component';

describe('ListemenuadminComponent', () => {
  let component: ListemenuadminComponent;
  let fixture: ComponentFixture<ListemenuadminComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ListemenuadminComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ListemenuadminComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
