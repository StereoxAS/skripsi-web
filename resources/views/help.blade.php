@extends('skeletonmenu')

@section('title', 'Help')

@section('section_menu_title')
@parent
    <h1 class="h2">Help</h1>
@endsection

@section('section_content')
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Membuat Halaman Baru</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Menyunting Halaman</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Parsing Otomatis</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Pengaturan</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <ul>
                    <li>
                        Pilih "Buat Halaman"
                    </li>
                    <li>
                        Isikan Judul dan deskripsi singkat berisikan keterangan dari artikel dibuat
                    </li>
                    <li>
                        Pilih file PDF yang ingin diunggah, file tersebut akan otomatis dibaca dan dijadikan isi utama artikel tersebut
                    </li>
                    <li>
                        Sunting seperlunya agar teks mudah dibaca
                    </li>
                    <li>
                        Klik tombol "Submit"
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <ul>
                    <li>
                        Halaman yang sudah ada dapat anda sunting dengan membuka halaman tersebut dari menu "Beranda" dan pilih opsi "Edit". 
                        Pastikan hanya menyunting dengan tujuan membenarkan atau melengkapi, bukan untuk merusak halaman tersebut.
                    </li>
                    <li>
                        Halaman yang anda buat dapat anda hapus dengan memilih tombol "Delete Page" dibagian bawah halaman. 
                        Hanya pembuat halaman yang mampu menghapus halaman tersebut.
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <ul>
                    <li>
                        Untuk secara otomatis mengunggah dan membuat artikel secara otomatis, gunakan menu "Upload File".
                        Untuk saat ini menu tersebut belum berfungsi.
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <ul>
                    <li>
                        Settings
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
@endsection