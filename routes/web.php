<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\RoleComponent;
use App\Http\Livewire\Pages\ArsipComponent;
use App\Http\Livewire\Pages\PerusahaanComponent;
use App\Http\Livewire\Pages\Arsip\CreateComponent;
use App\Http\Livewire\Pages\Arsip\UpdateComponent;
use App\Http\Livewire\Pages\Klasifikasi\CreateKlasifikasiComponent;
use App\Http\Livewire\Pages\Klasifikasi\UpdateKlasifikasiComponent;
use App\Http\Livewire\Pages\KlasifikasiComponent;
use App\Http\Livewire\Pages\Pengguna\CreatePenggunaComponent;
use App\Http\Livewire\Pages\Pengguna\UpdatePenggunaComponent;
use App\Http\Livewire\Pages\PenggunaComponent;
use App\Http\Livewire\Pages\Role\CreateRoleComponent;
use App\Http\Livewire\Pages\Role\UpdateRoleComponent;

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
Route::delete("/arsip/{arsipId}/delete", ArsipComponent::class)->name("arsip.destroy");
Route::get("/role", RoleComponent::class)->name("role");
Route::get("/role/create", CreateRoleComponent::class)->name("role.create");
Route::get("/role/{roleId}/update", UpdateRoleComponent::class)->name("role.update");
Route::delete("/role/{roleId}/delete", RoleComponent::class)->name("role.destroy");
Route::get("/pengguna", PenggunaComponent::class)->name("pengguna");
Route::get("/pengguna/create", CreatePenggunaComponent::class)->name("pengguna.create");
Route::get("/pengguna/{penggunaId}/update", UpdatePenggunaComponent::class)->name("pengguna.update");
Route::delete("/pengguna/{penggunaId}/delete", PenggunaComponent::class)->name("pengguna.destroy");
Route::get("/perusahaan", PerusahaanComponent::class)->name("perusahaan");
Route::get("/klasifikasi", KlasifikasiComponent::class)->name("klasifikasi");
Route::get("/klasifikasi/create", CreateKlasifikasiComponent::class)->name("klasifikasi.create");
Route::get("/klasifikasi/{klasifikasiId}/update", UpdateKlasifikasiComponent::class)->name("klasifikasi.update");
Route::delete("/klasifikasi/{klasifikasiId}/delete", KlasifikasiComponent::class)->name("klasifikasi.destroy");