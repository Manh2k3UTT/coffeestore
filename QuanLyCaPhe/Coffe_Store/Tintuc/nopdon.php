<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nộp đơn</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: url('coffee_background.jpg'); /* Replace 'coffee_background.jpg' with the path to your coffee-related image */
        background-size: cover;
        background-position: center;
      }

      h1 {
        color: #fff; /* White text for better visibility on a dark background */
        font-size: 30px;
        text-align: center;
        margin-top: 20px;
      }


      

      table {
        border-collapse: collapse;
        width: 50%;
        margin: 0 auto;
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
      }

      td, th {
        border: 1px solid #ccc;
        padding: 12px;
        text-align: left;
      }

      input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
      }

      button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
      }

      button:hover {
        background-color: #45a049;
      }

.form {
  margin-top: 20px;
}

.form-input {
  display: block;
  margin: 8px;
}
    </style>
</head>
<body>
    <!-- Giao dien nguoi dung -->
    <h1>Nộp đơn</h1>
    <form method= "POST">
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Họ tên</td>
                    <td>
                        <input type="text" id="txtHoTen" name = "txtHoTen">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td>
                        <input type="date" id="txtNgaySinh" name = "txtNgaySinh">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <input type="text" id="txtDiaChi" name = "txtDiaChi">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" id="txtEmail" name = "txtEmail">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>
                        <input type="text" id="txtSoDienThoai" name = "txtSoDienThoai" >
                    </td>
                </tr>
                
                    <td></td>
                    <td>
                        <button type="submit" id="btnGhi" name ="btnGhi">Ghi dữ liệu</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </form>
    <!-- Them 1 Lop -->
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGhi'])){
        $HoTen = $_POST['txtHoTen'];
        $NgaySinh = $_POST['txtNgaySinh'];
        $DiaChi = $_POST['txtDiaChi'];
        $Email = $_POST['txtEmail'];
        $SoDienThoai = $_POST['txtSoDienThoai'];
        //echo $MaLop;
        $conn = mysqli_connect("localhost","root","","coffeestore");
        if(!$conn){
            die("Ket noi that bai");
            exit;
        }
        $sql = "INSERT INTO tbl_tuyendung VALUES ('".$HoTen."','".$NgaySinh."','".$DiaChi."','".$Email."','".$SoDienThoai."')";
    
        $result = mysqli_query($conn,$sql);
        if(!$result){
            echo "Insert Error" ;//. mysqli_error($conn);
        }else{
            echo "<script type = 'text/javascript'>alert('Them du lieu thanh cong');
            window.location.href = 'tuyendung.php';
            </script>";

        }
        //mysqli_close($conn);
    }

 
?>
<h2><a href = "tuyendung.php" style= "color: white;">Quay lại</a></h2>
    
</body>
</html>