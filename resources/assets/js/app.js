import './bootstrap';
import firebase from 'firebase';
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
let messageRef = db.ref('messages');
const app = new Vue({
    el: '#app',
    data: {
    	messages:[],
    	newMessage:{
    		message:''
    	},
    	selecteduser:{
    		name:'',
    		userId:''
    	}
    },
    methods:{
    	getCurrentUser(user) {
    		this.selecteduser.name = user.name;
    		this.selecteduser.userId = user.userId;
    	}
    },
    firebase: {
    	messages:messageRef
    },
    mounted() {
    	// this.newMessage.message = "So easy.";
    	// messageRef.push(this.newMessage);

    }
});

