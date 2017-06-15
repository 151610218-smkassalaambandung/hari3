<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $Author1 = Author::create(['name'=>'Muhammad Fauzil Adhim']);
        $Author2 = Author::create(['name'=>'Salim A. Fillah']);
        $Author3 = Author::create(['name'=>'Aam Amiruddin']);

        //sample buku
        $book1 = Book::create(['title'=>'Kupinang Engkau dengan Hamdalah','amount'=>1,'Author_id'=>$Author1->id]);
        $book2 = Book::create(['title'=>'Jalan Cinta Para Pejuang','amount'=>2,'Author_id'=>$Author1->id]);
        $book3 = Book::create(['title'=>'Membingkai Surga dalam Rumah Tangga','amount'=>3,'Author_id'=>$Author1->id]);
        $book4 = Book::create(['title'=>'Cinta & Seks Rumah Tangga Muslim','amount'=>4,'Author_id'=>$Author1->id]);
    }
}
