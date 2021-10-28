import { onMounted, ref, SetupContext } from '@vue/composition-api';
import { DataTableHeader } from 'vuetify';
import { getAllRecipes } from '../../services/recipes';
import { Recipe } from '../../types/Recipes';
import { chunk } from 'lodash';

export function useRecipesTable(context: SetupContext) {
  const isLoading = ref<boolean>(true);

  const headers = ref<DataTableHeader[]>([
    { text: 'Id', value: 'id' },
    { text: 'Name', value: 'name' },
    { text: 'Dauer', value: 'duration' },
    { text: 'Bewertung', value: 'rating' },
    { text: 'Kalorien', value: 'calories' },
    { text: '', value: 'addRecipe', sortable: false, width: '50px' },
  ]);

  const items = ref<Recipe[]>();

  const itemsChunked = ref<Recipe[][]>();

  const getItems = async () => {
    isLoading.value = true;
    items.value = await getAllRecipes();
    itemsChunked.value = chunk(
      items.value,
      context.root.$vuetify.breakpoint.smAndUp ? 3 : 1
    );
    isLoading.value = false;
  };

  onMounted(() => {
    getItems();
  });

  return {
    itemsChunked,
    items,
    isLoading,
    headers,
  };
}
