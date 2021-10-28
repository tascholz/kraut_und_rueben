<template>
  <v-row class="grid ma-0 ml-4" justify="center">
    <v-col v-for="(item, index) in row" :key="index">
      <RecipeCard
        :key="`item-${item.id}`"
        :recipe="item"
        @recipeDeleted="recipeDeleted(item)"
      ></RecipeCard>
    </v-col>
  </v-row>
</template>

<script lang="ts">
import { defineComponent } from '@vue/composition-api';
import { PropType } from 'vue';
import { Recipe } from '../../../types/Recipes';
import RecipeCard from '../../RecipeCard/RecipeCard.vue';

export default defineComponent({
  components: { RecipeCard },
  props: {
    row: {
      type: Array,
      required: true,
    },
  },
  setup(props, context) {
    const recipeDeleted = (recipe: Recipe) => {
      props.row.splice(props.row.findIndex(x => (x as Recipe).id == recipe.id));
    };

    return {
      recipeDeleted,
    };
  },
});
</script>

<style lang="scss" scoped>
.grid {
  max-width: 100%;
  display: grid;
  grid-template-columns: repeat(3, 3fr);
  grid-auto-rows: 52px;
  grid-gap: 8px;
}
</style>
