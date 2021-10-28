export interface RecipeIngredient {
  id?: number;
  name?: string;
  amount?: number;
  unit?: string;
}

export interface RecipeIngredientDTO {
  id: number;
  ingredient_name: string;
  ingredient_amount: number;
  ingredient_unit: string;
}

export interface Recipe {
  id: string;
  name: string;
  description: string;
  duration: string;
  rating: number;
  calories: number;
  ingredients: RecipeIngredient[] | RecipeIngredientDTO[];
}

export interface RecipeCreate {
  name: string;
  description: string;
  duration: string;
  rating: number;
  category?: number;
  ingredients?: string;
}

export interface RecipeUpdate {
  recipe_name: string;
  description: string;
  duration: string;
  rating: number;
  ingredients?: string;
}
