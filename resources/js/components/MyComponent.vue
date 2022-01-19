<template>

    <div class="row justify-content-center">



        <div class=" col-md-8">
            <div class="card ">
                <div class="card-header">
                    إستخراج إفادة طالب
                </div>
                <div class="card-body">
                    <div>
                        <div v-if="error1 &&  out==1" class="alert alert-danger" role="alert">
                            {{error1}}
                        </div>

                        <div v-if="repos.Name &&  out==1" class="alert alert-success" role="alert">
                            النتيجة صحيحة
                        </div>
                        <div class="form-group col-md-6">
                            <label> ضع رقم البطاقة</label>
                            <input class="form-control" v-model="username">
                            <br>
                            <button class="btn btn-primary form-control" @click.prevent="get">بحث</button>
                        </div>
                        <table class="table table-striped">
                            <tr v-if="repos.Name">
                                <th>تاريخ الإفادة</th>
                                <th> الجهة</th>
                                <th>تعديل</th>
                            </tr>
                            <tr v-if="repos.Name">
                                <td>{{repos.Name}}</td>
                                <td>{{repos.Class}}</td>
                                <td>
                                    <span data-toggle="modal" data-target="#myModal"><i class='far fa-edit'
                                            style='font-size:30px'></i>
                                    </span>
                                &nbsp;&nbsp; &nbsp;&nbsp;
                                    <span ><i @click="del(repos.id)" class='far fa-trash-alt' style='font-size:30px;color:red'></i>
                                    </span>
                                </td>
                            </tr>
                        </table>
                        <div  class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <label for="exampleInputEmail1">تعديل البيانات</label>

                                    </div>
                                    <div class="modal-body">
                                        <label for="exampleInputEmail1">الاسم : </label>
                                        <input class="form-control" value="repos.Name" v-model="repos.Name">
                                        <label for="exampleInputEmail1">الصف : </label>
                                        <input class="form-control" value="repos.Class" v-model="repos.Class">
                                        <input value="repos.Class" v-model="repos.id" type='hidden'>
                                        <br>
                                        <button data-dismiss="modal" class="btn btn-primary form-control" @click.self="edit">تعديل
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                show:true,
                out: 1,
                username: null,
                repos: {
                    Name: null,
                    Class: null,
                    id: null
                },
                error1: null
            }
        },
        methods: {
            get: function () {
                axios.get(`api/getcard/${this.username}`)
                    .then(response => {
                        if (this.repos = response.data.val == null) {
                            this.error1 = 'لا توجد نتيجة'
                        } else {
                            this.repos = response.data.val
                            this.error1 = ''
                        }
                    })
                    this.out=1
                    setTimeout(this.hideAlert, 9000);
            },

            edit: function () {
                this.show=false
                axios.post('api/edit', this.repos)
                    .then(response => {
                        console.log(response)
                    })
            },

            del: function(id){
Swal.fire({
title: 'هل أنت متأكد من الحذف',
text: "أختيارك نعم يعني حذف السجب نهائيا",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'نعم',
cancelButtonText: 'لا',
}).then((result) => {
    if (result.value) {
    Swal.fire(
    'حدف',
    'تم الحدف بنجاح',
    'success',
    )
    axios.delete(`api/del/${id}`)
    .then(response => {
this.repos.Name= null,
this.repos.Class=null
                    })}
})
            },


            hideAlert: function(){
                this.out=10
            }
        },



    }

</script>
