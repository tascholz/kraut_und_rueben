import { ref, SetupContext } from '@vue/composition-api';

export function useRatingSelector(
  props: { value: number },
  context: SetupContext
) {
  const rating = ref<number>(props.value);

  const setRating = (newRating: number) => {
    rating.value = newRating;
    context.emit('input', rating.value);
  };

  return {
    rating,
    setRating,
  };
}
