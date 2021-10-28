<template>
  <v-main> </v-main>
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
