{{-- show --}}
@extends('testRow.layout',['bodyContainer'=>'df-container container'])
@section('head')
	@parent
	<!-- 추가 head 부분 - show -->
@endsection

@section('contentInContainer')
<h1>table test</h1>
<ul class="list-group">
	<li class="list-group-item">id : {{ $testRow->id??'NULL' }} </li>
	<li class="list-group-item">name : {{ $testRow->name??'NULL' }} </li>
	<li class="list-group-item">comment : {{ $testRow->comment??'NULL' }} </li>
	<li class="list-group-item">created_at : {{ $testRow->created_at??'NULL' }} </li>
	<li class="list-group-item">updated_at : {{ $testRow->updated_at??'NULL' }} </li>
	<li class="list-group-item">deleted_at : {{ $testRow->deleted_at??'NULL' }} </li>
</ul>
<hr>
<div class="text-right">
	<a href="{{ route('testRow.edit', ['testRow'=>$testRow], false) }}" class="btn btn-primary">수정</a>
	<a href="{{ route('testRow.index', $_GET, false) }}" class="btn btn-info">목록</a>
	<form action="{{ route('testRow.destroy',['testRow'=>$testRow])}}" method="POST" class="d-inline-block" onsubmit="return confirm('삭제하시겠습니까?');">
		@method('DELETE')
		@csrf 
		<button type="submit" class="btn btn-danger">삭제</button>
	</form>
</div>
@endsection