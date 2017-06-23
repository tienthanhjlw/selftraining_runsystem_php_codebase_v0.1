<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <style>
        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        table th {
            background-color: black;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #eee;
        }

        table tr:nth-child(odd) {
            background-color: #fff;
        }

        .header, .footer {
            text-align: center;
            background-color: #000;
            color: #fff;
        }

        #content {
            text-align: center;
        }
    </style>
</head>
<body>
