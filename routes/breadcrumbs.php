<?php

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('mahasiswa', function ($trail) {
    $trail->push('Mahasiswa', route('mahasiswa.index'));
});

// Books > Add
// Breadcrumbs::for('add_book', function ($trail) {
//     $trail->parent('books');
//     $trail->push('Add Book', route('books.create'));
// });

// // Books > show/edit > title

// Breadcrumbs::for('detail_book', function ($trail, $book) {
//     $trail->parent('books');
//     $trail->push($book->title, route('books.show', $book->id));
// });
