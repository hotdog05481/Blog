{!! Form::label('subject', '標題') !!}
{!! Form::text('subject', '標題') !!}<br>

{!! Form::label('desc', '內文') !!}
{!! Form::textarea('desc','內文') !!}<br>


{!! Form::label('status', '(狀態)', true) !!}
啟用{!! Form::radio('status', '1', true) !!}
關閉{!! Form::radio('status', '0', false) !!}
隨便{!! Form::radio('status', '-1', false) !!}<br><br>

你的興趣?
{!! Form::label('tags[]', '標籤') !!}<br>
news{!! Form::checkbox('tags[]', 'news') !!}
skill{!! Form::checkbox('tags[]', 'skill') !!}
like{!! Form::checkbox('tags[]', 'like') !!}<br><br>



{!! Form::submit('送出',[]) !!}
{!! Form::reset('重置',[]) !!}
