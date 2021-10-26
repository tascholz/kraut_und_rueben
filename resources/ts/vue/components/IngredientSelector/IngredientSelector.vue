<template>
  <v-row>
    <v-col cols="4">
      <v-autocomplete
        label="Zutat"
        attach
        outlined
        dense
        single-line
        :items="items"
        no-data-text="Keine Zutaten gefunden"
        item-text="ingredient_name"
        item-value="id"
        :menu-props="{ bottom: true, offsetY: true }"
      >
      </v-autocomplete>
    </v-col>
    <v-col cols="4">
      <v-text-field outlined dense label="Anzahl" type="number"> </v-text-field>
    </v-col>
    <v-col cols="4">
      <v-btn icon color="primary">
        <v-icon>mdi-delete</v-icon>
      </v-btn>
    </v-col>
  </v-row>
</template>

<script lang="ts">
import { defineComponent, PropType } from '@vue/composition-api';
import { Ingredient } from '../../types/Ingredients';

export default defineComponent({
  props: {
    items: {
      type: Array as PropType<Ingredient[]>,
      required: true,
    },
    value: {
      type: String,
    },
  },
  setup() {
    //
  },
});
</script>
