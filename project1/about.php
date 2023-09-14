<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Contact Form</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
    <h3>Contact Form</h3>
      <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Enter Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Enter Your Message"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Send</button>
      </form>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>