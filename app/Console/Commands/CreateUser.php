<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user {user-data}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user admin and create user writer, userData {name;email;password;role}';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $args = $this->argument('user-data');
        $arr = explode(',', $args);

        $validator = Validator::make([
            'name' => $arr[0],
            'email' => $arr[1],
            'password' => $arr[2],
            'role' => $arr[3],
        ], [
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
            'role' => 'required|in:writer,admin',
        ]);

        if ($validator->fails()) {
            $this->error($validator->errors()->first());
            return;
        }

        $validated = $validator->validated();
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $this->info('User created successfully');
    }
}
