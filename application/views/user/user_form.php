<!doctype html>
<html>

<head>
    <title>harviacode.com - codeigniter crud generator</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
    <style>
        body {
            padding: 15px;
        }
    </style>
</head>

<body>
    <h2 style="margin-top:0px">User <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
        <div class="form-group">
            <label for="tinyint">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Date Created <?php echo form_error('date_created') ?></label>
            <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
    </form>
</body>

</html>