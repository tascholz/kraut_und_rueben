import { onMounted, ref, SetupContext } from '@vue/composition-api';
import { createCustomer } from '../../services/customers';
import { createIngredient } from '../../services/ingredients';
import { getAllSuppliers } from '../../services/suppliers';
import { CustomerCreate } from '../../types/Customers';
import { IngredientCreate } from '../../types/Ingredients';
import { Supplier } from '../../types/Supplier';

export function useAddCustomer(context: SetupContext) {
  const first_name = ref<string>('');
  const last_name = ref<string>('');
  const birthday = ref<string>('');
  const street = ref<string>('');
  const housenumber = ref<string>('');
  const plz = ref<string>('');
  const city = ref<string>('');
  const telephone = ref<string>('');
  const email = ref<string>('');

  const allSuppliers = ref<Supplier[]>();

  const onSave = () => {
    const customer: CustomerCreate = {
      first_name: first_name.value,
      last_name: last_name.value,
      birthdate: birthday.value,
      city: city.value,
      house_number: housenumber.value,
      postcode: plz.value,
      street: street.value,
      telephone: telephone.value,
      email: email.value,
    };

    createCustomer(customer);
    context.root.$router.push({ path: '/customers' });
  };

  const loadSuppliers = async () => {
    allSuppliers.value = await getAllSuppliers();
  };

  onMounted(() => {
    loadSuppliers();
  });

  return {
    telephone,
    email,
    first_name,
    last_name,
    birthday,
    street,
    housenumber,
    city,
    plz,
    onSave,
  };
}
