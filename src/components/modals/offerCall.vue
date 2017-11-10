<template>
<v-container fluid class="formContainer">
  <v-layout justify-center>
    <h3 class="text-xs-center">Получить консультацию и заказать</h3>
  </v-layout>
  <v-layout justify-center>
    <form class="callForm form" @submit.prevent="offerCall">
      <input type="text" v-model="userData.name" required placeholder="Ваше имя">
      <input type="text" v-model="userData.phone" required placeholder="Ваш телефон">
      <button class="myBtn" type="submit">Заказать звонок</button>
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
        name: '',
        phone: ''
      }
    };
  },
  methods: {
    offerCall() {
      let validate = new RegExp('^[0-9]+$');
      if (validate.test(this.userData.phone)) {
        Email.send(
          `coats@indresser.com`,
          'info@indresser.com',
          // 'sunliveua@gmail.com',
          'Заказ звонка с сайта dresses.indresser.com',
          `Пользователь: ${this.userData.name},
          Телефон: ${this.userData.phone}`,
          'mail.adm.tools',
          'coats@indresser.com',
          '3DLao3x1AC8t'
        );
        this.userData = {
          name: '',
          phone: ''
        };
        this.$emit('closeForm');
      } else {
        alert('Введите корректный телефон');
        this.userData.phone = '';
      }
    },
    closeForm() {
      this.$emit('closeForm');
    }
  }
};
</script>

<style scoped lang="stylus">
@import '/form.styl';
</style>