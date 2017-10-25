<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2 class="darkgrey">Как мы работаем?</h2>
    </v-layout>
    <v-layout class="layoutContainer" wrap row justify-center align-center>
      <v-flex xs12 sm6 md4 lg3 v-for="(item, i) in items" :key="i">
        <img :src="item.icon" :alt="item.title">
        <p class="mb-0 iconText">{{ item.title }}</p>
        <a href="#">{{ item.button }}</a>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          { icon: '/static/makeoffer.png', title: 'Отормите заказ', button: 'подробнее' },
          { icon: '/static/credit-card.png', title: 'Оплатите', button: 'подробнее' },
          { icon: '/static/shipped.png', title: 'Получите', button: 'подробнее' },
          { icon: '/static/refresh-arrow.png', title: 'Возврат', button: 'подробнее' },
        ]
      }
    }
  }
</script>

<style scoped lang="stylus">
.container
  min-height 660px
  background-image url('/static/bgwork.png')
  .layoutContainer
    margin 0 auto !important
    .flex
      display flex
      justify-content center
      flex-flow column wrap
      align-items center
      margin 0 3rem
      &:last-child
        margin-top 3rem
      img
        padding-bottom 3.5rem
      a
        text-decoration none
  h2
    margin 0
    padding 4rem 0
</style>