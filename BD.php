<?php
$connect = new mysqli('localhost', 'root', '', 'contactus');
?>
<table>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Электронная почта</th>
        <th>Номер</th>
        <th>Сообщение</th>
        <th>Файл</th>
    </tr>



<?php
$products = mysqli_query($connect, "SELECT * FROM `form`");
$products = mysqli_fetch_all($products);
foreach ($products as $product) {
?>

        <tr>
            <td><?= $product[0] ?></td>
            <td><?=$product[1] ?></td>
            <td><?=$product[2] ?></td>
            <td><?=$product[3] ?></td>
            <td><?=$product[4] ?></td>
            <td><?=$product[5] ?></td>
        </tr>

        <?php
        }