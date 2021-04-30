<ul class="nav justify-content-center">
    @foreach ($categories as $categorie )
        <li class="nav-item">
            <a class="nav-link active" href="/{{ $categorie->id}}/{{$categorie->slug}}">{{$categorie->name}}</a>
        </li>   
    @endforeach
</ul>