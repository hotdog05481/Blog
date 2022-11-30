<h1>表單建立頁面</h1>

{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

{!! Form::label('title', '標題') !!}
{!! Form::text('title', null,['class'=>'myclass','style'=>'color:red','xx'=>'yy']) !!}<br>

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::label('content', '內文') !!}
{!! Form::textarea('content',null,['cols'=>30,'rows'=>20]) !!}<br>

@error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::hidden('model', 1) !!}

{!! Form::label('status', '是否開啟') !!}

開啟{!! Form::radio('status', '1', true) !!}
關閉{!! Form::radio('status', '0', false) !!}
隨便{!! Form::radio('status', '-1', false) !!}<br><br>

你的興趣?
{!! Form::label('interests[]', '打球') !!}
{!! Form::checkbox('interests[]', 'playball', false) !!}
{!! Form::label('interests[]', '電影') !!}
{!! Form::checkbox('interests[]', 'movie', false) !!}
{!! Form::label('interests[]', '電玩') !!}
{!! Form::checkbox('interests[]', 'game', false) !!}<br><br>

{!! Form::select('month', $months, $month, ['placeholder' => '請選擇月份']) !!}<br><br>

{!! Form::select('mode',$modes ,$mode, ['placeholder' => '請選擇商品模式']) !!}<br><br>

{!! Form::label('month_1', '月份', []) !!}
月份下拉
{!! Form::selectMonth('month_1', null, []) !!}<br><br>

{!! Form::label('number', '數字', []) !!}
區間數字下拉
{!! Form::selectRange('number', 1, 10, 5, []) !!}<br><br>

{!! Form::label('password', '數字', []) !!}
{!! Form::password('password', []) !!}<br><br>

{!! Form::label('email', '郵箱', []) !!}
{{ Form::email('email',null,[]) }}<br><br>

{!! Form::label('sell_at', '何時上架', []) !!}<br><br>
{!! Form::date('sell_at',null, []) !!}

{!! Form::number('age', '年紀', []) !!}<br><br>
{!! Form::number('age', '18', ['min'=>18, 'max'=>80]) !!}<br><br>

{!! Form::label('pic', '圖片上傳', []) !!}
{!! Form::file('pic', []) !!}<br><br>

{!! Form::submit('送出',[]) !!}
{!! Form::reset('重置',[]) !!}
{!! Form::close() !!}

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
