<!DOCTYPE html>
<html>

<head>
    <title>Teachers</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <?php include "links.php"; ?>

</head>

<body>
    <?php include "side_bar.php"; ?>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="images/user.png" class="img-responsive" />
                <h3>My Profile</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content" style= "margin-top: 200px; margin-left: 30px;" >


			<button id="all_teachers">All Teachers </button>
			<button id="add_teacher">Add Teacher </button>
			<button id="delete_teacher">Delete Teacher </button>
			<button id="update_teacher">Update Teacher Details </button>


			<script type="text/javascript">
				
				document.getElementById("all_teachers").onclick= function()
				{

					location.href="view_teacher.php";
				};

				document.getElementById("add_teacher").onclick= function()
				{

					location.href="add_teacher.php";
				};


				


				
				document.getElementById("delete_teacher").onclick= function()
				{

					location.href="delete_teacher.php";
				};




				
				document.getElementById("update_teacher").onclick= function()
				{

					location.href="update_teacher.php";
				};

			</script>
		</div>
	</Section>
</body>
</html>