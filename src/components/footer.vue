<template>
  <footer>
    <v-container fluid>
      <v-layout align-center row wrap class="layoutContainer">
        <v-flex xs12 sm6 md8 class="white--text">&copy; {{ new Date().getFullYear() }} inDresser</v-flex>
        <v-flex xs12 sm6 md4>
          <ul class="socials">
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </v-flex>
      </v-layout>
    </v-container>
  </footer>
</template>

<script>
  export default {
    
  }
</script>

<style scoped lang="stylus">
.container
  background-color #2a2a2a
  .layoutContainer
    min-height 99px
    .white--text
      font-size 1.1rem
.socials
  display flex
  padding 0
  justify-content space-around
  li
    list-style none
    a
      color #fff
      font-size 2.5rem
</style>