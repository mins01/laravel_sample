{{-- index --}}
@extends('testRow.layout',['bodyContainer'=>'df-container container'])
@section('head')
	@parent
	<!-- 추가 head 부분 - index -->
@endsection

@section('contentInContainer')
<h1>table test</h1>
<div class="text-right m-3">total : {{ $testRows->total() }}</div>
<ul class="list-group">
	@foreach ($testRows as $testRow)
	<li class="list-group-item"><a href="{{ route('testRow.show', ['testRow'=>$testRow], false) }}">[{{ $testRow->id }}] {{ $testRow->name }} / {{ $testRow->comment }}</a></li>
	@endforeach
	@if(count($testRows )==0)
	<li class="list-group-item">No data</li>
	@endif
</ul>
<hr>
<div>
	{{ $testRows->withQueryString()->links() }}
</div>
<hr>
<div class="text-right">
	<a href="{{ route('testRow.create', [], false) }}" class="btn btn-info">추가</a>
</div>
@endsection