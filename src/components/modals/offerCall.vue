<template>
<v-container fluid class="formContainer">
  <v-layout justify-center>
    <form class="callForm" action="">
      <input type="text" placeholder="Ваше имя">
      <input type="text" placeholder="Ваш телефон">
      <button class="myBtn" type="submit">Заказать звонок</button>
    </form>
  </v-layout>
</v-container>
</template>

<script>
  export default {
    
  }
</script>

<style scoped lang="stylus">
@import '/form.styl'
</style>