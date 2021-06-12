<?php
@extends('layouts.main-layout') {{-- наследуемся от шаблона (в скобах) который находится в папке layouts--}}

@section('title', $post->title) {{-- подставляем в title название страницы--}}

@section('content')

<div>
    <a href="{{route('getPostsByCategory', $slug_category)}}" class="btn btn-outline-primary mb-4">Back</a>
</div>
<article>
    {!! $post->text !!}
</article>
@endsection
