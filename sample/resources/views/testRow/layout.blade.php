{{-- 테이블 테스트 기본 레이아웃 --}}
@extends($extends??'layouts.default')
@section('title', $title??'기본 타이틀')
@section('head')
	<!-- 추가 head 부분 - layout -->
@endsection

@section('content')
<div class="{{ $bodyContainer??'df-container container ' }}">
	@yield('contentInContainer','컨텐츠내용')
</div>
@endsection