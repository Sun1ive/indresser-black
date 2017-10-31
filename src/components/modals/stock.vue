<template>
  <v-container fluid class="stock">
    <v-layout class="white"></v-layout>
    <v-layout justify-center align-center class="black">
      <v-flex xs12>
        <h2 class="stockH">Акция!</h2>
      </v-flex>
    </v-layout>
    <v-layout column class="discount" justify-center align-center>
      <p class="first">Первые 100 покупалетлей получат скидку в 100 грн</p>
      <form action="" method="POST" class="form">
        <input name="name" type="text" placeholder="Ваше имя" required>
        <input name="email" type="text" placeholder="Ваш e-mail" required>
        <button class="myBtn" type="submit">Отправить</button>
      </form>
    </v-layout>
    <div class="close" @click="close"></div>
  </v-container>
</template>

<script>
  export default {
    methods: {
      close () {
        this.$emit('close')
      }
    }
  }
</script>

<style scoped lang="stylus">
.stock
  background-color #fff
  min-height 300px
  border-radius 8px
  position relative
  .close
    position absolute
    right 5px
    top 5px
    width 30px
    height 30px
    border-radius 50%
    border 1px solid #333
    cursor pointer
    transition .4s linear
    &:after
      position absolute
      content 'X'
      top 50%
      left 50%
      transform translate(-50%,-50%)
      font-size 1.2rem
    &:hover
      color #fff
      background-color #000
  .white
    min-height 50px
    background-color #fff
    border-radius 8px
  .black
    background-color #000
    min-height 50px
    .stockH
      padding 0
      text-align center
      font-size 3rem
  .discount
    min-height 200px
    .first
      font-size 1.2rem
      margin 1rem
  .form
    margin-top 4rem
    input
      border 1px solid #c0c0c0
      border-radius 8px
      padding .7rem 2rem
      margin 0 0.3rem
      max-width 200px
    .myBtn
      background-color red
      color #fff
      padding .7rem
      border-radius 8px
      &:active
        outline none

@media (max-width 600px)
  .stock
    .black
      .stockH
        font-size 3rem
    .form
      input
        font-size 1rem
        padding 0.7rem 0.5rem
      .myBtn
        font-size 1rem
        padding 0.7rem 0.7rem
@media (max-width 560px)
  .stock
    .form
      display flex
      flex-direction column
      width 85%
      margin-top 0
      input
        max-width 100%
        margin .5rem 0
      .myBtn
        margin-top .5rem
    .discount
      .first
        font-size 1rem
        padding 1rem 0
        margin-bottom 0
@media (max-width: 400px)
  .stock
    .discount
      .first
        text-align center
</style>