@extends('layouts.app')
@section('content')
<h2>{{$ad->title}} </h2>
@include('alerts.success')
<div class="row ">
    <div class="col-lg-11 col-md-6 col-xs-11 m-2">
        @if(Auth::user())
            <button  id="fav" data-id="{{$ad->id}}" class="btn-sm btn-outline-primary waves-effect {{$favorited?'unfav':'fav'}}">{{$favorited?"إزالة من المفضلة":"إضافة للمفضلة"}}</button>
        @endif
        @include('partials.shareBtns')
    </div>
    <div class="col-lg-4 col-md-6 col-xs-11">
        <div id="carouselIndicators" class="carousel slide" >
            <div class="carousel-inner" >
                <?php $i=0; ?>
                @if(count($ad->images)==0)
                 <img  src="{{asset('/storage/images/default.png')}}" >
                @endif

                @foreach($ad->images as $img)
                    <?php $i++;?>
                    <div class="carousel-item{{$i<=1?' active':''}} " >
                        <img   src="{{asset('/storage/images/'.$img->image)}}" >
                    </div>
                @endforeach
            </div>
            <!-- Indicators -->
            <div class="carousel-indicators">
               <?php $i=0; ?>
                @foreach($ad->images as $img)
                <img alt="thumbnail"  class="img-thumbnail"  src="{{asset('/storage/images/thumbs/'.$img->image)}}" data-target="#carouselIndicators" data-slide-to="{{$i++}}">
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-lg-7 col-md-6 col-xs-11">
        <div class="card ">
            <div class="card-body">
                <h4>المعلومات الرئيسية</h4>
                <p class="card-text">   اسم المعلن : {{$ad->user->name}} </p>
                <p class="card-text"> الدولة : {{$ad->country->name}} </p>
                <p class="card-text">السعر:  {{$ad->price}}</p>
                <h4>وصف الإعلان</h4>
                <p class="card-text">{{$ad->text}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row form-group mt-5" >
    <div class="col-lg-11 col-md-6 col-xs-11">
    @include('alerts.error')
     <h3> التعليقات : </h3>
        <form action="{{ route('comments.store') }}" id="comments" method="post">
            @csrf
           <input type="hidden" name="ad_id" value="{{$ad->id}}">
            <div class="form-group">
                <textarea class="form-control" rows="5"  name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>
</div>

<div class="row form-group mt-5" >
    <div class="col-lg-11 col-md-6 col-xs-11">
        <div id="display_comment">
        <?php $comments=$ad->comments  ?>
            @foreach($comments as $comment)
            <ul class="comment-container">
         
                <div class="card">
                    <div class="card-header">
                        <strong>{{$comment->user->name}}</strong>
                    </div>
                    <div class="card-body">
                        {{ $comment->content }}
                    </div>
                    {{-- @include('partials.commentForm') --}}
                    @include('partials.replyForm')
                   @include('partials.commentReplies', ['comments' => $comment->replies])
                </div>
  
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src = "{{ asset('assets/js/jquery-3.3.1.min.js') }}"> </script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#fav').on('click', function(){

var ad_id = $(this).data('id');
ad = $(this);

if (ad.hasClass("fav") ) {
    var url='/ads/'+ad_id+'/favorite';
    var status="unfav";
    var text="إزالة من المفضلة"
}
else{
     url='/ads/'+ad_id+'/unfavorite';
     status="fav";
     text="إضافة للمفضلة";
}

$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: url,
    type: 'post',
    data: {
        'ad_id': ad_id
    },
    success: function(response){
        ad
        .removeClass('fav')
        .removeClass('unfav')
        .addClass(status)
        .html(text)
    }
});

});
    });
</script>
@endsection