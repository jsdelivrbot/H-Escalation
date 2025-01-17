import { Component } from '@angular/core';
import { Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { Push, PushObject, PushOptions} from '@ionic-native/push';

import { TabsPage } from '../pages/tabs/tabs';

@Component({
    templateUrl: 'app.html'

})

export class MyApp {
 rootPage: any = TabsPage;


    constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen) {
        platform.ready().then(() => {
            statusBar.styleDefault();
            splashScreen.hide();
        }); //end platform
    }
}

