<template>
  <!-- <v-data-table
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
      <v-btn to="/recipes/add" color="success" link icon outlined>
        <v-icon>mdi-plus</v-icon>
      </v-btn>
    </template>
  </v-data-table> -->
  <div>
    <v-btn
      to="/recipes/add"
      style="position: fixed; z-index: 1; background-color: white"
      color="primary"
      class="ml-2"
      link
      outlined
      icon
    >
      <v-icon>mdi-plus</v-icon>
    </v-btn>
    <v-virtual-scroll
      bench="4"
      :items="itemsChunked"
      height="100%"
      item-height="500px"
    >
      <template #default="{ item, index }">
        <item-row
          :key="`item-row-${index}`"
          :row="item"
          :rowIndex="index"
        ></item-row>
      </template>
    </v-virtual-scroll>
  </div>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import { useRecipesTable } from './RecipesTable';
import RecipeCard from '../RecipeCard/RecipeCard.vue';
import ItemRow from './molecules/ItemRow.vue';

export default defineComponent({
  components: {
    RecipeCard,
    ItemRow,
  },
  setup(props, context) {
    const { items, isLoading, headers, itemsChunked } = useRecipesTable(
      context
    );

    return {
      itemsChunked,
      items,
      isLoading,
      headers,
    };
  },
});
</script>
