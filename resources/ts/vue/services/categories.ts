import axios from 'axios';
import { Category } from '../types/Categories';

export async function getAllCategories() {
  const response = await axios.get('/api/getAllCategories');

  if (response.data) {
    return response.data as Category[];
  }
  return [];
}
