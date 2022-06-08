<html>
<head>  
   
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="AdminHomePage.php">Home</a>
                <a href="ViewComments.php">View Comments</a>
                <a href="ViewReports.php">View Reports</a>
                <a href="Promotion.php">Promotions</a>
				<a href="addnewcashier.php">Add New Cashier</a>
            </nav>
        </div>
    </div> 
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2022 Your Company</div>        
    </div>
</head>
<style>
     .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: black;
        padding: 10px 0;
        color: white;
		
    }
    .fixed-header{
        top: 0;
		
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; 
    }
    nav a{
        color: white;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
</style>
</html>