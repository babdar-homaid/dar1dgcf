<template>
<div class="row justify-content-center">
    <div class=" col-md-8">
        <div class="card ">
            <div class="card-header">
            إستخراج إفادة طالب
            </div>
            <div class="card-body">
            <div v-if="posts.length>=4" class="alert alert-danger">
            <strong>لقد وصلت للحد</strong>المسموح به وهو اربعة تعاريف في الفصل الدراسي الواحد
            </div>
            <div v-if="posts.length<=3" class="alert alert-success">
            <strong>تبقى لك {{4-posts.length}}
            <i v-if="posts.length==1" class='fas fa-battery-full' style='font-size:36px'></i>
            <i v-else-if="posts.length==2"  class='fas fa-battery-half' style='font-size:36px'></i>
            <i v-else-if="posts.length==3" class='fas fa-battery-quarter' style='font-size:36px'></i>
</strong>
            </div>
            <div class="form-group col-md-6">
            <label v-if="posts.length<=3"  for="sel1"> أختر الفئة</label>
            <select  v-if="posts.length<=3" class="form-control" v-model="post.name">
            <option value="إدارة الجوازات">تعريف للجوازات</option>
            <option value="من يهمه الأمر">تعريف لمن يهمه الأمر</option>
            <option value="وقف المغاربة">تعرف لوقف المغارية</option>
            </select>


            </div>
            <div class="col-md-6">
            <button class="btn btn-primary form-control" v-if="posts.length<=3" @click.prevent="addpost">ادخل</button>

            </div>
            <br>

            <table class="table table-striped">
            <tr>
            <th>م</th>
            <th>تاريخ الإفادة</th>
            <th> الجهة</th>
            <th>تحميل</th>
             <th>حذف</th>
            </tr>
            <tr v-for="(post ,index) in posts" :key="post.id">
            <td >{{doMath(index) }}</td>
            <td >{{post.Guidance}}</td>
            <td >{{post.date}} </td>
            <td >
            <a :href="'/exam/General_definition/'+post.id">
    <button type='submit' class="btn btn-dark"><i class="fas fa-file-download"></i></button>

            </a>


            </td>
    <td >
      <p   @click.prevent="dlpost(post.id,index)"><i class='far fa-trash-alt' style='font-size:30px;color:red'></i>
</p>
</td>

            </tr>
            </table>


            <div class="card-body">
            <!-- <MyComponent></MyComponent> -->
            </div>
        </div>
    </div>
    </div>

    </div>
</template>

<script>
import MyComponent from "../components/MyComponent";

    export default {
data() {
return {

        post:{
        name:'--',
        Guidance:'',
        date:'',
        id:'',

        },
        posts:{}
        }
        },

methods:{

doMath: function (index) {
    return index+1
    },

addpost(){
        axios.post('api/addpost',this.post).then(response=>{

console.log(response)

        this.posts.unshift(response.data.val)
    this.post={
        name:'',
        Guidance:'',
    }

        })
        },


        getpost (){
            axios.get('api/getpost').then(response=>{
             this.posts=response.data.val
        })
        },

        dlpost(id,index){
           axios.delete('api/dlpost/'+ id).then(response=>{
             this.posts.splice(index ,1)

      })
        },
            },



            created(){
            this.getpost()
            },

mounted() {




console.log('Component mounted.')
        },
components: {
    MyComponent,
},
    }
</script>
