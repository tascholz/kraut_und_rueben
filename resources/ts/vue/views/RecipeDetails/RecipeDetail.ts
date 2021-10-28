import { onMounted, ref, SetupContext } from '@vue/composition-api';
import { DataTableHeader } from 'vuetify';
import { getRecipeById } from '../../services/recipes';
import { Recipe } from '../../types/Recipes';

export function useRecipeDetail(context: SetupContext) {
  const headers: DataTableHeader[] = [
    {
      text: 'Name',
      value: 'ingredient_name',
    },
    {
      text: 'Anzahl',
      value: 'ingredient_amount',
    },
  ];

  const recipe = ref<Recipe | null>();

  const loadRecipe = async () => {
    recipe.value = await getRecipeById(context.root.$route.params.id);
  };

  onMounted(() => {
    loadRecipe();
  });

  return {
    headers,
    recipe,
  };
}
