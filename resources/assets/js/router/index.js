import VueRouter from 'vue-router';

import pages from '../pages/index';

let routes = [
    { path: '*', redirect: {name: 'index'} },
    { path: '/', name: 'index', component: pages.index }
];

export const router = new VueRouter({
  mode: 'history',
  routes // short for `routes: routes`
});
