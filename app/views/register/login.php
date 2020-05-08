<?php $this->start('head'); ?>

<?php $this->end(); ?>


<?php $this->start('body'); ?>
<div class="container">
    <div class="col-md-6 offset-md-3 card mt-4">
        <h3 class="text-center pt-3">Log In</h3>
        
        <form class="form"  action="<?=PROOT?>register/login" method="POST">
            <div class="bg-danger"><?=$this->displayErrors ?></div>
  
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Enter username">
                
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            
            <div class="form-group">
                <label for="remember_me">Rember Me <input type="checkbox" id="remember_me" name="remember_me" value="on" /> </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary pb-2">login</button>
            </div>
            <div class="text-right pb-3">
                <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
            </div>
    </form>
    </div>
</div>

<?php $this->end(); ?>