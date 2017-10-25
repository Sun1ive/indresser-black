<template>
  <v-container>
    <v-layout column justify-center align-center>
      <h2 class="mb-0">{{ currentItem.title }}</h2>
      <p class="mb-0">{{ currentItem.desc }}</p>
    </v-layout>
    <div class="close" @click.stop="closeModal"></div>
  </v-container>
</template>

<script>
  export default {
    props: ['currentItem'],
    methods: {
      closeModal () {
        this.$emit('closeModal');
      }
    }
  }
</script>

<style scoped lang="stylus">
.container
  background-color #000000
  color #fff
  min-height 600px
  position relative
  .close
    position absolute
    width 40px
    height 40px
    background-color transparent
    border 1px solid #fff
    border-radius 50%
    top 5%
    left 5%
    cursor pointer
    &:after
      content 'X'
      position absolute
      top 50%
      left 50%
      transform translate(-50%,-50%)
  h2
    padding 1rem 0
  p
    font-size 1.1rem
    max-width 390px
    margin 0 auto
</style>