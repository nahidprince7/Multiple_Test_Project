<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\User;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class,10)->create();

        foreach(Project::all() as $project){
            $users = User::inRandomOrder()->take(rand(1,3))->pluck('id');
            foreach($users as $user){
                $project->users()->attach($user,['is_manager'=>rand(0,1)]);
            }
        }
    }
}
