<?php

use App\Models\User;

test('guests are redirected to the login page', function () {
    $response = $this->get('/schedule');
    $response->assertRedirect('/login');
});

test('authenticated users can visit the dashboard', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get('/schedule');
    $response->assertStatus(200);
});