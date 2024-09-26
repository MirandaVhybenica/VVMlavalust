<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">"
</head>
<body>
<div class="container mt-3">
  <h2>Add user</h2>
  <?php flash_alert(); ?>
  <form action="<?=site_url('users/add');?>" method="POST">
    <div class="mb-3 mt-3">
      <label for="vvm_last_name">Last Name</label>
      <input type="text" class="form-control" id="vvm_last_name" name="vvm_last_name">
    </div>
    <div class="mb-3 mt-3">
      <label for="vvm_first_name">First Name</label>
      <input type="text" class="form-control" id="vvm_first_name" name="vvm_first_name">
    </div>
    <div class="mb-3 mt-3">
      <label for="vvm_email">Email</label>
      <input type="email" class="form-control" id="vvm_email" name="vvm_email">
    </div>
    <div class="mb-3 mt-3">
      <label for="vvm_gender">Gender</label>
      <input type="text" class="form-control" id="vvm_gender" name="vvm_gender">
    </div>
    <div class="mb-3 mt-3">
      <label for="vvm_address">Address</label>
      <input type="text" class="form-control" id="vvm_address" name="vvm_address">
    </div>
    
    <button type="submit" class="btn btn-primary">ADD Users</button>
    <a class="btn btn-primary mb-2" role="button" href="<?=site_url('users/display');?>" >Show Users List</a>
  </form>
</div>
</body>
</html>