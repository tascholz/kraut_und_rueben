<template>
  <v-main
    class="pa-4 mt-0"
    style="margin-top: 0px !important; height: 100%; width: 100%"
  >
    <v-data-table
      height="100%"
      loading-text="Lieferanten werden geladen"
      no-data-text="Keine Lieferanten gefunden"
      :items-per-page="15"
      :footer-props="{
        'items-per-page-options': [15, 20, 30, 40, 50],
      }"
      :items="items"
      :loading="isLoading"
      :headers="headers"
    >
      <template #[`item.adress`]="{ item }">
        {{
          `${item.street} ${item.house_number}, ${item.postcode} ${item.city}`
        }}
      </template>
      <template #[`header.addCustomer`]>
        <v-btn color="primary" icon outlined link to="/customers/add">
          <v-icon>mdi-plus</v-icon>
        </v-btn>
      </template>
      <template #[`item.supplier_name`]="{ item }">
        {{ `${item.first_name} ${item.last_name}` }}
      </template>
    </v-data-table>
  </v-main>
</template>

<script lang="ts">
import { defineComponent } from '@vue/composition-api';
import { useCustomers } from './Customers';

export default defineComponent({
  setup() {
    const { items, headers, isLoading } = useCustomers();

    return {
      items,
      headers,
      isLoading,
    };
  },
});
</script>
