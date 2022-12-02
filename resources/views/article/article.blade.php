<h1>歡迎光臨</h1>
{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}


{!! Form::label('subject', '標題') !!}
{!! Form::text('subject', '標題') !!}<br><br>

{!! Form::label('subject', '內文') !!}
{!! Form::texttarea('desc', '內文') !!}<br><br>

{!! Form::label('status', '狀態(狀態)') !!}
啟用{!! Form::radio('status', '0', false) !!}
關閉{!! Form::radio('status', '-1', false) !!}<br><br>

{!! Form::label('tags[]', '標籤',) !!}<br>
{!! Form::checkbox('tags[]', 'news',) !!}<br>
{!! Form::checkbox('tags[]', 'skill',) !!}<br>
{!! Form::checkbox('tags[]', 'like',) !!}<br>

{!! Form::submit('送出',[]) !!}
{!! Form::reset('取消',[]) !!}
{!! Form::close() !!}

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif

