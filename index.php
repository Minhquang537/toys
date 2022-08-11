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
			height: 500px;
		} 
		.content{
			height: 800px;
		}
		.left{
			width: 20%;
			background-color: gray;
			float: left;
			height: 800px;
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
			width: 80%;
			height: 800px;
			float: right;
		}
		.right>p{
			text-align: center;
			font-size:30px ;
			background-color: blueviolet ;
		}
		.single-product{
			float: left;
			margin-left: 30px;			
		}
		.single-product img{
			border: 2px solid black;
		}
		#search{
			padding-top: 10px;
		}
		#search input[type=text]{
			width: 300px;
			height: 30px;
		}
		#search input[type=submit]{
		height:30px
	    }
	    . product>h3 {
	    	
	    }

       .footer{
       	margin: auto;
       	padding: auto;
       	box-sizing: border-box;
       	font-family:comic sans Ms ;
       	display: flex;
       	align-items: center;
       	background-color: black;
       	color: white;
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
<body>
	<!--dùng thẻ div để phân chia bố cục -->
<div class="wrapper">
<div class="header">
	<!-- kiểm tra xem người dùng đã đăng nhập chưa?nếu đã đăng nhập rồi thì hiển thị tên người dùng -->
	<?php
	if(isset($_SESSION['username'])){
		$u=$_SESSION['username'];
		echo "Hello $u";
	}
	?>
	
 <div id="search">
	<form method="get" action="search.php">
                <input type="text" name="user_query" placeholder="Search a Product" />
                <input type="submit" name="search" value="search" />
            </form>
 </div>
<div class="menu">
<ul>
<li><a href="http://localhost/Toys/index.php"> Home page </a></li>
<li><a href="http://localhost/Toys/introduction"> itroduction.php </a></li>
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
	<!-- hiển thị sản phẩm ở đây-->
<p> There All Product </p>
<div class=" product">
<?php 
$connect = mysqli_connect('localhost','root','','toy');
if(!$connect){
echo "Kết nối thất bại";
}
$sql="SELECT * FROM product";
$result = mysqli_query($connect,$sql);
//Tìm và trả về kết quả dưới dạng 1 mảng và lấy từng dòng dữ liệu
while($row = mysqli_fetch_array($result)){
//lấy ra từng dòng dữ liệu truy vấn được và hiển thị
//$row['product_id'];
//$row['product_name'];
//$row['product_img'];
//$row['product_price'];
?>
<div class="single-product">
<h3 > <?php echo $row['product_name'] ?> </h3>
<img src="<?php echo $row ['product_img'] ?>" width="180px" height="180px">
<p> <b> Price : <?php echo $row['product_price'] ?> </b> </p>
<a href="'detail.php?id=$product_id'">detail  </a>
</div>
<?php
}
?>
</div>
</div>
</div>
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
<li><a href="">Add Product</a></li>
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