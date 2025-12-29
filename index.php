<?php 
require __DIR__ . '/db.php'; 

// Run a query to get all tasks from the database (newest first)
$task_result_set = mysqli_query(
  $mysqli,
  "SELECT id, title, is_done FROM tasks ORDER BY id DESC"
);

// Store all rows of data in a php array in later use
$task_rows = [];
while($task_row = mysqli_fetch_assoc($task_result_set)){
  //convert is_done to integer (0 or 1 instance of "0" or "1")
  $task_row['is_done'] = (int)$task_row['is_done']; // casting
  $task_rows[] = $task_row;
}

// Count totals for the todo tracker
$total_task_count = count($task_rows);
$completed_task_count = 0;
foreach($task_rows as $task){
  if($task['is_done'] === 1){
    $completed_task_count++;
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Stack Todo App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <main>
      <div class="container">
        <div class="todo-tracker">
          <div class="task-tracker-text">
            <h2>Task Completed</h2>
            <p class="completed-subheading">Keep it up</p>
          </div>
          <div class="task-counter">
            <?php echo $completed_task_count; ?> <span class="spacer">/</span> <?php echo $total_task_count; ?>
          </div>
        </div>
        <form action="add.php" class="task-form">
          <input
            type="text"
            class="task-input"
            placeholder="Your next task is..."
            required
          />
          <button type="submit" class="submit-btn">
            <i class="fa-solid fa-plus fa-2xl"></i>
          </button>
        </form>
        <ul class="task-list">
          <li class="task-item">
            <div class="li-text">Task Out Trash</div>
            <div class="task-icons">
              <button class="icon-btn">
                <i class="fa-solid fa-circle-check fa-2xl"></i>
              </button>
              <button class="icon-btn">
                <i class="fa-solid fa-trash fa-2xl"></i>
              </button>
            </div>
          </li>
        </ul>
        <button type="button" class="clear-all-btn">Clear All Tasks</button>
      </div>
    </main>
    <script
      src="https://kit.fontawesome.com/2d29da14c6.js"
      crossorigin="anonymous"
    ></script>
    <script src="./app.js"></script>
  </body>
</html>
