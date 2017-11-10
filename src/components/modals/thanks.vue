<template>
  <v-container fluid class="thanksForm">
    <v-layout justify-center>
      <v-flex xs12 class="text-xs-center">
        <h2>Спасибо!</h2>
        <p>Наш менеджер скоро свяжется с Вами.</p>
        <div class="close" @click="close"></div>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    methods: {
      close() {
        this.$emit('closeThanks');
      }
    }
  }
</script>

<style scoped lang="stylus">
.thanksForm
  background-color #fff
  border-radius 8px
  .flex
    position relative
    .close
      position absolute
      right 3%
      top 5%
      width 25px
      height 25px
      background-image url('/static/close.svg')
      cursor pointer
  h2
    padding 1rem 0
    color #000
  p
    font-size 1.5rem
</style>