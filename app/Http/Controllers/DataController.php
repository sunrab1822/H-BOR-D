<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    private $books = array();
    private $authors = array();
    function __construct() {
        $this->books = Storage::json("public/books.json");
        foreach ($this->books as $book)
        {
            if (!in_array($book["author"], $this->authors))
            {
                $this->authors[] = $book["author"];
            }
        }

    }

    function index() {

        $data = [
            "books" => $this->books,
        ];


        return view("home", $data);
    }

    function showBook($booktitle) {

        $findbook = null;

        foreach ($this->books as $book)
        {
            if ($book["title"] == $booktitle)
            {
                $findbook = $book;
                break;
            }
        }

        return view("book",  ["book" => $findbook]);
    }

    function showauthors() {


        return view("authors", ["authors" => $this->authors]);
    }

    function showBooksByAuthor($authorName) {
        $findBooks = array();

        foreach ($this->books as $book)
        {
            if ($book["author"] == $authorName)
            {
                $findBooks[] = $book;
            }
        }
        return view("home", ['books' => $findBooks]);
    }
}
