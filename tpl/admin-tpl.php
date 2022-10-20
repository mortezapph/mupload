<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>upload admin page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
    </head>
    <body>
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">File Name</th>
      <th scope="col">Type</th>
      <th scope="col">Size</th>
      <th scope="col">User</th>
      <th scope="col">Uploaded At</th>
      <th scope="col">Path Name</th>
      <th scope="col">Download Link</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php $i=1; foreach($res as $files) : ?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $files->FileName ; ?></td>
      <td><?php echo $files->Type ; ?></td>
      <td><?php echo $files->Size ; ?></td>
      <td><?php echo $files->UserId ; ?></td>
      <td><?php echo $files->UploadedAt ; ?></td>
      <td><?php echo $files->PathName ; ?></td>
      <td><a href="<?php echo $files->DownloadLink ;?>"><?php echo $files->DownloadLink ; ?></a></td>
    </tr>
    <?php $i++; endforeach ?>
    
  </tbody>
</table>
    </body>
</html>