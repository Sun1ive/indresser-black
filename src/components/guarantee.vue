<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2>Наши гарантии</h2>
    </v-layout>
    <v-layout row wrap align-center justify-center class="layoutContainer">
      <v-flex class="box" xs12 sm5 v-for="(item, i) in items" :key="i">
        <img src="/static/tick.png" alt="tick">
        <p class="iconText">{{ item }}</p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        items: [`Быстрая доставка заказа`, `Высокое качество товара`, `Доставка по территории Украины совершенно бесплатна`,`Возврат бракованной продукции`]
      }
    }
  }
</script>

<style scoped lang="stylus">
.container
  background-color #2b2b2b
  min-height 396px
  .box
    display flex
    align-items center
    justify-content flex-start
    margin 1rem 3rem
    .iconText
      color #8e8e8e
      margin-bottom 0
      margin-left 2rem
      text-align left

@media (max-width 1024px)
  .container
    min-height 270px
    h2
      padding 1rem 0
    .iconText
      font-size 1.5rem
  .box
    margin 1rem !important

@media (max-width 670px)
  .container
    min-height 410px
    .iconText
      font-size 1.1rem
    h2
      font-size 1.5rem
      padding 3rem 0 2rem 0
</style>