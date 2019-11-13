<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('https://drasler.ru/wp-content/uploads/2019/05/%D0%9C%D0%B8%D0%BB%D1%8B%D0%B5-%D0%BE%D0%B1%D0%BE%D0%B8-%D0%B4%D0%BB%D1%8F-%D0%B4%D0%B5%D0%B2%D0%BE%D1%87%D0%B5%D0%BA-%D0%BD%D0%B0-%D1%80%D0%B0%D0%B1%D0%BE%D1%87%D0%B8%D0%B9-%D1%81%D1%82%D0%BE%D0%BB-%D0%BF%D0%BE%D0%B4%D0%B1%D0%BE%D1%80%D0%BA%D0%B0-12.jpg');">

<?php
    $msg = '';
    $msgz = '';
    define('BASE', ['pipers', 'hauls', 'polios']);
    define('BASE2', ['student', 'pedagogy', 'duck']);
     require_once "learning.php";
     require_once "2password.php";
if (isset($_POST['password']) || isset($_POST['passwordz'])){
    if (isset($_POST['password'])) {
    	$correct_password = generatePassword(BASE);
    	if ($_POST['password'] == $correct_password) {
            $msg = 'You have entered valid use name and password';
        }else {
            $msg = 'Wrong username or password';
        }
    }
 	elseif (isset($_POST['passwordz'])) {
 		$correct_passwordz = generatePasswordz(BASE2);
        if ($_POST['passwordz'] == $correct_passwordz) {
            $msgz = 'You have entered valid use name and password';
        }else {
            $msgz = 'Wrong username or password';
        }
    }
}
        
            
?>



<div class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Password1: pzhn </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" readonly class="form-control" id="staticEmail"
                                           value="email@example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword"
                                       class="col-md-4 col-form-label text-md-right">Password - 1</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="password"
                                           placeholder="Password" name="password" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                            	<?php if ($msg != '') echo
                        		"<div class='alert alert-primary' role='alert'>
  									'$msg'
								</div>";
								?>
							</div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Password2: dgbn</div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" readonly class="form-control" id="staticEmail"
                                           value="emailz@example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword"
                                       class="col-md-4 col-form-label text-md-right">Password - 2</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="password"
                                           placeholder="Password" name="passwordz" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                            	<?php if ($msgz != '') echo
                        		"<div class='alert alert-primary' role='alert'>
  									'$msgz'
								</div>";
								?>
							</div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>