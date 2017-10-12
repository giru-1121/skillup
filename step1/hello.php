<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="hello.css">
</head>
<body>
    <?php
   if(isset($_POST["comment"])){
       $comment = htmlspecialchars($_POST["comment"]);
       print("あなたのコメントは「${comment}」です。");
   } else{
       ?>
   <p>コメントしてください。</p>
   <form method="POST" action="">
   <input name="comment" />
   <input type="submit" value="送信" class="submit-button" />
   </form>    
   <?php
   }
 ?>
</body>
</html>