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
    <v-dialog ref="stock" v-model="stock" max-width="600">
      <app-stock @close="close"></app-stock>
    </v-dialog>
  </v-app>
</template>

<script>
import toolbar from './components/toolbar'
import main from './components/main'
import footer from './components/footer'
import scrolltop from './components/widgets/scrolltop'
import stock from './components/modals/stock'


export default {
  components: {
    'app-toolbar': toolbar,
    'app-main': main,
    'app-footer': footer,
    'app-scrolltop': scrolltop,
    'app-stock': stock,
  },
  data () {
    return {
      stock: false
    }
  },
  methods: {
    close () {
      this.stock = false
    }
  },
  mounted () {
    setTimeout (() => {
      this.$refs.stock.$refs.content.style.justifyContent = 'center'
      this.stock = true
    }, 1000)
  }
}
</script>

<style lang="stylus">
@import './stylus/main'

body
  font-family 'OpenSans', Arial, Helvetica, sans-serif

.container
  padding 0
</style>
