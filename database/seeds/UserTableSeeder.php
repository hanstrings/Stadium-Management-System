// app/database/seeds/UserTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('users')->insert([
        'name'     => 'Basit Ali',
        'role_id'  => '1',
        'avatar' => 'basit.jpg',
        'email'    => 'basitalikhatri98@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'basit123',
        'address'  => 'Strret 47 , karachi , pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '21',
        'phone'  => '0331xxxxxxx',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);
    
    DB::table('users')->insert([
        'name'     => 'Mark Henry',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'markhenry91@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'Mark123',
        'address'  => 'Street 47 , New York , America',
        'nationality'  => 'American',
        'age'  => '31',
        'phone'  => '+15417543010',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Muneer Hassan',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'muneer91@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'muneer123',
        'address'  => 'Street 47 , Sydney , Australia',
        'nationality'  => 'Australian',
        'age'  => '22',
        'phone'  => '+15417542015',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Fazal Hassan',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'fazal69@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'fazal123',
        'address'  => 'Street 49 , Melbourne , Australia',
        'nationality'  => 'Australian',
        'age'  => '50',
        'phone'  => '+15417542123',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Ali Hassan',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'alih123@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'ali123',
        'address'  => 'Street 49 , Perth , Australia',
        'nationality'  => 'Australian',
        'age'  => '25',
        'phone'  => '+15419872015',
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        

    ]);

DB::table('users')->insert([
        'name'     => 'Malik Obaid',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'malik@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'mo123',
        'address'  => 'Street 49 , Karachi , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '66',
        'phone'  => '+15417654815',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Mohammad Umer',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'umer@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'umer123',
        'address'  => 'Street 91 , Karachi , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '28',
        'phone'  => '+1541252015',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Umar khan',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'umar@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'umar123',
        'address'  => 'Street 21 , Lahore , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '85',
        'phone'  => '+1521542015',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Umair khan',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'umair@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'umair123',
        'address'  => 'Street 31 , Lahore , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '25',
        'phone'  => '+1921542125',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);


DB::table('users')->insert([
        'name'     => 'Usman khan',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'usman@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'usman123',
        'address'  => 'Street 31 , Islamabad , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '25',
        'phone'  => '+1921542585',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);


DB::table('users')->insert([
        'name'     => 'Muhammad Umair',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'mumair@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'mumair001',
        'address'  => 'Street 31 , sydney , Australia',
        'nationality'  => 'Australian',
        'age'  => '45',
        'phone'  => '+1921123455',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);


DB::table('users')->insert([
        'name'     => 'Ali Ahmed',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'Aliahm@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'ali999',
        'address'  => 'Street 12 , Islamabad , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '25',
        'phone'  => '+1921542125',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Muneer Ahmed',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'munahm@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'mun999',
        'address'  => 'Street 99 , Islamabad , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '55',
        'phone'  => '+1251542125',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('users')->insert([
        'name'     => 'Basit Ahmed',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'basahm@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'bas999',
        'address'  => 'Street 55 , Hyderabad , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '22',
        'phone'  => '+1921123525',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('users')->insert([
        'name'     => 'Umar Ahmed',
        'role_id'  => '2',
        'avatar' => 'default.png',
        'email'    => 'umahm@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'uma999',
        'address'  => 'Street 55 , Sialkot , Pakistan',
        'nationality'  => 'Pakistani',
        'age'  => '25',
        'phone'  => '+1945642125',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);
}

}