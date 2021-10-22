<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1>Profile</h1>
                <hr>
                <?php $session = session(); ?>
                <h3><?php echo "รหัสประชาชน : " . $session->get('id_card'); ?></h3>
                <h3><?php echo "ชื่อ : " . $session->get('name'); ?></h3>
                <h3><?php echo "อายุ : " . $session->get('age'); ?> ปี </h3>
                <h3><?php echo "อีเมล : " . $session->get('email'); ?></h3>
                <h3><?php echo "รหัสRUN : " . $session->get('ID'); ?></h3>
                <h3><?php echo "ประเภทวิ่ง : " . $session->get('member'); ?></h3>
                <h3><?php echo "ระยะเวลา : " . $session->get('category_run'); ?></h3>


                <br>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>