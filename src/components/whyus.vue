<template>
  <v-container fluid grid-list-xl>
    <v-layout justify-center>
      <h2>Почему именно мы?</h2>
    </v-layout>
    <v-layout row wrap justify-center align-center class="layoutContainer">
      <v-flex xs12 sm4 md4 class="box" v-for="(item, i) in items" :key="i">
        <img :src="item.icon" :alt="item.text">
        <p class="iconText mb-0">{{ item.text }}</p>
        <p class="iconText">{{ item.secondtext }}</p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        isActive: false,
        items: [
          { icon: '/static/tag.png', text: `Экслюзивная`, secondtext: `дизайнерская одежда` },
          { icon: '/static/truck.png', text: `Бесплатная`, secondtext: `доставка по Украине` },
          { icon: '/static/diamond.png', text: `Сочетание`, secondtext: `цены и качества` },
        ]
      }
    }
  }
</script>

<style scoped lang="stylus">
.container
  background-color #fff
  min-height 415px
  h2
    color #4b4b4b
    text-align center
    padding 3rem 0
  .layoutContainer
    margin 0 auto !important
  .box
    display flex
    flex-flow column wrap
    align-items center
    justify-content center
    img
      padding-bottom 3.5rem
      min-width 99px

@media (max-width: 1024px)
  .container
    h2
      padding 1rem 0
    p
      font-size 1.5rem
      text-align center

@media (max-width 500px)
  .container
    h2
      font-size 1.5rem
</style>