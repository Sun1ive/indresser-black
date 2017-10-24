<template>
 <header class="header">
    <v-navigation-drawer right temporary hide-overlay v-model="drawer">
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
    <v-toolbar>
      <v-toolbar-items>
        <v-btn flat v-for="(item, i) in toolbarMenu" :key="i" v-scroll-to="item.scroll">{{ item.title }}</v-btn>
      </v-toolbar-items>
      <v-toolbar-side-icon class="hidden-sm-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
  </header>
</template>

<script>
  export default {
    data () {
      return {
        drawer: false,
        toolbarMenu: [
          { title: 'Главная', icon: 'star', scroll: 'header' },
          { title: 'Преимущества', icon: 'star', scroll: 'header' },
          { title: 'О Нас', icon: 'star', scroll: 'header' },
          { title: 'Условия', icon: 'star', scroll: 'header' },
          { title: 'Отзывы', icon: 'star', scroll: 'header' },
          { title: 'Контакты', icon: 'star', scroll: 'header' },
        ]
      }
    }
  }
</script>

<style scoped lang="stylus">
.toolbar
  background-color #2b2a29

.toolbar__items
  width 100%
  justify-content space-around
</style>