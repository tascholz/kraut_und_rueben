<template>
  <v-data-table
    v-bind="$attrs"
    height="100%"
    loading-text="Zutaten werden geladen"
    no-data-text="Keine Zutaten gefunden"
    :items-per-page="15"
    :footer-props="{
      'items-per-page-options': [15, 20, 30, 40, 50],
    }"
    :items="items"
    :loading="isLoading"
    :headers="headers"
  >
    <template #[`header.addIngredient`]>
      <v-btn color="primary" icon outlined link to="/ingredients/add">
        <v-icon>mdi-plus</v-icon>
      </v-btn>
    </template>
    <template #[`item.stock`]="{ item }">
      {{ `${item.stock} ${item.unit}` }}
    </template>
    <template #[`item.calories`]="{ item }">
      {{ `${item.calories} Kcal` }}
    </template>
    <template #[`item.netto_price`]="{ item }">
      {{ `${item.netto_price.toString().replace('.', ',')} €` }}
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
