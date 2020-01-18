<template>
     <div class="post-preview">
        <a href="{{ slug) }}">
          <h2 class="post-title">
            {{ title }}
          </h2>
          <h3 class="post-subtitle">
            {{ subtitle }}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">Start Bootstrap</a>
          {{ created_at }} 
          <a href="">
            <small>0</small>
            <i class="fas fa-thumbs-up"></i></a>
        </p>
        </div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
