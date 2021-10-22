<template>
  <section id="post-list">
    <h2>I miei post</h2>
    <PostCard v-for="post in posts" :key="post.id" :post="post" class="my-5" />
  </section>
</template>




<script>
import axios from "axios";
import PostCard from "./PostCard.vue";
export default {
  name: "PostList",
  components: {
    PostCard,
  },
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    getPosts() {
      axios
        .get("http://localhost:8000/api/posts")
        .then((res) => {
          this.posts = res.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
  },
  created() {
    this.getPosts();
  },
};
</script>
