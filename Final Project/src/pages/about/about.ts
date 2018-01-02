import { Component, ViewChild } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Chart } from 'chart.js';
@Component({
  selector: 'page-about',
  templateUrl: 'about.html'
})
export class AboutPage {

    @ViewChild('barCanvas') barCanvas;
    @ViewChild('doughnutCanvas') doughnutCanvas;
    @ViewChild('lineCanvas') lineCanvas;
 
    barChart: any;
    doughnutChart: any;
    lineChart: any;
    constructor(public navCtrl: NavController) {
 
    }
 
    ionViewDidLoad() {
 
        this.barChart = new Chart(this.barCanvas.nativeElement, {
 
            type: 'bar',
            data: {
                labels: ["Pillow", "Blanket", "Bath Towel", "Shampoo"],
                datasets: [{
                    label: 'escalation count',
                    data: [10, 6, 19, 15],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)'
                      
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
 
        });



                this.doughnutChart = new Chart(this.doughnutCanvas.nativeElement, {
 
           type: 'bar',
            data: {
                labels: ["Cable TV", "Aircon Leak", "Clogged Toilet", "Busted Bulb"],
                datasets: [{
                    label: 'escalation count',
                    data: [12, 20, 3, 15],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                         'rgba(25, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)'
                        
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                         'rgba(25, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
 
        });
 

 
 
}
}