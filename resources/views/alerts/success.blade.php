@if (session('success'))
  <div class="alert alert-success">
     <p style="font-weight: bold">{{ session('success') }}</p> 
  </div>
@endif

{{-- session دالة تختبر لك إذا كان في قيمة لمتغير او لا --}}