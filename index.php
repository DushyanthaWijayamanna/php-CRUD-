<?php
session_start();
  require 'dbcon.php'

?>

    <div class="container mt-5" >
     <?php
       include('message.php');
     
     ?>
     <?php include('include/header.php');?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="class-header">
              <h4>Student Details
                <a href="student-create.php" class="btn btn-primary float-end">Add Student</a>
              </h4>
              
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>Id</th>
                  <th>Student name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>

                  </tr>
                
                </thead>
                <tbody>
                  <?php
                     $query="SELECT * FROM students";
                     $query_run=mysqli_query($con , $query);
                     if(mysqli_num_rows($query_run)>0){
                           foreach($query_run as $student){

                             

                             ?>

                             <tr>
                               <td><?=$student['id']; ?></td>
                               <td><?=$student['name']; ?></td>
                               <td><?=$student['email']; ?></td>
                               <td><?=$student['phone']; ?></td>
                               <td><?=$student['course']; ?></td>
                               <td>
                                 <a href="student-view.php?id=<?=$student['id'];?>"class="btn btn-info btn sm">View</a>
                                 <a href="student-edit.php?id=<?=$student['id'];?>"class="btn btn-success btn sm">Edit</a>
                                
                                 <form action="code.php" method="POST" class="d-inline">
                                    <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn sm">Delete</a>

                                 </form>
                            
                               </td>
                                
                            </tr>
                            <?php

                           }

                     }
                     else{

                        echo"<h5> No Records Found</h5>";

                     }
                  ?>
                  
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>

      <?php include('include/footer.php');?>
   

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>