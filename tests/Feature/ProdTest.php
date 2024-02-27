<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use App\Models\Contact;

class ProdTest extends TestCase
{

//    use RefreshDatabase;

    public function test_create_contact()
    {
        $name = "John John 3";

        $this->logUser();
        $response = $this
            ->post('/contact/store',
                [
                    'name' => $name,
                    'email' => 'john3300003@example.com',
                    'contact' => '843002902',
                    '_token' => csrf_token(),
                ]);

        $this->assertDatabaseHas('contacts', ['name' => $name]);

    }
    public function logUser() {
        Session::start();
        $this->be(User::all()->first());
    }

    public function test_update_a_contact()
    {
        $this->logUser();

        $contact = Contact::factory()->create();

        $response = $this->put("/contact/{$contact->id}", [
            'name' => 'Updated Name',
            'contact' => '845223036',
            'email' => 'updated.2email222@example.com',
            '_token' => csrf_token(),
        ]);

        $response->assertStatus(302); // Assuming successful redirect
//        $this->assertDatabaseHas('contacts', ['id' => $contact->id, 'name' => 'Updated Name']);
    }
}
