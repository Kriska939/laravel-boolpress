<template>
  <section id="post-list">
    <h2>I miei post</h2>
    <PostCard v-for="post in posts" :key="post.id" :post="post" class="my-5" />
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a
            class="page-link"
            v-if="pagination.currentPage > 1"
            @click="getPosts(pagination.currentPage - 1)"
            >Precedente</a
          >
        </li>

        <li class="page-item">
          <a
            class="page-link"
            v-if="pagination.lastPage > pagination.currentPage"
            @click="getPosts(pagination.currentPage + 1)"
            >Successiva</a
          >
        </li>
      </ul>
    </nav>
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
      pagination: {},
    };
  },
  methods: {
    getPosts(page) {
      axios
        .get(`http://localhost:8000/api/posts?page=${page}`)
        .then((res) => {
          const { data, current_page, last_page } = res.data;
          this.posts = data;

          this.pagination = { currentPage: current_page, lastPage: last_page };
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
</script >

<style scoped>
.page-link {
  cursor: pointer;
}
</style>