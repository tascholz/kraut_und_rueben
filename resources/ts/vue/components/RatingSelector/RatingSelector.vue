<template>
  <v-row>
    <v-col v-for="index in 5" :key="index" cols="2" md="2">
      <v-btn text icon color="primary" @click="setRating(index)">
        <v-icon v-if="index > rating">mdi-checkbox-blank-circle-outline</v-icon>
        <v-icon v-else>mdi-checkbox-blank-circle</v-icon>
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
