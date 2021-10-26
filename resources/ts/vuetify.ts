import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import '@mdi/font/css/materialdesignicons.css';

Vue.use(Vuetify);

export default new Vuetify({
  theme: {
    themes: {
      light: {
        primary: '#52B788',
        secondary: '#777',
        accent: '#95D5B2',
        error: '#b71c1c',
      },
    },
  },
});
