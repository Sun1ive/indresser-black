<template>
  <main>
    <!-- app banner -->
    <section class="banner">
      <app-banner></app-banner>
    </section>
    <!-- app pains -->
    <section class="pains">
      <app-pains></app-pains>
    </section>
    <!-- our closes -->
    <section class="clothes">
      <app-ourclothes></app-ourclothes>       
    </section>
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