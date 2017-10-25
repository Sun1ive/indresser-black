<template>
  <v-container class="modal">
    <v-layout column justify-center align-center>
      <h2 class="mb-0 text-xs-center">{{ currentItem}} </h2>
      <p class="mb-0"></p>
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
    },
  }
</script>

<style scoped lang="stylus">
@import '../../components/modals/modals.styl'

</style>