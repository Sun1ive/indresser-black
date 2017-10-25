<template>
  <v-container>
    <v-layout align-center class="layoutContainer">
      <v-flex xs12 sm6 md10>
        <img srcset="/static/schedule.png 1900w, /static/1024/logofooter1024.png 1024w" alt="logo">
      </v-flex>
      <v-flex xs12 sm6 md4>
        <div class="text-xs-right">
          <h3>Адресс</h3>
          <p>г.Винница, ул. Николая Оводова, 51</p>
          <p>Главный офис</p>
        </div>
        <div class="text-xs-right">
          <h3>Контакты</h3>
          <p>Телефон: 098-02-02-092</p>
          <p>Факс: 073-02-02-029</p>
          <p>Email: info@indresser.com</p>
        </div>
        <div class="text-xs-right">
          <h3>Режим работы</h3>
          <p>С понедельника по пятницу с 09:00 до 18:00</p>
          <p>Выходные дни - суббота и воскресенье</p>
        </div>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<style scoped lang="stylus">
.layoutContainer
  min-height 370px
  div
    margin 1rem 0
  h3
    font-family 'OpenSansBold'
    font-size 1.3rem
    text-transform uppercase
    line-height 1.5rem
    margin-bottom 0
  p
    margin-bottom 0
    font-size 1.1rem
    line-height 1.3rem

@media (max-width 1024px)
  .layoutContainer
    h3
      font-size 1rem
    p
      font-size .9rem !important
</style>