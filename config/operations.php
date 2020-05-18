<?php 

    
    require_once('./config/dbconfig.php');

    




    $db = new dbconfig();

 
             class operations extends dbconfig{ 

           private $image;
           private $description;
           private $dates;
           private $category;
           private $user_id;
           private $title;
           private $publ_id;


        // View Database Record
        public function view_record() {
            global $db;
            $stmt = $db->connection->prepare('SELECT * FROM publication');
           $stmt->execute();
            $result=$stmt->fetchAll();
           return $result;

        }



           // Insert Database 
                           
             function set_insert($image,$description,$dates,$category,$user_id,$title) {
               $this->image = $image;
               $this->description = $description;
               $this->dates = $dates;
               $this->category = $category;
               $this->user_id = $user_id;
               $this->title = $title;


        }

  
        function get_insert(){
            global $db;
               
         
    $stmt = $db->connection->prepare('INSERT INTO publication (image, description, dates,category,user_id,title) VALUES (?, ?, ?,?, ?, ?)');
    $stmt->execute(array($this->image, $this->description,$this->dates,$this->category,$this->user_id,$this->title));
   


            if($stmt)
            {
                
                 echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                 Your Record Has Been Saved :)
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
            }
            else
            {

                     echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                 Failed
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
            }
        }














 // --------------------------------------view by id-------------------------------------------


 function set_viewbyid($user_id) {
            
            $this->user_id=$user_id;

        }


    function get_viewbyid() {
            global $db;
           $stmt = $db->connection->prepare("SELECT * FROM publication WHERE user_id= ?");
           $stmt->execute(array($this->user_id));
            $result=$stmt->fetchAll();
           return $result;

        }






 // --------------------------------------view update data-------------------------------------------


 function set_recordupadate($publ_id) {
            
            $this->publ_id=$publ_id;

        }


    function get_recordupadate() {
            global $db;
           $stmt = $db->connection->prepare("SELECT * FROM publication WHERE pub_id= ?");
           $stmt->execute(array($this->publ_id));
            $result=$stmt->fetchAll();
           return $result;

        }






 // --------------------------------------update data-------------------------------------------




              
             function set_update($image,$description,$dates,$category,$user_id,$title,$publ_id) {
               $this->image = $image;
               $this->description = $description;
               $this->dates = $dates;
               $this->category = $category;
               $this->publ_id = $publ_id;
               $this->title = $title;
               $this->user_id = $user_id;

        }

  
        function get_update(){
            global $db;
               
         
    $stmt = $db->connection->prepare("UPDATE publication SET image = ?, description= ?, dates= ?,category =?,user_id= ?,title= ? WHERE pub_id = '$this->publ_id' ");

    $stmt->execute(array($this->image, $this->description,$this->dates,$this->category,$this->user_id,$this->title));
   
              

//       
        }




          //Delete function

                 
             function set_delete($publ_id) {
              
               $this->publ_id = $publ_id;
               

        }

        function get_delete(){
            global $db;
               
         
   
           $stmt = $db->connection->prepare("DELETE FROM publication WHERE pub_id= '$this->publ_id'");
           $stmt->execute();



//             if($stmt){
                
//                  echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//                  Your Record Has Been Saved :)
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
//             }
//             else {

//                      echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//                  Failed
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
//             }


        }





    
     }
            
            
   
               




?>