import { Component } from '@angular/core';
import {NavController, AlertController, ModalController} from 'ionic-angular';
import {AngularFireDatabase, FirebaseListObservable}from "angularfire2/database";
import { AngularFireAuth } from 'angularfire2/auth'


import { AboutPage } from '../about/about';

@Component({
  selector: 'page-contact',
  templateUrl: 'contact.html'
})
export class ContactPage {

    assigneds: FirebaseListObservable<any[]>;
    due: String = new Date().toISOString();

    constructor(private afAuth: AngularFireAuth,
    public alertCtrl: AlertController, public navCtrl: NavController, public modalCtrl:ModalController ,db: AngularFireDatabase) {

        this.assigneds = db.list('/assigned');
    }

    deleteTicket(assignedID): void {
        let prompt = this.alertCtrl.create({
            title: "End the task now.",
            buttons: [
                {
                    text: "Submit",
                    handler: data => {
                        this.assigneds.remove(assignedID);
                        console.log("Submit button clicked");
                    }
                },
                {
                    text: "Cancel",
                    handler: data => {
                        console.log("Cancel button clicked");
                    }
                }

            ]


        });

        prompt.present();
    }


editTicket(assigned): void {

        this.assigneds.update(assigned.$key, {
            status: "In Progress",
         });
     console.log("Submit button clicked");
    }





}
