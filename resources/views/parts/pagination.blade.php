{{-- <div class="show-link">
    <a href="#" class="show-link__btn">Показать еще</a>
</div> --}}

<nav class="pagination d-flex">
                        <div class="pagination__nav-links d-flex">
                            <a class="pagination__back" href="{{$paginator->previousPageUrl()}}">Назад</a>



                            @if ($paginator->lastPage() > 5)

                                @if ($paginator->currentPage() >= 4)
                                    <a class="pagination__numbers" href="{{$paginator->url(1)}}">1</a>
                                    <div class="pagination__block-dot d-flex">
                                        <span class="pagination__dot">.</span>
                                        <span class="pagination__dot">.</span>
                                        <span class="pagination__dot">.</span>
                                    </div>
                                @endif

                                @if ($paginator->currentPage() < 4)
                                    @for ($i = 1; $i < 5; $i++)
                                        <a class="pagination__numbers @if($paginator->currentPage() == $i) current @endif" href="{{$paginator->url($i)}}">{{ $i }}</a>
                                    @endfor
                                @else

                                        @for ($i = $paginator->currentPage()-2; $i <= $paginator->currentPage()+2; $i++)
                                            @if ($paginator->lastPage() < $i)
                                                @break
                                            @endif

                                            <a class="pagination__numbers @if($paginator->currentPage() == $i) current @endif" href="{{$paginator->url($i)}}">{{ $i }}</a>
                                        @endfor

                                @endif

                                @if ($paginator->lastPage() > $paginator->currentPage() + 2)
                                    <div class="pagination__block-dot d-flex">
                                        <span class="pagination__dot">.</span>
                                        <span class="pagination__dot">.</span>
                                        <span class="pagination__dot">.</span>
                                    </div>
                                    <a class="pagination__numbers" href="{{$paginator->url($paginator->lastPage())}}">{{$paginator->lastPage()}}</a>
                                @endif

                            @else
                                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                    <a class="pagination__numbers @if($paginator->currentPage() == $i) current @endif" href="{{$paginator->url($i)}}">{{ $i }}</a>
                                @endfor
                            @endif


                            <a class="pagination__next" href="{{$paginator->nextPageUrl()}}">Вперед</a>


                        </div>

                        @if ($paginator->lastPage() > 2)
                                <form action="{{$paginator->url($paginator->currentPage())}}" class="paginat_form" method="GET">
                                    <x-get-field-in-form exclide="page"></x-get-field-in-form>
                                    <input type="number" name="page" value="{{$paginator->currentPage()}}" min="1" max="{{$paginator->lastPage()}}">
                                    <button class="btn" type="submit">Перейти</button>
                                </form>
                            @endif
                    </nav>
