<?php 
    // initialize errors variable
  $errors = "";

  // connect to database
  $db = mysqli_connect("localhost", "root", "", "todo");

  // insert a quote if submit button is clicked
  if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
      $errors = "You must fill in the task";
    }else{
      $task = $_POST['task'];
      $sql = "INSERT INTO tasks (task) VALUES ('$task')";
      mysqli_query($db, $sql);
      header('todolist_makelist.php');
    }
  }

  // delete task
  if (isset($_GET['del_task'])) {
  $id = $_GET['del_task'];

  mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
  header('location: todolist_makelist.php');
}
  ?>  
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ToDo List</title>
    <link rel="stylesheet"  href="todolist_makelist.css">
    <style>
   
</style>
  </head>
  <body>
   
   <div class="center">
      <button id="myButton" class="float-right submit-button"  style="width:auto;">Logout</button>
   </div>

    <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "todolist_index.php";
    };
    </script>
    <div class="heading">
        <h2 style="font-style: 'Hervetica';">ToDo List </h2>
    </div>

<form method="post" action="todolist_makelist.php" class="input_form">
    <input type="text" name="task" class="task_input">
    <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
  </form>

<table>
  
  <thead>
    <tr>
      <th>N</th>
      <th>Tasks</th>
      <th style="width: 60px;">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    // select all tasks if page is visited or refreshed
    $tasks = mysqli_query($db, "SELECT * FROM tasks");

    $i = 1; 
    while ($row = mysqli_fetch_array($tasks)) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td class="task"><?php  echo $row['task'];?></td>
        <td class="delete">  
         <a href="todolist_makelist.php?del_task=<?php echo $row['id'] ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg></a>
      </td>
      </tr>
    <?php $i++; } ?>  
  </tbody>
</table>
<div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>