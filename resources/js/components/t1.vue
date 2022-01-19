<template>
   <div>
 <ul v-for="post in posts" :key="post.id">
<li>{{post.Name}}</li>
 </ul>

   </div>
</template>


<script>
    export default {
      data() {
            return {
        name:'t1',
        posts:[]
            }
        },    methods: {
            get1: function () {
                axios.get(`api/editOne/436000204`).then(response =>{
                    console.log(response)
                            this.posts = response.data

                    })
            }
        },
            created(){
            this.get1()
            },


    }
</script>
