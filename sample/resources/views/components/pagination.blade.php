{{-- 부트스트랩용 페이지네이션 --}}
@if ($paginator->hasPages())
<nav class="p-1">
	<ul class="pagination pagination-sm  justify-content-center m-0">
		
		@if ($paginator->onFirstPage())
		<li class="page-item disabled"><span class="page-link">←</span></li>
		@else
		<li  class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a></li>
		@endif
		
		
		
		@foreach ($elements as $element)
		
		@if (is_string($element))
		<li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
		@endif
		
		
		
		@if (is_array($element))
		@foreach ($element as $page => $url)
		@if ($page == $paginator->currentPage())
		<li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
		@else
		<li  class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
		@endif
		@endforeach
		@endif
		@endforeach
		
		
		
		@if ($paginator->hasMorePages())
		<li  class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">→</a></li>
		@else
		<li class="page-item disabled"><span class="page-link">→</span></li>
		@endif
	</ul>
</nav>
@else
<nav class="p-1">
	<ul class="pagination pagination-sm  justify-content-center m-0">
		<li class="page-item active"><a class="page-link" href="">1</a></li>
	</ul>
</nav>
@endif 