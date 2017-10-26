<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <h2>Кто мы такие</h2>
    </v-layout>
    <v-layout column wrap class="layoutContainer">
      <p align="justify" class="text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
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

@media (max-width 1024px)
  .container
    min-height 550px
</style>