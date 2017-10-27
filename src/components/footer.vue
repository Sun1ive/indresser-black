<template>
  <footer>
    <v-container fluid>
      <v-layout align-center row wrap class="layoutContainer">
        <v-flex xs12 sm6 md8 class="white--text text-lg-left text-md-left text-sm-left text-xs-center">&copy; {{ new Date().getFullYear() }} inDresser</v-flex>
        <v-flex xs12 sm6 md4>
          <ul class="socials">
            <!-- <li><a href="#"><i class="fa fa-youtube" target="_blank"></i></a></li> -->
            <li><a href="https://www.facebook.com/indresser.clothing/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <!-- <li><a href="#"><i class="fa fa-twitter" target="_blank"></i></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-google-plus" target="_blank"></i></a></li> -->
            <li><a href="https://www.instagram.com/indresser/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </v-flex>
      </v-layout>
    </v-container>
  </footer>
</template>

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
  justify-content flex-end
  li
    list-style none
    margin 0 1rem
    a
      color #fff
      font-size 2.5rem
      transition .4s linear
      &:hover
        color #ED272A
        transition .4s linear

@media (max-width 400px)
  .socials
    li
      a
        font-size 2rem
</style>