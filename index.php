<?php
session_start();

// Protect main page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// --- Basic info ---
$name = "Sandara B. Bajio";
$title = "Computer Science Student | Aspiring Software Developer";
$photo = "picture.jpg";
$email = "sandarabajio02@gmail.com";
$phone = "+63 931 058 6562";
$address = "Tabangao Dao, Batangas City, Batangas, Philippines";
$github = "https://github.com/SandaraBajio";

// --- Summary ---
$summary = "Motivated and detail-oriented Computer Science undergraduate with strong foundations in programming, problem-solving, and software development. Experienced in building academic and personal projects, including applications focused on usability and real-world problem solving. Adept at working in teams, adapting to new challenges, and eager to contribute technical skills to impactful projects and future internships.";

// --- Education ---
$education = [
    ['degree' => 'Bachelor of Science in Computer Science', 'school' => 'Batangas State University - TNEU', 'year' => ' 2023 - Present', 'notes' => 'Dean\'s Lister | DOST Scholar'],
    ['degree' => 'Senior High School - STEM', 'school' => 'Pinamukan Integrated School', 'year' => '2021 - 2023', 'notes' => 'With High Honors'],
    ['degree' => 'Junior High School', 'school' => 'Tabangao Integrated School', 'year' => '2017 - 2021', 'notes' => 'With High Honors'],
    ['degree' => 'Elementary', 'school' => 'Dao Elementary School', 'year' => '2011 - 2017', 'notes' => 'With High Honors'],
];

// --- Career Highlights ---
$highlights = [
    [
        'project' => 'Kaagapay (Disaster Response Management System)',
        'role' => 'Developer',
        'details' => [
            'Built using Java and MySQL to streamline disaster response coordination.',
            'Implemented modules for resource allocation, rescue tracking, and real-time reporting.',
            'Focused on reliability and efficiency to support communities during emergencies.'
        ]
    ],
    [
        'project' => 'Hybrid Sensor Alarm System',
        'role' => 'Collaborator',
        'details' => [
            'Contributed to the design of a hardware-software integrated alarm system.',
            'Worked on combining multiple sensor inputs for improved accuracy and reliability.',
            'Assisted in testing and system calibration for practical deployment.'
        ]
    ],
    [
        'project' => 'Bithub (E-commerce Platform)',
        'role' => 'Developer',
        'details' => [
            'Helped in developing an online marketplace platform with user-friendly features.',
            'Assisted in building product catalog and basic transaction functionalities.',
            'Collaborated in creating a scalable design for future enhancements.'
        ]
    ],
    [
        'project' => 'Nimbus Airways (Flight Booking System)',
        'role' => 'Developer',
        'details' => [
            'Developed a booking management system for flights, focusing on user-friendly design.',
            'Implemented core features including flight search, reservation, and ticketing.',
            'Utilized database integration to manage passenger and booking records.'
        ]
    ]
];

// --- Technical Skills ---
$technicalskills = ['SQL', 'Python', 'Java', 'C++', 'C#', 'Statistics'];

// --- Seminars and Trainings ---
$seminars = [
    ['title' => 'DataCamp - Python Data Fundamentals', 'date' => 'August 20, 2025'],
    ['title' => 'Techcellence 2024: Unlocking the Power of AI: Theory to Practice', 'date' => 'November 23, 2024']
];

// --- Organizations ---
$organizations = ['Junior Philippine Computer Society', 'Association of Committed Computer Science Students', 'Association of DOST-SEI Scholars', 'Literary Editor in Bits & Bytes: CICS Publication'];

// --- Soft Skills ---
$softskills = ['Problem-Solving', 'Communication', 'Teamwork', 'Adaptability', 'Leadership'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $name . " — " . $title; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="resume-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <img src="<?php echo $photo; ?>" alt="Your Photo" width="140" height="140">
      <h2><?php echo $name; ?></h2>
      <div><?php echo $title; ?></div>
      <h3>Contact</h3>
      <p>
        <strong>Email:</strong> <?php echo $email; ?><br>
        <strong>Phone:</strong> <?php echo $phone; ?><br>
        <strong>Address:</strong> <?php echo $address; ?><br>
        <strong>Github:</strong> <a href="<?php echo $github; ?>" target="_blank">SandaraBajio</a>
      </p>
      <h3>Technical Skills</h3>
      <ul>
        <?php foreach ($technicalskills as $s) echo "<li>$s</li>"; ?>
      </ul>
      <h3>Organizations</h3>
      <ul>
        <?php foreach ($organizations as $org) echo "<li>$org</li>"; ?>
      </ul>
      <h3>Soft Skills</h3>
      <ul>
        <?php foreach ($softskills as $ss) echo "<li>$ss</li>"; ?>
      </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
      <div class="main-header">
        <!-- Added logged-in user and logout -->
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?> 🎉</h1>
        <p><?php echo $title; ?></p>
        <p style="text-align:right;">
          <a href="logout.php" style="color:#44265c; font-weight:bold;">Logout</a>
        </p>
      </div>

      <button class="expander-btn" onclick="toggleExpander('summary', this)">
        <span class="arrow">&#9660;</span> <strong>Professional Summary</strong>
      </button>
      <div class="expander-content" id="summary" style="display:block;">
        <p><?php echo $summary; ?></p>
      </div>

      <button class="expander-btn" onclick="toggleExpander('education', this)">
        <span class="arrow">&#9654;</span> <strong>Education</strong>
      </button>
      <div class="expander-content" id="education" style="display:none;">
        <?php foreach ($education as $ed): ?>
          <p>
            <strong><?php echo $ed['degree']; ?></strong><br>
            <?php echo $ed['school']; ?> — <?php echo $ed['year']; ?><br>
            <?php if ($ed['notes']) echo $ed['notes']; ?>
          </p>
          <hr>
        <?php endforeach; ?>
      </div>

      <button class="expander-btn" onclick="toggleExpander('highlights', this)">
        <span class="arrow">&#9654;</span> <strong>Career Highlights</strong>
      </button>
      <div class="expander-content" id="highlights" style="display:none;">
        <?php foreach ($highlights as $h): ?>
          <p>
            <strong><?php echo $h['project']; ?></strong><br>
            Role: <?php echo $h['role']; ?><br>
          </p>
          <ul>
            <?php foreach ($h['details'] as $d) echo "<li>$d</li>"; ?>
          </ul>
          <hr>
        <?php endforeach; ?>
      </div>

      <button class="expander-btn" onclick="toggleExpander('seminars', this)">
        <span class="arrow">&#9654;</span> <strong>Seminars and Trainings</strong>
      </button>
      <div class="expander-content" id="seminars" style="display:none;">
        <?php foreach ($seminars as $sem): ?>
          <p>
            <strong><?php echo $sem['title']; ?></strong><br>
            <?php if ($sem['date']) echo "<em>{$sem['date']}</em>"; ?>
          </p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <script>
    function toggleExpander(id, btn) {
      var el = document.getElementById(id);
      var isOpen = el.style.display === "block";
      el.style.display = isOpen ? "none" : "block";
      var arrow = btn.querySelector('.arrow');
      arrow.innerHTML = isOpen ? "&#9654;" : "&#9660;";
    }
  </script>
</body>
</html>
