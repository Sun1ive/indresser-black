<template>
  <v-app light>
    <!-- toolbar -->
    <app-toolbar></app-toolbar>
    <!-- main -->
    <app-main></app-main>
  </v-app>
</template>

<script>
import toolbar from './components/toolbar'
import main from './components/main'

export default {
  components: {
    'app-toolbar': toolbar,
    'app-main': main,
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
