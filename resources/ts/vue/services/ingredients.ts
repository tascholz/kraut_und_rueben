import axios from 'axios';
import { Ingredient } from '../types/Ingredients';

export async function getAllRecipes() {
  // TODO: Change API Endpoint once given
  const response = await axios.get('');

  if (response.data) {
    return response.data as Ingredient[];
  }
  return [];
}
