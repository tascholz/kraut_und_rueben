import { ref } from '@vue/composition-api';
import { DataTableHeader } from 'vuetify';
import { Recipe } from '../../types/Recipes';

export function useRecipesTable() {
  const isLoading = ref<boolean>(true);

  const headers = ref<DataTableHeader[]>([
    { text: 'Id', value: 'id' },
    { text: 'Name', value: 'name' },
    { text: 'Kalorien', value: 'calories' },
  ]);

  const mock: Recipe = {
    id: 'mock-1',
    calories: 150,
    name: 'AAAAA',
  };

  const items = ref<Recipe[]>([]);

  for (var i = 0; i < 100; i++) {
    items.value.push({
      id: `mock-${i}`,
      calories: Math.floor(Math.random() * 1000),
      name: `Rezept ${i}`,
    });
  }

  return {
    items,
    isLoading,
    headers,
  };
}
