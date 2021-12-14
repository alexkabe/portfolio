import { Component } from '@angular/core';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'portfolio';

  sendmail(f)
  {
    const p = f.value;
    console.log(p);
    f.reset();
  }
}

