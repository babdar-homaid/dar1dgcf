<div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">م</th>
            <th scope="col">الاسم</th>
            <th scope="col">وقت الارسال</th>
            <th scope="col"> المرسل</th>

          </tr>
        </thead>


    @foreach ($data as $item)


  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$item->name}}</td>
      <td>{{\Arabic\Arabic::since($item->created_at)}}</td>
      <td>{{$item->admin}}</td>

    </tr>
    <tr>
    @endforeach
</tbody>
</table>
    </div>
