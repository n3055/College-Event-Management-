<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Profile</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:Poppins;
background:#111;
color:white;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

/* back arrow */

.back{
position:absolute;
top:20px;
left:20px;
font-size:24px;
color:white;
text-decoration:none;
}

/* profile card */

.card{
background:#1e1e1e;
padding:40px;
border-radius:12px;
width:450px;
box-shadow:0 0 15px rgba(0,0,0,0.6);
}

.profile{
text-align:center;
margin-bottom:25px;
}

.profile img{
width:110px;
height:110px;
border-radius:50%;
margin-bottom:10px;
}

.profile h2{
margin:5px 0;
}

.info{
display:grid;
grid-template-columns:1fr 1fr;
gap:15px;
}

.box{
background:#2a2a2a;
padding:12px;
border-radius:6px;
font-size:14px;
}

.label{
color:orange;
font-weight:600;
}

</style>

</head>

<body>

<a class="back" href="student_dashboard.php">←</a>

<div class="card">

<div class="profile">

<img src="assets/student.png">

<h2><?php echo $_SESSION['name']; ?></h2>

</div>

<div class="info">

<div class="box">
<span class="label">USN</span><br>
1MV23CS001
</div>

<div class="box">
<span class="label">Phone</span><br>
9876543210
</div>

<div class="box">
<span class="label">Section</span><br>
CSE-A
</div>

<div class="box">
<span class="label">Year</span><br>
3rd Year
</div>

<div class="box">
<span class="label">Address</span><br>
Bangalore
</div>

<div class="box">
<span class="label">Role</span><br>
Student
</div>

</div>

</div>

</body>
</html>