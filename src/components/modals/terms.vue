<template>
  <v-container class="modal">
    <v-layout column justify-center align-center>
      <h2 class="h3Modal mb-0">{{ currentItem.title }}</h2>
      <p align="justify" class="mb-0">{{ currentItem.desc }}</p>
    </v-layout>
    <div class="close" @click.stop="closeModal"></div>
  </v-container>
</template>

<script>
  export default {
    props: ['currentItem'],
    methods: {
      closeModal () {
        this.$emit('closeModal');
      }
    }
  }
</script>

<style scoped lang="stylus">
@import '../../components/modals/modals.styl'
</style>