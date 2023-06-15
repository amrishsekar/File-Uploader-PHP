<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploader</title>
</head>
<body>
    <div class="container">
        <h1>File Uploader</h1>
        <form action="/insert.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="User name">
            <br><br>
            <input type="file" name="doc">
            <br><br>
            <input type="submit" name="upload" value="Upload">
        </form>
        <br><br>
    </div>

    <div class="containers">
        <?php foreach ($totalData as $key=>$data): ?>
            <div>
                <h2><?php echo $data['user']; ?></h2>
                <img src="<?php echo $data['file']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
<style>
    .containers {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }
    h2 {
        text-align: center;
        font-size: 24px;
    }
    img{
        border-radius: 5px;
        width: 200px;
        height: 200px;
    }
</style>