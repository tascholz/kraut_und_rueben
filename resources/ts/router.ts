import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './vue/views/Home/Home.vue';
import Recipes from './vue/views/Recipes/Recipes.vue';
import NotFound from './vue/views/NotFound/NotFound.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    component: Home,
  },
  {
    path: '/recipes',
    component: Recipes,
  },
  {
    path: '*',
    component: NotFound,
  },
];

export default new VueRouter({ routes, mode: 'history' });
