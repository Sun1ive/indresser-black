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
    <v-dialog ref="dialog" persistent max-width="65vh" v-model="isActive">
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
        currentItem: '',
        items: [
          { title: `Для тех, кто живет в ритме города и не беспокоится по мелочам`, desc: `Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci minus, voluptates similique. Voluptates blanditiis, saepe cumque commodi sed ipsam magni provident, enim accusantium, itaque explicabo obcaecati temporibus ea neque!` },
          { title: `Для любительниц что-то носить с собой, теперь есть решение - платье с карманами`, desc: `Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci minus, voluptates similique. Voluptates blanditiis, saepe cumque commodi sed ipsam magni provident, enim accusantium, itaque explicabo obcaecati temporibus ea neque!` },
          { title: `Для тех, кто выберает стильные и удобные платья в cтиле Casual`, desc: `Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci minus, voluptates similique. Voluptates blanditiis, saepe cumque commodi sed ipsam magni provident, enim accusantium, itaque explicabo obcaecati temporibus ea neque!` },
          { title: `Для тех, кто живет в ритме города и не беспокоится по мелочам!`, desc: `Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci minus, voluptates similique. Voluptates blanditiis, saepe cumque commodi sed ipsam magni provident, enim accusantium, itaque explicabo obcaecati temporibus ea neque!` },
        ]
      }
    },
    methods: {
      showModal (item) {
        this.currentItem = item
        this.isActive = true
      },
      closeModal () {
        this.isActive = false
      }
    },
    mounted () {
       let dialog = this.$refs.dialog.$refs.dialog;
       dialog.style.minWidth = '500px';
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
        font-size 1.85rem
        padding-bottom 2rem
    &:nth-child(1)
      .box
        background url('/static/firstGirl.png') 90% center no-repeat
    &:nth-child(2)
      .box
        background url('/static/secondgirl.png') 103% center no-repeat
    &:nth-child(3)
      .box
        background url('/static/thirdgirl.png') 100% center no-repeat
    &:nth-child(4)
      .box
        background url('/static/fourthgirl.png') 101% center no-repeat
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
          background url('/static/1024/girlone.png') 90% -5% no-repeat
      &:nth-child(2)
        .box
          background url('/static/1024/girltwo.png') 103% -5% no-repeat
      &:nth-child(3)
        .box
          background url('/static/1024/girlthree.png') 100% -5% no-repeat
      &:nth-child(4)
        .box
          background url('/static/1024/girlfour.png') 101% -5% no-repeat

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