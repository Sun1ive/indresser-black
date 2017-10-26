<template>
  <v-container class="bannerContainer" fluid>
    <v-layout align-center class="banner">
      <v-flex xs12 sm12 md10 lg8 class="text-xs-center">
        <img src="/static/logobanner.png" alt="logo">
      </v-flex>
    </v-layout>
    <v-layout justify-end class="text">
      <v-flex class="blackText text-xs-center">Мы знаем, как дорого время</v-flex>
    </v-layout>
    <div class="arrowDown">
      <v-icon>keyboard_arrow_down</v-icon>
    </div>
  </v-container>
</template>

<script>
  export default {
    mounted () {
      let height = window.innerHeight;
      let width = window.innerWidth;
      let arrow = document.querySelector('.arrowDown');
      let bg = document.querySelector('.bannerContainer')
      // console.log(height);
      // (height <= 800) ? arrow.style.bottom = '15%' : console.log('huh');
/*        if (width <= 480) {
        bg.style.background = `url('/static/480/480banner.png') no-repeat center center`
      } else if (width >= 480) {
        bg.style.background = `url('/static/bannerbgGirl.png') no-repeat right center`
      } */
    }
  }
</script>

<style scoped lang="stylus">
.bannerContainer
  background-image url('/static/bannerbgGirl.png')
  height 100vh
  background-position right center
  position relative
  .banner
    min-height inherit
    max-width 1400px
    min-height 80vh
    margin 0 auto
    img
      width: 100%
      max-width 722px
      height 117px

.arrowDown
  position absolute
  bottom 0
  left 50%
  transform translateX(-50%)
  i
    font-size 8rem
    color #c0c0c0
    animation cool 2s linear alternate infinite
    cursor pointer

@keyframes cool {
  from {
    transform translateY(-10px)
    opacity .3
  } to {
    transform translateY(10px)
    opacity 1
  }
}

.text
  max-width 1400px
  margin 0 auto
.blackText
  max-width 562px
  min-height 40px
  background-color #2b2a29
  text-transform uppercase
  display flex
  justify-content center
  align-items center
  font-family 'OpenSans-Semibold', Arial, Helvetica, sans-serif
  color #fff
  font-size 2.4rem


@media (max-width 1400px)
  .blackText
    font-size 1.8rem
    max-width 420px
  .text
    margin-right 2rem

@media (max-width 480px)
  .bannerContainer
    background url('/static/480/480banner.png') no-repeat center center
    .text
      justify-content center
      margin-right 0
    .blackText
      font-size 1.4rem
      max-width 340px
    img
      display none
@media (max-width 400px)
  .bannerContainer
    background url('/static/320/320logobanner.png') no-repeat center center
    .blackText
      font-size 1rem
      max-width 250px
</style>