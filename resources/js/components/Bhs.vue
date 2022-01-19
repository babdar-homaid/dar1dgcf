<template>
    <div class="container text-center">
 <router-link to="/t1">Go to t1</router-link>|
  <router-link to="/t2">Go to t2</router-link>|
 <router-link to="/t3">Go to t3</router-link>
<hr>
   <button @click='get()'>click me</button>
   <input name="id" v-model="id">
   <ul v-for="post in posts" :key="post.id">
<li>{{post.Name}}</li>

   </ul>
<router-view ></router-view>

   </div>
</template>


<script>
    export default {
      data() {
            return {
         posts:[],
         id:  null

            }
        },
        methods: {
            get: function () {
                axios.get(`api/editOne/${this.id}`).then(response =>{
                    console.log(response)
                            this.posts = response.data

                    })
            }
        }
         }
</script>
