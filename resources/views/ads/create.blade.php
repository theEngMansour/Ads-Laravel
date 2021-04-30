@extends('layouts.app')
@section('content')
<div style="background-color: #ffffff" class="col-lg-8 py-4 px-4 border">
    <p><h2 style="font-weight: bold; color:red;"> أدخـــل تـــفاصيل إعلانـــك</h2><h5><span class="badge badge-secondary">صفحة إنشـــاء إعلان جــديد</span></h5></p>
    @include('alerts.success')
    @include('alerts.error')
    <form method="POST" action="{{ route('ads.store') }}" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group">
            <label style="font-weight: bold" for="country_id">حدد البلد</label>
            <select class="form-control" name="country_id" >
               @include('lists.Country')
            </select>
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="catg"> اختر التصنيف</label>
            <select class="form-control" name="category_id" >
               @include('lists.categories')
            </select>
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="title">عنوان الإعلان<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="details">تفاصيل الإعلان<span style="color: red">*</span></label>
            <textarea class="form-control" name="text" rows="3" >{{old('text')}}</textarea>
        </div>
        <div class="form-group">
            <label style="font-weight: bold" class="col-lg-3 control-label" value="{{old('price')}}">السعر<span style="color: red">*</span></label>
            <div class="row">
                <div class="col-lg-7">
                    <input type="number" class="form-control" value="{{old('price')}}" name="price" step="any" placeholder="" title="السعر" >
                </div>
                <div class="col-lg-5" title="">
                    <select class="form-control" name="currency_id">
                        @include('lists.Currencies')
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="details">أضف الصور<span style="color: red">*</span></label>
            <input type="file" name="image"  class="form-control" multiple>
        </div>
        <button style="font-weight: bold" type="submit" class="btn btn-primary w-50">أضـــف الإعـــلان</button>
    </form>
</div>

@endsection