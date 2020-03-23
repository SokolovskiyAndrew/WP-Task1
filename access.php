<?php 
$result = '';

if(!empty($_GET['name']) && !empty($_GET['age'])){
    $name = $_GET['name'];
    $age = $_GET['age'];

    if ($age <= 21 ) {
         $result = 'Sorrey, '.$name.', you shall not pass!';
    } else {
        $result =  'Hello, '.$name.', make yourself at home'; 
    }
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
}

// $errors = array('name' => '', 'age' => '');
//  if(isset($_GET['submit'])){ //submit - коли нажимаємо на кнопку спрацьовує масив
//     //   echo $_GET['name'];
//     //  echo $_GET['age'];

//     if(empty($_GET['name'])) {
//         $errors['name'] = "Please, enter your name, sir";
//     } else {
//         $name = $_GET['name'];
//         if(!preg_match('/^[A-Za-z]+$/', $name)){
//            $errors['name'] = "Please, use only letters , sir";
//         }
//     }
   
//     if(empty($_GET['age'])) {
//         $errors['age'] = "Please, enter your birth-year, sir";
//    } else {
//        $age = $_GET['age'];
//        if(!preg_match('/^[0-9]*$/', $age)){
//           $errors['age'] = "Please, use only numbers, sir";
//        }
//    }
//  }
 
 

// ?>


