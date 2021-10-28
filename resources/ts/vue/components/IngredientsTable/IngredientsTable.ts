import { ref } from '@vue/composition-api';
import { DataTableHeader } from 'vuetify';
import { getAllIngredients } from '../../services/ingredients';
import { Ingredient } from '../../types/Ingredients';
import { Recipe } from '../../types/Recipes';

export function useRecipesTable() {
  const isLoading = ref<boolean>(true);

  const headers = ref<DataTableHeader[]>([
    { text: 'Id', value: 'id' },
    { text: 'Name', value: 'ingredient_name' },
    { text: 'Preis (Netto)', value: 'netto_price' },
    { text: 'Anzahl', value: 'stock' },
    { text: 'Kalorien', value: 'calories' },
    { text: 'Kohlenhydrate', value: 'carbonhydrates' },
    { text: 'Protein', value: 'protein' },
    { text: '', value: 'addIngredient', sortable: false, width: '50px' },
  ]);

  /**
  id: string;
  name: string;
  description: string;
  duration: string;
  rating: number;
  calories: number;
   * 
   */

  const items = ref<Ingredient[]>();

  const getItems = async () => {
    isLoading.value = true;
    items.value = await getAllIngredients();
    isLoading.value = false;
  };

  getItems();

  return {
    items,
    isLoading,
    headers,
  };
}
