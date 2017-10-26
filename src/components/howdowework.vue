<template>
  <v-container class="containeD" fluid>
    <v-layout justify-center align-center>
      <h2 class="darkgrey">Как мы работаем?</h2>
    </v-layout>
    <v-layout class="layoutContainer" wrap row justify-center align-center>
      <v-flex class="py-4" xs12 sm6 md4 lg4 v-for="(item, i) in items" :key="i">
        <img :src="item.icon" :alt="item.title">
        <p class="mb-0 iconText">{{ item.title }}</p>
        <a href="#" @click.stop.prevent="showDetails(item)">{{ item.button }}</a>
      </v-flex>
    </v-layout>
    <v-dialog ref="dialog" max-width="65vh" v-model="isActive">
      <app-terms @closeModal="closeModal" :currentItem="currentItem"></app-terms>
    </v-dialog>
  </v-container>
</template>

<script>
import terms from './modals/terms';

export default {
  components: {
    'app-terms': terms
  },
  data() {
    return {
      isActive: false,
      items: [
        {
          icon: '/static/makeoffer.png',
          title: 'Оформите заказ',
          button: 'подробнее',
          desc: `В случае если заказ был оформлен после 15:00, в нерабочее время или в выходной день - заказ будет обработан на следующий рабочий день до 10:00.`
        },
        {
          icon: '/static/credit-card.png',
          title: 'Оплатите',
          button: 'подробнее',
          desc: `Безналичный расчет - перевод средств на расчетный счет интернет-магазина InDresser. После оформления заказа менеджер вышлет на вашу электронную почту счет-фактуру с платежными реквизитами. В этом случае, Ваш заказ отправляется сразу после зачисления денег на наш счет. Перевод на карту "Приват Банка" - после оформления Вашего заказа менеджер сообщит вам реквизиты карты, на которую нужно перевести средства. В этом случае, Ваш заказ отправляется сразу после поступления денег на наш счет. Наложенным платежом - оплата производится при получении товара в отделении курьерской службы доставки. За услугу наложенного платежа будет необходимо оплатить 2% от суммы стоимости покупки.`
        },
        {
          icon: '/static/shipped.png',
          title: 'Получите',
          button: 'подробнее',
          desc: `Доставка Вашего заказа по Украине осуществляется ЗА НАШ СЧЕТ курьерскими службами Новая почта и Укрпочта. Время доставка по территории Украины занимает от 1-го до 3-х рабочих дней.`
        },
        {
          icon: '/static/refresh-arrow.png',
          title: 'Возврат',
          button: 'подробнее',
          desc: `В соответствии с п. 1.8 «Правил продажи товаров на заказ и вне офисных или торговых помещений» (Приказ Минэкономики Украины от 19.04.2007 г. № 103), возврат полученного товара допускается в течение 14 календарных дней после его доставки (получение в службе доставки). Если приобретенный в нашем интернет-магазине товар по каким-либо причинам вам не подошел и вы желаете обменять его на другой или же осуществить возврат, то сделать это можно при соблюдении следующих условий: Обмен или возврат товара осуществляется в течение двух недель (14 дней); товар должен сохранить бирки, ярлыки, не иметь следов ношения, использования и т.д.; Покупатель самостоятельно оплачивает доставку возвращаемого товара, стоимость которой устанавливает курьерская служба. Если товар имеет заводской брак, то обратная доставка осуществляется за счет интернет-магазина InDresser. Срок возврата денежных средств установлен в соответствии с «Правилами продажи товаров на заказ и вне офисных или торговых помещений» (Приказ Минэкономики Украины от 19.04.2007 г. № 103) и составляет до 30 календарных дней, считая от даты получения «Продавцом» заполненного «Покупателем» оригинала заявления на возврат товара, которое направляется вместе с товаром.`
        }
      ],
      currentItem: {
        title: '',
        desc: ''
      }
    };
  },
  methods: {
    showDetails(item) {
      this.currentItem.title = item.title;
      this.currentItem.desc = item.desc;
      this.isActive = true;
    },
    closeModal() {
      this.isActive = false;
    }
  }
};
</script>

<style scoped lang="stylus">
.containeD
  min-height: 660px;
  background-image: url('/static/bgwork.png');
  background-color: #fff;
  .layoutContainer
    margin: 0 auto !important;
    .flex
      display: flex;
      justify-content: center;
      flex-flow: column wrap;
      align-items: center;
      margin: 0 3rem;
      img
        padding-bottom: 1.5rem;
      a
        text-decoration: none;
        transition: 0.4s linear;
        &:hover
          transition: 0.4s linear;
          color: red;


@media (max-width: 1024px) 
  .flex 
    margin: 0 !important;
    img 
      padding-bottom: 1rem !important;

@media (max-width: 500px) 
  .container 
    img 
      padding-bottom: 1rem !important;
    h2 
      font-size: 1.5rem;
    p 
      font-size: 1.2rem !important;
    a 
      padding-bottom: 1.5rem;
    

</style>