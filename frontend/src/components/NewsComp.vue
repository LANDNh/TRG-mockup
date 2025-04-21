<script setup>
import { ref, onMounted } from 'vue'

const articles = ref([])

onMounted(async () => {
  const query = `
    query {
      entries(section: "news") {
        id
        title
        ... on newsEntry_Entry {
          excerpt
        }
      }
    }
  `

  try {
    const res = await fetch(import.meta.env.VITE_API_URL, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ query }),
    })

    const data = await res.json()
    articles.value = data?.data?.entries || []
  } catch (err) {
    console.error('Failed to fetch articles:', err)
  }
})
</script>

<template>
  <div class="news-container">
    <div class="news-header">
      <p>
        LATEST NEWS
      </p>
    </div>
    <ul class="news-list">
      <li class="news-tile" v-for="article in articles" :key="article.id">
        <h2>{{ article.title }}</h2>
        <p>{{ article.excerpt }}</p>
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
  margin: 2rem auto 0 auto;
  position: relative;
  transform: translateY(-25rem);
  background-color: #FCFCFC;
  box-shadow: 0 3px 3px #00000029;
  border-radius: 0 13px 13px 13px;
  overflow: hidden;

  @media (max-width: 1800px) {
    transform: translateY(-18rem);
  }

  @media (max-width: 1350px) {
      margin: 0 2rem;
      transform: none;
    }
}

.news-header {
  display: flex;
  align-items: center;
  height: 100px;
  color: #FFFFFF;
  font: italic normal normal clamp(1.5rem, 5vw, 3.25rem) $font-family;
  background-color: #005A9C;
  border: 4px solid #FFFFFF;
  border-radius: 0 15px 15px 15px;

  p {
    margin-left: 33px;
  }

  @media (max-width: 450px) {
    height: 60px;
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
  font-size: clamp(.7rem, 2vw, 1rem);
  text-align: left;

  h2 {
    margin: 0;
    padding: 0;
    color: #005A9C;
    font-size: clamp(1.15rem, 3vw, 1.5rem);
    font-weight: normal;
  }

  p {
    margin: 0;
    padding: 0;
    color: #707070;
  }

  button {
    margin-top: 8px;
    padding: 5px 12px;
    color: #FFFFFF;
    background-color: #075A94;
    border-radius: 2px;
  }
}
</style>
