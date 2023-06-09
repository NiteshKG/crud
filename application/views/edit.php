<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Crud Application - Update user</title>
    
<body>
    <h3>Update User</h3>
    <hr>
    <form name="createuser" method="post" action="<?php echo base_url().'user/edit/'.$user['user_id']; ?>">
        <div class="container">
           
       <div class="input">
     <label> Name</label> : <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>"  >
     <label for=""><?php echo form_error('name')? form_error('name') : '' ;?></label>
       </div>
       <div class="input">
       <label>Email</label> :  <input type="email" name="email" value="<?php echo set_value('email',$user['email']);?>">
       <label for=""><?php echo form_error('email')? form_error('email') : '' ;?>
      </div>
      
    <div class="input">
    <button class="btn btn-primary">Update</button>
        </div>
        <div class="input">
        <a href="<?php echo base_url().'user/index' ?>" class="btn btn-primary">Cancel</a>
        </div>
        </div>
    </form>
</body>
</html>
