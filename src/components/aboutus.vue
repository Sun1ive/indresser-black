<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2>Кто мы такие</h2>
    </v-layout>
    <v-layout column wrap class="layoutContainer">
      <p align="justify" class="text">Студия дизайнерской женской одежды inDresser именно для Вас</p>
    </v-layout>
  </v-container>
</template>


<style scoped lang="stylus">
.container
  background-image url('/static/bgAbout.png')
  min-height 525px
  p
    text-indent 1.5rem
    color #8e8e8e
    text-align center

@media (max-width 1024px)
  .container
    min-height 550px
</style>