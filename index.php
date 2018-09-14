<?php get_header(); ?>
  <div class="white-wrap">
    <div id="app">
      <router-view></router-view>
    </div>
  </div>

  <template id='posts-template'>
    <div>
      <div v-for='post in posts'>
        {{ post.title.rendered }}
        {{ post._embedded.author[0].name }}
      </div>
    </div> 
  </template>

  <template id='articles-template'>
    <div>
    <div v-for='article in articles'>
        <div v-html="article.content.rendered"></div>
    </div>
    </div> 
  </template>
<?php get_footer(); ?>