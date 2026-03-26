<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'student') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
margin:0;
font-family:'Poppins',sans-serif;
background:url('assets/std_dash_pic.jpeg') no-repeat center center fixed;
background-size:cover;
color:white;
}

.overlay{
background:rgba(0,0,0,0.75);
min-height:100vh;
padding:40px;
}

/* hamburger icon */

.menu-icon{
position:absolute;
top:20px;
left:20px;
font-size:28px;
cursor:pointer;
}

/* sidebar */

.sidebar{
position:fixed;
left:-260px;
top:0;
width:260px;
height:100%;
background:#111;
padding-top:20px;
transition:0.4s;
z-index:1000;
}

/* student info */

.profile-box{
text-align:center;
padding:20px;
border-bottom:1px solid rgba(255,255,255,0.2);
}

.profile-box img{
width:80px;
height:80px;
border-radius:50%;
margin-bottom:10px;
}

.profile-box h3{
margin:0;
font-size:18px;
}

/* sidebar links */

.sidebar a{
display:block;
padding:15px 25px;
color:white;
text-decoration:none;
border-bottom:1px solid rgba(255,255,255,0.1);
}

.sidebar a:hover{
background:#222;
}

.sidebar i{
margin-right:10px;
}

.sidebar.active{
left:0;
}

/* welcome */

h1{
text-align:center;
margin-bottom:25px;
}

/* stats */

.stats{
display:flex;
gap:20px;
justify-content:center;
flex-wrap:wrap;
margin-bottom:40px;
}

.stat-box{
background:rgba(255,255,255,0.15);
padding:20px;
border-radius:10px;
width:200px;
text-align:center;
backdrop-filter:blur(5px);
}

.stat-box h2{
margin:0;
color:orange;
}

/* grid */

.nav-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
gap:25px;
max-width:1100px;
margin:auto;
}

/* cards */

.nav-item{
background:rgba(255,255,255,0.12);
padding:30px;
border-radius:14px;
text-align:center;
text-decoration:none;
color:white;
font-size:18px;
border:1px solid rgba(255,255,255,0.3);
backdrop-filter:blur(5px);
transition:0.35s;
}

.nav-item i{
font-size:32px;
display:block;
margin-bottom:12px;
color:orange;
}

.nav-item:hover{
background:rgba(255,255,255,0.25);
transform:translateY(-6px) scale(1.04);
}

.logout-btn{
margin:20px;
padding:10px;
width:80%;
background:orange;
border:none;
border-radius:6px;
color:white;
font-weight:bold;
cursor:pointer;
}

</style>

</head>

<body>

<i class="fa-solid fa-bars menu-icon" onclick="toggleMenu()"></i>

<!-- sidebar -->
 <a href="request_faculty.php">Request Faculty Access</a>

<div class="sidebar" id="sidebar">

<div class="profile-box">

<img src="assets/student.png">

<h3><?php echo htmlspecialchars($_SESSION['name']); ?></h3>

</div>

<a href="student_profile.php">
<i class="fa-solid fa-user"></i>Profile
</a>

<a href="notifications.php">
<i class="fa-solid fa-bell"></i>Notifications
</a>

<a href="attendance.php">
<i class="fa-solid fa-user-check"></i>Attendance
</a>

<a href="achievements.php">
<i class="fa-solid fa-trophy"></i>Achievements
</a>

<form action="logout.php" method="post">
<center>
<button class="logout-btn">Logout</button>
</center>
</form>

</div>

<!-- main dashboard -->

<div class="overlay">

<h1>Welcome, <?php echo $_SESSION['name']; ?> 👋</h1>

<!-- stats -->

<div class="stats">

<div class="stat-box">
<h2>12</h2>
<p>Total Events</p>
</div>

<div class="stat-box">
<h2>5</h2>
<p>Registered</p>
</div>

<div class="stat-box">
<h2>4</h2>
<p>Attended</p>
</div>

<div class="stat-box">
<h2>2</h2>
<p>Achievements</p>
</div>

</div>

<!-- dashboard grid -->

<div class="nav-grid">

<a class="nav-item" href="std_dash_club.html">
<i class="fa-solid fa-users"></i>
Clubs
</a>

<a class="nav-item" href="std_dash_event_recap.html">
<i class="fa-solid fa-photo-film"></i>
Event Recap
</a>

<a class="nav-item" href="std_dash_upcoming_event.html">
<i class="fa-solid fa-calendar-days"></i>
Upcoming Events
</a>

<a class="nav-item" href="std_dash_my_reg.html">
<i class="fa-solid fa-clipboard-check"></i>
My Registered Events
</a>

<a class="nav-item" href="event_enquiry.html">
<i class="fa-solid fa-circle-question"></i>
Event Enquiry
</a>

<a class="nav-item" href="qr_checkin.html">
<i class="fa-solid fa-qrcode"></i>
QR Check-in
</a>

<a class="nav-item" href="venue_navigation.html">
<i class="fa-solid fa-map-location-dot"></i>
Venue Navigation
</a>

</div>

</div>

<script>

function toggleMenu(){
document.getElementById("sidebar").classList.toggle("active");
}

</script>

</body>
</html>