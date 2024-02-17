@php
    $categories = getCategoryData();
@endphp

@foreach ($categories as $category)
    <h6>{{$category->category_name}}</h6>
@endforeach