<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   
                   function get_data() {
                       $id = $_POST['Id'];
                       $file_name='student.json';
                  
                       if(file_exists("$file_name")) { 
                           $current_data=file_get_contents("$file_name");
                           $array_data=json_decode($current_data, true);
                                              
                           $extra=array(
                               'id'=>$_POST['Id'],
                               'img' => $_POST['Image'],
                               'name' => $_POST['Name'],
                               'email' => $_POST['Email'],
                               'phone' => $_POST['Phone'],
                               'enroll number' => $_POST['Number'],
                               'date of admission' => $_POST['Date'],
                           );
                           $array_data[]=$extra;
                           echo "file exist<br/>";
                           return json_encode($array_data);
                       }
                       else {
                           $datae=array();
                           $datae[]=array(
                            'id'=>$_POST['Id'],
                            'img' => $_POST['Image'],
                            'name' => $_POST['Name'],
                            'email' => $_POST['Email'],
                            'phone' => $_POST['Phone'],
                            'enroll number' => $_POST['Number'],
                            'date of admission' => $_POST['Date'],
                           );
                           echo "file not exist<br/>";
                           return json_encode($datae);   
                       }
                   }
                 
                   $file_name='student.json';
                     
                   if(file_put_contents("$file_name", get_data())) {
                       echo 'success';
                   }                
                   else {
                       echo 'There is some error';                
                   }
               }
                      
               ?>