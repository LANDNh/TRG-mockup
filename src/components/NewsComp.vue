<script setup>
  const newsArr = [0, 1, 2, 3]
</script>

<template>
  <div class="news-container">
    <div class="news-header">
      <p>
        LATEST NEWS
      </p>
    </div>
    <ul class="news-list">
      <li class="news-tile" v-for="i in newsArr" :key="i">
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
    display: flex;
    flex-direction: column;
    max-width: 536px;
    margin: -19rem 260px auto auto;
    background-color: #FCFCFC;
    box-shadow: 0 3px 3px #00000029;
    border-radius: 0 13px 13px 13px;
    overflow: hidden;

    .news-header {
      display: flex;
      align-items: center;
      height: 100px;
      color: #FFFFFF;
      font: italic normal normal clamp(2rem, 5vw, 3.25rem) $font-family;
      background-color: #005A9C;
      border: 4px solid #FFFFFF;
      border-radius: 0 15px 15px 15px;

      p {
        margin-left: 33px;
      }
    }

    @media (max-width: 1800px) {
      margin: auto 2rem;
    }
  }

  .news-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin: 0;
    padding: 25px 0;
    list-style: none;
  }
  .news-tile {
    padding: 0 21px;
    font-size: clamp(.8rem, 2vw, 1rem);
    text-align: left;

    h2 {
      margin: 0;
      padding: 0;
      color: #005A9C;
      font-size: clamp(1.25rem, 3vw, 1.5rem);
      font-weight: normal;
    }

    p {
      margin: 0;
      padding: 0;
      color: #707070;
    }

    button {
      margin: 8px 0 0 0;
      padding: 5px 12px;
      color: #FFFFFF;
      background-color: #075A94;
      border-radius: 2px;
    }
  }
</style>
