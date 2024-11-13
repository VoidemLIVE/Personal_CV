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

//test AGAIN

// Months at Bundle Group
$BGdate = '2024-02-01';
$BGmonths = monthsAgo($BGdate);
if ($BGmonths === 1) {
    $BGtime = $BGmonths . " month";
} else {
    $BGtime = $BGmonths . " months";
}

//Months at Ascot
$Ascotdate = '2024-09-01';
$Ascotmonths = monthsAgo($Ascotdate);
if ($Ascotmonths === 1) {
    $Ascottime = $Ascotmonths . " month";
} else {
    $Ascottime = $Ascotmonths . " months";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callum Telfer - CV</title>
    <link rel="stylesheet" href="static/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-800 text-gray-300">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl font-bold mb-6">Callum Telfer</h1>
        <div class="text-center mb-6">
            <a href="mailto:callum@callumtelfer.uk" class="inline-block mr-4 text-gray-400 hover:text-gray-300">
                <i class="fas fa-envelope"></i> <span>callum@callumtelfer.uk</span>
            </a>
            <a href="https://callumtelfer.uk" target="_blank" class="inline-block mr-4 text-gray-400 hover:text-gray-300">
                <i class="fas fa-globe"></i> <span>callumtelfer.uk</span>
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
                    <div class="skills mt-2">
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#dc97fc" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Teaching</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#9dfc97" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Teamworking</p>
                        </div>
                    </div>
                </div>
                <div class="pb-4 mb-4 border-b border-gray-600">
                    <h3 class="font-bold">Volunteer Developer</h3>
                    <p>Feb 2024 - Present (<?php echo $BGtime?>)</p>
                    <p>Company: <a href="https://bundlegroup.gg/" target="#">Bundle Group Ltd</a></p>
                    <p>Volunteer Developer for Bundle Group's event Coaster Con which raises money for the Extra Life charity</p>
                    <div class="skills mt-2">
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#b07219" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Java</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#9dfc97" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Teamworking</p>
                        </div>
                        <a href="https://hub.spigotmc.org/javadocs/spigot/" target="_blank"><div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                        <img width="25" height="20" src="assets/spigot.png" alt="Spigot Logo" style="width: 25px; height: 20px;">
                            <p class="text-xs ml-1 mr-2 font-bold">Spigot</p>
                        </div></a>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold">Kitchen Staff</h3>
                    <p>Sept 2024 - Present (<?php echo $Ascottime?>)</p>
                    <p>Company: Ascot Brewing Company, Camberley </p>
                    <div class="skills mt-2">
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#9dfc97" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Teamworking</p>
                        </div>
                    </div>
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
                    <div class="skills mt-2">
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#3776ab" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Python</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#9B4993" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">C#</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#4F5D95" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">PHP</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#9dfc97" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Teamworking</p>
                        </div>
                        <div class="inline-flex items-center bg-gray-800 rounded-full p-1 hover:scale-110 transform duration-100">
                            <svg width="20" height="20">
                                <circle cx="10" cy="10" r="5" fill="#70b002" />
                            </svg>
                            <p class="text-xs ml-1 mr-2 font-bold">Project Management</p>
                        </div>
                    </div>
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
