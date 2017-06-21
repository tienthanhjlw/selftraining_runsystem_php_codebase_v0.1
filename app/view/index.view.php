<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <style type="text/css">
        #header {
            height: 150px;
            background-color: red;
        }

        #content {
            height: 400px;
            background-color: green;
        }

        #footer {
            height: 150px;
            background-color: yellow;
        }

        .m-0 {
            margin: 0;
        }
    </style>
</head>
<body>
<div id="header" class="m-0">
    <h1><?php echo $title ?></h1>
</div>
<div id="content" class="m-0">
    <h2>Content</h2>
</div>
<div id="footer" class="m-0">
    <h2>Footer</h2>
</div>
</body>
</html>