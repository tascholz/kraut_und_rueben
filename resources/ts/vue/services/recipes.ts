import axios from 'axios';
import { Recipe, RecipeCreate, RecipeUpdate } from '../types/Recipes';

export async function getAllRecipes() {
  const response = await axios.get('/api/getAllRecipes');

  if (response.data) {
    return response.data as Recipe[];
  }
  return [];
}

export async function getRecipeById(id: string) {
  const response = await axios.get(`/api/getRecipe${id}`);

  if (response.data) {
    return response.data as Recipe;
  }
  return null;
}

export async function createRecipe(recipe: RecipeCreate) {
  const response = await axios.post('/api/storeRecipe', recipe);

  console.log(response.status);
}

export async function updateRecipe(id: number, recipe: RecipeUpdate) {
  const response = await axios.post(`/api/updateRecipe${id}`, recipe);
}
