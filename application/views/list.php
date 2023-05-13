<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>CRUD Application - view users</title>
</head>
<body>
    <h3>Users List</h3>
    <div colspan="3" >
    <a href="<?php echo base_url().'user/create' ?>" class="btn btn-primary">Create</a>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-8">
            <table class="table table-stripped">
               <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
               </tr>
               <?php if(!empty($users)){ foreach($users as $user ){ ?>
                <tr>
                    <td><?php echo $user['user_id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <a href="<?php echo base_url().'user/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                        <a href="<?php echo base_url().'user/delete/'.$user['user_id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                   
                </tr>
                <?php }} else { ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                    <?php } ?>
            </table>

        </div>

    </div>
</body>
</html>
</html>