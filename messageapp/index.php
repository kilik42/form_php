<?php include 'db.php';?>


<?php
    //select query
    $query = 'SELECT * FROM messages ORDER BY create_date';
    
    $messages = mysqli_query($conn, $query);
    
    if (isset($_GET['error'])){
         $error = $_GET['error'];
    }
    
    if(isset($_GET['success'])){
        $error = $_GET['success'];
    }
    
    
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <header>
            <h1>message app</h1>
            <?php if(isset($error)): ?>
             <div class="alert"><?php echo $error; ?></div>
            
            <?php endif; ?>
            <?php if(isset($success)): ?>
             <div class="alert"><?php echo $success; ?></div>
            
            <?php endif; ?>
            
        </header>
        <div class="main">
            <form action="process.php" method="POST">
                <input type="text" name="text" placeholder="enter message text">
               <input type="text" name="text" placeholder="enter user name">
                <input type="submit" value="submit">
            </form>
            <ul class="messages">
                <?php while($row = mysqli_fetch_assoc($messages)) : ?>
                   <li><?php echo $row['text']; ?> | <?php echo $row['user']; ?>|  
                      [<?php echo $row ['create_date']; ?>] 
                   
                   </li>
                   
                 <?php endwhile; ?>
            </ul>
        </div>
        
        <footer>
            message app &copy; 2018
        </footer>
    </div>
</body>
</html>