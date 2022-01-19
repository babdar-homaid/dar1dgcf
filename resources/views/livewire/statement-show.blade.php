<div>
            <div class="card text-center">
                <table class="table table-striped ">
                    <tr>
                        <th>م</th>
                        <th> الاسم</th>
                        <th>تاريخ الإفادة</th>
                        <th> الجهة</th>
                        <th>تحميل</th>
                    </tr>
                    @if ($sum=0)
                    @endif
                    @foreach ($data as $item)
                    @if ($sum++)
                    @endif
                    <tr>
                        <td>{{\Arabic\Arabic::adate($sum)}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{\Arabic\Arabic::adate($item->date)}}</td>
                        <td>{{$item->Guidance}}</td>
                        <th><a href="/exam/General_definition/{{$item -> id}}" style="color:green;">
                            <button  class="btn btn-dark"><i class="fas fa-file-download"></i></button>
                            <button  onclick="confirm('هل أنت متأكد من الحذف؟') || event.stopImmediatePropagation()" wire:click.prevent='dll({{$item->id}})'  class="btn"><i class='far fa-trash-alt'
                                style='font-size:25px;color:red'> </i></button>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                </table>

            </div>
            {{ $data->links() }}

</div>
