<template>
  <v-container class="modal">
    <v-layout column justify-center align-center>
      <h2 class="mb-0 text-xs-center">{{ currentItem }} </h2>
      <p class="mb-0"></p>
      <button class="myBtn">Заказать звонок</button>
    </v-layout>
    <v-carousel hide-controls>
      <v-carousel-item v-for="(item, i) in gallery" :key="i" :src="item.img"></v-carousel-item>
    </v-carousel>
    <div class="close" @click.stop="closeModal"></div>
  </v-container>
</template>

<script>
import { gallery } from '../store/index'

export default {
  props: ['currentItem'],
  methods: {
    closeModal () {
      this.$emit('closeModal');
    }
  },
  computed: {
    gallery () {
      return gallery
    }
  }
}
</script>

<style scoped lang="stylus">
@import '../../components/modals/modals.styl'

.carousel
  height 700px

.carousel__item
  transition .8s linear
</style>