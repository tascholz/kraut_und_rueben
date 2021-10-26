<template>
  <v-app>
    <NavigationDrawer />
    <v-main height="100%">
      <v-app-bar
        v-if="$vuetify.breakpoint.mdAndUp"
        height="64px"
        elevation="0"
        fixed
      >
        <v-card-title class="font-weight-regular"></v-card-title>
      </v-app-bar>
      <v-divider class="mb-0 mt-16"></v-divider>
      <router-view :class="{ 'mt-4': $vuetify.breakpoint.mdAndUp}" />
    </v-main>
  </v-app>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import NavigationDrawer from '../NavigationDrawer/NavigationDrawer.vue';

export default defineComponent({
  components: {
    NavigationDrawer,
  },
  setup() {
    //
  },
});
</script>
