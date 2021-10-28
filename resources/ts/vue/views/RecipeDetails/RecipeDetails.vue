<template>
  <v-main
    class="pa-4 mt-0"
    style="margin-top: 0px !important; height: 100%; width: 100%"
  >
    <v-card
      v-if="recipe"
      outlined
      light
      class="text-h4 pa-4"
      height="100%"
      width="75%"
    >
      <v-card-title primary-title>
        {{ `${recipe.name.charAt(0).toUpperCase()}${recipe.name.slice(1)}` }}
      </v-card-title>
      <v-row align="start">
        <v-col cols="6">
          <v-card-text>
            {{
              `${recipe.description
                .charAt(0)
                .toUpperCase()}${recipe.description.slice(1)}`
            }}
          </v-card-text>
          <v-row align="center">
            <v-col cols="1">
              <v-icon small color="primary" style="opacity: 0.8">
                mdi-clock
              </v-icon>
            </v-col>
            <v-col cols="7">
              <span class="text-subtitle-2 grey--text">
                {{ `${recipe.duration}` }}
              </span>
            </v-col>
          </v-row>
        </v-col>
        <v-col cols="6">
          <v-card flat outlined>
            <v-img height="250" src="/img/recipe-placeholder.jpg"></v-img>
          </v-card>
        </v-col>
      </v-row>
      <v-row justify="start" align="center" class="text-subtitle-2">
        <v-col cols="1">
          {{ `${recipe.calories} Kcal` }}
        </v-col>
        <v-col cols="1">
          {{ `${recipe.carbonhydrates}g KH` }}
        </v-col>
        <v-col cols="1">
          {{ `${recipe.protein}g Eiweiß` }}
        </v-col>
        <v-col cols="2">
          {{
            `${recipe.price
              .toFixed(2)
              .toString()
              .replace('.', ',')}€ Gesamtpreis`
          }}
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="6">
          <span class="text-h6">Zutaten</span>
          <v-data-table
            :headers="headers"
            title="Zutaten"
            :items="recipe.ingredients"
            no-data-text="Keine Zutaten gefunden"
            loading-text="Zutaten werden geladen"
            hide-default-footer
          >
            <template #[`item.ingredient_amount`]="{ item }">
              {{ `${item.ingredient_amount} ${item.ingredient_unit}` }}
            </template>
          </v-data-table>
        </v-col>
      </v-row>
    </v-card>
  </v-main>
</template>

<script lang="ts">
import { defineComponent } from '@vue/composition-api';
import { useRecipeDetail } from './RecipeDetail';

export default defineComponent({
  setup(props, context) {
    const { recipe, headers } = useRecipeDetail(context);
    return {
      headers,
      recipe,
    };
  },
});
</script>
