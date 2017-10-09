import VueRouter from 'vue-router';

let routes = [
	{
		path:'#example',
		component:require('./components/Example')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass:"active"

});