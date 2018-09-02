<? php 
    include 'Book.php';
    
    $book1 = new Book('my book', 9.99);
    
    // $book1 -> setTitle('My Book');
    
    // echo $book1 -> getTitle();
    
    //echo Book::getStore;
    
    $mag1 = new Magazine('pc world', 4.99,'october', 2016);
    
   echo  $mag1 -> getTitle(); 
    
    
    ?>
    
    
    
    
    