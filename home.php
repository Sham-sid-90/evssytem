<?php
include('./includes/header.php');
if (empty($_SESSION['user'])) {
    header('Location:index.php');
}
include("./actions/cn.php");
$query = "SELECT * FROM `users`"; // query for fetching data ..
$result = mysqli_query($cn, $query) or die('cant run query'); // function for run query ..
$rows = mysqli_num_rows($result); // function for count rows from database ..
?>
<div class="container mt-4">
    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
    <div class="mt-1 mb-1">
        <?php include('includes/flash.php'); ?>
    </div>
    <div class="card rounded-0">
        <div class="card-header bg-light">
            <i class="fa fa-users"></i>Users
        </div>
        <table class="table table-bordered table-hover table-stripped">
            <tr>
                <th><i class="fa fa-id-badge"></i> ID</th>
                <th><i class="fa fa-user"></i> Name</th>
                <th><i class="fa fa-envelope"></i> Email</th>
                <th><i class="fa fa-calendar"></i> Date fo Birth</th>
                <th><i class="fa fa-venus-mars"></i> Gender</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($rows > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo ucfirst($row['name']); ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo ucfirst($row['gender']); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>">
                                <button class="btn btn-success btn-md"><i class="fa fa-edit"></i></button>
                            </a>
                            <button class="btn btn-danger btn-md" onclick="deleteUser(<?php echo $row['id']; ?>)"><i
                                    class="fa fa-trash"></i></button>
                        </td>

                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td>No Data Found</td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
<script>
    function deleteUser(id) {
        if (confirm("Are you sure? You Want To Delete User") == true) {
            window.location = "actions/delete.php?id=" + id;
        }
    }
</script>
<?php include('./includes/footer.php'); ?>