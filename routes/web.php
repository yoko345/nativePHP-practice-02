<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\TeamMember\Index::class)->name("index");
Route::get('/team-members/create', \App\Livewire\TeamMember\Create::class)->name("create");
Route::get('/team-members/{teamMember}/edit', \App\Livewire\TeamMember\Update::class)->name("edit");
