<?php
include "html/head.html";

include "php/db.info.php";
$sql = "SELECT * FROM student";
$sth = $con->prepare($sql);
$sth->execute();
?>

<main>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $sth->fetch()) {?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['voornaam'] ?></td>
                    <td><?php echo $row['achternaam'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

<?php include "html/footer.html";