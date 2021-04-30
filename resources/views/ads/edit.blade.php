@extends('layouts.app')

@section('title', __('titles.updAd_title'))

@section('content')

<div class="col-lg-8">
    <p><h2> تعديل الإعلان</h2></p>

    @include('alerts.success')

    @include('alerts.error')

    <form method="POST" action="{{ route('ads.update',$ad->id) }}" enctype="multipart/form-data">
       {{ csrf_field() }}
       <input name="_method" type="hidden" value="PUT">
       <div class="form-group">
            <label for="country_id">حدد البلد</label>
            <select class="form-control" name="country_id" >
                 @foreach($countries as $item)
                <option value="{{ $item->id }}" {{ $ad->country_id == $item->id  ? 'selected' : '' }}> {{ $item->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="catg"> اختر التصنيف</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $item)
                <option value="{{ $item->id }}" {{ $ad->category_id == $item->id  ? 'selected' : '' }}> {{ $item->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">عنوان الإعلان:</label>
            <input type="text" class="form-control" name="title" value="{{$ad->title}}">
        </div>
        <div class="form-group">
            <label for="details">تفاصيل الإعلان: </label>
            <textarea class="form-control" name="text" rows="3">{{$ad->text}}</textarea>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label" >السعر</label>
            <div class="row">
                <div class="col-lg-7">
                    <input type="number" class="form-control" value="{{$ad->price}}" name="price"  step="any" placeholder="" title="السعر">
                </div>
                <div class="col-lg-5" title="">
                    <select class="form-control" name="currency_id">
                        @include('lists.currencies')
                    </select>
                </div>
                
            </div>
        </div>
        <div class="form-group">
            <label for="details"> أضف الصور </label>
            <input type="file" name="imgs" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">تعديل الإعلان</button>
    </form>
</div>
@endsection