<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mx-auto mt-3">
            <div class="col-md-8">
                <h4><?=$name;?></h4>
                
                <a class="btn btn-primary mb-2" role="button" href="<?=site_url('users/add');?>" >Add User</a>
                <?php flash_alert(); ?>
                <table id="users-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($use as $u):?>
                        <tr>
                            <td><?=$u['id'];?></td>
                            <td><?=$u['vvm_last_name'];?></td>
                            <td><?=$u['vvm_first_name'];?></td>
                            <td><?=$u['vvm_email'];?></td>
                            <td><?=$u['vvm_gender'];?></td>
                            <td><?=$u['vvm_address'];?></td>
                            <td>
                                <a href="<?= site_url('users/update/'.$u['id']);?>">Update</a> |
                                <a href="<?= site_url('users/delete/'.$u['id']);?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#users-table').DataTable();
    });
    </script>
</body>
</html>
