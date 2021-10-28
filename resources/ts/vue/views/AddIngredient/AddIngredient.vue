<template>
  <v-main class="pa-0 pt-4">
    <v-row justify="center">
      <v-card class="pb-1 px-4 add-recipe__form" width="60%" flat outlined>
        <v-card-title>
          Neue Zutat
        </v-card-title>
        <v-divider class="mb-5"></v-divider>
        <v-form ref="add-recipe-form">
          <v-row align="start" justify="start">
            <v-col cols="4">
              <v-text-field
                v-model="name"
                outlined
                hide-details
                dense
                label="Name"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="price"
                outlined
                dense
                label="Preis (Netto)"
                hide-details
                type="number"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="unit"
                outlined
                dense
                label="Maßeinheit"
                hide-details
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="4">
              <v-text-field
                v-model="calories"
                outlined
                dense
                label="Kalorien"
                hide-details
                type="number"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="carbonhydrates"
                outlined
                dense
                label="Kohlenhydrate"
                hide-details
              ></v-text-field>
            </v-col>
            <v-col>
              <v-text-field
                v-model="proteins"
                outlined
                dense
                label="Protein"
                hide-details
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row class="mb-2">
            <v-col cols="4">
              <v-autocomplete
                v-model="supplier"
                outlined
                dense
                return-object
                item-value="id"
                item-text="supplier_name"
                :items="allSuppliers"
                single-line
                label="Lieferant"
              >
              </v-autocomplete>
            </v-col>
          </v-row>
        </v-form>
        <v-card-actions class="px-0">
          <v-spacer></v-spacer>
          <v-btn elevation="0" color="primary" @click="onSave">Speichern</v-btn>
        </v-card-actions>
      </v-card>
    </v-row>
  </v-main>
</template>

<script lang="ts">
import { defineComponent } from '@vue/composition-api';
import { useAddIngredient } from './AddIngredient';

export default defineComponent({
  setup(props, context) {
    const {
      proteins,
      supplier,
      allSuppliers,
      amount,
      name,
      carbonhydrates,
      calories,
      unit,
      price,
      onSave,
    } = useAddIngredient(context);

    return {
      proteins,
      supplier,
      allSuppliers,
      amount,
      name,
      carbonhydrates,
      calories,
      unit,
      price,
      onSave,
    };
  },
});
</script>
