<?php
namespace App;

use DateTime;
use App\Models\Model;
use App\Models\BookModel;
require_once 'autoloader.php';
Autoloader::register();

$model = new BookModel('books', $db);
//var_dump($model);
//$model->findAll();
//print_r($model->findAll());

$books = $model->findBy(['status' => 'PUBLISH' , 'categories_0' => 'Java']);
print_r($books);

$book_1 = $model->findById(210);
print_r($book_1);

/* $date = (new DateTime('Europe/Berlin'))->format('Y-m-d H:i:s');
$book_2 = new BookModel('books');

$book_2 ->  setTitle('Java8 Edition 2');
$book_2 ->  setCategories_0('Java');
$book_2 -> setIsbn('1935186359');
$book_2 -> setStatus('PUBLISH');
$book_2 -> setAuthors_0('John Doe');
$book_2 -> setPublishedDate($date);

print_r($book_2);
$book_2->create($book_2); */
////////////////////////USING the HYDATE Method/////////////////////
//$book_3 = new BookModel('books');

//takes an array as of data for example coming from a form
//then using a hydrator to hydrate the created object
/* $data = [
    'title' => 'Java Edition 3',
    'categories_0' => 'Java',
    'isbn' => '1935186359',
    'status' => 'PUBLISH',
    'publishedDate' => '2020-11-02',
    'authors_0' => 'John Doe'

];

$book_3->hydrate($data);
$book_3->create($book_3); */

//UPDATE//////////////////////
$book_4 = new BookModel('books');
//We need to change the publication date for a particular book 
$date = (new DateTime('Europe/Berlin'))->format('Y-m-d H:i:s');
//takes an array as of data for example coming from a form
//then using a hydrator to hydrate the created object
$data = [
    
    
    'publishedDate' => $date,
   

];

$book_4->hydrate($data);
//upadating the publication date of the book with the id=398
$book_4->update(398, $book_4);