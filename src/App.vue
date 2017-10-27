<template>
  <v-app light>
    <!-- toolbar -->
    <app-toolbar></app-toolbar>
    <!-- main -->
    <app-main></app-main>
    <!-- footer -->
    <app-footer></app-footer>

    <!-- widgets -->
    <app-scrolltop></app-scrolltop>
  </v-app>
</template>

<script>
import toolbar from './components/toolbar'
import main from './components/main'
import footer from './components/footer'
import scrolltop from './components/widgets/scrolltop'


export default {
  components: {
    'app-toolbar': toolbar,
    'app-main': main,
    'app-footer': footer,
    'app-scrolltop': scrolltop,
  },
  mounted ()
}
</script>

<style lang="stylus">
@import './stylus/main'

body
  font-family 'OpenSans', Arial, Helvetica, sans-serif

.container
  padding 0
</style>
