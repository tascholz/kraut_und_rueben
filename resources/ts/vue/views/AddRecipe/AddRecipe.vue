<template>
  <v-main class="pa-0">
    <v-card class="pb-1 add-recipe__form" flat outlined>
      <v-card-title>
        Neues Rezept
      </v-card-title>
      <v-divider class="mb-5"></v-divider>
      <v-form class="px-2">
        <v-row>
          <v-col cols="6">
            <v-text-field
              v-model="name"
              outlined
              dense
              label="Name"
            ></v-text-field>
          </v-col>
          <v-col cols="4" md="4">
            <RatingSelector :value="2" />
          </v-col>
        </v-row>
        <v-textarea
          v-model="description"
          outlined
          label="Beschreibung"
        ></v-textarea>
        <IngredientSelector :items="allIngredients" />
        <v-btn text color="primary">Neue Zutat hinzufügen</v-btn>
      </v-form>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn text color="success">Speichern</v-btn>
      </v-card-actions>
    </v-card>
  </v-main>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import IngredientSelector from '../../components/IngredientSelector/IngredientSelector.vue';
import RatingSelector from '../../components/RatingSelector/RatingSelector.vue';
import { useAddRecipe } from './AddRecipe';

export default defineComponent({
  components: { RatingSelector, IngredientSelector },
  metaInfo() {
    return {
      titleTemplate: '%s | Kraut und Rüben',
      title: 'Neues Rezept',
    };
  },
  setup() {
    const {
      name,
      time,
      description,
      selectedIngredients,
      allIngredients,
    } = useAddRecipe();

    return { name, time, description, selectedIngredients, allIngredients };
  },
});
</script>

<style lang="scss" scoped>
.add-recipe {
  &__form {
    width: 767px;
    margin-left: auto;
    margin-right: auto;
  }
}
</style>
