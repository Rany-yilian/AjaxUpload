<?php 
   $res["error"] = "";//错误信息
   $res["msg"] = "";//提示信息
   if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"c:\\test.jpg")){
    $res["msg"] = "ok";
   }else{
     $res["error"] = "error";
   }
   file_put_contents('data.txt',json_encode($_FILES),FILE_APPEND);
   echo json_encode($res);

?>