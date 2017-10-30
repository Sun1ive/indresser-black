<template>
  <v-container class="bannerContainer" fluid>
    <v-layout align-center class="banner">
      <v-flex xs12 sm12 md10 lg8 class="text-xs-center">
        <img src="/static/logobanner.png" alt="logo">
      </v-flex>
    </v-layout>
    <v-layout justify-end class="text">
      <v-flex class="blackText text-xs-center">Мы знаем, как дорого время</v-flex>
    </v-layout>
    <div class="arrowDown">
      <v-icon>keyboard_arrow_down</v-icon>
    </div>
  </v-container>
</template>


<style scoped lang="stylus">
.bannerContainer {
  background-image: url('/static/bannerbg.png');
  height: 90vh;
  background-position: right center;
  overflow: hidden;

  .banner {
    min-height: inherit;
    max-width: 1400px;
    min-height: 80vh;
    margin: 0 auto;

    img {
      width: 100%;
      max-width: 722px;
      height: 117px;
    }
  }
}

.arrowDown {
  position: absolute;
  bottom: 10%;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);

  i {
    font-size: 8rem;
    color: #c0c0c0;
    -webkit-animation: cool 2s linear alternate infinite;
            animation: cool 2s linear alternate infinite;
    cursor: pointer;
  }
}

@-webkit-keyframes cool {
  from {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
    opacity: 0.3;
  }

  to {
    -webkit-transform: translateY(10px);
            transform: translateY(10px);
    opacity: 1;
  }
}

@keyframes cool {
  from {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
    opacity: 0.3;
  }

  to {
    -webkit-transform: translateY(10px);
            transform: translateY(10px);
    opacity: 1;
  }
}

.text {
  max-width: 1400px;
  margin: 0 auto;
}

.blackText {
  max-width: 562px;
  min-height: 40px;
  background-color: #2b2a29;
  text-transform: uppercase;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-family: 'OpenSans-Semibold', Arial, Helvetica, sans-serif;
  color: #fff;
  font-size: 2.4rem;
}

@media (max-width: 1400px) {
  .blackText {
    font-size: 1.8rem;
    max-width: 420px;
  }

  .text {
    margin-right: 2rem;
  }
}

@media (max-width: 1024px) {
  .bannerContainer {
    background: url('/static/bannerbg2.png') no-repeat center center;
  }
}
</style>