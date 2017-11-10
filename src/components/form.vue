<template>
  <v-container fluid class="formContainer">
    <v-layout justify-center>
      <h2 class="darkgrey text-xs-center">Свяжитесь с нами</h2>
    </v-layout>
    <v-layout justify-center class="layoutContainer">
      <form class="form" @submit.prevent="feedback">
        <input required type="text" v-model="userData.name" placeholder="Имя">
        <input required type="email" v-model="userData.email" placeholder="e-mail">
        <input required type="text" v-model="userData.topic" placeholder="Тема">
        <textarea required  v-model="userData.message"placeholder="Сообщение..." cols="20" rows="8"></textarea>
        <button type="submit">Отправить</button>
      </form>
    </v-layout>

    <v-dialog ref="thanks" v-model="drawer" max-width="500">
      <app-thanks @closeThanks="closeThanks"></app-thanks>
    </v-dialog>
  </v-container>
</template>

<script>
import thanks from './modals/thanks';

export default {
  components: {
    'app-thanks': thanks
  },
  data() {
    return {
      drawer: false,
      userData: {
        name: '',
        email: '',
        topic: '',
        message: ''
      }
    };
  },
  methods: {
    feedback() {
      Email.send(
        `coats@indresser.com`,
        // 'info@indresser.com',
        'sunliveua@gmail.com',
        'Заявка с формы обратной связи сайта dresses.indresser.com',
        `Пользователь: ${this.userData.name},
        e-mail: ${this.userData.email},
        Тема: ${this.userData.topic},
        Сообщения: ${this.userData.message}`,
        'mail.adm.tools',
        'coats@indresser.com',
        '3DLao3x1AC8t'
      );
      this.userData = {
        name: '',
        email: '',
        topic: '',
        message: ''
      };
      let vm = this;
      function showThanks() {
        vm.drawer = true;
        if (vm.$refs.thanks.$refs.content.style.justifyContent !== 'center') {
          vm.$refs.thanks.$refs.content.style.justifyContent = 'center';
        }
      }
      showThanks();
    },
    closeThanks() {
      this.drawer = false;
    }
  }
};
</script>


<style scoped lang="stylus">
.formContainer
  min-height 510px
  background-image url('/static/bgAbout1.png')
  h2
    color #fff
.form
  display flex
  flex-flow column wrap
  min-width 600px
  input
  textarea
    background-color #fff
    padding 0.3rem 1.2rem
    margin 0.3rem 0
    border 2px solid #d5d5d5
    width 100%
  button
    margin-bottom 6rem
    min-height 45px
    background-color #FF2226
    text-transform uppercase
    color #fff
    font-size 1.3rem
    margin-top .5rem

@media (max-width: 600px)
  .form
    margin 0 1rem
    max-width 400px
    min-width 400px


@media (max-width: 400px)
  .formContainer
    h2
      font-size 1.5rem
  .form
    max-width 280px
    min-width 280px


</style>