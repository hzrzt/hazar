<?php 

include ('config.php');
?>
<title><?php echo SITENAME;?></title>
<body>
<!-- Panel -->
<!-- Sukarelawan-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">MAKLUMAT SUKARELAWAN</h1>
    </div>
        <div class="panel-body">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Bil</th>
                <th>Nama</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM sukarelawan";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                echo "</tr><td>" . $row["id_sukarelawan"]. "</td><td>" . $row["nama_sukarelawan"]. "</td><td> " . $row["no_kp"];
                }
            } else {
            echo "0 results";
            }
            ?>
     </tbody>
    </table>
        </div>
    </div>
<!-- Kutipan-->
 <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">MAKLUMAT KUTIPAN</h1>
        </div>
        <div class="panel-body">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Bil</th>
                <th>Nama Sukarelawan</th>
                <th>Jumlah Kutipan</th>
		<th>Tarikh</th>
             </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM sumbangan, sukarelawan WHERE sumbangan.id_sukarelawan = sukarelawan.id_sukarelawan";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                echo  "</tr><td>" . $row["id_sumbangan"]. "</td><td>" . $row["nama_sukarelawan"]. "</td><td>" . $row["jumlah_sumbangan"]. "</td><td>".$row["tarikh_sumbangan"];
                }
    } else {
            echo "0 results";
            }
            ?>
                 </tbody>
    </table>
        </div>
    </div>

</body>
</html>
