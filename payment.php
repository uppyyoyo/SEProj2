<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rental House Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<style>
    .scrolling table {
        table-layout: inherit;
        *margin-left: -100px;
        /*ie7*/
    }

    .scrolling td,
    th {
        vertical-align: top;
        padding: 10px;
        min-width: 50px;
    }

    .scrolling th {
        position: absolute;
        *position: relative;
        /*ie7*/
        left: 0;
        width: 100px;
    }

    .outer {
        position: relative
    }

    .inner {
        overflow-x: auto;
        overflow-y: visible;
        margin-left: 120px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="history.php">Rental House</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Home.php">หน้าหลัก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payment.php">ชำระเงิน</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    เพิ่มข้อมูลผู้เช่า
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AddRenter.php">เพิ่มผู้เช่าใหม่</a>
                    <a href="addpayment.php" class="dropdown-item">เพิ่มข้อมูลค่าเช่า</a>
                   
                </div>
            </li>
            <a href="config.php" class="btn btn-info float-right ml-auto">Config</a>
        </ul>
    </nav>


    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        
        <div class="row">
            <div class="table">
                <div class="scrolling outer">
                    <div class="inner">
                        <table class="table table-striped table-hover table-condensed">
                            <tr>
                                <th>ห้อง</th>
                                <td>ชื่อเจ้าของห้อง</td>
                                <td>ยอดรวม</td>
                                <td>สถานะการชำระเงิน</td>
                                <td>ตัวเลือก</td>
                            </tr>
                            <fieldset disable>
                            <tr>
                                <th>
                                    <input type="text" class="form-control" value="255" disabled>
                                </th>
                                <td>
                                    <input type="text" class="form-control" value="Soraka" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="22" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="22" disabled>
                                </td>
                                <td width=180>
                                    <a href="paymentForRoom.php" class="btn btn-success ">
        					 			<span class="glyphicon glyphicon-search"></span> ชำระ</a>
                                    <a href="Receipt.php" class="btn btn-info ">
        					 			<span class="glyphicon glyphicon-print"></span> พิมพ์</a>
                                </td>
                            
                            </tr>
                            <tr>
                                <th>
                                    <input type="text" class="form-control" value="252" disabled>
                                </th>
                                <td>
                                    <input type="text" class="form-control" value="Pichai" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="23" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="23" disabled>
                                </td>
                                <td width=180>
                                    <a href="paymentForRoom.php" class="btn btn-success ">
                                        <span class="glyphicon glyphicon-search"></span> ชำระ</a>
                                    <a href="Receipt.php" class="btn btn-info ">
        					 			<span class="glyphicon glyphicon-print"></span> พิมพ์</a>     
                                         
							    </td>
                              
                            </tr>
                            </fieldset>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>