<template>
  <v-container class="formContainer" fluid>
    <v-layout justify-center>
      <h3>Заказать каталог</h3>
    </v-layout>
    <v-layout justify-center row>
      <form action="/static/php/catalog.php" method="POST" class="form">
        <input required type="email" name="user_email" placeholder="Введите Ваш e-mail" required>
        <button class="myBtn" type="submit">Отправить</button>
      </form>
    </v-layout>
  </v-container>
</template>


<style scoped lang="stylus">
@import '/form.styl'
</style>