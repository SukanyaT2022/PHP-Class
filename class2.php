<?php
class bookStore {
    private $bookID = 101;
    private $bookName = "Elmo";
    private $bookPrice = 10;

// design what we can do with book store function

function increasePrice($amount){
 $this->bookPrice += $amount;
}
// display function just print book details-- and . for join like +
function display(){
echo $this->bookID."<br>".$this->bookName."<br>".$this->bookPrice;
}

}
// all above is design and below is object

$book1 = new bookStore();
$book1->display();
$book1->increasePrice(20);
echo"<br>";
 $book1->display(); 

//book 1->display this line show new place



?>