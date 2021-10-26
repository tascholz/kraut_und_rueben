/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueCompositionApi from '@vue/composition-api';

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.use(VueCompositionApi);

import vuetify from './vuetify';
import router from './router';

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
  'view-container',
  require('./vue/components/ViewContainer/ViewContainer.vue').default
);
Vue.component(
  'example-component',
  require('./vue/components/ExampleComponent.vue').default
);
Vue.component(
  'navigation-drawer',
  require('./vue/components/NavigationDrawer/NavigationDrawer.vue').default
);
Vue.component('view-home', require('./vue/views/Home/Home.vue').default);

Vue.component(
  'view-container',
  require('./vue/components/ViewContainer/ViewContainer.vue').default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  el: '#app',
  vuetify,
  router,
});
