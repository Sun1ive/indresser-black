<template>
  <div class="scrolltop" @click="scrollToTop">
    <v-icon>keyboard_arrow_up</v-icon>
  </div>
</template>

<script>
  export default {
    methods: {
      scrollTop () {
        let offset = window.pageYOffset;
        let scroll = document.querySelector('.scrolltop');
        if (offset >= 300 && !scroll.classList.contains('visible')) {
          scroll.classList.add('visible')
        } else if (offset <= 300 && scroll.classList.contains('visible')) {
          scroll.classList.remove('visible')
        }
      },
      scrollToTop () {
        window.scrollTo(0,0)
      }
    },
    created () {
      window.addEventListener('scroll', this.scrollTop)
    },
    beforeDestroy () {
      window.removeEventListener('scroll', this.scrollTop)
    }
  }
</script>

<style scoped lang='stylus'>
.scrolltop
  width 70px
  height 70px
  background-color #fff
  border 1px solid #c0c0c0
  position fixed
  bottom -150px
  right 30px
  border-radius 50%
  cursor pointer
  opacity 0.3
  transition .4s linear
  animation topDown 2s linear infinite alternate
  .icon
    position absolute
    top 50%
    left 50%
    transform translate(-50%,-50%)
    font-size 5rem
  &:hover
    opacity 1
    transition .4s linear
    animation-play-state paused 

.visible
  display block
  bottom 9%
  right 30px

@keyframes topDown {
  from {
    transform translateY(0)
  } to {
    transform translateY(5px)
  }
}

@media (max-width 400px)
  .scrolltop
    height 65px
    width 65px
  .visible
    bottom 11%
</style>