import { ref, SetupContext } from '@vue/composition-api';
import { NavigationDrawerItem } from '../../types/NavigationDrawer';

export function useNavigationDrawer(context: SetupContext) {
  const isOpen = ref<boolean>(!context.root.$vuetify.breakpoint.smAndDown);

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
    {
      name: 'Kunden',
      icon: 'mdi-account',
      link: '/customers',
    },
    {
      name: 'Lieferanten',
      icon: 'mdi-truck',
      link: '/suppliers',
    },
  ]);

  return {
    items,
    isOpen,
    toggleNav,
  };
}
