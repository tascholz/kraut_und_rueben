import { onMounted, ref, SetupContext } from '@vue/composition-api';
import { getAllCategories } from '../../services/categories';
import { getAllIngredients } from '../../services/ingredients';
import { createRecipe } from '../../services/recipes';
import { Category } from '../../types/Categories';
import { Ingredient } from '../../types/Ingredients';
import { RecipeCreate, RecipeIngredient } from '../../types/Recipes';

export function useAddRecipe(context: SetupContext) {
  const name = ref<string>('');
  const time = ref<number | null>();
  const description = ref<string>('');
  const allIngredients = ref<Ingredient[]>();
  const selectedIngredients = ref<RecipeIngredient[]>([]);

  const allCategories = ref<Category[]>();

  const rating = ref<number>(1);
  const duration = ref<string>('');
  const category = ref<Category | null>();

  const addIngredientValue = ref<RecipeIngredient | null>();

  const loadIngredients = async () => {
    allIngredients.value = await getAllIngredients();
  };

  const loadCategories = async () => {
    allCategories.value = await getAllCategories();
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
    addIngredientValue.value = null;

    const ingredient = allIngredients.value?.find(x => x.id == value.id);

    if (ingredient) {
      allIngredients.value?.slice(allIngredients.value.indexOf(ingredient));
    }
  };

  const onIngredientRemoved = (value: RecipeIngredient) => {
    const i = selectedIngredients.value.indexOf(value);
    selectedIngredients.value.splice(i);
  };

  const onSave = () => {
    const ingredients: string[] = [];

    selectedIngredients.value.forEach(x => {
      ingredients.push(`${x.id}:${x.amount}`);
    });

    const recipeCreate: RecipeCreate = {
      name: name.value,
      description: description.value,
      rating: rating.value,
      duration: duration.value,
      category: category.value?.id,
      ingredients: ingredients.join(','),
    };

    createRecipe(recipeCreate);

    context.root.$router.push({ path: `/recipes` });
  };

  onMounted(() => {
    loadIngredients();
    loadCategories();
  });

  return {
    allCategories,
    category,
    onSave,
    duration,
    rating,
    onIngredientRemoved,
    addIngredientValue,
    onIngredientAdded,
    ingredientToRecipeIngredient,
    name,
    time,
    description,
    selectedIngredients,
    allIngredients,
  };
}
