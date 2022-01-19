{{-- form / create / edit --}}
@extends('testRow.layout',['bodyContainer'=>'df-container container'])
@section('head')
	@parent
	<!-- 추가 head 부분 - form -->
@endsection

@section('contentInContainer')
<h1>table test</h1>
<form action="{{ $testRow->id?route('testRow.update', ['testRow'=>$testRow->id], false):route('testRow.store', [], false) }}" method="POST">
	@method($testRow->id?'PUT':'POST')
	@csrf 
	<ul class="list-group">
		<li class="list-group-item">
			<input type="text" class="form-control mb-1" name="id" readonly value="{{ $testRow->id??'' }}" placeholder="testRow.id=auto">
			<input type="text" class="form-control mb-1" name="name" value="{{ $testRow->name??''}}" placeholder="testRow.name" required>
			<input type="text" class="form-control mb-1" name="comment" value="{{ $testRow->comment??''}}" placeholder="testRow.comment" required>
			<input type="text" class="form-control mb-1" name="created_at" disabled value="{{ $testRow->created_at??'testRow.created_at=auto' }}" placeholder="testRow.created_at">
			<input type="text" class="form-control mb-1" name="updated_at" disabled value="{{ $testRow->updated_at??'testRow.updated_at=auto' }}" placeholder="testRow.updated_at">
			<input type="text" class="form-control mb-1" name="deleted_at" disabled value="{{ $testRow->deleted_at??'testRow.deleted_at=auto' }}" placeholder="testRow.deleted_at">
		</li>
	</ul>
	<hr>
	<div class="text-right">
		<button type="submit" class="btn btn-success">저장</button>
		<a href="{{ route('testRow.index', $_GET, false) }}" class="btn btn-info">목록</a>
	</div>
</form>
@endsection