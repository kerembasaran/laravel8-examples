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
            <a class="dropdown-item" href="{{ route('http-client.example1') }}">Example 1</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownFluentString" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fluent Strings >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownFluentString">
            <a class="dropdown-item" href="{{ route('fluent-string.example1') }}">Example 1</a>
            <a class="dropdown-item" href="{{ route('fluent-string.example2') }}">Example 2</a>
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
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownSession" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Http Session >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownSession">
            <a class="dropdown-item" href="{{ route('get.session.data') }}">Session Listeleme</a>
            <a class="dropdown-item" href="{{ route('store.session.data') }}">Session Oluşturma</a>
            <a class="dropdown-item" href="{{ route('delete.session.data') }}">Session Silme</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownDatabase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Database >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownDatabase">
            <a class="dropdown-item" href="{{ route('database-query-builder-list.posts') }}">Query Builder</a>
            <a class="dropdown-item" href="{{ route('database-eloquent-list.posts') }}">Eloquent</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownjoins" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Joins >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownjoins">
            <a class="dropdown-item" href="{{ route('innerjoin') }}">İnner Join</a>
            <a class="dropdown-item" href="{{ route('leftjoin') }}">Left Join</a>
            <a class="dropdown-item" href="{{ route('rightjoin') }}">Right Join</a>
        </div>
    </div>
    <a href="{{ route('get.all.posts.using.model') }}" class="list-group-item list-group-item-action">Get All Posts Using Model</a>
    <a href="{{ route('file-upload.example1') }}" class="list-group-item list-group-item-action">File Upload</a>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownEloquent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Eloquent >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownEloquent">
            <a class="dropdown-item" href="{{ route('students') }}">Öğrenciler</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownEloquentOneToOne" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Eloquent One To One >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownEloquentOneToOne">
            <a class="dropdown-item" href="{{ route('one-to-one.insert-record') }}">Add User Phone</a>
            <a class="dropdown-item" href="{{ route('one-to-one.fetch-phone-by-user',4) }}">Userın Telefonu</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownEloquentOneToMany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Eloquent One To Many >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownEloquentOneToMany">
            <a class="dropdown-item" href="{{ route('one-to-many.add-post') }}">Add Post</a>
            <a class="dropdown-item" href="{{ route('one-to-many.add-comment',208) }}">Posta Yorum Ekle</a>
            <a class="dropdown-item" href="{{ route('one-to-many.get-comment-by-post',208) }}">Posta Ait Yorumlar</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownEloquentManyToMany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Eloquent Many To Many >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownEloquentManyToMany">
            <a class="dropdown-item" href="{{ route('many-to-many.add-role') }}">Add Role</a>
            <a class="dropdown-item" href="{{ route('many-to-many.add-user') }}">Add User</a>
            <a class="dropdown-item" href="{{ route('many-to-many.get-all-roles-by-user',5) }}">Usera Bağlı Roller</a>
            <a class="dropdown-item" href="{{ route('many-to-many.get-all-users-by-role',3) }}">Role Bağlı Userlar</a>
        </div>
    </div>
    <a href="{{ route('flash-session.example1') }}" class="list-group-item list-group-item-action">Flash Session</a>
    <a href="{{ route('localization.example1') }}" class="list-group-item list-group-item-action">Localization</a>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownAccessors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Accessors >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownAccessors">
            <a class="dropdown-item" href="{{ route('accessors.index') }}">Tüm Veriler</a>
        </div>
    </div>
    <div class="dropdown dropright list-group-item list-group-item-action">
        <div class="stretched-link" id="dropdownMutator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mutator >
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMutator">
            <a class="dropdown-item" href="{{ route('mutator.index') }}">Tüm Veriler</a>
            <a class="dropdown-item" href="{{ route('mutator.add-member') }}">Veri Ekle</a>
        </div>
    </div>
</div>

