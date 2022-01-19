
<form method="POST" action="add_zoom" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="Subject"> الاسم</label>
    <input name="first_name" type="text" class="form-control" id="text" aria-describedby="text">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">العائئية </label>
        <input name="last_name" type="text" class="form-control" id="text" aria-describedby="text">
        <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">البريد </label>
            <input name="email" type="text" class="form-control" id="text" aria-describedby="text">
            <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"> الباس</label>
                <input name="password" type="text" class="form-control" id="text" aria-describedby="text">
                <small id="emailHelp" class="form-text text-muted"></small>
                </div>

    <button type="submit" class="btn btn-primary">أدخل الكتاب</button>
    </form>
    </div>
