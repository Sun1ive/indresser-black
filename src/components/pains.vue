<template>
  <v-container fluid>
    <v-layout align-center justify-center column class="layoutContainer">
      <v-flex xs12 class="text">
        <h2 class="text-xs-center text-lg-left text-md-left text-sm-left">Усталость подождет</h2>
        <p align="justify">Большинство современных девушек находятся в постоянной гонке за своими целями. Кто-то видит большое будущее своей собственной компании, кто-то является отличным исполнителем и упорно продвигается по карьерной лестнице, кто-то без остановки вкладывает все силы в свою спортивную форму, а кто-то не видит свой день без любимых детей. В этот момент срабатывает инстинкт, и каждая себе говорит: «Усталость подождет, ведь нужно сделать так много…» И так каждый день, каждую неделю, каждый месяц…</p>
      </v-flex>
      <v-flex xs12 class="text">
        <h2 class="text-xs-center">Никогда не поздно</h2>
        <p align="justify">Зачастую мы жертвуем собой, так как откладываем решение «своих» задач, в пользу собственного бизнеса или для реализации целей руководителей. Но когда наступает пауза, мы понимаем, что ушло самое ценное что имеем – время. Мы теряем время, часть которого нужно тратить на себя и ни на кого больше. Фактически мы забываем о том, ради чего мы ходим на работу и отдаем себя. Иногда человек и не замечает, как мимо проходит лето, как меняются вокруг люди, как меняется стиль коллег. Никогда не поздно уделить время для себя</p>
      </v-flex>
      <v-flex xs12 class="text">
        <h2 class="text-lg-right text-sm-right text-md-right text-xs-center">Есть решение</h2>
        <p align="justify">Уже плотно в нашу жизнь вошли современные технологии. Они позволяют тебе общаться, сокращать время обслуживания в салонах, магазинах. Технологии применяются и в производствах, чтобы улучшить качество предоставляемых продуктов, услуг, сервисов. Все ускоряется и улучшается. Все это также касается и тебя. Ты также ускоряешься и улучшаешься. Но как это сделать, для постоянного поддержания твоего образа, стиля и при этом получить качественную и удобную одежду, не потратив на это много времени? Есть решение, которым Вы заинтересуетесь</p>
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
    font-size 1.4rem
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
      font-size .9rem
</style>