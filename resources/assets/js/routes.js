import VueRouter from 'vue-router';

let routes = [
	{
		path:'/status',
		component:require('./components/Status')
	},
	{
		path:'/message',
		component:require('./components/Message')
	},
	{
		path:'/profile',
		component:require('./components/Profile')
	},
	{
		path:'/timeline',
		component:require('./components/Timeline')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass:"active"

});