<template>
  <v-main class="pa-0">
    <v-card class="pb-1 px-4 add-recipe__form" flat outlined>
      <v-card-title>
        Neues Rezept
      </v-card-title>
      <v-divider class="mb-5"></v-divider>
      <v-form ref="add-recipe-form">
        <v-row align="start" justify="start">
          <v-col cols="4">
            <v-text-field
              v-model="name"
              outlined
              dense
              label="Name"
            ></v-text-field>
          </v-col>
          <v-col cols="4" class="mt-2 text-right">
            <v-spacer></v-spacer>
            Schwierigkeit
          </v-col>
          <v-col cols="4" md="4">
            <RatingSelector v-model="rating" />
          </v-col>
        </v-row>
        <v-textarea
          v-model="description"
          outlined
          label="Beschreibung"
        ></v-textarea>
        <v-row>
          <v-col cols="4">
            <v-text-field
              v-model="duration"
              outlined
              dense
              hide-details
              label="Dauer"
            ></v-text-field>
          </v-col>
          <v-col cols="4">
            <v-autocomplete
              v-model="category"
              :items="allCategories"
              return-object
              item-text="category_name"
              item-value="id"
              outlined
              hide-details
              dense
              no-data-text="Keine Kategorien gefunden"
              label="Kategorie"
            ></v-autocomplete>
          </v-col>
        </v-row>
        <v-divider class="my-4" />
        <v-row
          v-for="ingredient in selectedIngredients"
          :key="`${ingredient.id}-${ingredient.name}-${ingredient.amount}`"
          class="mt-0"
          justify="start"
          align="center"
        >
          <v-col cols="4">
            <span>
              {{ ingredient.name }}
            </span>
          </v-col>
          <v-col cols="2" class="text-right">
            <span>
              {{ ingredient.amount }}
            </span>
          </v-col>
          <v-col cols="2">
            <span v-if="ingredient && ingredient.unit">
              {{ `${ingredient.unit}` }}
            </span>
            <span v-else>
              {{ `Stück` }}
            </span>
          </v-col>
          <v-col cols="4">
            <v-btn
              icon
              color="primary"
              @click="onIngredientRemoved(ingredient)"
            >
              <v-icon>mdi-delete</v-icon>
            </v-btn>
          </v-col>
        </v-row>
        <IngredientSelector
          :value="addIngredientValue"
          :items="allIngredients"
          isLast
          @addIngredient="onIngredientAdded"
        />
      </v-form>
      <v-card-actions class="px-0">
        <v-spacer></v-spacer>
        <v-btn elevation="0" color="primary" @click="onSave">Speichern</v-btn>
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
  setup(props, context) {
    const {
      category,
      allCategories,
      onSave,
      duration,
      rating,
      name,
      time,
      description,
      selectedIngredients,
      allIngredients,
      ingredientToRecipeIngredient,
      onIngredientAdded,
      onIngredientRemoved,
      addIngredientValue,
    } = useAddRecipe(context);

    return {
      category,
      allCategories,
      onSave,
      duration,
      rating,
      addIngredientValue,
      ingredientToRecipeIngredient,
      onIngredientAdded,
      onIngredientRemoved,
      name,
      time,
      description,
      selectedIngredients,
      allIngredients,
    };
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
