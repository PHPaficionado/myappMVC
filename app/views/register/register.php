<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="container">
    <div class="col-md-6 offset-md-3 card mt-4">
        <h3 class="text-center pt-3">Register</h3>
        
        <form class="form"  action="" method="POST">
            <div class="bg-danger"><?=$this->displayErrors ?></div>

            <div class="form-group">
                <label for="email">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname"  value="<?=$this->post['fname']; ?>">   
            </div>
            <div class="form-group">
                <label for="email">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname"  value="<?=$this->post['lname']; ?>">   
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=$this->post['email']; ?>">   
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?=$this->post['username']; ?>">    
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?=$this->post['password']; ?>">
            </div>
            <div class="form-group">
                <label for="confirm">Confirm Password</label>
                <input type="password" class="form-control" id="confirm" name="confirm" value="<?=$this->post['confirm']; ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary pb-2">Register</button>
            </div>

    </form>
    </div>
</div>
<?php $this->end(); ?>
