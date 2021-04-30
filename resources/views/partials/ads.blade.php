<div class="row">
     @foreach($ads as $ad)
        @php
            $img=$ad->images->first();
            $img_name=$img['image'];
        @endphp
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card mb-5 text-center" >
                <img class="card-img-top thumbnail" src="{{$img_name? '/storage/images/thumbs/'.$img_name : '/storage/images/thumbs/default.png'}}"  alt="{{$img_name}}">
                <div class="card-body">
                    <div><h6 class="card-title">{{$ad->title}}</h6></div>
                    <p class="card-text">{{$ad->price}}</p>
                    <a href="/ad/{{$ad->id}}/{{$ad->slug}}" class="btn btn-sm btn-outline-dark">التفاصيل</a>
                </div>
            </div>
        </div>
    @endforeach

</div>
