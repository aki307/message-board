@extends('layouts.app')

@section('content')
    
    

    <h1>メッセージ新規作成ページ</h1>
    
    
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection

