@extends('layouts.app')

<?php $title=$ads->first(); ?>

{{-- @section('title', $title? $title->category->name :"لا توجد إعلانات ضمن هذا القسم")
 --}}
@section('content')


    @include('partials.ads')

@endsection
