<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div>
        @if (session()->has('message1'))
            <div class="alert alert-danger">
                {{ session('message1') }}
            </div>
        @endif
    </div>
            <div class="card text-center">



                        <div class="form-group col-md-6">
                            <label for="sel1"> أختر الفئة</label>
                            <select class="form-control" wire:model="Guidance" id="sel1">
                                <option value="">اختر</option>
                                <option value="إدارة الجوازات">تعريف للجوازات</option>
                                <option value="من يهمه الأمر">تعريف لمن يهمه الأمر</option>
                                <option value="وقف المغاربة">تعرف لوقف المغارية</option>
                            </select>
                            @error('Guidance') <span class="error text-danger">{{ $message }}</span> @enderror

                        </div>

                            <div class="form-group col-md-6">
                                <label for="sel1"> رقم بطاقة الطالب </label>
                            <input type="text" wire:model="Student_ID" class="form-control">
                            @error('Student_ID') <span class="error text-danger">{{ $message }}</span> @enderror

                        </div>
                            <br>
                            <hr>
                            <div class="col-md-6">
                                <button wire:click.prevent='add' class="btn btn-primary form-control">ارسال</button>
                            </div>
                            <br>

        </div>

</div>
