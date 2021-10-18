import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'

Vue.use(Vuetify)

export default new Vuetify({
  theme: {
    themes: {
      light: {
        primary: '#6dc229',
        secondary: '#696969',
        accent: '#baff8c',
        error: '#b71c1c',
      },
    },
  },
})
