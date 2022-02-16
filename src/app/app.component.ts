import { Component } from '@angular/core';
import { SendMail } from './sendservice';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'portfolio';

  constructor(private send: SendMail){
    
  }
  sendmail(f)
  {
    const p = f.value;
    this.send.sendData(p);
    console.log(p);
    f.reset();
  }
}

