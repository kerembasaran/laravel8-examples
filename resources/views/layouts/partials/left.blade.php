<div class="list-group">
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action">Home</a>
    <a href="{{ route('route.index') }}" class="list-group-item list-group-item-action">Route</a>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownHttpClient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Http Client >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownHttpClient">
            <a class="dropdown-item" href="{{ route('http-client.get-all-post') }}">Tüm Veriler</a>
            <a class="dropdown-item" href="{{ route('http-client.get-post-by-id',7) }}">Tek Veriler</a>
            <a class="dropdown-item" href="{{ route('http-client.add-post') }}">Veri Ekleme</a>
            <a class="dropdown-item" href="{{ route('http-client.update-post') }}">Veri Güncelleme</a>
            <a class="dropdown-item" href="{{ route('http-client.delete-post',12) }}">Veri Silme</a>
        </div>
    </div>
</div>

