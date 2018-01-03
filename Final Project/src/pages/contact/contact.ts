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

    tickets: FirebaseListObservable<any[]>;
    

    constructor(private afAuth: AngularFireAuth,
    public alertCtrl: AlertController, public navCtrl: NavController, public modalCtrl:ModalController ,db: AngularFireDatabase) {

        this.tickets = db.list('/ticket',{
                  query: {
                    orderByChild: 'due',
                    startAt: "E", endAt:"Z"
                  }
                });
    }

    deleteTicket(ticketID): void {
        let prompt = this.alertCtrl.create({
            title: "End the task now.",
            buttons: [
                {
                    text: "Submit",
                    handler: data => {
                        this.tickets.remove(ticketID);
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


editTicket(ticket): void {

        this.tickets.update(ticket.$key, {
            status: "In Progress",
         });
     console.log("Submit button clicked");
    }





}
