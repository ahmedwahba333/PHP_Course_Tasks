<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    if ($data != []) {
        ?>
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Country</th>
      <th scope="col">List Price</th>
      <th scope="col">Rating</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $data['id'] ?></th>
      <td><?php echo $data['CouNtry'] ?></td>
      <td><?php echo $data['list_price']?></td>
      <td><?php echo $data['Rating'] ?></td>
      <td><img src="images/<?php echo $data['Photo']; ?>" alt="" width="200px"></td>
    </tr>
  </tbody>
</table>
        <?php
    }
    ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>