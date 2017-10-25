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
        items: [`Быстрая доставка товара`, `Высокое качество товара`, `Доставка по территории   Украины совершенно бесплатна`,`Возврат бракованной   продукции`]
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
    margin 1rem 3rem
    .iconText
      color #8e8e8e
      margin-bottom 0
      margin-left 2rem

@media (max-width 1024px)
  .container
    min-height 270px

  .box
    margin 1rem !important
</style>