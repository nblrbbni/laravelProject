<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\ArsipComponent;
use App\Http\Livewire\Pages\PerusahaanComponent;
use App\Http\Livewire\Pages\Arsip\CreateComponent;
use App\Http\Livewire\Pages\Arsip\UpdateComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", HomeComponent::class)->name("dashboard");
Route::get("/arsip", ArsipComponent::class)->name("arsip");
Route::get("/arsip/create", CreateComponent::class)->name("arsip.create");
Route::get("/arsip/{arsipId}/update", UpdateComponent::class)->name("arsip.update");
Route::get("/perusahaan", PerusahaanComponent::class)->name("perusahaan");