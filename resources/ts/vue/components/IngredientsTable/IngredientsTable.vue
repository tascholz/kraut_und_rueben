<template>
  <v-data-table
    v-bind="$attrs"
    height="676px"
    loading-text="Zutaten werden geladen"
    no-data-text="Keine Zutaten gefunden"
    :items="items"
    :loading="isLoading"
    :headers="headers"
  >
    <template #[`header.addIngredient`]>
      <v-btn color="success" icon outlined>
        <v-icon>mdi-plus</v-icon>
      </v-btn>
    </template>
  </v-data-table>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import { useRecipesTable } from './IngredientsTable';

export default defineComponent({
  setup() {
    const { items, isLoading, headers } = useRecipesTable();

    return {
      items,
      isLoading,
      headers,
    };
  },
});
</script>
