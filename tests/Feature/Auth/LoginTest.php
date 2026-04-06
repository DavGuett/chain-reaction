<?php

use App\Models\User;
use Illuminate\Auth\SessionGuard;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('login screen can be rendered', function () {
    $response = $this->get(route('login'));

    $response->assertOk();
    $response->assertSee('Log in');
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $response = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect('/home');
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $response = $this->from(route('login'))->post(route('login'), [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
    $response->assertRedirect(route('login'));
    $response->assertSessionHasErrors('email');
});

test('users can request to be remembered', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $response = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password',
        'remember' => true,
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect('/home');
    $response->assertCookieNotExpired('remember_web_'.sha1(SessionGuard::class));
});
