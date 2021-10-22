import axios from 'axios';

export async function getAllRecipes() {
  console.log('Getting all recipes');

  const response = await axios.get('api/recipeList');

  console.log(response.data);
}
