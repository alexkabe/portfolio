import { HttpClient } from "@angular/common/http";
import { NgModule } from "@angular/core";
import { environment } from './../environments/environment';

@NgModule({})
export class SendMail{

    apiUrl = environment.apiUrl;
    emailUrl = environment.emailUrl;

    constructor(private http: HttpClient)
    {

    }

    sendData(form)
    {

        return this.http.post<any>(`${this.apiUrl}`, form, {}).subscribe(()=>{
            console.log('C\'est passe');
        })  
    }


}