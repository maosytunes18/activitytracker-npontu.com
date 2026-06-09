<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\ActivityUpdate;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'employee_id' => 'AST-1234',
            'department' => 'Application Support',
            'phone' => '+1 555-123-4567',
        ]);

        $activities = [];
        
        $activities[] = Activity::create([
            'title' => 'Daily SMS count verification',
            'description' => 'Compare delivered SMS totals against the provider log report.',
            'activity_date' => now()->format('Y-m-d'),
            'created_by' => $user->id,
            'status' => 'pending',
        ]);
        
        $activities[] = Activity::create([
            'title' => 'USSD verification',
            'description' => 'Confirm status codes and session metrics for today\'s USSD flows.',
            'activity_date' => now()->format('Y-m-d'),
            'created_by' => $user->id,
            'status' => 'done',
        ]);
        
        $activities[] = Activity::create([
            'title' => 'Database replication check',
            'description' => 'Review replication lag and restart the queue if required.',
            'activity_date' => now()->format('Y-m-d'),
            'created_by' => $user->id,
            'status' => 'pending',
        ]);

        foreach ($activities as $activity) {
            ActivityUpdate::create([
                'activity_id' => $activity->id,
                'user_id' => $user->id,
                'status' => $activity->status,
                'remark' => $activity->status === 'done' ? 'Completed successfully' : 'Awaiting verification',
            ]);
        }
    }
}
