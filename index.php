<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploader using PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #1e1e1e;
        }
        body::-webkit-scrollbar{
            display: none;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #2b2b2b;
            color: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-shadow: 0px 0px 3px 1px #0ef;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #00eeff;
            color: #1e1e1e;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bolder;
        }

        /* Animation styles */
        .containers {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .containers .animated {
            animation: fadeIn 1s ease forwards;
            display: flex;
            flex-direction: column;
            gap: 15px;
            background-color: #2b2b2b;
            padding: 10px 36px;
            border-radius: 7px;
            color: #fff;
        }

        h2{
            text-overflow: ellipsis;
            overflow: hidden;
            width: 250px;
            height: 1.2em;
            white-space: nowrap;
        }

        img{
            width: 250px;
            height: 250px;
            border-radius: 7px;
            box-shadow: 0px 0px 5px 1px #0ef;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>File Uploader</h1>
    <form action="/insert.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="User name">
        <input type="file" name="doc">
        <input type="submit" name="upload" value="Upload">
    </form>
</div>

<div class="containers">
    <?php foreach ($totalData as $key => $data): ?>
        <div class="animated"> <!-- Added "animated" class -->
            <h2><?php echo $data['user']; ?></h2>
            <img src="<?php echo $data['file']; ?>">
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
