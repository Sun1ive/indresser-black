<template>
  <v-container class="clothesBG" fluid>
    <v-layout class="head" justify-center align-center>
      <h2 class="mb-0">Выбери себе платье</h2>
    </v-layout>
    <v-layout justify-center row wrap align-center class="layoutContainer">
      <v-flex xs12 sm5 class="wrapper" v-for="(item,i) in items" :key="i" @click.stop="showModal(item)">
        <div class="box">
          <p class="text">{{ item.title }}</p>
          <div class="Info">
            <div class="details"><span>подробнее...</span></div>
            <div class="Price">{{ item.price }} грн</div>
          </div>
        </div>
      </v-flex>
    </v-layout>
    <v-dialog lazy ref="dialog" max-width="650" v-model="isActive">
      <app-card :currentItem="currentItem" @closeModal="closeModal"></app-card>
    </v-dialog>
  </v-container>
</template>

<script>
import card from './modals/card';
import items from './store/store'

export default {
  components: {
    'app-card': card
  },
  data() {
    return {
      isActive: false,
      currentItem: {
        title: '',
        desc: '',
        gallery: ['', '', '', '', '', '', '', '']
      }
    };
  },
  methods: {
    showModal(item) {
      this.currentItem = item;
      let dialog = this.$refs.dialog.$refs.dialog;
      let width = window.innerWidth;
      if (width <= 500) {
        dialog.style.margin = '0';
      }
      this.currentItem = item;
      this.isActive = true;
    },
    closeModal() {
      this.isActive = false;
    }
  },
  computed: {
    items() {
      return items;
    }
  }
};
</script>

<style scoped lang="stylus">
.clothesBG
  background: url('/static/cardbg1.png') center center no-repeat;
  height: 830px;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-flow: column nowrap;
  .head
    max-height: 15%;
    h2
      padding: 1rem 0;
  .wrapper
    background-image: url('/static/boxBg.png');
    min-height: 300px;
    max-width: 504px;
    max-height: 300px;
    margin: 0 15px;
    cursor: pointer;
    overflow: hidden;
    .box
      filter: grayscale(100%);
      min-height: 300px;
      padding: 3rem 0 0 2.2rem;
      transition: 0.4s ease;
      display: flex;
      flex-flow: column wrap;
      justify-content: space-between;
      .details
        font-size 1.35rem
      &:hover
        filter: grayscale(0);
        transition: 0.4s ease;
        .details
          color: red;
        .Price
          transition: 0.2s linear
          color red
        span
          border-bottom 1px solid red
          width 100%
      span
        border-bottom 1px solid transparent
        transition .8s ease
    &:nth-child(1)
      .box
        background: url('/static/girls/1.png') right center no-repeat;
    &:nth-child(2)
      .box
        background: url('/static/girls/2.png') right center no-repeat;
    &:nth-child(3)
      .box
        background: url('/static/girls/3.png') right center no-repeat;
    &:nth-child(4)
      .box
        background: url('/static/girls/4.png') right center no-repeat;
    .text
      max-width: 65%;
      margin-bottom: 0;

.Info
  display flex
  align-items center
  height 20px
  padding-bottom 2rem
  .Price
    font-size 1.5rem
    margin-left 1.5rem
    transition .8s ease


@media (max-width: 1024px)
  .clothesBG
    height: 540px;
    background-image: url('/static/1024/cardbg1024.png');
    .wrapper
      max-width: 328px;
      min-height: 195px;
      max-height: 200px;
      .box
        min-height: 195px;
        padding: 1rem;
        .text
          font-size: 1.2rem;
          line-height: 1.9rem;
        .details
          font-size: 1.2rem;
          padding-bottom: 0rem
      &:nth-child(1)
        .box
          background: url('/static/1024/1.png') right center no-repeat;
      &:nth-child(2)
        .box
          background: url('/static/1024/2.png') right center no-repeat;
      &:nth-child(3)
        .box
          background: url('/static/1024/3.png') right center no-repeat;
      &:nth-child(4)
        .box
          background: url('/static/1024/4.png') right center no-repeat;
  


@media (max-width: 600px)
  .clothesBG
    background-image: url('/static/480/480cardbg.png');
    height: auto;
    min-height: 1000px;
    margin-top: -5px;
    h2
      padding: 0;
      font-size: 1.5rem;
      text-align: center;
    .text
      font-size: 1rem !important
  .Info
    .Price
      font-size 1.1rem
      margin-left 1rem


</style>