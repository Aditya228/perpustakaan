<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\BorrowLog;
use App\User;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $member = User::where('email', 'member@perpustakaan.com')->first();
        // BorrowLog::create(['user_id' => $member->id, 'book_id' => $book1->id, 'is_returned' => 1]);
    }
}
