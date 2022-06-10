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
			height: 400px;
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
		.detail{
			margin: auto;
			padding-top: 50px;
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
       .footer{
       	margin: auto;
       	padding-top:auto;
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
<body>
	<!--dùng thẻ div để phân chia bố cục -->
<div class="wrapper">
<div class="header">
	<!-- kiểm tra xem người dùng đã đăng nhập chưa?nếu đã đăng nhập rồi thì hiển thị tên người dùng -->
	
 <div id="search">
	<from>
      <input type="text" name="" placeholder="search" >
      <input type="submit" name="search" value="search">
    </from>
 </div>
<div class="menu">
<ul>
<li><a href=""> Home page </a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/introduction.php"> itroduction </a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/login2.php">Login</a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/dangnhap.php">Register</a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/add_product.php?id=%201">Add Product</a></li>
</ul>
</div>
<div class="banner">        
    <img src="https://channel.mediacdn.vn/thumb_w/640/2020/8/24/photo-3-15982644702929952797.jpg" alt="Slideshow Image 1" />
 </div>
<div class="content">
<!-- Nếu sử dụng layout 2 cột thì phần content chúng ta chia làm 2-->
<div class="left">
<p> Product </p>
<div class="category"> 
<ul>
<li><a href=""> Hoodie </a> </li>
<li><a href=""> T-Shirt </a></li>
<li><a href=""> Jean </a></li>
</ul>
</div>
<p> Brand </p>
<div class="brand"> 
<ul>
<li><a href=""> Swe </a></li>
<li><a href=""> Rick Owen </a></li>
<li><a href=""> Gucci </a></li>
<li><a href=""> Supreme</a></li>
</ul>
</div>
</div>
<div class="right">
	<div class="detail">
	<?php 
 	$connect = mysqli_connect('localhost','root','','mydb');
 		$id= $_GET["id"];
 		$sql ="SELECT * FROM product WHERE product_id= {$id}";
 		$result = mysqli_query($connect, $sql);
 		while ($row = mysqli_fetch_array($result)){
 			?>

 			<div style="float:left">
 				<!-- hiển thị ảnh sản phẩm -->
 				<img src="<?php echo $row['product_img'] ?>" width="300px" height="300px">
		 	</div>
		    <div>
		    	<h2> Product name: <?php echo $row['product_name'] ?></h2>
		    	<h2>Prodcut description:<?php echo $row['product description']?></h2>
		         <button> Buy Now </button>
		    	<a href="">
		    	<button> Add to Cart</button>
		    </a>
		    </div>
    <?php
 		}
 	?>
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
<li><a href="http://localhost/PBIT17102%20WEBSITE/introduction.php"> introduction</a></li>
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