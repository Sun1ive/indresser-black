<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2 class="mb-0">Кому подходит наша одежда?</h2>
    </v-layout>
    <v-layout justify-center row wrap align-center class="layoutContainer">
    <!-- <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто живет  в ритме города  и не беспокоится  по мелочам!  подробнее...</p>
        </div>
      </v-flex>
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для любительниц  что-то носить с собой,  теперь есть решение -  платье с карманами!  подробнее</p>
        </div>
      </v-flex>
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто живет  в ритме города и не беспокоится  по мелочам!  подробнее</p>
        </div>
      </v-flex>
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто выберает  стильные и удобные  платья в cтиле  Casual!</p>
          <a href="">подробнее</a>
        </div>
    </v-flex> -->
      <v-flex xs12 sm5 class="wrapper" v-for="(item,i) in items" :key="i">
        <div class="box">
          <p>{{ item }}</p>
          <a href="#">подробнее</a>
        </div>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        items: [`Для тех, кто живет  в ритме города  и не беспокоится  по мелочам!`, `Для любительниц  что-то носить с собой,  теперь есть решение -  платье с карманами!`, `Для тех, кто живет  в ритме города и не беспокоится  по мелочам! `, `Для тех, кто выберает  стильные и удобные  платья в cтиле  Casual!` ]
      }
    }
  }
</script>

<style scoped lang="stylus">
.container
  background url('/static/cardbg.png') center center no-repeat
  height 830px
  margin-left -2px
  display flex
  justify-content center
  align-items center
  flex-flow column wrap
  .wrapper
    background-image url('/static/boxBg.png')
    min-height 300px
    max-width 504px
    max-height 300px
    margin: 0 15px
    .box
      filter grayscale(100%)
      min-height 300px
      // display flex
      // align-items center
      // justify-content center
      // flex-direction column
      // margin-left 2.3rem
      padding 3rem 0 0 2.2rem
      transition .4s ease
      &:hover
        filter grayscale(0)
        transition .4s ease
    &:nth-child(1)
      .box
        background url('/static/firstGirl.png') 90% center no-repeat
    &:nth-child(2)
      .box
        background url('/static/secondgirl.png') 103% center no-repeat
    &:nth-child(3)
      .box
        background url('/static/thirdgirl.png') 100% center no-repeat
    &:nth-child(4)
      .box
        background url('/static/fourthgirl.png') 101% center no-repeat
    p
      max-width 270px
      font-size 1.8rem
      line-height 2.7rem
</style>