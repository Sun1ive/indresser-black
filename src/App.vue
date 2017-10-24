<template>
  <v-app light>
    <!-- toolbar -->
    <app-toolbar></app-toolbar>
  </v-app>
</template>

<script>
import toolbar from './components/toolbar'

export default {
  components: {
    'app-toolbar': toolbar
  }
}
</script>

<style lang="stylus">
@import './stylus/main'

body
  font-family OpenSans

</style>
