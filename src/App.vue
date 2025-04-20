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
      <div class="main-body">
        <ContentComp/>
        <NewsComp/>
      </div>
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
  min-height: 100vh;
  margin: 0;
  padding: 0;
  font-family: $font-family;

  .content {
    flex: 1;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 0;
    background: #FFFFFF;
  }

  .header {
    display: flex;
    align-items: flex-end;
    justify-content: start;
    width: 100%;
    aspect-ratio: 16 / 4.4;
    position: relative;
    background-image: url('https://rowmark-ram.s3.amazonaws.com/rowmark_buildingfront.jpg');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position-y: top -14.7rem;
    overflow: hidden;

    &::before {
      content: '';
      position: absolute;
      inset: 0;
      z-index: 1;
      background-color: rgba(0, 90, 156, .8);
    }

    span {

      width: 100%;
      max-width: 675px;
      position: relative;
      margin: 0 0 24.7vh clamp(26vh, 10vh, 33vh);
      z-index: 1;
      color: #FFFFFF;
      font: italic normal normal clamp(.25rem, 5vw, 4rem) $font-family;

      p {
        margin: 0;
      }

      @media (max-width: 1350px) {
        margin: auto;
      }

    }

    @media (max-width: 1800px) {
      background-position-y: top -10.7rem;
      }

    @media (max-width: 1350px) {
      background-position-y: top -8.7rem;
    }

    @media (max-width: 1000px) {
      background-position-y: top -6.7rem;
    }

    @media (max-width: 830px) {
      background-position-y: top -5.7rem;
    }

    @media (max-width: 680px) {
      background-position-y: top -4.2rem;

    }

    @media (max-width: 450px) {
      background-position-y: top -2.7rem;

    }
  }

  .main-body {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: flex-start;
    gap: 2rem;
    width: 100%;
    max-width: 1920px;
    margin-top: -50vh;
    margin-bottom: 4rem;
    z-index: 2;
    box-sizing: border-box;

    @media (max-width: 1350px) {
      flex-direction: column;
      align-items: center;
      margin-top: 0;
    }

    @media (max-width: 450px) {
      gap: .5rem;
    }
  }
}
</style>
