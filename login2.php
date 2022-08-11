<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	.wrapper{
			width: 1000px;
			margin: auto;
		}
		.header{
			height: 55px;
			margin: auto;	
		}
		.menu{
			height: 30px;
			background-color:black;
		}
		.menu ul li{
			list-style: none;
			text-align: center;
			display: inline-table;
		}
		.menu ul li a{
			text-decoration:none;
			font-size: 16px;
			margin: 30px;
			padding: 5px;
			text-transform: uppercase;
			color: White;
		}
		.menu a:hover {
			text-decoration: underline;
		}
		.banner img{
			width: 1000px;
			height: 350px;
		} 
		.content{
			height: 800px;
		}
		.left{
			width: 20%;
			background-color: gray;
			float: left;
			height: 500px;
		}
		.left>p{
			background-color: white;
			font-size: 22px;
			font-family: arial;
			text-align: center;			
		}
		.category ul li{
			list-style: none;
		}
		.category ul li a{
			color: white;
			font-size: 20px;
			text-decoration: none;
			font-family: comic sans Ms;
		}
		.category a:hover{
			text-decoration: underline;
		}
		.brand ul li{
			list-style: none;
		}
		.brand ul li a{
			color: white;
			font-size: 20px;
			text-decoration: none;
			font-family: comic sans Ms;

		}
		.brand a:hover{
			text-decoration:underline;
		}
		.right{
			width: 100%;
			height: 500px;
			background-image: url(images/download.jpg);
		}
	   .enter{
	   	margin-left: 400px;
	   	padding-top: 160px;

	  }
	   .enter table input[type=text]{
			width: 200px;
			height:20px;
		}
		.enter table input[type=password]{
			width: 200px;
			height:20px;
		}
		
		.enter table input[type=submit]{
		height:30px;
	    }
	    .footer{
       	margin: auto;
       	padding-top: 40px;
       	box-sizing: border-box;
       	font-family:comic sans Ms ;
       	display: flex;
       	align-items: center;
       	background-color: black;
       	color: white;
       	width: 1000px;
       }
       .hh>p {
       	text-align: left;
       	font-size: 40px;
       	margin: 10px;
       	padding: 5px;
       }
       .link>h2{
       	text-align: center;
       }
       .link ul li{
       	list-style: none;
       }
       .link ul li a{
			color: blueviolet;
			text-decoration: none;
			text-align: left;
		}
       .link a:hover{
       	text-decoration: underline;
       }
       .address{
       	text-align: left;
       }
       .address>h2{
       	text-align: center;
       }
       .address ul li{
       list-style: none;
       }
       .address ul li a {
       	text-decoration: none;
       }
       .address ul li a:hover{
       	text-decoration: underline;
       }
	   		
	</style>
</head>
<body  >
	<!--dùng thẻ div để phân chia bố cục -->
<div class="wrapper">
<div class="header">
 <div id="search">
	<from>
      <input type="text" name="" placeholder="search" >
      <input type="submit" name="search" value="search">
    </from>
 </div>
<div class="menu">
<ul>
<li><a href="http://localhost/Toys/index.php"> Home page </a></li>
<li><a href="http://localhost/Toys/introduction.php"> itroduction </a></li>
<li><a href="http://localhost/Toys/login2.php">Login</a></li>
<li><a href="http://localhost/Toys/dangnhap.php">Register</a></li>
<li><a href="http://localhost/Toys/add_product.php">Add Product</a></li>
</ul>
</div>
<div class="banner">        
    <img src="img/1.jpg" alt="Slideshow Image 1" />
 </div>
<div class="content">
<!-- Nếu sử dụng layout 2 cột thì phần content chúng ta chia làm 2-->
<div class="left">
<p> Product </p>
<div class="category"> 
<ul>
<li><a href=""> Lego </a> </li>
<li><a href=""> Dolls </a></li>
<li><a href=""> Puzzles</a></li>
</ul>
</div>
<p> Brand </p>
<div class="brand"> 
<ul>
<li><a href=""> Lego </a></li>
<li><a href=""> Bandai Namco </a></li>
<li><a href=""> Barbie </a></li>
<li><a href=""> King dom</a></li>
</ul>
</div>
</div>
<div class="right">
<div class="enter">
<form method="POST">
		<table style="color: black; font-size: 30px;">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</div>
	<?php 
$connect = mysqli_connect('localhost','root','','toy');
if(!$connect){
echo"Kết nối thất bại";
}
   // Nếu click vào nút login thì mới thực hiện 
if (isset($_POST['login'])) {
    $username= $_POST['username'];
    $password= $_POST['password'];
    // Truy vấn từ bảng user cột username = giá trị username nhập từ form và cột password = giá trị password nhập từ form
    $sql = "SELECT * FROM name WHERE username ='$username' AND password = '$password'";
    // Thực thi truy vấn
    $result = mysqli_query($connect, $sql);
    // Trả về kết quả , chính là các dòng được truy vấn
    $row = mysqli_num_rows($result);
    $row_user=mysqli_fetch_array($result);
    // Nếu $row > 0 --> có trên 1 dòng trong CSDL trùng với dữ liệu nhập vào form -> đăng nhập thành công 
    if($row>0){
       // đăng nhập thanhf công rồi mới lưu tên đăng nhập lại vào biến toàn cục $_session
       $_SESSION['username']=$username;
       echo "<script> alert('Login successfully')</script>";
       echo "<script>window.open('index.php','_seft')</script>";
    }
    else{
        echo"<script>alert('username or password wrong')</script> ";
    }
}
?>
<div class="footer">
 <div class="hh">
 <p> Thank you for comming to my store </p>
 </div >
 <div class="link ">
 <h2> Link</h2>
<ul>
<li><a href=""> Home page </a></li>
<li><a href="https://123website.com.vn/danh-muc-san-pham/mau-website-thong-tin/mau-website-gioi-thieu-san-pham/"> introduction</a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/login2.php">Login</a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/dangnhap.php">Register</a></li>
</ul>	
</div>
<div class="address ">
<h2>Address and hotline</h2>
<ul>
<li>Đường Hoàng Quốc Việt, Thành Phố Hà Nội ,Việt Nam </li>
<li><a href="">+84 123 222 333</a></li>
<li><a href="">+84 333 555 111</a></li>
<li>Mail:<a href="">quang1234@gmail.com</a></li>
</ul>
</div>	
</div>
</div>
</div>
</div>

</body>
</html>