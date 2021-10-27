export interface RecipeIngredient {
  id?: number;
  name?: string;
  amount?: number;
}

export interface Recipe {
  id: string;
  name: string;
  description: string;
  duration: string;
  rating: number;
  calories: number;
  ingredients: RecipeIngredient[];
}
