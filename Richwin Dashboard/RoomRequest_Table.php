<?php
session_start();
require_once('db.php');
$query="select * from web";
$result=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">

<body>
   <!--Side bar-->
    <div class="side-bar"style="background:#1d1717;">
        <header>
        <h1>Richwin Admin Panel</h1>
    </header>
        <div class="menu">
            <div class="item"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></div>
            <div class="item"><a href="RoomRequest_Table.php"><i class="fa-solid fa-bed"></i>Room</a> </div>
            <div class="item"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></div>
        </div>
</div>
<!--Heder name-->
<div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                   
                    <div class="card border-1 shadow-sm mb-4"style="margin-left: 20px;">
                        <div class="card-body">
                        <h3 class="mb-2"style="color:#1d1717;">Customer Room Request Table</h3>
                        </div>
                </div>
                </div>
            </div>
        </div>
<!--Room booking tabel-->
        
<div class="container-fluid">
     <div class="row">
        <div class="col-lg-10 ms-auto p-1 overflow-hidden">
    <div class="container  p-5">
    <table class="table ">
        <thead>
            <tr class="bg-dark text-white">
                <th>Name</th>
                <th>Room-Type</th>
                <th>Email</th>
                <th>NIC</th>
                <th>Check_IN</th>
                <th>Check_OUT</th>
                <th>Phone</th>
            </tr>
                <?php
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Room_type'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['NIC'];?></td>
                <td><?php echo $row['Check_in'];?></td>
                <td><?php echo $row['Check_out'];?></td>
                <td><?php echo $row['Phone'];?></td>
                </tr>

                <?php
                }
                ?>
            </thead>
    </table>
</div>
<!--Java Script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Swiper from Script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>