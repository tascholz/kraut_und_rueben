import { onMounted, ref } from '@vue/composition-api';
import { getAllIngredients } from '../../services/ingredients';
import { Ingredient } from '../../types/Ingredients';
import { RecipeIngredient } from '../../types/Recipes';

export function useAddRecipe() {
  const name = ref<string>('');
  const time = ref<number | null>();
  const description = ref<string>('');
  const allIngredients = ref<Ingredient[]>();
  const selectedIngredients = ref<RecipeIngredient[]>([]);

  const loadIngredients = async () => {
    allIngredients.value = await getAllIngredients();
  };

  const ingredientToRecipeIngredient = (
    ingredient: Ingredient
  ): RecipeIngredient => {
    return {
      id: ingredient.id,
      name: ingredient.ingredient_name,
    };
  };

  const onIngredientAdded = (value: RecipeIngredient) => {
    selectedIngredients.value.push(value);
  };

  onMounted(() => {
    loadIngredients();
  });

  return {
    onIngredientAdded,
    ingredientToRecipeIngredient,
    name,
    time,
    description,
    selectedIngredients,
    allIngredients,
  };
}
