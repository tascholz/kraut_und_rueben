import { SetupContext } from '@vue/composition-api';
import axios from 'axios';
import { Recipe } from '../../types/Recipes';

export function useRecipeCard(
  props: { recipe: Recipe },
  context: SetupContext
) {
  const onDelete = () => {
    axios.post(`/api/deleteRecipe${props.recipe.id}`);
    context.emit('recipeDeleted', props.recipe.id);
  };

  return {
    onDelete,
  };
}
