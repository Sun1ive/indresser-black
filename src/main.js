import Vue from 'vue';
import VueScroll from 'vue-scrollto';
import './stylus/main.styl';
import App from './App.vue';
import {
  Vuetify,
  VApp,
  VNavigationDrawer,
  VList,
  VIcon,
  VGrid,
  VToolbar,
  VDivider,
  VCarousel,
  VDialog,
  transitions
} from 'vuetify';

Vue.use(Vuetify, {
  components: {
    VApp,
    VNavigationDrawer,
    VList,
    VIcon,
    VGrid,
    VToolbar,
    VDivider,
    VCarousel,
    VDialog,
    transitions
  }
});
Vue.use(VueScroll, {
  container: 'body',
  duration: 500,
  offset: -100,
  cancelable: true,
  easing: 'linear'
});

new Vue({
  el: '#app',
  render: h => h(App)
});
