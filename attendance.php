<!DOCTYPE html>
<html>
<head>

<title>Subject Attendance</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:Poppins;
background:#111;
color:white;
padding:40px;
}

/* back arrow */

.back{
position:absolute;
top:20px;
left:20px;
font-size:26px;
color:white;
text-decoration:none;
}

/* container */

.container{
max-width:900px;
margin:auto;
}

h2{
text-align:center;
margin-bottom:35px;
}

/* subject card */

.subject{
background:#1e1e1e;
padding:20px;
border-radius:10px;
margin-bottom:18px;
box-shadow:0 0 8px rgba(0,0,0,0.4);
}

.subject-header{
display:flex;
justify-content:space-between;
margin-bottom:10px;
font-weight:600;
}

/* progress bar */

.progress{
background:#333;
height:10px;
border-radius:5px;
overflow:hidden;
}

.bar{
height:10px;
}

.good{
background:#4CAF50;
}

.warning{
background:#ff4d4d;
}

/* details */

.details{
display:flex;
justify-content:space-between;
margin-top:8px;
font-size:14px;
color:#ccc;
}

</style>

</head>

<body>

<a class="back" href="student_dashboard.php">←</a>

<div class="container">

<h2>Subject Attendance</h2>

<!-- Subject 1 -->

<div class="subject">

<div class="subject-header">
<span>Data Structures</span>
<span>85%</span>
</div>

<div class="progress">
<div class="bar good" style="width:85%"></div>
</div>

<div class="details">
<span>Attended: 34</span>
<span>Total: 40</span>
</div>

</div>

<!-- Subject 2 -->

<div class="subject">

<div class="subject-header">
<span>Machine Learning</span>
<span>74%</span>
</div>

<div class="progress">
<div class="bar warning" style="width:74%"></div>
</div>

<div class="details">
<span>Attended: 26</span>
<span>Total: 35</span>
</div>

</div>

<!-- Subject 3 -->

<div class="subject">

<div class="subject-header">
<span>Cloud Computing</span>
<span>66%</span>
</div>

<div class="progress">
<div class="bar warning" style="width:66%"></div>
</div>

<div class="details">
<span>Attended: 20</span>
<span>Total: 30</span>
</div>

</div>

<!-- Subject 4 -->

<div class="subject">

<div class="subject-header">
<span>Software Engineering</span>
<span>87%</span>
</div>

<div class="progress">
<div class="bar good" style="width:87%"></div>
</div>

<div class="details">
<span>Attended: 28</span>
<span>Total: 32</span>
</div>

</div>

</div>

</body>
</html>