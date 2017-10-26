<template>
  <div class="scrolltop" @click="scrollToTop"></div>
</template>

<script>
  export default {
    methods: {
      scrollTop () {
        let offset = window.pageYOffset;
        let scroll = document.querySelector('.scrolltop');
        if (offset >= 300 && !scroll.classList.contains('visible')) {
          scroll.classList.add('visible')
          console.log(1);
        } else if (offset <= 300 && scroll.classList.contains('visible')) {
          scroll.classList.remove('visible')
          console.log(2);
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
  width 60px
  height 60px
  background-color #fff
  border 1px solid #333
  position fixed
  bottom -150px
  right 30px
  border-radius 50%
  cursor pointer
  opacity 0.3
  transition .4s linear
  animation topDown 2s linear infinite alternate
  &:after
    content '\2B06'
    position absolute
    top 50%
    left 50%
    transform translate(-50%,-50%)
    font-size 3rem
  &:hover
    opacity 1
    transition .4s linear
    animation-play-state paused 

.visible
  display block
  bottom 10px
  right 30px

@keyframes topDown {
  from {
    transform translateY(0)
  } to {
    transform translateY(5px)
  }
}
</style>