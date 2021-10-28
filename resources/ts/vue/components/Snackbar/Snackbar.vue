<template>
  <v-snackbar v-model="value">
    snackbarText
    <v-btn flat color="primary" @click.native="value = false">Close</v-btn>
  </v-snackbar>
</template>

<script lang="ts">
import { defineComponent } from '@vue/composition-api';

export default defineComponent({
  props: {
    time: {
      type: Number,
      default: 3000,
    },
  },
  setup() {},
});
</script>
