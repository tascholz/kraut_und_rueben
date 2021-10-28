<template>
  <div>
    <v-btn
      v-if="$vuetify.breakpoint.smAndDown"
      style="z-index: 999"
      class="ma-1"
      color="primary"
      rounded
      dark
      elevation="0"
      fab
      absolute
      fixed
      @click.stop="toggleNav"
    >
      <v-icon>{{ isOpen ? 'mdi-close' : 'mdi-menu' }}</v-icon>
    </v-btn>
    <v-navigation-drawer
      :temporary="$vuetify.breakpoint.smAndDown"
      :permanent="$vuetify.breakpoint.mdAndUp"
      persistent
      app
      width="250px"
      height="100vh"
      v-model="isOpen"
    >
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6 mb-2 mt-2 mx-auto text-center">
            <v-row justify="start" align="center">
              <v-col cols="3" class="pl-2">
                <v-img src="/img/logo.png" max-height="32" height="32" contain>
                </v-img>
              </v-col>
              <v-col cols="9">
                Kraut & Rüben
              </v-col>
            </v-row>
          </v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list dense nav>
        <v-list-item
          v-for="item in items"
          :key="item.name"
          :to="item.link"
          link
        >
          <v-list-item-icon>
            <v-icon color="primary">{{ item.icon }}</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title
              class="text-subtitle"
              :class="{ 'font-weight-medium': $vuetify.breakpoint.smAndUp }"
              >{{ item.name }}</v-list-item-title
            >
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import { useNavigationDrawer } from './NavigationDrawer';

export default defineComponent({
  setup(props, context) {
    const { items, isOpen, toggleNav } = useNavigationDrawer(context);

    return {
      items,
      isOpen,
      toggleNav,
    };
  },
});
</script>
