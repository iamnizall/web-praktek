<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Report</title>
</head>

<body>

    <div class="sidebar">
        <a href="index.php"> <i class="fas fa-user-plus"></i> Input</a>
        <a class="active" href="report.php"> <i class="fas fa-file-import"></i> Report</a>
        <a href="team.php"> <i class="fas fa-users"></i> Team</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="container-fluid py-5">
        <div class="content">
            <table class="table table-bordered" style="width: fit-content;">
                <thead>
                    <tr>
                        <th colspan="2" class="text-center">Pemilihan Capres</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>
                            <?php echo $_POST['uname']; ?>
                        </td>
                    </tr>


                    <tr>
                        <th scope="row">Kota</th>
                        <td>
                            <?php echo $_POST['pilih']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Paslon</th>
                        <td>
                            <?php if (isset($_POST['options'])) {

                                if ($_POST['options']) {
                                    $gmbr = $_POST['options'];
                                    echo '<img src="' . $gmbr . '" alt="..." class="img-thumbnail">';
                                }
                            }

                            ?>
                        </td>


                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>