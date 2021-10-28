import { onMounted, ref, SetupContext } from '@vue/composition-api';
import { getAllCategories } from '../../services/categories';
import { getAllIngredients } from '../../services/ingredients';
import {
  createRecipe,
  getRecipeById,
  updateRecipe,
} from '../../services/recipes';
import { Category } from '../../types/Categories';
import { Ingredient } from '../../types/Ingredients';
import {
  Recipe,
  RecipeCreate,
  RecipeIngredient,
  RecipeIngredientDTO,
  RecipeUpdate,
} from '../../types/Recipes';

export function useEditRecipe(context: SetupContext) {
  const name = ref<string>('');
  const time = ref<string>('');
  const description = ref<string>('');
  const allIngredients = ref<Ingredient[]>();
  const selectedIngredients = ref<RecipeIngredient[]>([]);

  const allCategories = ref<Category[]>();

  const rating = ref<number>(1);
  const duration = ref<string>('');
  const category = ref<Category | null>();

  const addIngredientValue = ref<RecipeIngredient | null>();

  const dtoToRecipeIngredient = (dto: RecipeIngredientDTO) => {
    return {
      id: dto.id,
      name: dto.ingredient_name,
      amount: dto.ingredient_amount,
      unit: dto.ingredient_unit,
    } as RecipeIngredient;
  };

  const loadRecipe = async () => {
    const recipe = await getRecipeById(context.root.$route.params.id);

    console.log({ recipe });

    if (recipe) {
      name.value = recipe.name;
      time.value = recipe.duration;
      description.value = recipe.description;
      rating.value = recipe.rating;
      duration.value = recipe.duration;

      (recipe.ingredients as RecipeIngredientDTO[]).forEach(
        (x: RecipeIngredientDTO) => {
          selectedIngredients.value.push(dtoToRecipeIngredient(x));
        }
      );
    }
  };

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
    selectedIngredients.value.splice(i, 1);
  };

  const onSave = () => {
    const ingredients: string[] = [];

    selectedIngredients.value.forEach(x => {
      console.log({ x });
      ingredients.push(`${x.id}:${x.amount}`);
    });

    const recipeUpdate: RecipeUpdate = {
      recipe_name: name.value,
      description: description.value,
      rating: rating.value,
      duration: duration.value,
      ingredients: ingredients.join(','),
    };

    updateRecipe(+context.root.$route.params.id, recipeUpdate);

    context.root.$router.push({ path: `/recipes` });
  };

  onMounted(() => {
    loadIngredients();
    loadCategories();
    loadRecipe();
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
