import { ref } from '@vue/composition-api';
import { NavigationDrawerItem } from '../../types/NavigationDrawer';

export function useNavigationDrawer() {
  const isOpen = ref<boolean>(true);

  const toggleNav = () => {
    isOpen.value = !isOpen.value;
  };

  const items = ref<NavigationDrawerItem[]>([
    {
      name: 'Home',
      icon: 'mdi-home',
      link: '/',
    },
    {
      name: 'Rezepte',
      icon: 'mdi-bowl-mix',
      link: '/recipes',
    },
    {
      name: 'Zutaten',
      icon: 'mdi-food-apple',
      link: '/ingredients',
    },
  ]);

  return {
    items,
    isOpen,
    toggleNav,
  };
}
