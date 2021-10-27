import {
  computed,
  ComputedRef,
  ref,
  SetupContext,
  watch,
} from '@vue/composition-api';
import { Ingredient } from '../../types/Ingredients';
import { RecipeIngredient } from '../../types/Recipes';

export function useIngredientSelector(
  props: {
    value: RecipeIngredient | null;
    items?: Ingredient[];
  },
  context: SetupContext
) {
  const ingredient = ref<Ingredient | null>();
  const amount = ref<number>(props.value?.amount || 1);
  const showHint = ref<boolean>(false);

  const selected: ComputedRef<RecipeIngredient | null> = computed(() => {
    const item: RecipeIngredient = {
      id: ingredient.value?.id,
      name: ingredient.value?.ingredient_name,
      amount: amount.value,
    };

    context.emit('input', item);

    return item;
  });

  const addIngredient = () => {
    console.log(selected.value);
    if (selected.value?.amount && selected.value.id && selected.value.name) {
      showHint.value = false;
      context.emit('addIngredient', selected.value);
    } else {
      showHint.value = true;
    }
  };

  return {
    showHint,
    addIngredient,
    ingredient,
    amount,
    selected,
  };
}
