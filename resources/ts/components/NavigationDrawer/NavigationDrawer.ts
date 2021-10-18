import { ref } from "@vue/composition-api"
import { NavigationDrawerItem } from "../../types/NavigationDrawer";

export function useNavigationDrawer() {
  const isOpen = ref<boolean>(true);
  
  const toggleNav = () => {
    isOpen.value = !isOpen.value;
  }

  const items = ref<NavigationDrawerItem[]>([
    {
      name: "Home",
      icon: "mdi-home",
    }
  ]);

  return {
    items,
    isOpen,
    toggleNav,
  }
}