<template>
  <v-card width="300px" height="450px" elevation="6">
    <v-img height="150" src="img/recipe-placeholder.jpg"></v-img>
    <v-card-title class="text-truncate" style="max-width: 280px">
      <v-tooltip bottom open-delay="300">
        <template #activator="{ on }">
          <span v-on="on">
            {{
              `${recipe.recipe_name
                .charAt(0)
                .toUpperCase()}${recipe.recipe_name.slice(1)}`
            }}
          </span>
        </template>
        {{
          `${recipe.recipe_name
            .charAt(0)
            .toUpperCase()}${recipe.recipe_name.slice(1)}`
        }}
      </v-tooltip>
    </v-card-title>
    <v-row class="ml-0">
      <v-col cols="6">
        <RatingSelector :value="recipe.rating" :pressable="false" />
      </v-col>
    </v-row>
    <v-card-text class="overflow-y-hidden" style="height: 170px">
      {{
        `${recipe.description
          .charAt(0)
          .toUpperCase()}${recipe.description.slice(1)}`
      }}
    </v-card-text>
    <v-card-actions class="card-actions">
      <v-row justify="start">
        <v-col cols="3">
          <v-btn icon color="primary" link :to="`/recipe/${recipe.id}`">
            <v-icon>
              mdi-eye
            </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="3">
          <v-btn icon color="primary" link :to="`/recipe/${recipe.id}/edit`">
            <v-icon>
              mdi-pencil
            </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="3">
          <v-btn icon color="primary" @click="this.onDelete">
            <v-icon>
              mdi-trash-can
            </v-icon>
          </v-btn>
        </v-col>
      </v-row>
    </v-card-actions>
  </v-card>
</template>

<script lang="ts">
import { defineComponent } from '@vue/composition-api';
import axios from 'axios';
import { Recipe } from '../../types/Recipes';
import RatingSelector from '../RatingSelector/RatingSelector.vue';
import { useRecipeCard } from './RecipeCard';

export default defineComponent({
  components: { RatingSelector },
  props: {
    recipe: {
      type: Object,
      required: true,
    },
  },
  setup(props, context) {
    const { onDelete } = useRecipeCard(props as { recipe: Recipe }, context);

    return {
      onDelete,
    };
  },
});
</script>

<style lang="scss" scoped>
.card-outter {
  position: relative;
  padding-bottom: 50px;
}
.card-actions {
  position: absolute;
  bottom: 0;
}
</style>
