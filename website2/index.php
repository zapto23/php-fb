
<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>System Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Server & File Info</h1>
        <?php if($server): ?>
          <ul class="list-goup">
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                  <strong><?php echo $key; ?>: </strong>
                  <?php echo $value; ?>
                </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <h1>Client Info</h1>
          <?php if($client): ?>
            <ul class="list-goup">
              <?php foreach($client as $key => $value): ?>
                  <li class="list-group-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
    </div>
  </body>
</html>
