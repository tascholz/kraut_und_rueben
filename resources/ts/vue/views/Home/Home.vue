<template>
  <v-main class="pa-0 ml-4">
    <v-row justify="start">
      <v-col cols="2">
        <v-card width="100" height="100">
          <v-btn
            icon
            link
            to="/recipes"
            color="primary"
            height="84"
            width="84"
            class="ma-2"
          >
            <v-icon>
              mdi-bowl-mix
            </v-icon>
          </v-btn>
        </v-card>
      </v-col>
      <v-col cols="2">
        <v-card width="100" height="100">
          <v-btn
            icon
            link
            to="/ingredients"
            color="primary"
            height="84"
            width="84"
            class="ma-2"
          >
            <v-icon>
              mdi-food-apple
            </v-icon>
          </v-btn>
        </v-card>
      </v-col>
      <v-col cols="2">
        <v-card width="100" height="100">
          <v-btn
            icon
            link
            to="/customers"
            color="primary"
            height="84"
            width="84"
            class="ma-2"
          >
            <v-icon>
              mdi-account
            </v-icon>
          </v-btn>
        </v-card>
      </v-col>
      <v-col cols="2">
        <v-card width="100" height="100">
          <v-btn
            icon
            link
            to="/suppliers"
            color="primary"
            height="84"
            width="84"
            class="ma-2"
          >
            <v-icon>
              mdi-truck
            </v-icon>
          </v-btn>
        </v-card>
      </v-col>
    </v-row>
  </v-main>
</template>

<script>
import { defineComponent } from '@vue/composition-api';

export default defineComponent({
  metaInfo() {
    return {
      titleTemplate: '%s | Kraut und Rüben',
      title: 'Home',
    };
  },
  setup() {
    //
  },
});
</script>
