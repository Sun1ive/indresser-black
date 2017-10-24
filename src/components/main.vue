<template>
  <main>
    <!-- app banner -->
    <app-banner></app-banner>
    <!-- app pains -->
    <app-pains></app-pains>
    <!-- our closes -->
    <app-ourclothes></app-ourclothes>
  </main>
</template>

<script>
import banner from './banner'
import pains from './pains'
import ourclothes from './ourclothes'


export default {
  components: {
    'app-banner': banner,
    'app-pains': pains,
    'app-ourclothes': ourclothes,
  }
}
</script>

<style scoped lang="stylus">

</style>