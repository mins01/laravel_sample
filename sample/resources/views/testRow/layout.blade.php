{{-- 테이블 테스트 기본 레이아웃 --}}
@sectionMissing('title')
	@section('title', $title??'기본 타이틀')
@endif
@extends($layoutExtends??'layouts.default')
@section('head')
	<!-- 추가 head 부분 - layout -->
@endsection

@section('content')
<div class="{{ $bodyContainer??'df-container container ' }}">
	@yield('contentInContainer','컨텐츠내용')
</div>
@endsection
