import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

/*
  Generated class for the NetworkEngineProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class NetworkEngineProvider {

  constructor(public http: Http) {
    console.log('Hello NetworkEngineProvider Provider');
  }

}
