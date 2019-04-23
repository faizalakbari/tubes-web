<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $judul; ?></title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/logo.png')?>" style="margin-left: 160px;" height="80" width="80"></a>
            </div>
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card" style="margin-top: 150px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form action="<?php echo $action ?>" method="post">
                                <div class="form-label-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="admin" required autofocus>
                                </div>
                                <div class="form-label-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="admin" required>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Login" style="margin-top: 30px;">Login</button>
                                <hr>
                                <div class="text-center text-error">
                                    <?php echo $error; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>