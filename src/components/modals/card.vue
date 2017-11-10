<template>
  <v-container class="modal">
    <v-layout column justify-center align-center>
      <h2 class="mb-0 text-xs-center text-sm-left head">{{ currentItem.title }} </h2>
      <p class="mb-0">{{ currentItem.desc }}</p>
      <button class="myBtn" @click.stop="showOfferCall">Получить консультацию и заказать</button>
    </v-layout>
    <v-layout justify-center>
      <h2>Топ продаж</h2>
    </v-layout>
    <v-layout>
      <v-carousel hide-controls>
        <v-carousel-item v-for="(item, i) in currentItem.gallery" :key="i" :src="item"></v-carousel-item>
      </v-carousel>
    </v-layout>
    <v-layout justify-center class="py-3">
      <button class="myBtn" @click.stop="showCatalog">Получить весь каталог</button>
    </v-layout>
    <div class="close" @click.stop="closeModal"></div>

    <v-dialog ref="offercall" max-width="500px" v-model="isVisibleOfferCall">
      <app-offercall @closeForm="closeForm"></app-offercall>
    </v-dialog>

    <v-dialog ref="catalog" max-width="380px" v-model="isVisibleCatalog">
      <app-catalogform @closeForm="closeCatalogForm"></app-catalogform>
    </v-dialog>
  </v-container>
</template>

<script>
import catalogForm from './catalogForm';
import offerCall from './offerCall';

export default {
  props: ['currentItem'],
  components: {
    'app-catalogform': catalogForm,
    'app-offercall': offerCall
  },
  data() {
    return {
      isVisibleCatalog: false,
      isVisibleOfferCall: false
    };
  },
  methods: {
    closeModal() {
      this.$emit('closeModal');
    },
    showCatalog() {
      let dialog = this.$refs.catalog.$refs.content.style;
      if (dialog.justifyContent === '') {
        dialog.justifyContent = 'center';
      }

      this.isVisibleCatalog = true;
    },
    showOfferCall() {
      let call = this.$refs.offercall.$refs.content.style;
      if (call.justifyContent === '') {
        call.justifyContent = 'center';
      }

      this.isVisibleOfferCall = true;
    },
    closeForm() {
      this.isVisibleOfferCall = false;
    },
    closeCatalogForm() {
      this.isVisibleCatalog = false;
    }
  }
};
</script>

<style scoped lang="stylus">
@import '../../components/modals/modals.styl'
</style>