<?php include PATH_APP . '/view/layout/header.view.php' ?>
    <div id="header" class="m-0">
        <h1 class="header"><?php echo $title ?> <a href="?a=create">
                <button>Add</button>
            </a></h1>
    </div>
    <div id="content" class="m-0">
        <table>
            <tr>
                <th>Name</th>
                <th colspan="2">Option</th>
            </tr>
            <?php foreach ($staffs as $staff): ?>
                <tr>
                    <td><?php echo $staff['name'] ?></td>
                    <td><a href="?a=edit&id=<?php echo $staff['id'] ?>">Edit</a></td>
                    <td><a href="?a=delete&id=<?php echo $staff['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php include PATH_APP . '/view/layout/footer.view.php';
