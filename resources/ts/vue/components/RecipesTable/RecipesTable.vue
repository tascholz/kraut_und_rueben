<template>
  <v-data-table
    v-bind="$attrs"
    height="676px"
    loading-text="Rezepte werden geladen"
    no-data-text="Keine Rezepte gefunden"
    :items="items"
    :loading="isLoading"
    :headers="headers"
  >
    <template #[`item.calories`]="{ item }">
      {{ item.calories }} Kcal
    </template>
    <template #[`header.addRecipe`]>
      <v-btn color="success" icon outlined>
        <v-icon>mdi-plus</v-icon>
      </v-btn>
    </template>
  </v-data-table>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import { useRecipesTable } from './RecipesTable';

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
