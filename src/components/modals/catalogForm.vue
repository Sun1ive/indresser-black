<template>
  <v-container class="formContainer" fluid>
    <v-layout justify-center>
      <h3>Заказать каталог</h3>
    </v-layout>
    <v-layout justify-center row>
      <form action="" class="form">
        <input type="text" placeholder="Введите Ваш e-mail" required>
        <button class="myBtn" type="submit">Отправить</button>
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