import { Component } from '@angular/core';
import {NavController, AlertController, ModalController} from 'ionic-angular';
import {AngularFireDatabase, FirebaseListObservable}from "angularfire2/database";
import { AngularFireAuth } from 'angularfire2/auth'


import { AboutPage } from '../about/about';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

    tickets: FirebaseListObservable<any[]>;
    due: String = new Date().toISOString();

    constructor(private afAuth: AngularFireAuth,
    public alertCtrl: AlertController, public navCtrl: NavController, public modalCtrl:ModalController ,db: AngularFireDatabase) {

        this.tickets = db.list('/ticket');
    }
/*
    closeTicket(){
       
      // let modal = this.modalCtrl.create(AboutPage);
        //modal.present();

        let data = {
            title: "yummy me"
        };

        this.navCtrl.push(AboutPage, data);
    }
*/
    addTicket(): void {
        let prompt = this.alertCtrl.create({
            title: "Escalated Ticket Details",
            message: "Enter Ticket Details",
            inputs: [
                {
                    name: 'room',
                    placeholder: "Complaint Location"
                },
                {
                    name: 'owner',
                    placeholder: "Ticket Owner"
                },
                {
                    name: 'status',
                    placeholder: "Ticket Status"
                },
                {
                    name: 'due',
                    placeholder: "Ticket Limit"
                },
                {
                    name: 'priority',
                    placeholder: "Ticket Priority"
                },
                {
                    name: 'created',
                    placeholder: "Date Created"
                },
                {
                    name: 'description',
                    placeholder: "Description"
                },
            ],

            buttons: [
                {
                    text: "Submit",
                    handler: data => {
                        this.tickets.push({
                            room: data.room,
                            owner: data.owner,
                            status: data.status,
                            due: data.due,
                            priority: data.priority,
                            created: data.created,
                            description: data.description

                        });
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
            status: "Doing",
         });
     console.log("Submit button clicked");
    }





}
