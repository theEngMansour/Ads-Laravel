<ul class="comment-container">
    @foreach($comments as $comment)
    <li>
        <div class="card bg-light">
            <div class="card-header">
                 <strong>{{  $comment->user->name}}</strong>
            </div>
            <div class="card-body">
                {{ $comment->content }}
            </div>

            @include('partials.commentForm')
            @include('partials.commentReplies', ['comments' => $comment->replies])
        </div>
    </li>
    @endforeach
</ul>
