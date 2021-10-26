import axios from 'axios';
import { Ingredient } from '../types/Ingredients';

export async function getAllIngredients() {
  const response = await axios.get('/api/getAllIngredients');

  console.log(response);

  if (response.data) {
    return response.data as Ingredient[];
  }
  return [];
}
