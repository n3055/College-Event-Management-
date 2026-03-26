<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'faculty') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Faculty Control Panel</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

<style>

:root{
--primary:#ffa500;
}

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Poppins',sans-serif;
background:url('assets/fac_dash_pic.jpeg') no-repeat center center fixed;
background-size:cover;
min-height:100vh;
color:white;
}

/* Menu Button */

.menu-btn{
position:fixed;
top:20px;
left:20px;
font-size:26px;
background:rgba(0,0,0,0.7);
border:none;
color:white;
width:50px;
height:50px;
border-radius:50%;
cursor:pointer;
z-index:1001;
}

/* Sidebar */

.sidebar{
position:fixed;
left:-260px;
top:0;
width:260px;
height:100%;
background:#111;
padding-top:80px;
transition:0.3s;
z-index:1000;
}

.sidebar.active{
left:0;
}

.sidebar .profile{
text-align:center;
margin-bottom:30px;
}

.sidebar img{
width:80px;
height:80px;
border-radius:50%;
border:3px solid var(--primary);
margin-bottom:10px;
}

.sidebar h3{
font-size:18px;
}

.sidebar a{
display:block;
padding:14px 20px;
color:white;
text-decoration:none;
border-bottom:1px solid rgba(255,255,255,0.1);
}

.sidebar a:hover{
background:#222;
}

/* Main */

.main{
padding:60px 40px;
margin-left:80px;
}

.sidebar.active ~ .main{
margin-left:260px;
}

/* Title */

.main h1{
font-family:'Montserrat',sans-serif;
font-size:42px;
font-weight:700;
color:var(--primary);
margin-bottom:10px;
}

.subtitle{
color:#ddd;
margin-bottom:35px;
}

/* Grid */

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
gap:25px;
}

/* Cards */

.card{
background:white;
color:#222;
padding:30px;
border-radius:14px;
text-align:center;
box-shadow:0 6px 18px rgba(0,0,0,0.4);
transition:0.3s;
}

.card i{
font-size:32px;
margin-bottom:12px;
color:#ffa500;
}

.card a{
color:#222;
text-decoration:none;
display:block;
font-size:17px;
font-weight:600;
}

.card:hover{
transform:translateY(-6px);
box-shadow:0 10px 25px rgba(0,0,0,0.5);
}

/* Logout */

.logout{
margin-top:20px;
background:var(--primary);
padding:12px;
border-radius:6px;
text-align:center;
font-weight:bold;
}

</style>

</head>

<body>

<button class="menu-btn" onclick="toggleMenu()">☰</button>

<!-- Sidebar -->

<div class="sidebar" id="sidebar">

<div class="profile">
<img src="assets/fac_dash_profile_pic.jpeg">
<h3><?php echo htmlspecialchars($_SESSION['name']); ?></h3>
</div>

<a href="camp_req.php"><i class="fa fa-check"></i> Campaign Requests</a>

<a href="ongoing_event.php"><i class="fa fa-calendar-check"></i> Ongoing Events</a>

<a href="upcoming_event.php"><i class="fa fa-clock"></i> Upcoming Events</a>

<a href="student_details.php"><i class="fa fa-user-graduate"></i> Student Details</a>

<a href="message_students.php"><i class="fa fa-envelope"></i> Message Students</a>

<a href="logout.php" class="logout"><i class="fa fa-sign-out"></i> Logout</a>

</div>

<!-- Main Dashboard -->

<div class="main">

<h1>Faculty Control Panel</h1>

<p class="subtitle">
Manage events, students and academic activities
</p>

<div class="grid">

<div class="card">
<i class="fa fa-bullhorn"></i>
<a href="camp_req.php">Campaign Requests</a>
</div>

<div class="card">
<i class="fa fa-calendar-check"></i>
<a href="ongoing_event.php">Ongoing Events</a>
</div>

<div class="card">
<i class="fa fa-calendar"></i>
<a href="upcoming_event.php">Upcoming Events</a>
</div>

<div class="card">
<i class="fa fa-user-graduate"></i>
<a href="student_details.php">Student Details</a>
</div>

<div class="card">
<i class="fa fa-comments"></i>
<a href="message_students.php">Message Students</a>
</div>

<div class="card">
<i class="fa fa-clipboard-check"></i>
<a href="mark_attendance.php">Mark Attendance</a>
</div>

</div>

</div>

<script>

function toggleMenu(){
document.getElementById("sidebar").classList.toggle("active");
}

</script>

</body>

</html>