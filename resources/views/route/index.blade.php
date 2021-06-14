@extends('layouts.app')

@section('title')
    Route
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Route Not
        </div>
        <div class="card-body">
<pre>
Route::get('/users/{name?}', function ($name = null) {
return 'Hi ' . $name;
})->where('name', '[a-zA-Z]+');
</pre>
            <hr>
            <pre>
Route::get('/products/{id?}', function ($id = null) {
return 'Product is id ' . $id;
});//where yerine RouteServiceProvider da public function boot()'a Route::pattern('id', '[0-9]+'); eklenir ise koşul bütün id'lerde geçerli olur
</pre>
            <hr>
            <pre>
Route::get('/home/{data?}', [HomeController::class, 'index'])->name('home.data');

<b>HomeController'daki index fonksiyonu: </b>

public function index($data = null)
{
return $data;
}
</pre>
            <hr>
            <pre>
<b>Route'dan veri gönderme</b>
route('home.data',$data)
route('home.data','kerem1')
route('home.data',['kerem2'])
route('home.data',['data'=>'kerem3'])
</pre>
        </div>
    </div>
@endsection
@section('js')

@endsection
