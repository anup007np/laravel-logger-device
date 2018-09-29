<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllLogs()
    {
        $logs = factory(\App\Log::class)->create();
       
        $response = $this->json('GET', '/api/logs');
        $response
           ->assertStatus(200)
           ->assertJsonFragment([$logs->toArray()]);
    }

    public function testCreateLog()
    {
        $device = factory(\App\Device::class)->create()->id;
        $data = [
                    'title' => 'hello',
                    'resolved' => 1,
                    'owner' => 'Anup',
                    'device_id' => $device
                ];
        $response = $this->json('POST', '/api/logs', $data);
        $response->assertStatus(201);
        $response->assertJsonStructure([
            'data' =>  [
                            'id',
                            'title',
                            'resolved',
                            'owner',
                            'device_id',
                            'created_at',
                            'updated_at'
                        ]
        ]);
    }

    public function testUpdateLog()
    {
        $log = factory(\App\Log::class)->create();
        $response = $this->json('PUT', '/api/logs/'.$log->id);
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' =>  [
                            'id',
                            'title',
                            'resolved',
                            'owner',
                            'device_id',
                            'created_at',
                            'updated_at'
                        ]
        ]);
    }

    public function testDeleteLog()
    {
        $log = factory(\App\Log::class)->create();
        $response = $this->json('DELETE', '/api/logs/'.$log->id);
        $response->assertStatus(200);
    }
}
