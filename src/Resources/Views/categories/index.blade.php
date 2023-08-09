@extends('Front::layout.master')

@section('content')
    <main id="index">
        <article class="container article">
            <div class="ads">
                <a href="" rel="nofollow noopener"><img src="img/ads/1440px/test.jpg" alt=""></a>
            </div>
            <article class="category-h">
                <div class="h-t">
                    <h1 class="title">دوره های مربوط به دسته بندی "{{$category->title}}"</h1>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="/" title="خانه">خانه</a></li>
                            @if($category->parentCategory)
                                <li><a href="{{$category->parentCategory->path()}}"
                                       title="{{$category->parentCategory->title}}">{{$category->parentCategory->title}}</a>
                                </li>
                            @endif
                            <li><a href="{{$category->path()}}"
                                   title="{{$category->title}}">{{$category->title}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
            <div class="posts">
                @forelse($courses as $courseItem)
                    @include('Front::layout.singleCourseBox')
                @empty
                    <p>برای این دسته بندی، دوره ای یافت نشد!</p>
                @endforelse
            </div>

            <div class="pagination">
{{--                {{$courses->render()}}--}}
            </div>
            {{$courses->render()}}
        </article>
    </main>
@endsection
