@extends('layout')

@section('content')
<div>
    <ul id="myUl">
        @foreach ($categories as $category)
            <li class="border-b-2">
                <span class="{{ count($category->children) ? 'caret' : 'pl-6' }}">{{ $category->title }}</span>
                @if (count($category->children))
                    {{-- {{ dump($category->children) }} --}}
                    @include('category.inc._manage_child', ['children' => $category->children])
                @endif
            </li>
        @endforeach
        </ul>
</div>

@endsection