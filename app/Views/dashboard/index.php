<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mavazi Dashboard</title>
    <!--Fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?=base_url('bootstrap-5.0.2-dist/css/bootstrap.min.css')?>">
    <!--css-->
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/casual.css')?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Dashboard</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><?= $userInfo['first_name']; ?></td>
                        <td><?= $userInfo['email']; ?></td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>