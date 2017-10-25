<template>
  <v-container fluid>
    <v-layout align-center class="banner">
      <v-flex xs12 sm12 md10 lg6 class="text-xs-center">
        <img src="/static/logobanner.png" alt="logo">
      </v-flex>
    </v-layout>
    <v-layout justify-end class="text">
      <v-flex class="blackText">Мы знаем, как дорого время</v-flex>
    </v-layout>
    <div class="arrowDown" @click="alert">
      <v-icon>keyboard_arrow_down</v-icon>
    </div>
  </v-container>
</template>

<script>
  export default {
    methods: {
      alert () {
        alert(1)
      }
    }
  }
</script>

<style scoped lang="stylus">
.container
  background-image url('/static/test1.png')
  height 850px
  background-position right center
  position relative
  .banner
    min-height inherit
    height 700px
    max-width 1400px
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
    color #fff
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
  max-height 48px
  min-width 500px
  min-height 45px
  width 100%
  height 100%
  background-color #2b2a29
  text-transform uppercase
  display flex
  justify-content center
  align-items center
  font-family 'OpenSans-Semibold', Arial, Helvetica, sans-serif
  color #fff
  font-size 2.4rem


</style>