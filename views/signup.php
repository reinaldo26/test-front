<?php if(!empty($info)): ?>
<div class="div-info"><i class="fas fa-angle-down"></i></div>
<div class="user-info">
    <div class="pic">
        <img width="50" src="<?php echo BASE_URL.'/'.$info['url']; ?>">
    </div>
    <div class="">
        <?php echo $info['name']; ?>
        <?php echo $info['email']; ?>
    </div>
    <a href="<?php echo BASE_URL; ?>" class="badge badge-secondary">Logout</a>
</div>
<?php endif; ?>

<div class="picture">
        <?php if(!empty($info)): ?>
        <legend>User: <?php echo $info['name']; ?></legend>
        <?php else: ?>
        <form method="POST" action="<?php echo BASE_URL; ?>/signup" enctype="multipart/form-data">
        <legend>Complete your profile</legend>
        <?php endif; ?>
        
        <?php if(!empty($info)): ?>
        <?php else: ?>
        <label for="picture">Choose your picture</label><br/>
        <input type="file" id="picture" name="picture" required="required"/><br/><br/>
        <?php if(!empty($error_message)): ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <?php endif; ?>
       
        <label for="name">Name</label><br/>
        <?php if(!empty($info)): ?>
        <input type="text" id="name" name="name" class="form-control" readonly value="<?php echo $info['name']; ?>" required="required"/><br/>
        <?php else: ?>
        <input type="text" id="name" name="name" class="form-control" required="required"/><br/>
        <?php endif; ?>

        <?php if(!empty($info)): ?>
        <label for="email">E-mail</label><br/>
        <input type="text" id="name" name="name" readonly class="form-control" value="<?php echo $info['email']; ?>" required="required"/><br/>
        <?php else: ?>
        <label for="email">E-mail</label><br/>
        <input type="email" id="email" name="email" class="form-control" required="required"/><br/>
        <?php endif; ?>

        <?php if(!empty($info)): ?>
        <?php else: ?>
        <label for="password">Password</label><br/>
        <input type="password" id="password" name="password" class="form-control" required="required"/><br/>
        <?php endif; ?>

        <?php if(empty($info)): ?>
        <button type="submit" class="btn btn-danger">Submit</button>
        <?php else: ?>
        <a href="<?php echo BASE_URL; ?>/signup"><button type="button" class="btn btn-outline-primary">Create New User</button></a>
        <?php endif; ?>
    </form>
</div>
