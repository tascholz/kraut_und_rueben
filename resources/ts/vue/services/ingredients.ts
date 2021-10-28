import axios from 'axios';
import { Ingredient, IngredientCreate } from '../types/Ingredients';

export async function getAllIngredients() {
  const response = await axios.get('/api/getAllIngredients');

  if (response.data) {
    return response.data as Ingredient[];
  }
  return [];
}

export async function createIngredient(ingredient: IngredientCreate) {
  const response = await axios.post('/api/storeIngredient', ingredient);

  return response.status;
}
