import VueRouter from 'vue-router';

let routes = [
	{
		path:'/status',
		component:require('./components/Status')
	},
	{
		path:'/message',
		component:require('./components/Message')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass:"active"

});