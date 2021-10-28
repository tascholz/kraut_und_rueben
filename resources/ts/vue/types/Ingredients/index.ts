export interface Ingredient {
  id: number;
  ingredient_name: string;
  unit: string;
  netto_price: number;
  stock: number;
  supplier_id: number;
  calories: number;
  carbonhydrates: number;
  protein: number;
}

export interface IngredientCreate {
  name: string;
  unit: string;
  netto_price: number;
  stock: number;
  supplier_id: number;
  calories: number;
  carbonhydrates: number;
  protein: number;
}
