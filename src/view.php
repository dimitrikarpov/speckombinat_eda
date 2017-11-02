<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Что в столовой?</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Style fo this app -->
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
        <div class="row">
                <div class="logo">
                    <img src="logo_small.svg">
                    <h1>Спецкомбинат <span>ЛПХ</span></h1>
                </div><!-- logo -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <?php foreach ($pripyat as $title => $menu): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= $title ?></h3>
                            </div>
                        <table class="table">
                            <tr>
                                <th>Блюдо</th>
                                <th>Выход</th>
                                <th>Стоимость</th>
                            </tr>
                            <?php foreach($menu as $key => $bludo): ?>
                            <tr>
                                <td><?= $bludo['name'] ?></td>
                                <td><?= $bludo['amount'] ?></td>
                                <td><?= $bludo['price'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div><!-- panel -->
                <?php endforeach ?>

            </div><!-- col -->
            <div class="col-sm-6">

                <?php foreach ($skazka as $title => $menu): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= $title ?></h3>
                            </div>
                        <table class="table">
                            <tr>
                                <th>Блюдо</th>
                                <th>Выход</th>
                                <th>Стоимость</th>
                            </tr>
                            <?php foreach($menu as $key => $bludo): ?>
                            <tr>
                                <td><?= $bludo['name'] ?></td>
                                <td><?= $bludo['amount'] ?></td>
                                <td><?= $bludo['price'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div><!-- panel -->
                <?php endforeach ?>

            </div><!-- col -->
        </div>
    </div><!-- container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
