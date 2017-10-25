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
    <!-- why us -->
    <section class="whyus">
      <app-whyus></app-whyus>
    </section>
    <!-- about us -->
    <section class="aboutus">
      <app-aboutus></app-aboutus>
    </section>
    <!-- how do we work -->
    <section class="work">
      <app-howdowework></app-howdowework>
    </section>
    <!-- guarantee -->
    <section class="guarantee">
      <app-guarantee></app-guarantee>
    </section>
    <!-- reviews -->
    <section class="reviews">
      <app-reviews></app-reviews>
    </section>
    <!-- form -->
    <section class="form">
      <app-form></app-form>
    </section>
    <!-- gmap -->
    <section class="gmap">
      <app-gmap></app-gmap>
    </section>
  </main>
</template>

<script>
import banner from './banner'
import pains from './pains'
import ourclothes from './ourclothes'
import whyus from './whyus'
import aboutus from './aboutus'
import howdowework from './howdowework'
import guarantee from './guarantee'
import reviews from './reviews'
import form from './form'
import gmap from './gmap'


export default {
  components: {
    'app-banner': banner,
    'app-pains': pains,
    'app-ourclothes': ourclothes,
    'app-whyus': whyus,
    'app-aboutus': aboutus,
    'app-howdowework': howdowework,
    'app-guarantee': guarantee,
    'app-reviews': reviews,
    'app-form': form,
    'app-gmap': gmap,
  }
}
</script>

<style scoped lang="stylus">

</style>