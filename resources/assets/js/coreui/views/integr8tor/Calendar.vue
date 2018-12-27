<template>
  <b-table striped hover :items="posts"></b-table>
</template>

<script>
  import axios from 'axios'
  export default {
    data () {
      return {
        posts: [],
        endpoint: 'http://127.0.0.1:8080/api/calendar/',
        id: this.id
      }
    },
    created() {
      this.getAllPosts();
    },
    methods: {
      getAllPosts() {
        var id = this.$route.params.id;
        if(id != undefined) {
          this.endpoint = this.endpoint + id;
        }
        axios.get(this.endpoint)
          .then(response => {
            this.posts = response.data;
          })
          .catch(error => {
            console.log('-----error-------');
            console.log(error);
          })
      }
    }
  }
</script>
