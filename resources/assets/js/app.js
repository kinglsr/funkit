import './bootstrap';
import firebase from 'firebase';
import router from './routes';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('user-log', require('./components/UserLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));
Vue.component('current-user', require('./components/CurrentUser.vue'));

let config = {
    apiKey: "AIzaSyDHh45o74Tav5UTnoSlGRzjWaiC45zE0hc",
    authDomain: "fir-app-10081.firebaseapp.com",
    databaseURL: "https://fir-app-10081.firebaseio.com",
    projectId: "fir-app-10081",
    storageBucket: "fir-app-10081.appspot.com",
    messagingSenderId: "976187889427"
  };
  
let fireBase = firebase.initializeApp(config);
let db = fireBase.database();
let messageRef = db.ref('messages'); // to store sender information
const app = new Vue({
    el: '#app',
    data: {
    	messages:[],
    	newMessage:{
    		message:'',
    		created:'',
    		sender_user_id:'',
    		type:1,
    		status:1
    	},
    	selecteduser:{
    		name:'',
    		userId:''
    	},
        authUser:{userId:'',userName:''},
        baseUrl:$("#baseUrl").val()

    },
    methods:{
    	getCurrentUser(user) {
    		this.selecteduser.name = user.name;
    		this.selecteduser.userId = user.userId;
    	},
    	addMessage(message) {
    		// // add message to firebase database
    		let created = moment().format('YYYY-MM-DD HH:mm:ss');
    		this.newMessage.message = message.message;
    		this.newMessage.created = created;
    		this.newMessage.sender_user_id = this.authUser.userId;
    		// let postData = {5:{4:this.newMessage}};
    		let insertData = messageRef.push(this.newMessage);

   //  		var insertedKey = insertData.getKey();
   //  		var child = messageRef.child(insertedKey);
			// child.once('value', function(snapshot) {
			//   messageRef.child('223').set(snapshot.val());
			//   child.remove();
			// });

    		// var insertData = firebase.database().ref().push(newData);
 			// var insertedKey = insertData.getKey(); // last inserted key
    	},
    	updateAuthUser() {
    		// get auth user
	        axios.get(this.baseUrl+'/authUser').then( response=> {
	            let user = response.data;
	            this.authUser.userName = user.name;
	            this.authUser.userId = user.id;
	        });
    	},
    	loadMessage() {
    		
		}
    },
    firebase: {
    	messages:messageRef
    },
    router,
    mounted() {
    	this.updateAuthUser();
    	this.loadMessage(this.authUser.userId);
    	console.log(this.messages);
    }
});

