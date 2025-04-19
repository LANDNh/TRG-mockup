<script setup>
import FooterComp from './components/FooterComp.vue';
import NewsComp from './components/NewsComp.vue';
import ContentComp from './components/ContentComp.vue';
</script>

<template>
  <div class="page-container">
    <div class="content">
      <div class="header">
        <span>
          <p>You Don't Know</p>
          <p>What You Don't Know</p>
        </span>
      </div>
      <ContentComp/>
      <NewsComp/>
    </div>
    <FooterComp/>
  </div>
</template>

<style scoped lang="scss">
$font-family: Lato;

.page-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100dvw;
  height: 100dvh;
  margin: 0;
  padding: 0;
  font-family: $font-family;

  .content {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 1080px;
    z-index: 0;
    background: #FFFFFF 0% 0% no-repeat padding-box;
  }

  .header {
    display: grid;
    grid-template-areas: 'a b';
    width: 1920px;
    height: 546px;
    position: relative;
    background: no-repeat url('https://rowmark-ram.s3.amazonaws.com/rowmark_buildingfront.jpg');
    background-size: cover;
    background-position-y: top -14.5em;

    &::before {
      content: '';
      position: absolute;
      inset: 0;
      z-index: 1;
      background-color: rgba(0, 90, 156, .8);
    }

    span {
      grid-area: a;
      justify-self: center;
      align-self: center;
      width: 675px;
      position: relative;
      bottom: 25px;
      right: 25px;
      z-index: 1;
      color: #FFFFFF;
      font: italic normal normal 65px $font-family;

      p {
        margin: 0;
      }
    }
  }
}
</style>
