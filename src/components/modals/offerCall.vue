<template>
<v-container fluid class="formContainer">
  <v-layout justify-center>
    <h3 class="text-xs-center">Получить консультацию</h3>
  </v-layout>
  <v-layout justify-center>
    <form class="callForm" method="POST" action="/static/php/mail.php">
      <input type="text" required name="user_name" placeholder="Ваше имя">
      <input type="number" required name="user_phone" placeholder="Ваш телефон">
      <button class="myBtn" type="submit">Заказать звонок</button>
    </form>
  </v-layout>
</v-container>
</template>


<style scoped lang="stylus">
@import '/form.styl'
</style>