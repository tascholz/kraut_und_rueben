import { onMounted, ref } from '@vue/composition-api';
import { getAllIngredients } from '../../services/ingredients';
import { Ingredient } from '../../types/Ingredients';

export function useAddRecipe() {
  const name = ref<string>('');
  const time = ref<number | null>();
  const description = ref<string>('');
  const allIngredients = ref<Ingredient[]>();
  const selectedIngredients = ref<string[]>([]);

  const loadIngredients = async () => {
    allIngredients.value = await getAllIngredients();
  }

  onMounted(() => {
    loadIngredients();
  });

  return {
    name,
    time,
    description,
    selectedIngredients,
    allIngredients,
  };
}
