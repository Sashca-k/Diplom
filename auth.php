<?php 
	require 'bd/conf.php';

    $data = $_POST;
	if ( isset($data['do_login']) )
	{
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user )
		{
			//логин существует
			if ( password_verify($data['password'], $user->password) )
			{
				//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $user;
                header('Location: index.php');
                
			}else
			{
				$errors[] = 'Неверно введен пароль!';
			}

		}else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}
		
		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}


    ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интеллигент</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body>

    <?php include 'tpl/header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 mt-5 mb-5">

                <div class="card">
                    <div class="card-header">
                        Авторизация
                    </div>
                    <div class="card-body">

                        <form action="auth.php" method="POST">
                            <fieldset>
                                <div class="mb-3">
                                    <label for="login" class="form-label">Логин</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="Username" name="login" value="<?php echo @$data['login']; ?>"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Пароль</label>
                                    <input type="password" id="password" class="form-control"
                                        placeholder="Введите пароль" name="password"
                                        value="<?php echo @$data['password']; ?>">
                                </div>
                                <div class="mb-3">

                                </div>
                                <button type="submit" name="do_login" class="btn btn-dark">Войти</button>

                            </fieldset>
                        </form>
                    </div>
                </div>


            </div>
            <div class="col-xl-6 mt-5 mb-5">
                <div class="card">
                    <div class="card-header">
                        Регистрация
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Впервые на нашем сервисе?</h5>
                        <p class="card-text">Заполните форму регистрации и наш менеджер свяжется с вами.</p>



                        <a href="signup.php" class="btn btn-dark">К регистрации</a>

                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="row pb-5">
        <div class="col-xl-12" style="background-color:#1a1a1a;">
            <img src="img/desi.png" alt="" class=" mx-auto d-block img-fluid">
        </div>
    </div>
    </div>
    </div>

    <?php include 'tpl/footer.php';?>


</body>

</html>