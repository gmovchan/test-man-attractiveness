<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Attract</title>
    </head>
    <body>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-center">Результат.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-self-center text-center">
                    <p>
                        Набрано <?php echo $data['ratio'] ?> баллов или <?php echo $data['percent'] ?>. Привлекательными считают людей, набравших минимум <?php echo $data['minAlphaPercent'] ?>%.
                    </p>
                    <p>
                        <?php echo $data['result'] ?>
                    </p>
                </div>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small fixed-bottom">
            <p class="mb-1">&copy; 2018</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://appealogy.livejournal.com/54577.html">Источник</a></li>
            </ul>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="vendor/twbs/bootstrap/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>