<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2 class="mb-0">Кому подходит наша одежда?</h2>
    </v-layout>
    <v-layout justify-center row wrap align-center class="layoutContainer">
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто живет  в ритме города  и не беспокоится  по мелочам!  подробнее...</p>
        </div>
      </v-flex>
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто живет  в ритме города  и не беспокоится  по мелочам!  подробнее...</p>
        </div>
      </v-flex>
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто живет  в ритме города  и не беспокоится  по мелочам!  подробнее...</p>
        </div>
      </v-flex>
      <v-flex xs12 sm5 class="wrapper">
        <div class="box">
          <p>Для тех, кто живет  в ритме города  и не беспокоится  по мелочам!  подробнее...</p>
        </div>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    
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
    margin: 0 15px
    .box
      // filter grayscale(100%)
      min-height 300px
      display flex
      align-items center
      margin-left 2.3rem
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
        background url('/static/secondgirl.png') right center no-repeat
    p
      max-width 250px
      font-size 1.8rem
</style>