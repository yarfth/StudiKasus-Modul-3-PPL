<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateNoteTest extends DuskTestCase

{
    /**
     * A Dusk test example.
     * @group createnote
     */
    public function testNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Akses halaman utama sebelum login
            ->assertSee('Modul 3') //Cek apakah teks yang diharapkan muncul di halaman
            ->clickLink('Log in') //Klik tautan "Log in"
            ->assertPathIs('/login') //Pastikan alamat URL berubah menjadi '/login'
            ->type('email', 'user@gmail.com') //Isi kolom email dengan user@gmail.com
            ->type('password', 'password') //Isi kolom password dengan 'password'
            ->press('LOG IN') //Klik tombol 'LOG IN' untuk masuk
            ->assertPathIs('/dashboard') //Verifikasi apakah pengguna diarahkan ke halaman '/dashboard'
            ->clickLink('Notes') //Klik menu "Notes"
            ->assertPathIs('/notes') //Pastikan saat ini berada di URL '/notes'
            ->clickLink('Create Note') //Klik tautan "Create Note" untuk membuat catatan baru
            ->assertPathIs('/create-note') //Pastikan URL sekarang adalah '/create-note'
            ->type('title', 'Halo') //Isi form 'title' dengan teks yang diinginkan
            ->type('description', 'modul 3') //Isi form 'description' dengan teks yang sesuai
            ->press("CREATE") //Klik tombol "CREATE" untuk men-submit catatan
            ->assertPathIs('/notes'); //Pastikan diarahkan kembali ke halaman '/notes' setelah catatan dibuat sukses

        });
    }
}