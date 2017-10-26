<template>
  <v-container fluid>
    <v-layout align-center justify-center column class="layoutContainer">
      <v-flex xs12 class="text">
        <h2 class="text-xs-center text-lg-left text-md-left text-sm-left">Усталость подождет</h2>
        <p align="justify">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы</p>
      </v-flex>
      <v-flex xs12 class="text">
        <h2 class="text-xs-center">Усталость подождет</h2>
        <p align="justify">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы</p>
      </v-flex>
      <v-flex xs12 class="text">
        <h2 class="text-lg-right text-sm-right text-md-right text-xs-center">Усталость подождет</h2>
        <p align="justify">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы</p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<style scoped lang="stylus">
.container
  height 770px
  background-image url('/static/pain.png')
  display flex
  align-items center
  margin-top -5px
  h2
    padding 2rem 0
  p
    font-size 1.6rem
    color #8e8e8e
    line-height 1.2
    margin-bottom 0

@media (max-width 1024px)
  .layoutContainer
    max-width: 700px
    p
      font-size: 1.2rem
    h2
      font-size: 1.4rem
      padding 1rem 0
    .text
      font-size: 1.2rem
      line-height: 2rem

    .iconText
      font-size: 1.3rem

@media (max-width: 700px)
  .layoutContainer
    max-width 500px
    p
      font-size: 1.1rem
    h2
      font-size: 1.3rem
      padding 1rem

@media (max-width: 480px)
  .container
    background-image url('/static/480/480bgpain.png')
    height 770px
  .layoutContainer
    max-width: 380px
    p 
      font-size: 1.05rem
@media (max-width: 380px)
  .layoutContainer
    max-width 260px
    h2
      font-size 1.02rem
      padding .3rem 0
    p
      font-size 1rem
</style>