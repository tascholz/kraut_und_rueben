import { onMounted, ref } from '@vue/composition-api';
import { DataTableHeader } from 'vuetify';
import { getAllCustomers } from '../../services/customers';
import { getAllSuppliers } from '../../services/suppliers';
import { Supplier } from '../../types/Supplier';

export function useCustomers() {
  const items = ref<Supplier[]>();
  const isLoading = ref<boolean>(false);

  const headers: DataTableHeader[] = [
    {
      text: 'Id',
      value: 'id',
    },
    {
      text: 'Name',
      value: 'supplier_name',
    },
    {
      text: 'Email',
      value: 'email',
    },
    {
      text: 'Telefon',
      value: 'telephone',
    },
    {
      text: 'Adresse',
      value: 'adress',
      sortable: false,
    },
    {
      text: '',
      value: 'addCustomer',
      width: '50px',
      sortable: false,
    },
  ];

  const loadItems = async () => {
    isLoading.value = true;
    items.value = await getAllCustomers();
    isLoading.value = false;
  };

  onMounted(() => {
    loadItems();
  });

  return {
    isLoading,
    headers,
    items,
  };
}
