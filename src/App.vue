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
  height: 100vh;
  margin: 0;
  padding: 0;
  font-family: $font-family;

  .content {
    flex: 1;
    display: flex;
    flex-direction: column;
    width: 100%;
    position: relative;
    z-index: 0;
    background: #FFFFFF;
  }

  .header {
    display: grid;
    grid-template-areas: 'a b';
    width: 100%;
    height: 100%;
    position: relative;
    background-image: url('https://rowmark-ram.s3.amazonaws.com/rowmark_buildingfront.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

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
      width: 100%;
      max-width: 675px;
      position: relative;
      bottom: 25px;
      right: 25px;
      z-index: 1;
      color: #FFFFFF;
      font: italic normal normal clamp(1.5rem, 5vw, 4rem) $font-family;

      p {
        margin: 0;
      }
    }

    @media (max-width: 1350px) {
      padding-bottom: 600px;
      background-size: auto;
      background-position-y: 0;
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
    margin-top: -175px;
    padding: 1rem;
    z-index: 2;
    box-sizing: border-box;

    @media (max-width: 1350px) {
      flex-direction: column;
      align-items: center;
      margin-top: -140px;
    }
  }
}
</style>
