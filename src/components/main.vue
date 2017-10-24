<template>
  <main>
    <!-- app banner -->
    <app-banner></app-banner>
    <!-- app pains -->
    <app-pains></app-pains>
  </main>
</template>

<script>
import banner from './banner'
import pains from './pains'


export default {
  components: {
    'app-banner': banner,
    'app-pains': pains,
  }
}
</script>

<style scoped lang="stylus">

</style>