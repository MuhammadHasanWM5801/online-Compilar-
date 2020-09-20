<?php
$current ="";
$answer ="";

if(!empty($_POST)){
    $current=$_POST['cppcode'];
    $file="program.cpp";
    file_put_contents($file, $current); 
    putenv("PATH=C:\Program Files\Dev-Cpp\MinGW64\x86_64-w64-mingw32"); 
    shell_exec("g++ program.cpp -o program.exe"); 

    $answer = shell_exec("program.exe");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/3dfadcef79.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>C And C++ Compiler</title>
</head>
<body>
<div class="container-fluid">
        <div class="btn-group mt-2 ml-5">
            <button type="button" class="btn btn-secondary dropdown-toggle drop_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              OTHER EDITORS 
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">
                 <a href="html.php"> HTML / CSS EDITOR</a>
              </button>
              <button class="dropdown-item" type="button">
                <a href="html.php"> JAVASCRIPT EDITOR</a>
              </button>   
            </div>
        </div>
    <form method="POST">
        <fieldset>
            <legend class="text-center">  <h1> C/C++ Compiler </h1></legend>
            <textarea name="cppcode" placeholder=" Enter C++ code" class="txtarea" id="cEditor"><?php echo $current; ?></textarea>
            <textarea name="cppcode2" disabled placeholder="See Result" class="output"><?php echo $answer; ?></textarea>
            <input type="submit" class="btn p-2 col-12 mt-2" value="Compile & Run">
    </form>

</div>

</body>
</html>