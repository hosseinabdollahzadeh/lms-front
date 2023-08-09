<div class="box-filter">
    <div class="b-head">
        <h2>پر مخاطب ترین دوره ها</h2>
        <a href="{{ route('allCourses') }}">مشاهده همه</a>
    </div>
    <div class="posts">
        @foreach($popularCourses as $courseItem)
            @include('Front::layout.singleCourseBox')
        @endforeach
    </div>
</div>
