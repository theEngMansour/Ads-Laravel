@if ($errors->any())
<div class="alert alert-danger text-capitalize rounded-0 mt-2">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif