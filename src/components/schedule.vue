<template>
  <v-container class="scheduleContainer">
    <v-layout align-center class="layoutContainer">
      <v-flex xs10 sm6>
        <img src="/static/schedule.png" style="width:100%" alt="logo">
      </v-flex>
      <v-flex xs10 sm6 md4 class="flexschedule">
        <div class="boxText text-xs-right">
          <h3>Контакты</h3>
          <p>Телефон: 098-02-02-092</p>
          <p>073-02-02-090</p>
          <p>Email: info@indresser.com</p>
        </div>
        <div class="boxText text-xs-right">
          <h3>Режим работы</h3>
          <p>С ПН по ПТ с 09:00 до 18:00</p>
          <p>Выходные дни - СБ и ВС</p>
        </div>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<style scoped lang="stylus">
.layoutContainer
  min-height 370px
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

.flexschedule
  display flex
  justify-content space-around
  flex-direction column
  min-height 200px

@media (max-width 1024px)
  .layoutContainer
    max-width 800px
    img
      margin-left 3rem
    h3
      font-size 1rem
    p
      font-size .9rem !important


@media (max-width 700px)
  .layoutContainer
    max-width 500px

@media (max-width 550px)
  .layoutContainer
    flex-direction column
    padding-top 3rem
    img
      margin-left 0
    .flexschedule
      .boxText
        min-width 200px

</style>