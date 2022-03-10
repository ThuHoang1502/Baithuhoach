<?php
    $q = intval($_GET['q']);
    const HOST = 'localhost';
    const DB = 'fake_db';
    const USER = 'root';
    const PW = '';

    try {
        $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PW);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($q != 0){
            $stmt = $conn->prepare("SELECT * FROM user_fake WHERE id = '$q'");
        }else{
            $stmt = $conn->prepare("SELECT * FROM user_fake");
        }

        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>


<table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
<?php
foreach($data as $r){
    ?>

<tr>
    <td><?php echo $r['id']; ?></td>
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $r['email']; ?></td>
    <td><?php echo $r['phone']; ?></td>
</tr>
    <?php
}
?>