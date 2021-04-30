@extends('layouts.app')

@section('title', __('titles.srch_title'))

@section('content')
<p><h3 class="mb-5">نتائج البحث: <strong style="color:red;text-decoration-line: underline ">{{$aa}}</strong></h3></p>

    @include('partials.ads')

@endsection