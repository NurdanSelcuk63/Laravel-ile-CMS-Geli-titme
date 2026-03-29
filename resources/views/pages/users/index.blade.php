@extends('loyouts.app.app')

@section('content')
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-success min-btn">Yeni Ekle</button>
        <button type="button" class="btn btn-primary min-btn">Düzenle</button>
        <button type="button" class="btn btn-danger min-btn">Sil</button>
    </div>
    <div class="card-body">
        <table id="usersTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Adı Soyadı</th>
                    <th>Kullanıcı Adı</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Rol</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>john.doe</td>
                    <td>john.doe@example.com</td>
                    <td>1234567890</td>
                    <td>Admin</td>
                    <td>Aktif</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/js/pages/users-entry.js'])
    @endif
@endsection
