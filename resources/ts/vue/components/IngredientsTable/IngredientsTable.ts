import { ref } from '@vue/composition-api';
import { DataTableHeader } from 'vuetify';
import { getAllRecipes } from '../../services/recipelist';
import { Recipe } from '../../types/Recipes';

export function useRecipesTable() {
  const isLoading = ref<boolean>(true);

  const headers = ref<DataTableHeader[]>([
    { text: 'Id', value: 'id' },
    { text: 'Name', value: 'ingredient_name' },
    { text: 'Preis (Netto)', value: 'netto_price' },
    { text: '', value: 'addIngredient', sortable: false, width: '50px' },
  ]);

  const items = ref<Recipe[]>();

  const getItems = async () => {
    isLoading.value = true;
    items.value = await getAllRecipes();
    isLoading.value = false;
  };

  getItems();

  return {
    items,
    isLoading,
    headers,
  };
}
