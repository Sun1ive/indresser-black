<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2 class="darkgrey text-xs-center">Отзывы клиентов</h2>
    </v-layout>
    <v-layout justify-center class="layoutContainer">
      <v-carousel ref="slider" hide-controls>
        <v-carousel-item src="/static/test/1.png"></v-carousel-item>
        <v-carousel-item src="/static/lowres/testslide.png"></v-carousel-item>
        <v-carousel-item src="/static/slide1.png"></v-carousel-item>
        <v-carousel-item src="/static/slide1.png"></v-carousel-item>
      </v-carousel>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    mounted () {
      let slider =  this.$refs.slider.$el;
      console.log(slider);
    }
  }
</script>

<style scoped lang="stylus">
.carousel
  height 300px
  box-shadow none
  &__item
    transition .8s ease

@media (max-width: 470px)
  .carousel
    max-width 420px
    height 185px
    &__item
      background-size contain
</style>