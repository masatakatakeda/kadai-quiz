@extends('layouts.app')

@section('content')

    <p>{{ $notebook->display_number }} {{ $notebook->title }}<p>
        
    <h6>  次のうち、正しいものはどれか</h6>
    
    <p>{!! print nl2br( $notebook->quiz )!!}</p>
    
    <h6>〇正解と思う番号をチェックして、採点ボタンを押してください</h6>
    
    
    <label class="form-inline">
        
    <div class="btn-group">
        {!! Form::model($notebook, ['route' => ['notebooks.show',$notebook->id],'method'=>'get']) !!}
    	    <label class="btn btn-default active">
    		    <input type="radio" name='kotae' value='1' autocomplete="off" checked> 答え（１）
    	    </label>
    	    <label class="btn btn-default">
    		    <input type="radio" name='kotae' value='2'  autocomplete="off"> 答え（２）
    	    </label>
    	    <label class="btn btn-default">
    		    <input type="radio" name='kotae' value='3'  autocomplete="off"> 答え（３）
    	    </label>
    	    {{Form::hidden('invisible', '1')}}
    	    
    	    {!! Form::submit('採点', ['class' => 'btn btn-primary']) !!}
    	    
	    {!! Form::close() !!}
    </div>
        
    </label>
    
    @if($invisible != '0')
        @if($kotae==$notebook->correct_number)
            <h4>正解！</h4>
            
            <p>{!! print nl2br( $notebook->content )!!}</p>
            
            {!! link_to_route('notebooks.index', 'クイズ一覧に戻る') !!}
        
        @else
        　　<h4>不正解！</h4>
        　　
        　　<p>{!! print nl2br( $notebook->content )!!}</p>
        　　
        　　{!! link_to_route('notebooks.index', 'クイズ一覧に戻る') !!}
        
        @endif
    @endif
    
   
    

@endsection