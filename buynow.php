<?php include"header1.php"; ?>
<script src="javascript/jquery.js"></script>
<style type="text/css">
h1,h2,h3,h4,h5
{
	margin:0px;
	padding:0px;
}
h4
{
	color:#099;
}
ul li
{
	list-style-type:none;
}
#paymen ul
{
	width:100%;
	height:200px;
	color:#000;
	margin:0px;
	padding:0px 0px 2px 0px;
	background:rgb(247,245,245);
}
#paymen ul li
{
	height:35px;
	width:90%;
	margin-left:0px;
	padding-top:15px;
	padding-left:20px;
	color:#C03;
	border-top:1px dashed #999;
}
#paymen ul li:hover
{
	cursor:pointer;
	color:black;
}
select {
	color:#abcdef;
}
</style>

</head>
<body>
<div id="mainblock">
  <div id="innerblock">
    <div id="toppanel">
  
      <div class="fp_menutile"> 
	  
      </div>
     
    </div>
    <script type="text/javascript">
		$(document).ready(function(){
			$(".mylist:first").addClass("colormy");	
			$(".mylist").click(function(){
				$(".mylist").removeClass("colormy");	
				$(this).fadeOut(500,function(){
					$(this).fadeIn(500,function(){
						$(this).addClass("colormy",function(){
						});		
					});
				});	
			});
			$("#cc").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#ccd").show(1000);
					$("#myhide").val("Credit Card");
				});
			$("#cod").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#codd").show(1000);
					$("#myhide").val("Cash On Delivery");
				});
			$("#dc").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#dcd").show(1000);
					$("#myhide").val("Debit Card");
				});
			$("#i").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#ib").show(1000);
					$("#myhide").val("Internet Banking");
				});
			
		});
    </script>
    <div class="contentblock"  style="background:rgba(11,22,33,0.5);">
	

    <form action="orderlast.php" method="post">
    	<div class="contentpanel1" style="width:74%;border-bottom:1px dashed #999 " >
     		<div style="width:30%;float:left; " id="paymen"> 
            	<ul>
                	<li class="mylist" id="cod">Cash On Delivery</li>
                    <li class="mylist" id="cc">Credit Card</li>
                    <li class="mylist" id="dc">Debit Card</li>
                    <li style="margin-bottom:-7px;" class="mylist" id="i"> Net Banking</li>
                </ul>
            </div>
			

            <div id="payme"> 
           	<?php  include_once "cod.php" ?>
                
                <br/><br/><br/><br/><br/><br/><br/><br/></br>
				</br>
                <p class="para">
                	<input type="checkbox" style="width:30px;" style="color:#31B19E" required="required"/ >
                    I accept the <span style='color:#31B19E'>Terms and Conditions.</span>
                </p>
                <p class="para">
                	<input type="checkbox" style="width:30px;" style="color:#31B19E" required="required"> 
                    I authorize the company to use my personal data and detail<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;(if any)
                    to process my order
                </p><br/>
                <button align="right" id="placeOrder">PLACE ORDER</button>
            </div>
			
        </div>
		</form>
	<!----end-team---->
<?php include"footer.php"; ?>