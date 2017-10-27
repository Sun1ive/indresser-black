<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2>Кто мы такие</h2>
    </v-layout>
    <v-layout column class="layoutContainer">
      <p align="justify">Мы Украинская студия дизайнерской женской одежды inDresser. Для Вас мы собрали лучших дизайнеров, которые среди множества вариантов, выбирают отличные решения современных женских нарядов. Наши вещи отлично носятся, так как пошиты из качественных тканей. Клиенты с большим удовольствием одевают луки от inDresser как на работу, так и на вечеринки или обычные прогулки в городе.</p>
      <p>Вы будете довольны образами от InDresser, а мы будем гордится сотрудничеством с Вами</p>
    </v-layout>
  </v-container>
</template>


<style scoped lang="stylus">
.container
  background-image url('/static/bgAbout.png')
  min-height 475px
  p
    text-indent 1.5rem
    color #8e8e8e
    font-size 1.6rem

@media (max-width 1024px)
  .container
    min-height 550px
  .layoutContainer
    max-width: 700px
    p
      font-size 1.4rem

@media (max-width: 700px)
  .container
    min-height 450px
    h2
      padding 3.2rem 0 1.5rem 0
  .layoutContainer
    max-width 500px
    p
      font-size 1.2rem

@media (max-width: 480px)
  .container
    h2
      padding 1rem 0
  .layoutContainer
    max-width 380px
    p
      font-size 1.1rem
      margin-bottom 0
      margin 0 1rem
</style>