<?php include PATH_APP . '/view/layout/header.view.php' ?>
    <div id="header" class="m-0">
        <h1 class="header"><?php echo $title ?>
            <small> edit</small>
        </h1>
    </div>
    <div id="content" class="m-0">
        <form action="?a=update" method="post">
            Name :<br>
            <input type="text" name="name" value="<?php echo $staff['name'] ?>">
            <input type="hidden" name="id" value="<?php echo $staff['id'] ?>">
            <br><br>
            <input type="submit" value="Update">
        </form>
    </div>
<?php include PATH_APP . '/view/layout/footer.view.php';
