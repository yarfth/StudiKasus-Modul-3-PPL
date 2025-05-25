<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group edit
     */
    public function testEdit(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Buka halaman utama
            ->assertSee('Modul 3')// Pastikan teks "Modul 3" muncul
            ->clickLink(link: 'Log in')// Klik link "Log in"
            ->assertPathIs(path: '/login') // Pastikan URL sekarang '/login'
            ->type(field: 'email', value: 'user@gmail.com')// Isi email
            ->type(field: 'password', value: 'password') // Isi password
            ->press(button: 'LOG IN') // Tekan tombol "LOG IN"
            ->assertPathIs(path: '/dashboard')// Pastikan berhasil ke '/dashboard'
            ->clickLink('Notes') // Klik link "Notes"
            ->assertPathIs('/notes') // Pastikan di halaman '/notes'
            ->clickLink('Edit') // Klik link "Edit"
            ->assertPathIs('/edit-note-page/7') // Pastikan di halaman edit note id 3
            ->type('title', 'Haloya') // Ubah isi field 'title'
            ->type('description', 'modul 3 nih') // Ubah isi field 'description'
            ->press('UPDATE') // Tekan tombol "UPDATE"
            ->assertPathIs('/notes'); // Pastikan kembali ke halaman '/notes'
        });
    }
}