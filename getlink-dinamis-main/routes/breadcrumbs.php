<?php
    // routes/breadcrumbs.php

    // Home

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

    Breadcrumbs::for('home', function ($trail) {
        $trail->push('Home', route('home'));
    });

    // Home > microsite
    Breadcrumbs::for('microsite', function ($trail) {
        $trail->parent('home');
        $trail->push('microsite', route('microsite'));
    });

    //Home > Microsite > Edit
    Breadcrumbs::for('editmicrosite', function ($trail,$data) {
        $trail->parent('microsite');
        $trail->push($data->title, route('microsite.edit',$data->id));
    });

    // Home > micrositeslot
    Breadcrumbs::for('micrositeslot', function ($trail) {
        $trail->parent('home');
        $trail->push('Microsite Slot', route('micrositeslot'));
    });

    //Home > Microsite Slot > Edit
    Breadcrumbs::for('editmicrositeslot', function ($trail,$data) {
        $trail->parent('micrositeslot');
        $trail->push($data->name, route('micrositeslot.edit',$data->id));
    });

    // Home > Tabel Kategori
    Breadcrumbs::for('tabelkategori', function ($trail) {
        $trail->parent('home');
        $trail->push('Tabel Kategori', route('tabelkategori'));
    });

    // Home > Tabel Kategori
    Breadcrumbs::for('createkategori', function ($trail) {
        $trail->parent('tabelkategori');
        $trail->push('Tambah Kategori', route('createkategori'));
    });
   
    //Home > Tabel Kategori > Edit
    Breadcrumbs::for('editkategori', function ($trail,$data) {
        $trail->parent('tabelkategori');
        $trail->push($data->title, route('editkategori',$data->id));
    });

    // Home > Kategori
    Breadcrumbs::for('kategori', function ($trail) {
        $trail->parent('home');
        $trail->push('Pilih Kategori', route('kategori'));
    });

    // Home > Paket
    Breadcrumbs::for('paket', function ($trail) {
        $trail->parent('home');
        $trail->push('Pilih Paket', route('premium'));
    });

    //Home > Paket > Show
    Breadcrumbs::for('showpaket', function ($trail,$data) {
        $trail->parent('paket');
        $trail->push($data->name, route('premium.show',$data->id));
    });

    //Home > Paket > Show > Check Out
    Breadcrumbs::for('transaksicreate', function ($trail,$harga) {
        $trail->parent('paket');
        $trail->push("Check Out ". $harga->name, route('transaksi.create',$harga->id));
    });

    // Home > Role
    Breadcrumbs::for('role', function ($trail) {
        $trail->parent('home');
        $trail->push('Tabel Role', route('role.index'));
    });

    //Home > Tabel Role > Edit
    Breadcrumbs::for('editrole', function ($trail,$data) {
        $trail->parent('role');
        $trail->push("Edit ". $data->name, route('role.index'));
    });

    //Home > Tabel Role > Edit
    Breadcrumbs::for('createrole', function ($trail) {
        $trail->parent('role');
        $trail->push('Tambah Role', route('role.create'));
    });

    // Home > Judul 1
    Breadcrumbs::for('judul1', function ($trail) {
        $trail->parent('home');
        $trail->push('Judul 1', route('judul1'));
    });
    
    // Home > Judul 2
    Breadcrumbs::for('judul2', function ($trail) {
        $trail->parent('home');
        $trail->push('Judul 2', route('judul2'));
    });

    // Home > Judul 3
    Breadcrumbs::for('judul3', function ($trail) {
        $trail->parent('home');
        $trail->push('Judul 3', route('judul3'));
    });

    // Home > Judul 4
    Breadcrumbs::for('judul4', function ($trail) {
        $trail->parent('home');
        $trail->push('Judul 4', route('judul4'));
    });

    // Home > Judul 5
    Breadcrumbs::for('judul5', function ($trail) {
        $trail->parent('home');
        $trail->push('Judul 5', route('judul5'));
    });

    // Home > Sponsor
    Breadcrumbs::for('sponsor', function ($trail) {
        $trail->parent('home');
        $trail->push('sponsor', route('sponsor'));
    });

    // Home > Keunggulan
    Breadcrumbs::for('keunggulan', function ($trail) {
        $trail->parent('home');
        $trail->push('keunggulan', route('keunggulan'));
    });
?>