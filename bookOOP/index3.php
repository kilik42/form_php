<?php
    //session
    session_start();

  if (isset($_POST['name'])){
      //echo 'submitted';
      if(isset($_SESSION['bookmarks'])){
          $_SESSION['bookmarks'][$_POST['name']] = $_POST['url'];
      } else{
          $_SESSION['bookmarks'] = Array($_POST['name'] => $_POST['url']);
      }
     
  }
  
  if(isset($_GET['action']) && $GET['action'] == 'clear'){
      session_unset();
      session_destroy();
      header("location: index.php");
  }
  
  
  if(isset($_GET['action']) && $GET['action'] == 'delete'){
      unset($_SESSION['bookmarks'][$_GET['name']]);
      header("location: index.php");
  }
  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css" type="text/css" />
   
    <style type="text/css">
        .delete{color:white;}
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bookmarker</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
            <li ><a href="index.php">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="">website name</label>
                        
                        <input type="text" name="name"class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">website url</label>
                        
                        <input type="text" name="name"class="form-control" />
                    </div>
                    <input type="submit" value="submit" class="btn btn-default">
                </form>
            </div>
            <div class="col-md-5">
                <?php   if(isset($_SESSION['bookmarks'])) :  ?>
                    
                    <ul class="list-group">
                        <?php foreach($_SESSION['boomkarks'] as $name =>$url): ?>
                                <li class="list-group-item">
                                    <a href="<?php echo $url; ?>">
                                        <?php echo $name; ?></a>
                                    <a class="delete" href="index.php?action=delete&name=<?php echo $name ; ?>">[X]</a> 
                                    
                                </li>
                        <?php endforeach; ?>
                    </ul>
                
                <?php  endif; ?>
                
                
                
            </div>
        </div>
    </div>
</body>
</html>