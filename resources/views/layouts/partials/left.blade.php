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
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownFluentString" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fluent Strings >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownFluentString">
            <a class="dropdown-item" href="{{ route('fluent-string.example1') }}">Example 1</a>
        </div>
    </div>
    <a href="{{ route('http-requests.example1') }}" class="list-group-item list-group-item-action">Http Requests</a>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownFormValidationRequest" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Form Validation Request >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownFormValidationRequest">
            <a class="dropdown-item" href="{{ route('form-validation.example1') }}">Example 1</a>
            <a class="dropdown-item" href="{{ route('form-validation.example2') }}">Example 2</a>
            <a class="dropdown-item" href="{{ route('form-validation.example3') }}">Example 3</a>
            <a class="dropdown-item" href="{{ route('form-validation.example4') }}">Example 4</a>
        </div>
    </div>
</div>

