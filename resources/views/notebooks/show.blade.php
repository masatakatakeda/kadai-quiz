@extends('layouts.app')

@section('content')

    <h4><font color="#330099"><strong>{{ $notebook->display_number }}  {{ $notebook->title }}</strong></font></h4>
        
    <h4><u>【問題】次のうち、正しいものはどれか</u></h4>
    
    <h4>{!! nl2br( $notebook->quiz )!!}</h4>
    
    <h5>〇正解と思う番号をチェックして、採点ボタンを押してください</h5>
    
    <label class="form-inline">
        
    <div class="btn-group">
        {!! Form::model($notebook, ['route' => ['notebooks.show',$notebook->id],'method'=>'get']) !!}
    	    <label class="btn btn-default active">
    		    <input type="radio" name='kotae' value='1' autocomplete="off" checked>　１
    	    </label>
    	    <label class="btn btn-default">
    		    <input type="radio" name='kotae' value='2'  autocomplete="off">  ２
    	    </label>
    	    <label class="btn btn-default">
    		    <input type="radio" name='kotae' value='3'  autocomplete="off">  ３
    	    </label>
    	    {{Form::hidden('invisible', '1')}}
    	    
    	    {!! Form::submit('採点', ['class' => 'btn btn-primary']) !!}
    	    
	    {!! Form::close() !!}
    </div>
        
    </label>
    
    @if($invisible != '0')
        <h4>--------------------------------------------------------------------------------------------------------------------------------</h4>
    
        @if($kotae==$notebook->correct_number)
            <h4><font color="#ff3399"><strong>あなたの選んだ「{!!($kotae)!!}」は・・・　　　正　解！</strong></font></h4>
        @else
            <h4><font color="#ff6666"><strong>あなたの選んだ「{!!($kotae)!!}」は・・・　　　不正解！</strong></font></h4>
        @endif
        
        <h4><u>〇このテーマのポイント</u></h4>
            
        <h4>{!! nl2br( $notebook->content )!!}</h4>
        
        @if($notebook->display_number!=15)
            {!! link_to_route('notebooks.show', '次の問題へ', ['id' => $notebook->id+1]) !!}
            <p>     </p>
            {!! link_to_route('notebooks.index', 'クイズ一覧に戻る') !!}
        @else
            <h4><font color="#ffccff"><strong>問題は以上で終了です。ご利用いただき、ありがとうございました！</strong></font></h4>
            {!! link_to_route('notebooks.index', 'クイズ一覧に戻る') !!}
        @endif
    
    @else
        
    @endif
    
@endsection