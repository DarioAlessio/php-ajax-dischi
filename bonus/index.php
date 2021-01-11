<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- Axios -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div id="app">

      <div class="header">
        <img src="https://www.scdn.co/i/_global/twitter_card-default.jpg">
        <button class="button" @click="clear">CLEAR</button>
        <button class="button" v-for="track in database" @click="update(track.author)">
                  {{ track.author }}
        </button>
      </div>

      <div v-for="track in database" class="main">

        <img class="image" :src="track.poster">
        <div class="title">
          {{track.title}}
        </div>
        <div class="author">
          {{track.author}}
        </div>
        <div class="year">
          {{track.year}}
        </div>

      </div>

    </div>
  <script src="script.js"></script>
  </body>
</html>
