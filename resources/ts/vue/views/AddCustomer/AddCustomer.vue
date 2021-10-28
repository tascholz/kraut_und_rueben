<template>
  <v-main class="pa-0 pt-4">
    <v-row justify="center">
      <v-card class="pb-1 px-4 add-recipe__form" width="60%" flat outlined>
        <v-card-title>
          Neuer Kunde
        </v-card-title>
        <v-divider class="mb-5"></v-divider>
        <v-form ref="add-recipe-form">
          <v-row align="start" justify="start">
            <v-col cols="4">
              <v-text-field
                v-model="first_name"
                outlined
                hide-details
                dense
                label="Vorname"
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="last_name"
                outlined
                dense
                label="Nachname"
                hide-details
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="birthday"
                outlined
                dense
                label="Geburtstag"
                hide-details
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="4">
              <v-text-field
                v-model="street"
                outlined
                dense
                label="Straße"
                hide-details
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="housenumber"
                outlined
                dense
                label="Hausnummer"
                hide-details
              ></v-text-field>
            </v-col>
            <v-col>
              <v-text-field
                v-model="plz"
                outlined
                dense
                label="PLZ"
                hide-details
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row class="mb-2">
            <v-col cols="4">
              <v-text-field
                v-model="city"
                outlined
                dense
                label="Ort"
                hide-details
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="email"
                outlined
                dense
                label="E-Mail"
                hide-details
              ></v-text-field>
            </v-col>
            <v-col cols="4">
              <v-text-field
                v-model="telephone"
                outlined
                dense
                label="Telefon"
                hide-details
              ></v-text-field>
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
import { useAddCustomer } from './AddCustomer';

export default defineComponent({
  setup(props, context) {
    const {
      first_name,
      last_name,
      birthday,
      street,
      housenumber,
      city,
      plz,
      telephone,
      email,
      onSave,
    } = useAddCustomer(context);

    return {
      first_name,
      last_name,
      birthday,
      street,
      housenumber,
      city,
      plz,
      telephone,
      email,
      onSave,
    };
  },
});
</script>
