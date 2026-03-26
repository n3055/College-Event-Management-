<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'club_admin') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Club Admin Dashboard</title>

<style>

:root {
  --primary: orange;
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body{
  background:url('assets/club_dash_pic.jpeg') no-repeat center center fixed;
  background-size:cover;
  color:white;
}

/* SIDEBAR */
.sidebar{
  position:fixed;
  left:0;
  top:0;
  width:260px;
  height:100%;
  background:rgba(0,0,0,0.9);
  padding:20px;
}

.sidebar h2{
  text-align:center;
  margin-bottom:20px;
}

.sidebar a{
  display:block;
  padding:12px;
  margin:8px 0;
  color:white;
  text-decoration:none;
  border-radius:6px;
}

.sidebar a:hover{
  background:rgba(255,255,255,0.1);
}

/* MAIN */
.main{
  margin-left:260px;
  padding:30px;
}

h1{
  margin-bottom:20px;
}

/* CARD */
.card{
  background:rgba(255,255,255,0.12);
  padding:20px;
  border-radius:12px;
  margin-bottom:20px;
  backdrop-filter:blur(6px);
}

/* BUTTONS */
.btn{
  padding:8px 14px;
  border:none;
  border-radius:6px;
  cursor:pointer;
  color:white;
  margin-right:10px;
}

.approve{
  background:green;
}

.reject{
  background:red;
}

/* INPUTS */
input, textarea{
  width:100%;
  padding:10px;
  margin:8px 0;
  border-radius:6px;
  border:none;
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2><?php echo $_SESSION['name']; ?></h2>

  <a href="#">Dashboard</a>
  <a href="#">Create Event</a>
  <a href="#">Manage Events</a>
  <a href="#">Registrations</a>
  <a href="#">Venue</a>
  <a href="#">Equipment</a>
  <a href="#">Attendance</a>
  <a href="#">Queries</a>
  <a href="logout.php">Logout</a>
</div>

<!-- MAIN -->
<div class="main">

<h1>Welcome, <?php echo $_SESSION['name']; ?> 👋</h1>

<!-- 🔥 FACULTY REQUESTS -->
<?php
$conn = new mysqli("localhost","root","","event_management");
$result = $conn->query("SELECT * FROM faculty_requests WHERE status='pending'");
?>

<div class="card">
<h2>Faculty Requests</h2>

<?php if($result->num_rows > 0){ ?>

<?php while($row = $result->fetch_assoc()){ ?>

<p>
<b><?php echo $row['name']; ?></b>  
(<?php echo $row['email']; ?>)

<br><br>

<a href="approve_faculty.php?id=<?php echo $row['user_id']; ?>">
<button class="btn approve">Approve</button>
</a>

<a href="reject_faculty.php?id=<?php echo $row['user_id']; ?>">
<button class="btn reject">Reject</button>
</a>

</p>

<hr>

<?php } ?>

<?php } else { ?>
<p>No pending requests</p>
<?php } ?>

</div>

<!-- CREATE EVENT -->
<div class="card">
<h2>Create Event</h2>
<input type="text" placeholder="Event Name">
<input type="date">
<input type="text" placeholder="Venue">
<textarea placeholder="Description"></textarea>
<button class="btn approve">Create</button>
</div>

<!-- EQUIPMENT -->
<div class="card">
<h2>Request Equipment</h2>
<input type="text" placeholder="Equipment">
<input type="number" placeholder="Quantity">
<button class="btn approve">Request</button>
</div>

<!-- ATTENDANCE -->
<div class="card">
<h2>Upload Attendance</h2>
<input type="file">
<button class="btn approve">Upload</button>
</div>

</div>

</body>
</html>