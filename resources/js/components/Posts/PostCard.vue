<template>
  <div>
    <div class="card">
      <div class="card-header">{{ post.title }}</div>
      <div class="card-body">
        <p>{{ post.content }}</p>
        <footer class="blockquote-footer">
          <time
            ><small>{{ getSimpleDate(post.created_at) }}</small></time
          >
        </footer>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: ["post"],
  methods: {
    getSimpleDate(date) {
      const postDate = new Date(date);
      const day = postDate.getDate();
      const month = postDate.getMonth() + 1;
      const year = postDate.getFullYear();

      return `${day}/${month}/${year}`;
    },
  },
};
</script>

