<template>
  <v-container fluid class="formContainer">
    <v-layout justify-center>
      <h2 class="darkgrey text-xs-center">Свяжитесь с нами</h2>
    </v-layout>
    <v-layout justify-center align-center class="layoutContainer">
      <form class="form" method="POST" action="/static/php/form.php">
        <input required name="user_name" class="inputtext" type="text" placeholder="Имя">
        <input required name="user_email" class="inputtext" type="email" placeholder="e-mail">
        <input required name="user_topic" type="text" placeholder="Тема">
        <textarea required name="user_message" placeholder="Сообщение..." cols="20" rows="8"></textarea>
        <button type="submit">Отправить</button>
      </form>
    </v-layout>
  </v-container>
</template>

<style scoped lang="stylus">
.formContainer
  min-height 510px
  background-image url('/static/bgAbout1.png')
  h2
    color #fff
.form
  display flex
  flex-flow column wrap
  min-width 600px
  .inputtext
    margin 0.3rem 0.1rem
    min-width 290px
  input
  textarea
    background-color #fff
    padding 0.3rem 1.2rem
    margin 0.3rem 0
    border 2px solid #d5d5d5
    width 100%
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
    margin 0 1rem
    max-width 400px
    min-width 400px


@media (max-width: 400px)
  .form
    max-width 280px
    min-width 280px
  h2
    font-size 1.5rem
    .inputtext
    textarea
      min-width 280px
</style>