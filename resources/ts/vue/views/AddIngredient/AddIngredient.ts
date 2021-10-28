import { onMounted, ref, SetupContext } from '@vue/composition-api';
import { createIngredient } from '../../services/ingredients';
import { getAllSuppliers } from '../../services/suppliers';
import { IngredientCreate } from '../../types/Ingredients';
import { Supplier } from '../../types/Supplier';

export function useAddIngredient(context: SetupContext) {
  const name = ref<string>('');
  const carbonhydrates = ref<number>();
  const calories = ref<number>();
  const unit = ref<string>('');
  const price = ref<number>();
  const proteins = ref<number>();
  const amount = ref<number>();
  const supplier = ref<Supplier>();

  const allSuppliers = ref<Supplier[]>();

  const onSave = () => {
    const ingredient: IngredientCreate = {
      name: name.value,
      calories: calories.value || 0,
      carbonhydrates: carbonhydrates.value || 0,
      netto_price: price.value || 0,
      unit: unit.value,
      protein: proteins.value || 0,
      stock: amount.value || 0,
      supplier_id: supplier.value?.id || 0,
    };

    createIngredient(ingredient);

    context.root.$router.push({ path: '/ingredients' });
  };

  const loadSuppliers = async () => {
    allSuppliers.value = await getAllSuppliers();
  };

  onMounted(() => {
    loadSuppliers();
  });

  return {
    proteins,
    supplier,
    allSuppliers,
    amount,
    name,
    carbonhydrates,
    calories,
    unit,
    price,
    onSave,
  };
}
