<template>
  <v-main class="pa-0">
    <IngredientsTable />
  </v-main>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import IngredientsTable from '../../components/IngredientsTable/IngredientsTable.vue';

export default defineComponent({
  components: { IngredientsTable },
  setup() {
    //
  },
});
</script>
