<template>
  <v-container class="modal">
    <v-layout column justify-center align-center>
      <h2 class="mb-0 text-xs-left">{{ currentItem.title }} </h2>
      <p class="mb-0">{{ currentItem.desc }}</p>
      <button class="myBtn">Получить консультацию</button>
    </v-layout>
    <v-layout justify-center>
      <h2>Топ продаж</h2>
    </v-layout>
    <v-layout>
      <v-carousel hide-controls>
        <v-carousel-item v-for="(item, i) in gallery" :key="i" :src="item.img"></v-carousel-item>
      </v-carousel>
    </v-layout>
    <v-layout justify-center class="py-3">
      <button class="myBtn" @click.stop="showCatalog">Получить весь каталог</button>
    </v-layout>
    <div class="close" @click.stop="closeModal"></div>

    <v-dialog ref="catalog" max-width="300" v-model="isVisibleCatalog">
      <app-catalogform></app-catalogform>
    </v-dialog>
  </v-container>
</template>

<script>
import { gallery } from '../store/index'
import catalogForm from './catalogForm'


export default {
  props: ['currentItem'],
  components: {
    'app-catalogform': catalogForm
  },
  data () {
    return {
      isVisibleCatalog: false
    }
  },
  methods: {
    closeModal () {
      this.$emit('closeModal');
    },
    showCatalog () {
      // console.log(1);
      let dialog = this.$refs.catalog.$refs.content.style;
      // console.log(dialog.justifyContent);
      (dialog.justifyContent === '') ? dialog.justifyContent = 'center' :
      this.isVisibleCatalog = true
    }
  },
  computed: {
    gallery () {
      return gallery
    }
  }
}
</script>

<style scoped lang="stylus">
@import '../../components/modals/modals.styl'
</style>