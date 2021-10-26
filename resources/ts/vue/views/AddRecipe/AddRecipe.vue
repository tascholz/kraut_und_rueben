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
          <v-col cols="6">
            <RatingSelector :value="2" />
          </v-col>
        </v-row>
        <v-textarea
          v-model="description"
          outlined
          label="Beschreibung"
        ></v-textarea>
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
import RatingSelector from '../../components/RatingSelector/RatingSelector.vue';
import { useAddRecipe } from './AddRecipe';

export default defineComponent({
  components: { RatingSelector },
  setup() {
    const { name, time, description, selectedIngredients } = useAddRecipe();

    return { name, time, description, selectedIngredients };
  },
});
</script>

<style lang="scss" scoped>
.add-recipe {
  &__form {
    width: 75%;
    margin-left: auto;
    margin-right: auto;
  }
}
</style>
