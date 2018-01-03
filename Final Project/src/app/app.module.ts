import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';
import { MyApp } from './app.component';
import { Push } from '@ionic-native/push';

import { LoginPage } from '../pages/login/login';
import { HomePage } from '../pages/home/home';
import { AboutPage } from '../pages/about/about';
import { ContactPage } from '../pages/contact/contact';
import { TabsPage } from '../pages/tabs/tabs';


import { AngularFireModule } from 'angularfire2';
import {AngularFireDatabaseModule} from "angularfire2/database";
import { AngularFireAuthModule } from 'angularfire2/auth';
import { NetworkEngineProvider } from '../providers/network-engine/network-engine';

export const firebaseConfig = {

    apiKey: "AIzaSyCoMPal2i5tNA_V0FBG83ueBn1cLDrEvBs",
    authDomain: "my-firebaseapp-d1813.firebaseapp.com",
    databaseURL: "https://my-firebaseapp-d1813.firebaseio.com",
    projectId: "my-firebaseapp-d1813",
    storageBucket: "my-firebaseapp-d1813.appspot.com",
    messagingSenderId: "14625819387"

};

@NgModule({
  declarations: [
    MyApp,
      LoginPage,
      AboutPage,
      ContactPage,
      HomePage,
      TabsPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
      AngularFireModule.initializeApp(firebaseConfig),
      AngularFireDatabaseModule,
      AngularFireAuthModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    LoginPage,
      AboutPage,
      ContactPage,
      HomePage,
      TabsPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    Push,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    NetworkEngineProvider
  ]
})
export class AppModule {}
