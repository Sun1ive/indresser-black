<template>
 <header class="header">
    <v-navigation-drawer dark left temporary hide-overlay v-model="drawer">
      <v-list class="pa-1">
        <v-list-tile avatar class="text-xs-center">
          <img style="width: 100%" src="/static/222.png">
        </v-list-tile>
      </v-list>
      <v-list>
        <v-divider></v-divider>
        <v-list-tile v-for="item in toolbarMenu" :key="item.title" @click="">
          <!-- <v-list-tile-action>
            <v-icon medium class="red--text">{{ item.icon }}</v-icon>
          </v-list-tile-action> -->
          <v-list-tile-content @click.stop="drawer = false" v-scroll-to="item.scroll">
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="">
          <!-- <v-list-tile-action>
            <v-icon medium class="red--text">menu</v-icon>
          </v-list-tile-action> -->
          <v-list-tile-content @click.stop="drawer = false">
            <v-list-tile-title>Свернуть</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar ref="toolbar" height="73px">
      <v-toolbar-items class="hidden-xs-only">
        <button class="myBtn" @click.stop="showCatalog">Получить весь каталог</button>
        <a href="#" v-for="(item, i) in toolbarMenu" :key="i" v-scroll-to="item.scroll">{{ item.title }}</a>
      </v-toolbar-items>
      <v-toolbar-side-icon class="white--text hidden-md-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
    <v-dialog ref="catalog" max-width="60vh" v-model="isVisisbleCatalog">
      <app-catalog></app-catalog>
    </v-dialog>
  </header>
</template>

<script>
import catalog from './modals/catalogForm'

  export default {
    components: {
      'app-catalog': catalog
    },
    data () {
      return {
        drawer: false,
        isVisisbleCatalog: false,
        toolbarMenu: [
          { title: 'Главная', icon: 'star', scroll: '.header' },
          { title: 'Преимущества', icon: 'star', scroll: '.pains' },
          { title: 'О Нас', icon: 'star', scroll: '.aboutus' },
          { title: 'Условия', icon: 'star', scroll: '.work' },
          { title: 'Отзывы', icon: 'star', scroll: '.reviews' },
          { title: 'Контакты', icon: 'star', scroll: '.request' },
        ]
      }
    },
    methods: {
      fixed () {
        let offset = window.pageYOffset;
        let toolbar = document.querySelector('.toolbar');
        if (offset >= 250 && !toolbar.classList.contains('fixed')) {
          toolbar.classList.add('fixed');
        } else if ( offset <= 250 && toolbar.classList.contains('fixed')) {
          toolbar.classList.remove('fixed');
        }
      },
      showCatalog () {
        this.isVisisbleCatalog = true
        let dialog = this.$refs.catalog.$refs.content.style;
        if (dialog.justifyContent === '') { dialog.justifyContent = 'center' }
      }
    },
    created () {
      window.addEventListener('scroll', this.fixed)
    },
    beforeDestroy () {
      window.removeEventListener('scroll', this.fixed)
    }
  }
</script>

<style scoped lang="stylus">
.header
  background-color #2b2a29 + 50%
  z-index 3

.toolbar
  background-color #2b2a29
  position static
  display none

.fixed
  position fixed
  display block
  top 0
  opacity .4
  animation fade 1.3s ease
  transition .4s ease
  a
    transition .4s linear
    &:hover
      transition .4s linear
      color #ED272A
  &:hover
    transition .4s ease
    opacity  1

@keyframes fade {
  from {
    opacity 0
  } to {
    opacity .4
  }
}


.toolbar__items
  width 100%
  align-items center
  justify-content center
  min-width 800px
  a
    text-decoration none
    text-transform uppercase
    color #fff
    margin 0 2rem
    font-family 'OpenSans-Semibold', Arial, Helvetica, sans-serif

@media (max-width 960px)
  .toolbar__items
    display none

.myBtn
  background-color: #917438
  color #fff
  width 100%
  max-width 300px
  margin-bottom: 0
  padding .4rem 0
  border-radius: 6px
  font-family: 'OpenSans-Semibold', Arial, Helvetica, sans-serif
  font-size: 1.3rem
  text-transform uppercase
</style>