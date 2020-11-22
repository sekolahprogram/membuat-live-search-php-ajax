<?php
    if (isset($_POST['search'])) {
        require_once 'connect.php';

        $no = 1;
        $search = $_POST['search'];

        $query = mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%" . $search . "%'");
        while ($row = mysqli_fetch_object($query)) {
?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->name; ?></td>
            <td><?= $row->username; ?></td>
            <td><?= $row->password; ?></td>
        </tr>
<?php }
} ?>