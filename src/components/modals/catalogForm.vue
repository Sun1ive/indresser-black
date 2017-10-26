<template>
  <v-container fluid>
    <form action="" class="form">
      <input type="text" placeholder="Введите Ваш e-mail" required>
      <button class="myBtn" type="submit">Отправить</button>
    </form>
  </v-container>
</template>

<script>
  export default {
    
  }
</script>

<style scoped lang="stylus">
.container
  display flex
  align-items center
  background-color #323232
  min-height 100px
.form
  width 100%
  display flex
  justify-content space-around
  align-items center
  input
    border 1px solid #c0c0c0
    border-radius 6px
    background-color #fff
    min-height 40px
  .myBtn
    background-color #FF2226
    min-height 40px
    min-width 100px
    border-radius 6px
    margin-bottom 0
    color #fff
</style>