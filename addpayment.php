<!DOCTYPE html>
<html lang="en">

<head>
    <title>เพิ่มค่าเช่า</title>
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
        <a class="navbar-brand" href="history.php">Rental House</a>
        <ul class="navbar-nav">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    เพิ่มข้อมูลผู้เช่า
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AddRenter.php">เพิ่มผู้เช่าใหม่</a>
                    <a href="addpayment.php" class="dropdown-item">เพิ่มข้อมูลค่าเช่า</a>                   
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="maintainence.php">แก้ไข</a>
            </li>
        </ul>
        <a href="config.php" class="btn btn-info float-right ml-auto">Config</a>
    </nav>

    <!------ Include the above in your HEAD tag ---------->
    <form action="action.php" method="post">
    <div class="container">   
        <div class="row">
            <div class="table">
                <div class="scrolling outer">
                    <div class="inner">
                        <table class="table table-striped table-hover table-condensed">
                            <tr>
                                <th>ห้อง</th>
                                <td>เดือน/วัน/ปี</td>
                                <td>ค่าเช่าห้อง</td>
                                <td>ค่าน้ำ</td>
                                <td>ค่าไฟ</td>
                                <td>เพิ่มเติม</td>
                            </tr>
                            <tr>
                                <th>
                                    <input type="number" class="form-control" name="roomNum">
                                </th>
                                <td>
                                    <input type="date" class="form-control" name="date">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="room_p">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="waterU">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="elecU">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="extra">
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-success " >
                                </td>    
                            
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

</html>