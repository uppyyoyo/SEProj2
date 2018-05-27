<!DOCTYPE html>
<?php include 'connect.php'?>
<html lang="en">
<head>
    <title>Rental House Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    .change::-webkit-input-placeholder {
    /* WebKit, Blink, Edge */
    color: #909;
    }
    .change:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #909;
    opacity: 1;
    }
    .change::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #909;
    opacity: 1;
    }
    .change:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: #909;
    }
    input[type="text"]{
    display:block;
    width:300px;
    padding:5px;
    margin-bottom:5px;
    font-size:1.5em;
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
                <a class="nav-link" href="maintainence.php">แก้ไข </a>
            </li>
        </ul>
        <p class=" float-right ml-auto"> <font color="white"> ระบบจัดการค่าสาธารณูปโภคและค่าเช่าห้อง</font></p>
    </nav>
    </body>
    <br>
    <body> 
    


    <div class="container">
           
  <table class="table table">
    <thead>
     
    </thead>
    
    <tbody>
      <tr>
        <td> <p>ค่าไฟฟ้าต่อหนึ่งหน่อย (บาท)</p></td>
        <td> <input type="number" placeholder="กรอกเฉพาะตัวเลข" <p>  บาท</p></td>
        <td><button type="button" class="btn btn-success">Submit</button></td>
        
      </tr>
      <tr>
        <td> <p>ค่าน้ำต่อหนึ่งหน่อย (บาท)</p></td>
        <td> <input type="number" placeholder="กรอกเฉพาะตัวเลข" <p>  บาท</p></td>
        <td><button type="button" class="btn btn-success">Submit</button></td>
      </tr>
      <tr>
        <td> <p>ค่าเช่าห้องต่อหนึ่งหน่อย (บาท)</p></td>
        <td> <input type="number" placeholder="กรอกเฉพาะตัวเลข" <p>  บาท</p></td>
        <td><button type="button" class="btn btn-success">Submit</button></td>
      </tr>
    </tbody>
  </table>
</div>
    
    
   
    
    
    </body>

</html>