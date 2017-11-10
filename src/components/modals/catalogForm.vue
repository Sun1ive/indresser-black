<template>
  <v-container class="formContainer" fluid>
    <v-layout justify-center>
      <h3>Перейти к каталогу</h3>
    </v-layout>
    <v-layout justify-center row>
      <form class="form">
        <input required type="email" placeholder="Введите Ваш e-mail">
        <button class="myBtn" type="submit">Перейти</button>
        <div class="close" @click="closeForm"></div>
      </form>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    methods: {
      closeForm() {
        this.$emit('closeForm');
      }
    }
  }
</script>


<style scoped lang="stylus">
@import '/form.styl'
  input
    margin-right 1rem
    padding-left 0.5rem
</style>