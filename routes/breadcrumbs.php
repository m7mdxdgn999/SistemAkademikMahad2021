<?php

//Mabna
Breadcrumbs::for('admin.mabna.index', function ($trail) {
    $trail->push('Mabna', route('admin.mabna.index'));
});

//Mabna > Tambah
Breadcrumbs::for('admin.mabna.create', function ($trail) {
    $trail->push('Mabna', route('admin.mabna.index'));
    $trail->push('Tambah', route('admin.mabna.create'));
});