<template>
  <v-row>
    <v-col v-for="index in 5" :key="index" cols="2">
      <v-btn flat icon color="yellow" @click="setRating(index)">
        <v-icon v-if="index > rating">mdi-star-outline</v-icon>
        <v-icon v-else>mdi-star</v-icon>
      </v-btn>
    </v-col>
  </v-row>
</template>

<script>
import { defineComponent } from '@vue/composition-api';
import { useRatingSelector } from './RatingSelector';

export default defineComponent({
  props: {
    value: {
      type: Number,
      default: 1,
    },
  },
  setup(props, context) {
    const { rating, setRating } = useRatingSelector(props, context);

    return { rating, setRating };
  },
});
</script>
