<?php
   $connection = mysqli_connect('localhost','root','');

   if(!$connection)
  {
    echo 'Невозможно подключиться к серверу';
   }
   if(!mysqli_select_db($connection,'sait'))
   {
    echo 'Ошибка базы данных';
   }
   
   
   $login = $_POST['login'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $surname = $_POST['surname'];
   $name = $_POST['name'];
   $lastname = $_POST['lastname'];
   $number = $_POST['number'];
    
    
   
   $select_db ="INSERT INTO user (login, password, email, surname, name, lastname,number) 
   VALUES ('$login', '$password',' $email','$surname','$name','$lastname','$number' )";
   
   if(!mysqli_query($connection,$select_db))
   {
    echo 'Неизвестная ошибка';
   }
   
   else
   {
    echo 'Данные успешно внесены!';
   }
  
?>
