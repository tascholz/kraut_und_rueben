import axios from 'axios';
import { CustomerCreate } from '../types/Customers';
import { Supplier } from '../types/Supplier';

export async function getAllCustomers() {
  const response = await axios.get('/api/getAllCustomers');

  if (response.data) {
    return response.data as Supplier[];
  }
  return [];
}

export async function createCustomer(customer: CustomerCreate) {
  const response = await axios.post('/api/storeCustomer', customer);

  return response.status;
}
