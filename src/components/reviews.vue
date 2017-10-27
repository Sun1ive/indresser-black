<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2 class="darkgrey text-xs-center">Отзывы клиентов</h2>
    </v-layout>
    <v-layout justify-center class="layoutContainer">
      <v-carousel ref="slider" hide-controls>
        <v-carousel-item v-for="(item, i) in reviews" :src="item" :key="i"></v-carousel-item>
      </v-carousel>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        reviews: [
          '/static/reviews/1.png', '/static/reviews/2.png', '/static/reviews/3.png'
        ]
      }
    }
  }
</script>

<style scoped lang="stylus">
.carousel
  height 300px
  box-shadow none
  &__item
    transition .8s ease

@media (max-width 700px)
  .carousel
    height 200px

@media (max-width: 470px)
  .carousel
    max-width 420px
    height 185px
    &__item
      background-size contain
  h2
    padding 3rem 0
    font-size 1.5rem
</style>