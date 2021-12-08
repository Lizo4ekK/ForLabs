
<!DOCTYPE html>
<html>
      
<head>
    <title>
       4_lab
    </title>
</head>
  
<body>

  
<form method="post">
	
   <dt><h3 class="left">Ваш любимый язык программирования:</h3></dt>
  <div>
    <dd><input type="radio" id="languageChoice1"
     name="language" value="C++" >
    <label for="languageChoice1">C++</label></dd>

   <dd> <input type="radio" id="languageChoice2"
     name="language" value="PHP">
    <label for="languageChoice2">PHP</label></dd>

   <dd> <input type="radio" id="languageChoice3"
     name="language" value="Java">
    <label for="languageChoice3">Java</label></dd>
  </div>
   <div>
   <dd> <input type="submit" name="voteBtn">Vote!</input></dd>
  </div>
</form>
   <?php
   $selectedResult = 0;

   if(isset($_POST['voteBtn'])) { $selectedResult = $_POST['language'];  echo  $selectedResult;
$fd = fopen("result.txt", 'w') or die("не удалось открыть файл");
fputs($fd, $selectedResult);
fclose($fd);
header("Location: /test/result.html");
 }

    ?>
</body>
</head>
  
</html>
