<template>
  <div>
    <v-row justify="start" align="start">
      <v-col cols="4">
        <v-autocomplete
          v-model="ingredient"
          ref="ingredient-dropdown"
          label="Zutat"
          return-object
          attach
          outlined
          dense
          single-line
          :items="items"
          no-data-text="Keine Zutaten gefunden"
          item-text="ingredient_name"
          item-value="id"
          hint="Pflichtfeld"
          :persistent-hint="showHint"
          :menu-props="{ bottom: true, offsetY: true }"
        >
        </v-autocomplete>
      </v-col>
      <v-col cols="2">
        <v-text-field
          v-model="amount"
          outlined
          dense
          label="Anzahl"
          :rules="[v => v % 1 == 0 || 'Es muss eine ganze Zahl sein']"
          hint="Pflichtfeld"
          :min="1"
          :persistent-hint="showHint"
          type="number"
        >
        </v-text-field>
      </v-col>
      <v-col cols="2" class="mt-2">
        <span v-if="ingredient && ingredient.unit">
          {{ `${ingredient.unit}` }}
        </span>
        <span v-else>
          {{ `Stück` }}
        </span>
      </v-col>
    </v-row>
    <v-btn
      v-if="isLast"
      class="mt-0"
      text
      color="primary"
      @click="addIngredient"
      >Zutat hinzufügen</v-btn
    >
  </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from '@vue/composition-api';
import { Ingredient } from '../../types/Ingredients';
import { RecipeIngredient } from '../../types/Recipes';
import { useIngredientSelector } from './IngredientSelector';

export default defineComponent({
  props: {
    items: {
      type: Array as PropType<Ingredient[]>,
      required: false,
    },
    isLast: {
      type: Boolean,
      default: false,
    },
    value: {
      type: Object as PropType<RecipeIngredient>,
      default: null,
    },
  },
  watch: {
    value(newVal, oldVal) {
      console.log('New Value: ', newVal);
    },
  },
  setup(props, context) {
    const {
      removeIngredient,
      selected,
      addIngredient,
      ingredient,
      amount,
      showHint,
    } = useIngredientSelector(props, context);

    return {
      removeIngredient,
      showHint,
      selected,
      addIngredient,
      ingredient,
      amount,
    };
  },
});
</script>
