<template>
  <v-container class="formContainer" fluid>
    <v-layout justify-center>
      <h3>Перейти к каталогу</h3>
    </v-layout>
    <v-layout justify-center row>
      <form class="form" @submit.prevent="goToCatalog">
        <input required v-model.lazy="userData.email" type="email" placeholder="Введите Ваш e-mail">
        <button class="myBtn" type="submit">Перейти</button>
        <div class="close" @click="closeForm"></div>
      </form>
    </v-layout>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      userData: {
        email: ''
      }
    };
  },
  methods: {
    closeForm() {
      this.$emit('closeForm');
    },
    goToCatalog() {
      Email.send(
        `coats@indresser.com`,
        // 'info@indresser.com',
        'sunliveua@gmail.com',
        'Перешел на каталог с dresses.indresser.com',
        `Пользователь: ${this.userData.email}
        Перешел на каталог`,
        'mail.adm.tools',
        'coats@indresser.com',
        '3DLao3x1AC8t'
      );

      if (this.userData.email !== undefined && this.userData.email !== '') {
        setTimeout(() => {
          window.open('https://dresses.indresser.com/catalog.pdf', '_blank');
        }, 250);
      } else {
        alert('Пожалуйста введите корректный e-mail');
      }

      this.userData.email = '';
      this.$emit('closeForm');
    }
  }
};
</script>


<style scoped lang="stylus">
@import '/form.styl';

input
  margin-right: 1rem
  padding-left: 0.5rem
</style>