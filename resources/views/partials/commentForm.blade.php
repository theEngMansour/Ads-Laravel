<form method="post" action="{{ '/comment/reply' }}">
@csrf
<div class="form-group">
    <div class="input-group mb-3">
        <input type="hidden" name="ad_id" value="{{ $ad->id }}" />
        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
        <input type="text"  name="content" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        <div class="input-group-prepend">
            <button class="btn btn-outline-secondary" type="submit">رد</button>
        </div>
        </div>
</div>
</form>