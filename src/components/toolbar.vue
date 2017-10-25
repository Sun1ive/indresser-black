<template>
 <header class="header">
    <v-navigation-drawer dark left temporary hide-overlay v-model="drawer">
      <v-list class="pa-1">
        <v-list-tile avatar class="text-xs-center">
          <img src="/static/logo1.png">
        </v-list-tile>
      </v-list>
      <v-list>
        <v-divider></v-divider>
        <v-list-tile v-for="item in toolbarMenu" :key="item.title" @click="">
          <v-list-tile-action>
            <v-icon medium class="red--text">{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content @click.stop="drawer = false" v-scroll-to="item.scrollTo">
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon medium class="red--text">menu</v-icon>
          </v-list-tile-action>
          <v-list-tile-content @click.stop="drawer = false">
            <v-list-tile-title>Свернуть</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar ref="toolbar" height="73px">
      <v-toolbar-items class="hidden-xs-only">
        <a href="#" v-for="(item, i) in toolbarMenu" :key="i" v-scroll-to="item.scroll">{{ item.title }}</a>
      </v-toolbar-items>
      <v-toolbar-side-icon class="white--text hidden-md-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
  </header>
</template>

<script>
  export default {
    data () {
      return {
        drawer: false,
        toolbarMenu: [
          { title: 'Главная', icon: 'star', scroll: '.header' },
          { title: 'Преимущества', icon: 'star', scroll: '.clothes' },
          { title: 'О Нас', icon: 'star', scroll: '.header' },
          { title: 'Условия', icon: 'star', scroll: '.header' },
          { title: 'Отзывы', icon: 'star', scroll: '.header' },
          { title: 'Контакты', icon: 'star', scroll: '.header' },
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

.toolbar
  background-color #2b2a29
  position static

.fixed
  position fixed
  top 0
  opacity .4
  animation fade 1.3s ease
  transition .4s ease
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
  justify-content center
  align-items center
  min-width 800px
  a
    text-decoration none
    text-transform uppercase
    color #fff
    margin 0 2rem

@media (max-width 960px)
  .toolbar__items
    display none
</style>