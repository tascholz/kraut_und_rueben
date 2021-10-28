import axios from 'axios';
import { Supplier } from '../types/Supplier';

export async function getAllSuppliers() {
  const response = await axios.get('/api/getAllSuppliers');

  if (response.data) {
    return response.data as Supplier[];
  }
  return [];
}
