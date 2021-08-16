 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Courses</title>
    <link rel="stylesheet" href="../View/css/addcourse.css?v <?php echo time(); ?>">
    <script src="../View/js/addcourse.js"></script>


 </head>
 <body>


  <?php
    session_start();
    if(!isset($_SESSION['s_id']))
        header("location:../");

   $page = 'addcourse';
   include('../View/html/header.php');
   include('../Model/dbcourse.php');
 

   $addCourseSuccess = $addCourseFailed = "";
   $isValid = true;
   $res = false;
   $uniqueId = "";
   $coursename = $time = $room = $section = $courseId = "";
   $coursenameErr = $timeErr = $roomErr = $sectionErr = $courseIdErr ="";
 

   if ($_SERVER['REQUEST_METHOD'] === "POST")
   {

      $coursename = $_POST['coursename'];
      $time = $_POST['time'];
      $room = $_POST['room'];
      $section = $_POST['section'];
      $courseId = $_POST['courseId'];


      if(empty($coursename)  )
         {
            $coursenameErr = "course name can not be empty.";
            $isValid = false;
         }
         if( strlen($coursename) > 100)
         {
            $coursenameErr = "course name can not be > 100 Character.";
            $isValid = false;
         }
      if(empty($time) )
         {
            $timeErr = "time can not be empty.";
            $isValid = false;
         }
         if( strlen($time) > 10)
         {
            $timeErr = "time can not be > 10 Character.";
            $isValid = false;
         }
      if(empty($room)  )
         {
            $roomErr = "room can not be empty.";
            $isValid = false;
         }
         if( strlen($room) > 10)
         {
            $roomErr = "room can not be > 10 Character.";
            $isValid = false;
         }
      if(empty($section) )
         {
            $section = "section can not be empty.";
            $isValid = false;
         }
      if(empty($courseId))
         {
            $courseIdErr = "course id can not be empty.";
            $isValid = false;
         }

      $coursename = basic_validation($coursename);
      $time = basic_validation($time);
      $room = basic_validation($room);
      $section = basic_validation($section);
      $courseId = basic_validation($courseId);

      $course_data = getCourseId($courseId);
      for ( $i = 0; $i < count($course_data); $i++)
      {
         if($course_data[$i]["bookid"] == $courseId)
         {
            $uniqueId = "This id is already exist !!";
            $isValid = false;

         }
      }
         
      if($isValid)
      {
            $res = AddCourse($coursename,$time,$room,$section,$courseId);
             
            if($res) 
                $addCourseSuccess = "Add course succesfully.";

            else $addCourseFailed = "Add course failed.";
       }

}

         function basic_validation($data)
         {
             $data = trim($data);
             $data = htmlspecialchars($data);
             $data = stripcslashes($data);
             return $data;
         }

?>
 
 <div class="body">
  <div class="container">
        <div class="header">
            <h2>Add Courses</h2>
        </div>


        <form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" class="form" id="form" method = "POST" onsubmit="return jsValid();" >
            <div class="form-control">
                <lable>Course Name</lable>
                <input type="text" placeholder="Web Dev" id="coursename" name="coursename" value="<?php echo $coursename ?>" >
                <img class="check" src="../View/img/checked.svg" alt="Checked">
                <img class="warn" src="../View/img/warn.svg" alt="Error">
                <small>Error message</small>
                <span style="color: red"> <?php echo $coursenameErr; ?> </span>
            </div>  
 
            <div class="form-control">
                <lable>Time</lable>
                <input type="text" placeholder="9:30 AM" id="time" name="time" value="<?php echo $time ?>">
                <img class="check" src="../View/img/checked.svg" alt="Checked">
                <img class="warn" src="../View/img/warn.svg" alt="Error">
                <small>Error message</small>
                <span style="color: red"> <?php echo $timeErr; ?> </span>
            </div>  

             <div class="form-control">
                <lable>Room</lable>
                <input type="text" placeholder="165" id="room" name="room" value="<?php echo $room ?>">
                <img class="check" src="../View/img/checked.svg" alt="Checked">
                <img class="warn" src="../View/img/warn.svg" alt="Error">
                <small>Error message</small>
                <span style="color: red"> <?php echo $roomErr; ?> </span>
            </div> 

            <div class="form-control">
                <lable>Section</lable>
                <input type="text" placeholder="B" id="section" name="section" value="<?php echo $section ?>" >
                <img class="check" src="../View/img/checked.svg" alt="Checked">
                <img class="warn" src="../View/img/warn.svg" alt="Error">
                <small>Error message</small>
                <span style="color: red"> <?php echo $sectionErr; ?> </span>
            </div>  
  
             <div class="form-control">
                <lable>Course Id</lable>
                <input type="text" placeholder="1001" id="courseId" name="courseId" value="<?php echo $courseId ?>">
                <img class="check" src="../View/img/checked.svg" alt="Checked">
                <img class="warn" src="../View/img/warn.svg" alt="Error">
                <small>Error message</small>
                <span style="color: red"> <?php echo $courseIdErr; ?> </span>

            </div>  

            <button type="submit">Add Course</button>
             <span style="color: green;"> <?php echo $addCourseSuccess; ?> </span>
             <span style="color: red"> <?php echo $addCourseFailed; ?> </span>


 
        </form>
    </div>
    </div>
 
<?php
include('../View/html/footer.html');
?>

</body>
</html>