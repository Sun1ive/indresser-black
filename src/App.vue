<template>
  <v-app light>
    <!-- toolbar -->
    <app-toolbar></app-toolbar>
    <!-- main -->
    <app-main></app-main>
    <!-- footer -->
    <app-footer></app-footer>
  </v-app>
</template>

<script>
import toolbar from './components/toolbar'
import main from './components/main'
import footer from './components/footer'

export default {
  components: {
    'app-toolbar': toolbar,
    'app-main': main,
    'app-footer': footer,
  }
}
</script>

<style lang="stylus">
@import './stylus/main'

body
  font-family OpenSans

.container
  padding 0
</style>
