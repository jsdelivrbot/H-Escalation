webpackJsonp([2],{

/***/ 134:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return LoginPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(36);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_angularfire2_auth__ = __webpack_require__(103);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__tabs_tabs__ = __webpack_require__(193);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __generator = (this && this.__generator) || function (thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
    return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (_) try {
            if (f = 1, y && (t = y[op[0] & 2 ? "return" : op[0] ? "throw" : "next"]) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [0, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
};




/**
 * Generated class for the LoginPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var LoginPage = (function () {
    function LoginPage(afAuth, navCtrl, navParams) {
        this.afAuth = afAuth;
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        this.user = {};
    }
    LoginPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad LoginPage');
    };
    LoginPage.prototype.login = function (user) {
        return __awaiter(this, void 0, void 0, function () {
            var result;
            return __generator(this, function (_a) {
                try {
                    result = this.afAuth.auth.signInWithEmailAndPassword(user.email, user.password);
                    if (result) {
                        this.navCtrl.setRoot(__WEBPACK_IMPORTED_MODULE_3__tabs_tabs__["a" /* TabsPage */]);
                    }
                }
                catch (e) {
                    console.error(e);
                }
                return [2 /*return*/];
            });
        });
    };
    return LoginPage;
}());
LoginPage = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
        selector: 'page-login',template:/*ion-inline-start:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\login\login.html"*/'<ion-content class="background">\n	<ion-label  style="padding-top: 89px"></ion-label>\n	<ion-card>\n		<ion-card-header>\n			Taal Vista Hotel<br>\n			Escalation Management System\n		</ion-card-header>\n		<ion-card-content>\n			<ion-list no-line>\n				<ion-item>\n					<ion-input type="text" [(ngModel)]="user.email" placeholder="Username" ></ion-input>\n				</ion-item>\n				<ion-item>\n					<ion-input type="password" [(ngModel)]="user.password" placeholder="Password" ></ion-input>\n				</ion-item>\n				\n				<button ion-button block  color="secondary" (click)="login(user)">Log in</button>\n				\n			</ion-list>\n		</ion-card-content>\n	</ion-card>\n</ion-content>'/*ion-inline-end:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\login\login.html"*/,
    }),
    __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_2_angularfire2_auth__["a" /* AngularFireAuth */],
        __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["h" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["i" /* NavParams */]])
], LoginPage);

//# sourceMappingURL=login.js.map

/***/ }),

/***/ 142:
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncatched exception popping up in devtools
	return Promise.resolve().then(function() {
		throw new Error("Cannot find module '" + req + "'.");
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = 142;

/***/ }),

/***/ 183:
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"../pages/login-form/login-form.module": [
		410,
		0
	],
	"../pages/login/login.module": [
		409,
		1
	]
};
function webpackAsyncContext(req) {
	var ids = map[req];
	if(!ids)
		return Promise.reject(new Error("Cannot find module '" + req + "'."));
	return __webpack_require__.e(ids[1]).then(function() {
		return __webpack_require__(ids[0]);
	});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
	return Object.keys(map);
};
webpackAsyncContext.id = 183;
module.exports = webpackAsyncContext;

/***/ }),

/***/ 193:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return TabsPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__about_about__ = __webpack_require__(194);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__contact_contact__ = __webpack_require__(195);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__home_home__ = __webpack_require__(196);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var TabsPage = (function () {
    function TabsPage() {
        this.tab1Root = __WEBPACK_IMPORTED_MODULE_3__home_home__["a" /* HomePage */];
        this.tab2Root = __WEBPACK_IMPORTED_MODULE_1__about_about__["a" /* AboutPage */];
        this.tab3Root = __WEBPACK_IMPORTED_MODULE_2__contact_contact__["a" /* ContactPage */];
    }
    return TabsPage;
}());
TabsPage = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({template:/*ion-inline-start:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\tabs\tabs.html"*/'<ion-tabs>\n  <ion-tab [root]="tab1Root" tabTitle="Assigned" tabIcon="document" [rootParams]="fooId"></ion-tab>\n  <ion-tab [root]="tab2Root" tabTitle="Closed " tabIcon="close-circle" [rootParams]="fooId"></ion-tab>\n</ion-tabs>\n'/*ion-inline-end:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\tabs\tabs.html"*/
    }),
    __metadata("design:paramtypes", [])
], TabsPage);

//# sourceMappingURL=tabs.js.map

/***/ }),

/***/ 194:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AboutPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(36);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var AboutPage = (function () {
    function AboutPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    return AboutPage;
}());
AboutPage = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
        selector: 'page-about',template:/*ion-inline-start:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\about\about.html"*/'<ion-header>\n  <ion-navbar>\n    <ion-title>\n      Closed Tickets\n    </ion-title>\n  </ion-navbar>\n</ion-header>\n\n<ion-content padding>\n\n\n</ion-content>\n'/*ion-inline-end:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\about\about.html"*/
    }),
    __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["h" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["i" /* NavParams */]])
], AboutPage);

//# sourceMappingURL=about.js.map

/***/ }),

/***/ 195:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ContactPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(36);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ContactPage = (function () {
    function ContactPage(navCtrl) {
        this.navCtrl = navCtrl;
    }
    return ContactPage;
}());
ContactPage = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
        selector: 'page-contact',template:/*ion-inline-start:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\contact\contact.html"*/'<ion-header>\n  <ion-navbar>\n    <ion-title>\n      Profile\n    </ion-title>\n  </ion-navbar>\n</ion-header>\n\n<ion-content>\n\n\n  <ion-card-content>\n      <ion-list no-line>\n\n      </ion-list>\n  </ion-card-content>\n\n</ion-content>\n'/*ion-inline-end:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\contact\contact.html"*/
    }),
    __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["h" /* NavController */]])
], ContactPage);

//# sourceMappingURL=contact.js.map

/***/ }),

/***/ 196:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return HomePage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(36);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_angularfire2_database__ = __webpack_require__(197);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_angularfire2_auth__ = __webpack_require__(103);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var HomePage = (function () {
    function HomePage(afAuth, alertCtrl, navCtrl, modalCtrl, db) {
        this.afAuth = afAuth;
        this.alertCtrl = alertCtrl;
        this.navCtrl = navCtrl;
        this.modalCtrl = modalCtrl;
        this.due = new Date().toISOString();
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
    HomePage.prototype.addTicket = function () {
        var _this = this;
        var prompt = this.alertCtrl.create({
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
                    handler: function (data) {
                        _this.tickets.push({
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
                    handler: function (data) {
                        console.log("Cancel button clicked");
                    }
                }
            ]
        });
        prompt.present();
    };
    HomePage.prototype.deleteTicket = function (ticketID) {
        var _this = this;
        var prompt = this.alertCtrl.create({
            title: "End the task now.",
            buttons: [
                {
                    text: "Submit",
                    handler: function (data) {
                        _this.tickets.remove(ticketID);
                        console.log("Submit button clicked");
                    }
                },
                {
                    text: "Cancel",
                    handler: function (data) {
                        console.log("Cancel button clicked");
                    }
                }
            ]
        });
        prompt.present();
    };
    HomePage.prototype.editTicket = function (ticket) {
        this.tickets.update(ticket.$key, {
            status: "Ongoing",
        });
        console.log("Submit button clicked");
    };
    return HomePage;
}());
HomePage = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
        selector: 'page-home',template:/*ion-inline-start:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\home\home.html"*/'<ion-header>\n  <ion-navbar>\n    <ion-title text-center="true">\n      <ion-icon name="clock"></ion-icon>\n      Taal Vista Hotel EMM\n    </ion-title>\n\n    <ion-buttons end>\n\n      <button ion-button icon-only (click)="addTicket()">\n        <ion-icon name="add"></ion-icon>\n      </button>\n\n    </ion-buttons>\n\n  </ion-navbar>\n</ion-header>\n\n<div class="tabs">\n  <a class="tab-item">\n    Home\n  </a>\n\n  <a class="tab-item">\n    Open Tickets\n  </a>\n</div>\n\n<ion-content class="cards-bg">\n\n  <ion-label text-center text>My Tickets</ion-label>\n\n      <ion-list>\n        <ion-item-divider color="yellow"><b>Today</b></ion-item-divider>\n      <ion-item-sliding *ngFor="let ticket of tickets | async" >\n        <ion-item style="background-color: #fafff1; font-size:10pt;">\n\n\n          <div  style="width:10%; height: 100%; text-align:center; float:left; text-align: center; ">\n\n            <div style="width:10%; height: 50%;float:left;">\n              <ion-icon name="md-clipboard" style="background-color:white;padding:8px;border:1px solid black; -moz-border-radius:100%; border-radius:100%;" ></ion-icon>\n            </div>\n          </div>\n\n          <table padding-left="2px" width="90%" style="table-layout: fixed; float:left;border-collapse: separate; border-spacing: 2px;">\n\n            <tr>\n                <td width="70%" style="font-size:10pt;word-wrap:break-word"><b>{{ticket.description}}</b>\n                </td>\n            </tr>\n\n            <tr>\n              <td width="70%"><i>{{ticket.room}}</i></td>\n              <td width="30%"style=" text-align:center;border:3px solid #00a50f; color:#00a50f; -moz-border-radius:5px; border-radius:5px;">\n                {{ticket.status}}</td>\n            </tr>\n\n            <tr style="border-collapse: separate; border-spacing: 2px;">\n              <td width="70%"> {{ticket.created}}</td>\n              <td width="30%"style=" text-align:center;border:3px solid #00a0e2; color:#00a0e2; -moz-border-radius:5px; border-radius:5px;">\n                {{ticket.priority}}</td>\n            </tr>\n\n            <tr>\n              <td width="70%">{{ ticket.owner}}</td>\n              <td width="30%"><b>{{ ticket.due}}</b></td>\n            </tr>\n\n\n          </table>\n\n\n          <!-- <ion-label>Select options</ion-label>\n           <ion-select>\n             <ion-option value="present">Present</ion-option>\n             <ion-option value="absent">Absent</ion-option>\n             <ion-datetime displayFormat="MMM DD, h:mm A" [(ngModel)]="due"></ion-datetime>\n           </ion-select> -->\n\n        </ion-item>\n\n    \n        <ion-item-options side="right" padding >\n\n          <button ion-button color="secondary" (click)="editTicket(ticket)" style="border:3px solid white;-moz-border-radius:5px; border-radius:5px;">\n            <ion-icon name="md-create"> Do Task</ion-icon>\n          </button>\n\n          <button ion-button color="danger" (click)="deleteTicket(ticket)" style="border:3px solid white; -moz-border-radius:5px; border-radius:5px;">\n            <ion-icon name="md-trash"> End Task </ion-icon>\n          </button>\n\n        </ion-item-options> <!-- end slide right deleteTicket(ticket.$key)--> \n\n      </ion-item-sliding>\n\n\n    </ion-list>\n</ion-content>\n'/*ion-inline-end:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\pages\home\home.html"*/
    }),
    __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_3_angularfire2_auth__["a" /* AngularFireAuth */],
        __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["a" /* AlertController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["h" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* ModalController */], __WEBPACK_IMPORTED_MODULE_2_angularfire2_database__["a" /* AngularFireDatabase */]])
], HomePage);

//# sourceMappingURL=home.js.map

/***/ }),

/***/ 272:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__ = __webpack_require__(273);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__app_module__ = __webpack_require__(289);


Object(__WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__["a" /* platformBrowserDynamic */])().bootstrapModule(__WEBPACK_IMPORTED_MODULE_1__app_module__["a" /* AppModule */]);
//# sourceMappingURL=main.js.map

/***/ }),

/***/ 289:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* unused harmony export firebaseConfig */
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppModule; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__ = __webpack_require__(38);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_ionic_angular__ = __webpack_require__(36);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__ = __webpack_require__(268);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__ionic_native_status_bar__ = __webpack_require__(271);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__app_component__ = __webpack_require__(407);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__pages_login_login__ = __webpack_require__(134);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__pages_home_home__ = __webpack_require__(196);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__pages_about_about__ = __webpack_require__(194);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__pages_contact_contact__ = __webpack_require__(195);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__pages_tabs_tabs__ = __webpack_require__(193);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11_angularfire2__ = __webpack_require__(408);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12_angularfire2_database__ = __webpack_require__(197);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13_angularfire2_auth__ = __webpack_require__(103);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};














var firebaseConfig = {
    apiKey: "AIzaSyCoMPal2i5tNA_V0FBG83ueBn1cLDrEvBs",
    authDomain: "my-firebaseapp-d1813.firebaseapp.com",
    databaseURL: "https://my-firebaseapp-d1813.firebaseio.com",
    projectId: "my-firebaseapp-d1813",
    storageBucket: "my-firebaseapp-d1813.appspot.com",
    messagingSenderId: "14625819387"
};
var AppModule = (function () {
    function AppModule() {
    }
    return AppModule;
}());
AppModule = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_1__angular_core__["L" /* NgModule */])({
        declarations: [
            __WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* MyApp */],
            __WEBPACK_IMPORTED_MODULE_6__pages_login_login__["a" /* LoginPage */],
            __WEBPACK_IMPORTED_MODULE_8__pages_about_about__["a" /* AboutPage */],
            __WEBPACK_IMPORTED_MODULE_9__pages_contact_contact__["a" /* ContactPage */],
            __WEBPACK_IMPORTED_MODULE_7__pages_home_home__["a" /* HomePage */],
            __WEBPACK_IMPORTED_MODULE_10__pages_tabs_tabs__["a" /* TabsPage */]
        ],
        imports: [
            __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__["a" /* BrowserModule */],
            __WEBPACK_IMPORTED_MODULE_2_ionic_angular__["d" /* IonicModule */].forRoot(__WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* MyApp */], {}, {
                links: [
                    { loadChildren: '../pages/login/login.module#LoginPageModule', name: 'LoginPage', segment: 'login', priority: 'low', defaultHistory: [] },
                    { loadChildren: '../pages/login-form/login-form.module#LoginFormPageModule', name: 'LoginFormPage', segment: 'login-form', priority: 'low', defaultHistory: [] }
                ]
            }),
            __WEBPACK_IMPORTED_MODULE_11_angularfire2__["a" /* AngularFireModule */].initializeApp(firebaseConfig),
            __WEBPACK_IMPORTED_MODULE_12_angularfire2_database__["b" /* AngularFireDatabaseModule */],
            __WEBPACK_IMPORTED_MODULE_13_angularfire2_auth__["b" /* AngularFireAuthModule */]
        ],
        bootstrap: [__WEBPACK_IMPORTED_MODULE_2_ionic_angular__["b" /* IonicApp */]],
        entryComponents: [
            __WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* MyApp */],
            __WEBPACK_IMPORTED_MODULE_6__pages_login_login__["a" /* LoginPage */],
            __WEBPACK_IMPORTED_MODULE_8__pages_about_about__["a" /* AboutPage */],
            __WEBPACK_IMPORTED_MODULE_9__pages_contact_contact__["a" /* ContactPage */],
            __WEBPACK_IMPORTED_MODULE_7__pages_home_home__["a" /* HomePage */],
            __WEBPACK_IMPORTED_MODULE_10__pages_tabs_tabs__["a" /* TabsPage */]
        ],
        providers: [
            __WEBPACK_IMPORTED_MODULE_4__ionic_native_status_bar__["a" /* StatusBar */],
            __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__["a" /* SplashScreen */],
            { provide: __WEBPACK_IMPORTED_MODULE_1__angular_core__["v" /* ErrorHandler */], useClass: __WEBPACK_IMPORTED_MODULE_2_ionic_angular__["c" /* IonicErrorHandler */] }
        ]
    })
], AppModule);

//# sourceMappingURL=app.module.js.map

/***/ }),

/***/ 407:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MyApp; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(36);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__ionic_native_status_bar__ = __webpack_require__(271);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__ = __webpack_require__(268);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__pages_login_login__ = __webpack_require__(134);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};





var MyApp = (function () {
    function MyApp(platform, statusBar, splashScreen) {
        this.rootPage = __WEBPACK_IMPORTED_MODULE_4__pages_login_login__["a" /* LoginPage */];
        platform.ready().then(function () {
            statusBar.styleDefault();
            splashScreen.hide();
        }); //end platform
    }
    return MyApp;
}());
MyApp = __decorate([
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({template:/*ion-inline-start:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\app\app.html"*/'<ion-nav [root]="rootPage"></ion-nav>\n'/*ion-inline-end:"C:\Users\Watz Alconcel\Desktop\CSPROJ\ionic\firebaseApp1\firebaseApp\src\app\app.html"*/
    }),
    __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* Platform */], __WEBPACK_IMPORTED_MODULE_2__ionic_native_status_bar__["a" /* StatusBar */], __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__["a" /* SplashScreen */]])
], MyApp);

//# sourceMappingURL=app.component.js.map

/***/ })

},[272]);
//# sourceMappingURL=main.js.map