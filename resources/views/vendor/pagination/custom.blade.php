<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<body>

    @if ($paginator->hasPages())
    <ul class="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="disabled page-item"><span class="page-link"><i class="fas fa-arrow-left"> </i> </span></li>
    @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-arrow-left"> </i></a></li>
    @endif

    {{-- Pagination Elements --}}
      @foreach ($elements as $element)
             @if (is_string($element))
               <li class="page-item disabled">
                   <span class="page-link"> {{$element}} </span>
               </li>     
             @endif
             @if (is_array($element))
                 @foreach ($element as $page => $url)
                 @if ($page == $paginator -> currentPage())
                    <li class="page-item active my-active"> <span class="page-link"> {{$page}} </span></li>
                  @else
                  <li class="page-item"> <a class="page-link" href="{{$url}}"> {{$page}} </a></li>

                 @endif
                 @endforeach
             @endif
               
           @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-arrow-right"> </i></a></li>
    @else
        <li class="disabled page-item"><span class="page-link"><i class="fas fa-arrow-right"> </i></span></li>
    @endif
</ul>
@endif
</body>
</html>