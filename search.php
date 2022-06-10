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
       	margin-top: 90px;
       	padding-top:50px;
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
       .product{
       	margin-left: 50px;
       }

		
	</style>
</head>
<body>
	<!--dùng thẻ div để phân chia bố cục -->
<div class="wrapper">
<div class="header">
	<!-- kiểm tra xem người dùng đã đăng nhập chưa?nếu đã đăng nhập rồi thì hiển thị tên người dùng -->
	
 <div id="search">
	<form method="get" action="search.php">
                <input type="text" name="user_query" placeholder="Search a Product" />
                <input type="submit" name="search" value="search" />
            </form>
 </div>
<div class="menu">
<ul>
<li><a href=""> Home page </a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/introduction.php"> itroduction </a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/login2.php">Login</a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/dangnhap.php">Register</a></li>
<li><a href="http://localhost/PBIT17102%20WEBSITE/add_product.php">Add Product</a></li>
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
	<!-- hiển thị sản phẩm ở đây-->
<p> Search Results </p>
<div class=" product">
<?php
   $connect = mysqli_connect('localhost','root','','mydb');
                if(!$connect){
                    echo "Kết nối thất bại";
                }
    
    if (isset($_GET['search'])) {
        $search = $_GET['user_query'];
          
    }
    ?>    
    <div class ="products_box">    	
      <h3>  <?php $search ?> </h3>
        <?php
        
        $sql ="select * from product WHERE product_name LIKE '%{$search}%'";

        $result = mysqli_query($connect,$sql);
        /* tìm và trả về kết quả dưới dạng 1 mảng*/
        while($row_product=mysqli_fetch_array($result)){
          $product_id = $row_product['product_id'];
          $product_name = $row_product['product_name'];
          $product_price = $row_product['product_price'];
          $product_img = $row_product['product_img'];

          echo "
          <div class='single_product'>
          <h3>product name:$product_name </h3>
          <img src='$product_img' width='180' height='180' />
          <p><b> Price:$product_price</b></p>
          <a href='detail.php?id=$product_id'>Details</a>
          <a href='add_cart.php'>
          <button>Add to Cart</button>  
          </a>        
          </div>
          "       
          ;
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