<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2 class="darkgrey">Отзывы клиентов</h2>
    </v-layout>
    <v-layout class="layoutContainer">
      <v-carousel ref="slider" hide-controls left-control-icon="fa fa-long-arrow-left" right-control-icon="fa fa-long-arrow-right">
        <v-carousel-item src="/static/slide.png"></v-carousel-item>
        <v-carousel-item src="/static/slide.png"></v-carousel-item>
        <v-carousel-item src="/static/slide.png"></v-carousel-item>
        <v-carousel-item src="/static/slide.png"></v-carousel-item>
      </v-carousel>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
  }
</script>

<style scoped lang="stylus">
.carousel
  height 400px
  box-shadow none
  &__item
    transition .8s ease
</style>