<?php include PATH_APP . '/view/layout/header.view.php' ?>
    <div id="header" class="m-0">
        <h1 class="header"><?php echo $title ?>
            <small> create</small>
        </h1>
    </div>
    <div id="content" class="m-0">
        <form action="?a=store" method="post">
            Name :<br>
            <input type="text" name="name"><br><br>
            <input type="submit" value="Create">
        </form>
    </div>
<?php include PATH_APP . '/view/layout/footer.view.php';
