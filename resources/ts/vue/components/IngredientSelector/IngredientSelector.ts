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
      name: props.value?.name || ingredient.value?.ingredient_name,
      amount: amount.value,
      unit: ingredient.value?.unit,
    };

    context.emit('input', item);

    return item;
  });

  const addIngredient = () => {
    if (selected.value?.amount && selected.value.id && selected.value.name) {
      showHint.value = false;
      context.emit('addIngredient', selected.value);
      ingredient.value = null;
      amount.value = 1;
    } else {
      showHint.value = true;
    }
  };

  const removeIngredient = () => {
    context.emit('removeIngredient', selected.value);
  };

  return {
    removeIngredient,
    showHint,
    addIngredient,
    ingredient,
    amount,
    selected,
  };
}
