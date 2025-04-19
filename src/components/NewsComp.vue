<script setup>
  const newsArr = [0, 1, 2, 3]
</script>

<template>
  <div class="news-container">
    <div>
      <p>
        LATEST NEWS
      </p>
    </div>
    <ul>
      <li class="news-tile" v-for="i in newsArr">
        <h2>News Title</h2>
        <p>Rowmark LLC introduces The Naturals product line, an authentic, nature-inspired, textured engravable sheet product. The Naturals not only look like they came right from the outdoors, but they feel like it too. And just like their real-life counterparts,…</p>
        <button>READ MORE</button>
      </li>
    </ul>
  </div>
</template>

<style scoped lang="scss">
$font-family: Lato;

  .news-container {
    width: 536px;
    height: auto;
    position: absolute;
    top: 80px;
    left: 1106px;
    z-index: 1;
    background-color: #FCFCFC;
    box-shadow: 0 3px 3px #00000029;
    border-radius: 0 13px 13px 13px;

    div {
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      height: 100px;
      color: #FFFFFF;
      font: italic normal normal 47px $font-family;
      background-color: #005A9C;
      border: 4px solid #FFFFFF;
      border-radius: 0 15px 15px 15px;
      text-align: left;

      p {
        margin-left: 33px;
      }
    }
  }

  ul {
    height: 713px;
    margin: 0;
    padding: 25px 0 0 0;
  }
  .news-tile {
    margin-bottom: 15px;
    padding: 0 21px;
    font-size: 14px;
    text-align: left;
    list-style: none;

    h2 {
      margin: 0;
      padding: 0;
      color: #005A9C;
      font-size: 21px;
      font-weight: normal;
    }

    p {
      margin: 0;
      padding: 0;
      color: #707070;
    }

    button {
      margin: 8px 0 0 0;
      color: #FFFFFF;
      background-color: #075A94;
      border-radius: 2px;
    }
  }
</style>
