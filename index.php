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
          <div class="task-counter">1 <span class="spacer">/</span> 3</div>
        </div>
      </div>
      <form action="" class="task-form">
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
    </main>
    <script
      src="https://kit.fontawesome.com/2d29da14c6.js"
      crossorigin="anonymous"
    ></script>
    <script src="./app.js"></script>
  </body>
</html>
