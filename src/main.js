import Vue from 'vue';
import VueScroll from 'vue-scrollto';
import './stylus/main.styl';
import App from './App.vue';
import {
  Vuetify,
  VApp,
  VNavigationDrawer,
  // VFooter,
  VList,
  // VBtn,
  VIcon,
  VGrid,
  VToolbar,
  VDivider,
  VCarousel,
  transitions
} from 'vuetify';

Vue.use(Vuetify, {
  components: {
    VApp,
    VNavigationDrawer,
    // VFooter,
    VList,
    // VBtn,
    VIcon,
    VGrid,
    VToolbar,
    VDivider,
    VCarousel,
    transitions
  }
});
Vue.use(VueScroll, {
  container: 'body',
  duration: 500,
  offset: 0,
  cancelable: true,
  easing: 'ease'
});

new Vue({
  el: '#app',
  render: h => h(App)
});
