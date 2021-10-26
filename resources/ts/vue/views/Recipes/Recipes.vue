<template>
  <v-main class="pa-0">
    <RecipesTable />
  </v-main>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import RecipesTable from '../../components/RecipesTable/RecipesTable.vue';

export default defineComponent({
  components: {
    RecipesTable,
  },
  metaInfo() {
    return {
      titleTemplate: '%s | Kraut und Rüben',
      title: 'Rezepte',
    };
  },
  setup() {
    //
  },
});
</script>
