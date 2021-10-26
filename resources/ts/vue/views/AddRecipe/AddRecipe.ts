import { ref } from '@vue/composition-api';

export function useAddRecipe() {
  const name = ref<string>('');
  const time = ref<number | null>();
  const description = ref<string>('');
  const selectedIngredients = ref<string[]>([]);

  return {
    name,
    time,
    description,
    selectedIngredients,
  };
}
