<?php
 class Book{
     private $title;
     private $author;
     private $publicationYear;
     
     public function __construct($title,$author,$publicationYear){
         $this->title=$title;
         $this->author=$author;
         $this->publicationYear=$publicationYear;
     }
     public function displayInfo(){
         echo "Title: ".$this->title . "\n";
         echo "Äuthor: ".$this->author . "\n";
         echo "Publication Year: ".$this->publicationYear . "\n";
     }
 }
 $book1=new Book("The Great Gatsby","F. Scott Fitzgerald",1920);
 $book2=new Book("To Kill a Mockingbird","Harper Lee",2000);
 
 $book1->displayInfo();
 $book2->displayInfo();
?>
