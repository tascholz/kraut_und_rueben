import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './vue/views/Home/Home.vue';
import Recipes from './vue/views/Recipes/Recipes.vue';

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
];

export default new VueRouter({ routes, mode: 'history' });
