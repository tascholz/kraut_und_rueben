import Vue from 'vue';
import VueRouter, { RouteConfig } from 'vue-router';
import Home from './vue/views/Home/Home.vue';
import Recipes from './vue/views/Recipes/Recipes.vue';
import NotFound from './vue/views/NotFound/NotFound.vue';
import AddRecipe from './vue/views/AddRecipe/AddRecipe.vue';
import Ingredients from './vue/views/Ingredients/Ingredients.vue';
import RecipeDetail from './vue/views/RecipeDetails/RecipeDetails.vue';
import AddIngredient from './vue/views/AddIngredient/AddIngredient.vue';
import EditRecipe from './vue/views/EditRecipe/EditRecipe.vue';
import Suppliers from './vue/views/Suppliers/Suppliers.vue';
import Customers from './vue/views/Customers/Customers.vue';
import AddCustomer from './vue/views/AddCustomer/AddCustomer.vue';

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
    path: '/recipe/:id',
    component: RecipeDetail,
  },
  {
    path: '/recipe/:id/edit',
    component: EditRecipe,
  },
  {
    path: '/ingredients/add',
    component: AddIngredient,
  },
  {
    path: '/suppliers',
    component: Suppliers,
  },
  {
    path: '/customers',
    component: Customers,
  },
  {
    path: '/customers/add',
    component: AddCustomer,
  },
  {
    path: '*',
    component: NotFound,
  },
];

export default new VueRouter({ routes, mode: 'history' });
