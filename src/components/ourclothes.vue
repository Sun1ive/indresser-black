<template>
  <v-container class="clothesBG" fluid>
    <v-layout class="head" justify-center align-center>
      <h2 class="mb-0">Кому подходит наша одежда?</h2>
    </v-layout>
    <v-layout justify-center row wrap align-center class="layoutContainer">
      <v-flex xs12 sm5 class="wrapper" v-for="(item,i) in items" :key="i" @click.stop="showModal(item)">
        <div class="box">
          <p class="text">{{ item.title }}</p>
          <div class="details">подробнее</div>
        </div>
      </v-flex>
    </v-layout>
    <v-dialog lazy ref="dialog" max-width="85vh" v-model="isActive">
      <app-card :currentItem="currentItem" @closeModal="closeModal"></app-card>
    </v-dialog>
  </v-container>
</template>

<script>
import card from './modals/card'
  export default {
    components: {
      'app-card': card
    },
    data () {
      return {
        isActive: false,
        currentItem: {
          title: '',
          desc: '',
          gallery: ['','','','','','','','']
        },
        items: [
          {
            title: `Для тех, кто живет в ритме города и не беспокоится по мелочам`,
            desc: `Фасон: приталенный силуэт Цвет: розовый, черный Длина: на уровне колена Карманы: нет Рукав: крылышко Платье не на подкладке`,
            gallery: [
              '/static/slider/rhytm/1.jpg',
              '/static/slider/rhytm/2.jpg',
              '/static/slider/rhytm/3.jpg',
              '/static/slider/rhytm/4.jpg',
              '/static/slider/rhytm/5.jpg',
              '/static/slider/rhytm/6.jpg',
              '/static/slider/rhytm/7.jpg',
              '/static/slider/rhytm/8.jpg'
            ]
          },
          {
            title: `Для деловых девушек которые любят быть в тренде и при этом ценят комфорт`,
            desc: `Фасон: платье футляр полуприлегающего силуэта Цвет: розово-бордовое, бежево-черное Особенности: Кокетка по полочке и спине. Со шлицей Длина : ниже колена Карманы: есть Платье без подкладки`,
            gallery: [
              '/static/slider/office/1.jpg',
              '/static/slider/office/2.jpg',
              '/static/slider/office/3.jpg',
              '/static/slider/office/4.jpg',
              '/static/slider/office/5.jpg',
              '/static/slider/office/6.jpg',
              '/static/slider/office/7.jpg',
              '/static/slider/office/8.jpg',
            ]
          },
          {
            title: `Для тех, кто выбирает стильные и удобные платья в cтиле Casual`,
            desc: `Фасон: платье трапеция с подрезами Цвет: бежевый, синий Длина: выше колена Карманы: в боковых швах Платье на подкладке`,
            gallery: [
              '/static/slider/casual/1.jpg',
              '/static/slider/casual/2.jpg',
              '/static/slider/casual/3.jpg',
              '/static/slider/casual/4.jpg',
              '/static/slider/casual/5.jpg',
              '/static/slider/casual/6.jpg',
              '/static/slider/casual/7.jpg',
              '/static/slider/casual/8.jpg',
            ]
          },
          {
            title: `Для тех, кто хочет выглядеть стильно не только в офисе, но и на вечеринках`,
            desc: `Фасон: платье полуприлегающего силуэта Цвет: красный, черный Особенности: по спинке молния Длина: до колен Карманы: нет Платье без подкладки`,
            gallery: [
              '/static/slider/party/1.jpg',
              '/static/slider/party/2.jpg',
              '/static/slider/party/3.jpg',
              '/static/slider/party/4.jpg',
              '/static/slider/party/5.jpg',
              '/static/slider/party/6.jpg',
              '/static/slider/party/7.jpg',
              '/static/slider/party/8.jpg',
            ]
          }
        ]
      }
    },
    methods: {
      showModal (item) {
        this.currentItem = item
        console.log(this.currentItem);
        let dialog = this.$refs.dialog.$refs.dialog;
        let width = window.innerWidth;
        if (width <= 500) {
          // dialog.style.minWidth = '500px';
          // console.log(dialog.style.margin);
          dialog.style.margin = '0'
        } else {
          // dialog.style.minWidth = 'auto'
          console.log(2);
        }
        this.currentItem = item
        this.isActive = true
      },
      closeModal () {
        this.isActive = false
      }
    }
  }
</script>

<style scoped lang="stylus">
.clothesBG
  background url('/static/cardbg1.png') center center no-repeat
  height 830px
  background-size cover
  display flex
  justify-content center
  align-items center
  flex-flow column nowrap
  .head
    max-height 15%
    h2
      padding 1rem 0
  .wrapper
    background-image url('/static/boxBg.png')
    min-height 300px
    max-width 504px
    max-height 300px
    margin: 0 15px
    cursor pointer
    overflow hidden
    .box
      filter grayscale(100%)
      min-height 300px
      padding 3rem 0 0 2.2rem
      transition .4s ease
      display flex
      flex-flow column wrap
      justify-content space-between
      &:hover
        filter grayscale(0)
        transition .4s ease
        .details
          transition .4s linear
          color red
          text-shadow 1px 1px 1px #333
      .details
        transition .4s linear
        font-size 1.85rem
        padding-bottom 2rem
    &:nth-child(1)
      .box
        background url('/static/girls/1.png') right center no-repeat
    &:nth-child(2)
      .box
        background url('/static/girls/2.png') right center no-repeat
    &:nth-child(3)
      .box
        background url('/static/girls/3.png') right center no-repeat
    &:nth-child(4)
      .box
        background url('/static/girls/4.png') right center no-repeat
    .text
      max-width 65%
      margin-bottom 0

@media (max-width 1024px)
  .clothesBG
    height 540px
    background-image url('/static/1024/cardbg1024.png')
    .wrapper
      max-width 328px
      min-height 195px
      max-height 200px
      .box
        min-height 195px
        padding 1rem
        .text
          font-size 1.2rem
          line-height 1.9rem
        .details
          font-size 1.2rem
          padding-bottom 0rem
      &:nth-child(1)
        .box
          background url('/static/1024/1.png') right center no-repeat
      &:nth-child(2)
        .box
          background url('/static/1024/2.png') right center no-repeat
      &:nth-child(3)
        .box
          background url('/static/1024/3.png') right center no-repeat
      &:nth-child(4)
        .box
          background url('/static/1024/4.png') right center no-repeat

@media (max-width 600px)
  .clothesBG
    background-image url('/static/480/480cardbg.png')
    height auto
    min-height 1000px
    margin-top -5px
    h2
      padding 0
      font-size 1.5rem
      text-align center
    .text
      font-size 1rem !important
</style>