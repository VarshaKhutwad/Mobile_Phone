<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style>
	*{
		box-sizing:border-box;
	}
	 .IMG{ 
                float:center; 
               
                font-size: 15px;
                margin-top: 70px;
                
            } 
            .slog{ 
                float:center;  
                margin-top: 70px;
                 padding: 1%;
                 font-size: 150%;

               
            } 
            .mail{ 
                float:right;
                margin-top: 45px;
                padding: 5%;
                font-size: 100%;
                
            } 
            .con{
             float:left;  
                margin-top: 5px;
                font-size: 100%;
                padding: 1%;
                margin-left: 10px;
                 

            }
            .gallery{
            	display: grid;
            	grid-template-columns: 1fr 2fr;
            }
             a{
            }
        color: white;
      }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  color: white;
  margin-left: 100px;
  margin-top: 50px;
  border-radius: 20px;
}

.gallery-img {
	
}

div.desc {
  padding: 15px;
  text-align: center;
  color: black;
  max-height: 75px;
}
div.desc1 {
  padding: 15px;
  text-align: center;
  color: black;
  max-height: 75px;
}

h1{
  color: black;
  text-align: center;
  font-size: 300%;
}
.log{
  margin-left:1000px;
  margin-top: 0px;
  margin-bottom:10px;
  font-size: 20px;
  border:1px solid black;
  padding: 5px 18px;

}
.log,.hover{
  border:2px;
  background-color: grey;
}
.pagenation{
  margin-top: 60%;
}
	
</style>
</head>


<body background="img/.jpeg" style="background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row">
        <div class="col-sm-3">
        <IMG SRC="img/logo.png">
        </div>

		<div class= "col-sm-3"> 
		<h2 class="slog"><b></b></h2> 
		</div>
		  
		<div class = "col-sm-1">
		<h2 class="mail"><b>Email:varshakhutwad10@gmail.com</b></h2> 
		</div> 
		<br>
		<br>
              
		<div class = "col-sm-3">
        <h2 class="con"><b>Contact:020-454853378</b></h2> 
		</div>
		</div> 
	</div>
</div>

<!-- Slide Show -->
<section>
  <img class="mySlides" src="img/1.jpg" width="100%" height="350px">
  <img class="mySlides" src="img/2.jpeg" width="100%" height="350px">
  <img class="mySlides" src="img/3.jpeg" width="100%" height="350px">
</section>

<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">Live Your Mobi Dreams</h2>
  <p class="w3-opacity"><i>We Make Your Day</i></p>
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

<?php
   include 'conn.php';

//select all

	$perpage = 6;
          if(isset($_GET["page"]))
          {
             $page = intval($_GET["page"]);
          }
          else
          {
             $page = 1;
          }
	          $calc = $perpage * $page;
	          $start = $calc - $perpage;
	          $result = mysqli_query($conn, "SELECT * FROM newsvk ORDER BY id DESC  Limit $start, $perpage");
	          $rows = mysqli_num_rows($result);
	          if($rows)
	          {
		          $i = 0;
		        while($your_post = mysqli_fetch_assoc($result)) 
		        {
		    	$id=$your_post['id'];
		    	$title=$your_post['title'];
		    	$comment=$your_post['comment'];
		    	$image=$your_post['image'];
		    	$website=$your_post['website'];
		    	$email=$your_post['email'];
		    	$dater= date('y-m-d');
		    	$link="article.php?id=".$id;
                ?>
			    	<div class="row" style="width:90%;">
			    	    <div class="col-md-4" style="margin-bottom: 6%">
			    		    <div class="gallery-box">
			    			   <div class="gallery-img">
			    				<?php echo "<img src=data:image/jpg;base64,$image width='90%' max-height='150%'>";?>
			    			   </div>
			    		    </div>
			    		</div>
			    		<div class="col-md-8">
			    			<div class="gallery-details">
			    				<h4>Title:<?php echo $title; ?><font color="red"><?php echo"(".$id.")";?></font>
			    				</h4>
			    				<div>
			    				<?php echo $comment; ?>
			    				</div>
			    				<a href="<?php echo $website;?>"></a>
			    					<div>
			    						<span><a href="<?php echo $website;?>"><?php echo $website;?></a></span><br>
			    						<span style="float:right;"><font color="green"><?php echo $dater;?></font></span>
			    					</div>
			    		    </div>   				
			            </div>
			        </div>
			    <?php
   			}//while
      }//if rows
	?>
    <br><br>
    

</div>


<!----page number footer
echo "<br><br><br>";
    if(isset($page))
    {
	    $result = mysqli_query($conn,"select Count(*) As Total from news");
	    $rows = mysqli_num_rows($result);
	    if($rows)
	    {
		    $rs = mysqli_fetch_assoc($result);
		    $total = $rs["Total"];
	    }
	    echo "<div class='pagenation'>";
	    $totalPages = ceil($total / $perpage);
	    if($page <=1 )
		    {
		    	echo"he";
		    //echo "<span id='page_links' style='font-weight: bold;'>&laquo;</span>";
		    }
	    else
	    {
		    $j = $page - 1;
		    echo "<a href='index.php?page=$j'>&laquo;</a>";
	    }
	    for($i=1; $i <= $totalPages; $i++)
	    {
		    if($i<>$page)
		    {
		      echo "<a href='index.php?page=$i'>$i</a>";
		    }
	        else
	        {
	          echo "<a href='index.php?page=$i' class='active'>$i</a>";
	        }
	    }//for loop
		   if($page == $totalPages )
		    {
		     //echo "<span id='page_links' style='font-weight: bold;'>&raquo;</span>";
		    }
		   else
		    {
		      $j = $page + 1;
		      echo "<a href='index.php?page=$j'>&raquo;</a>";
		    }
	    echo "</div>";
	}--->
	   


</body>
</html>
