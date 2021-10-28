import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import '@mdi/font/css/materialdesignicons.css';

Vue.use(Vuetify);

export default new Vuetify({
  theme: {
    themes: {
      light: {
        primary: '#C91818',
        secondary: '#777',
        accent: '#6e1010',
        error: '#b71c1c',
      },
    },
  },
});
