<?php
function printToConsole($msg) {
    echo "<script>console.log('$msg')</script>";
}

function monthsAgo($date) {
    $now = new DateTime();
    $past = new DateTime($date);
    $interval = $now->diff($past);
    return $interval->m + ($interval->y * 12);
}

// Months at Jam Coding
$JCdate = '2024-02-01';
$JCmonths = monthsAgo($JCdate);
if ($JCmonths === 1) {
    $JCtime = $JCmonths . " month";
} else {
    $JCtime = $JCmonths . " months";
}

// Months at Bundle Group
$BGdate = '2024-02-01';
$BGmonths = monthsAgo($BGdate);
if ($BGmonths === 1) {
    $BGtime = $BGmonths . " month";
} else {
    $BGtime = $BGmonths . " months";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callum Telfer - CV</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-800 text-gray-300">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl font-bold mb-6">Callum Telfer</h1>
        <div class="text-center mb-6">
            <a href="#" class="inline-block mr-4 text-gray-400 hover:text-gray-300">
                <i class="fas fa-envelope"></i> <span>callum.telfer07@gmail.com</span>
            </a>
            <a href="https://linkedin.com/in/callum-telfer/" target="_blank" class="inline-block text-gray-400 hover:text-gray-300">
                <i class="fab fa-linkedin"></i> Callum Telfer
            </a>
        </div>
        <div class="bg-gray-700 rounded-lg p-6 shadow-md mb-8">
            <h2 class="text-xl font-bold mb-4">Summary</h2>
            <p>
                Hello, I am Callum Telfer. In my free time I enjoy coding and improving my skills. I'm currently studying for a T Level in Digital Production, Design and Development.
            </p>
        </div>

        <div class="bg-gray-700 rounded-lg p-6 shadow-md mb-8">
            <h2 class="text-xl font-bold mb-4">Experience</h2>
            <div>
                <div class="pb-4 mb-4 border-b border-gray-600">
                    <h3 class="font-bold">Code Coach</h3>
                    <p>Feb 2024 - Present (<?php echo $JCtime?>)</p>
                    <p>Company: <a href="https://jamcoding.co.uk/" target="#">Jam Coding</a></p>
                </div>
                <div>
                    <h3 class="font-bold">Volunteer Staff</h3>
                    <p>Feb 2024 - Present (<?php echo $BGtime?>)</p>
                    <p>Company: <a href="https://bundlegroup.gg/" target="#">Bundle Group Ltd</a></p>
                    <p>Volunteer for Bundle Group's event Coaster Con which raises money for the Extra Life charity</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-700 rounded-lg p-6 shadow-md mb-8">
            <h2 class="text-xl font-bold mb-4">Education</h2>
            <div>
                <div class="pb-4 mb-4 border-b border-gray-600">
                    <h3 class="font-bold"><a href="https://www.farn-ct.ac.uk/" target="#">Farnborough College of Technology</a></h3>
                    <p>Sep 2023 - Jul 2025</p>
                    <p>T Level in Digital Production, Design and Development, Computer Software Engineering</p>
                </div>
                <div>
                    <h3 class="font-bold"><a href="https://www.edgbarrowschool.co.uk/" target="#">Edgbarrow School</a></h3>
                    <p>2018 - 2023</p>
                    <p>Subjects: Computer Science, Maths, English Language, Science, Geography, Creative iMedia</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-700 rounded-lg p-6 shadow-md mb-8">
            <h2 class="text-xl font-bold mb-4">Licenses & Certifications</h2>
            <ul class="list-disc pl-6 text-gray-400">
                <li><strong><a href="https://www.credly.com/badges/dc89f6e9-b293-41ca-8ae7-4766f33b1da2/public_url">Python Essentials 2</a></strong> - Cisco</li>
                <li><strong><a href="https://www.credly.com/badges/0eba3f90-cb0b-4a4b-a54b-7eb472a09aaa/public_url">IT Essentials</a></strong> - Cisco</li>
            </ul>
        </div>

        <div class="bg-gray-700 rounded-lg p-6 shadow-md mb-8">
            <h2 class="text-xl font-bold mb-4">Skills</h2>
            <p>
                Programming • Python (Programming Language) • Java • HTML • PHP • MySQL • JavaScript • Front-End Development • Network Security • Git
            </p>
        </div>
    </div>
</body>

</html>
