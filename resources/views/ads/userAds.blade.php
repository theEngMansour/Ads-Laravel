@extends('layouts.app')

@section('title', __('titles.myAds_title'))

@section('content')

<div class="col-lg-8">
    <p><h2>إعلاناتي </h2></p>

    @include('alerts.success')
    <table class="table table-hover">
    <thead>
      <tr>
        <th>التاريخ</th>
        <th>عنوان الإعلان</th>
        <th>السعر</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($userAds as $ad)
      <tr>
        <td>{{$ad->created_at}}</td>
        <td><a href="/ad/{{$ad->id}}/{{$ad->slug}}">{{$ad->title}}</a></td>
        <td>{{$ad->price}}</td>
        <td>
            <div class="btn-group" role="group" >
                <a  class="btn-sm btn-primary" href="{{ route('ads.edit',$ad->id) }}" role="button" ><i class="glyphicon glyphicon-remove-sign"></i>تعديل</a>
                <form method="POST" action="{{ route('ads.destroy',$ad->id) }}" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                     {{ csrf_field() }}
                     <input name="_method" type="hidden" value="delete">
                    <button type="submit" class="mx-3 btn-sm btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                </form>
            </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection