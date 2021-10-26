import Vue from 'vue';
import VueRouter, { RouteConfig } from 'vue-router';
import Home from './vue/views/Home/Home.vue';
import Recipes from './vue/views/Recipes/Recipes.vue';
import NotFound from './vue/views/NotFound/NotFound.vue';
import AddRecipe from './vue/views/AddRecipe/AddRecipe.vue';
import Ingredients from './vue/views/Ingredients/Ingredients.vue';

Vue.use(VueRouter);

const routes: RouteConfig[] = [
  {
    path: '/',
    component: Home,
    meta: {
      title: 'Test',
    },
  },
  {
    path: '/recipes',
    component: Recipes,
  },
  {
    path: '/recipes/add',
    component: AddRecipe,
  },
  {
    path: '/ingredients',
    component: Ingredients,
  },
  {
    path: '*',
    component: NotFound,
  },
];

export default new VueRouter({ routes, mode: 'history' });
