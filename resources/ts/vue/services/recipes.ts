import axios from 'axios';
import { Recipe } from '../types/Recipes';

export async function getAllRecipes() {
  const response = await axios.get('api/storeRecipe');

  if (response.data) {
    return response.data as Recipe[];
  }
  return [];
}