<template>
  <v-container fluid class="formContainer">
    <v-layout justify-center>
      <h2 class="darkgrey">Свяжитесь с нами</h2>
    </v-layout>
    <v-layout justify-center align-center class="layoutContainer">
      <form class="form" action="">
        <div>
          <input required class="inputtext" type="text" placeholder="Имя">
          <input required class="inputtext" type="email" placeholder="e-mail">
        </div>
        <input required type="text" placeholder="Тема">
        <textarea required placeholder="Сообщение..." cols="20" rows="8"></textarea>
        <button type="submit">Отправить</button>
      </form>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    
  }
</script>

<style scoped lang="stylus">
.formContainer
  min-height 510px
  background-image url('/static/bgAbout.png')
  h2
    color #fff
.form
  display flex
  flex-flow column wrap
  .inputtext
    margin 0.3rem 0.1rem
    min-width 290px
  input
  textarea
    background-color #fff
    padding 0.3rem 1.2rem
    margin 0.3rem 0
    border 2px solid #d5d5d5
  button
    margin-bottom 6rem
    min-height 45px
    background-color #FF2226
    text-transform uppercase
    color #fff
    font-size 1.3rem
    margin-top .5rem

@media (max-width: 600px)
  .form
    .inputtext
      width 100%
      min-width 100%

@media (max-width 360px)
  .form
    h2
      text-align center
      font-size 1.5rem
</style>