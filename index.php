<?php
function printToConsole($msg) {
    echo "<script>console.log('$msg')</script>";
}

function monthsAgo($date) {
    $now = new DateTime();
    $past = new DateTime($date);
    $interval = $now->diff($past);
    $years = $interval->y;
    $months = $interval->m;
    if ($years > 0) {
        return "$years year" . ($years > 1 ? "s" : "") . " $months month" . ($months != 1 ? "s" : "");
    } else {
        return $months . " month" . ($months != 1 ? "s" : "");
    }
}

function monthsWorked($startDate, $endDate) {
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = $start->diff($end);
    $years = $interval->y;
    $months = $interval->m;
    if ($years > 0) {
        return "$years year" . ($years > 1 ? "s" : "") . " $months month" . ($months != 1 ? "s" : "");
    } else {
        return $months . " month" . ($months != 1 ? "s" : "");
    }
}

// Months at Jam Coding
$JCdate = '2024-02-01';
$JCmonths = monthsAgo($JCdate);
$JCtime = $JCmonths;
// Months at Bundle Group
$BGdate = '2024-02-01';
$BGmonths = monthsAgo($BGdate);
$BGtime = $BGmonths;

//Months at Ascot
$Ascotdate = '2024-09-01';
$AscotEndDate = '2025-03-01';
$Ascotmonths = monthsWorked($Ascotdate, $AscotEndDate);
$Ascottime = $Ascotmonths;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callum Telfer | CV</title>
    <meta name="description" content="Callum Telfer's CV">
    <meta name="author" content="Callum Telfer">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
<body class="bg-black text-white">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        });
    </script>

    <main>
        <section class="min-h-[40vh] bg-gradient-to-br from-gray-900 to-black relative overflow-hidden">
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black"></div>
            </div>
            
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black to-transparent"></div>
            
            <div class="relative flex items-center justify-center min-h-[40vh]">
                <div class="max-w-4xl mx-auto px-4 md:px-8 text-center">
                    <h1 class="text-4xl md:text-7xl font-bold mt-12 mb-6 bg-gradient-to-r from-white to-gray-500 bg-clip-text text-transparent" data-aos="fade-up">
                        Callum Telfer's CV
                    </h1>
                    <div class="flex flex-wrap justify-center gap-6 text-gray-400" data-aos="fade-up" data-aos-delay="100">
                        <a href="mailto:callum@callumtelfer.uk" class="flex items-center gap-2 hover:text-white transition-colors">
                            <i class="fas fa-envelope"></i>
                            <span>callum@callumtelfer.uk</span>
                        </a>
                        <a href="https://callumtelfer.uk" class="flex items-center gap-2 hover:text-white transition-colors">
                            <i class="fas fa-globe"></i>
                            <span>callumtelfer.uk</span>
                        </a>
                        <a href="https://linkedin.com/in/callum-telfer" class="flex items-center gap-2 hover:text-white transition-colors">
                            <i class="fab fa-linkedin"></i>
                            <span>Callum Telfer</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-6xl mx-auto px-4 py-16 space-y-12">
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-center mb-8">
                    <div class="w-1 h-8 bg-blue-500 rounded-full mr-4"></div>
                    <h2 class="text-2xl font-bold">Summary</h2>
                </div>
                <p class="text-gray-400 text-lg">
                    Hello, I am Callum Telfer. In my free time I enjoy coding and improving my skills. I'm currently studying for a T Level in Digital Production, Design and Development.
                </p>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-center mb-8">
                    <div class="w-1 h-8 bg-purple-500 rounded-full mr-4"></div>
                    <h2 class="text-2xl font-bold">Experience</h2>
                </div>
                <div class="space-y-8">
                    <div class="border-b border-gray-800 pb-8">
                        <h3 class="text-xl font-bold mb-2">Code Coach</h3>
                        <p class="text-gray-400 mb-2">Feb 2024 - Present (<?php echo $JCtime?>)</p>
                        <p class="text-gray-400 mb-4">Company: <a href="https://jamcoding.co.uk/" class="text-blue-400 hover:text-blue-300">Jam Coding</a></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Teaching</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Teamworking</span>
                        </div>
                    </div>

                    <div class="border-b border-gray-800 pb-8">
                        <h3 class="text-xl font-bold mb-2">Volunteer Developer</h3>
                        <p class="text-gray-400 mb-2">Feb 2024 - Present (<?php echo $BGtime?>)</p>
                        <p class="text-gray-400 mb-4">Company: <a href="https://bundlegroup.gg/" class="text-blue-400 hover:text-blue-300">Bundle Group Ltd</a></p>
                        <p class="text-gray-400 mb-4">Volunteer Developer for Bundle Group's event Coaster Con which raises money for the Extra Life charity</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Java</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Teamworking</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Spigot</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Redis</span>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">Kitchen Staff</h3>
                        <p class="text-gray-400 mb-2">Sept 2024 - March 2025 (<?php echo $Ascottime?>)</p>
                        <p class="text-gray-400 mb-4">Company: Ascot Brewing Company, Camberley</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Teamworking</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-center mb-8">
                    <div class="w-1 h-8 bg-green-500 rounded-full mr-4"></div>
                    <h2 class="text-2xl font-bold">Education</h2>
                </div>
                <div class="space-y-8">
                    <div class="border-b border-gray-800 pb-8">
                        <h3 class="text-xl font-bold mb-2">
                            <a href="https://www.farn-ct.ac.uk/" target="_blank" class="hover:text-gray-300">Farnborough College of Technology</a>
                        </h3>
                        <p class="text-gray-400 mb-2">Sep 2023 - Jul 2025</p>
                        <p class="text-gray-400 mb-4">T Level in Digital Production, Design and Development</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Python</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PHP</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">MySQL</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Teamworking</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Project Management</span>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">
                            <a href="https://www.edgbarrowschool.co.uk/" target="_blank" class="hover:text-gray-300">Edgbarrow School</a>
                        </h3>
                        <p class="text-gray-400 mb-2">Sep 2018 - Jul 2023</p>
                        <p class="text-gray-400 mb-4">Subjects: Computer Science, Maths, English Language, Science, Geography, Creative iMedia</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Python</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">HTML</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">CSS</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Teamworking</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Photoshop</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-center mb-8">
                    <div class="w-1 h-8 bg-yellow-500 rounded-full mr-4"></div>
                    <h2 class="text-2xl font-bold">Certifications</h2>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <i class="fas fa-certificate text-yellow-500"></i>
                        <div>
                            <a href="https://www.credly.com/badges/dc89f6e9-b293-41ca-8ae7-4766f33b1da2/public_url" 
                               class="text-xl font-bold hover:text-gray-300">Python Essentials 2</a>
                            <p class="text-gray-400 mb-4">Cisco</p>
                            <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Python</span>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fas fa-certificate text-yellow-500"></i>
                        <div>
                            <a href="https://www.credly.com/badges/0eba3f90-cb0b-4a4b-a54b-7eb472a09aaa/public_url" 
                               class="text-xl font-bold hover:text-gray-300">IT Essentials</a>
                            <p class="text-gray-400 mb-4">Cisco</p>
                            <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Networks</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Computer Hardware</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Operating Systems</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Printers</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-center mb-8">
                    <div class="w-1 h-8 bg-red-500 rounded-full mr-4"></div>
                    <h2 class="text-2xl font-bold">Skills</h2>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Programming</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Python</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Java</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">HTML</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">PHP</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">MySQL</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">JavaScript</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Front-End Development</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Network Security</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Git</span>
                </div>
            </div>

            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-center mb-8">
                    <div class="w-1 h-8 bg-sky-500 rounded-full mr-4"></div>
                    <h2 class="text-2xl font-bold">Currently Learning</h2>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-gray-800 rounded-full">C</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">C#</span>
                    <span class="px-4 py-2 bg-gray-800 rounded-full">Docker</span>
                </div>
            </div>
        </div>

        <footer class="py-8 border-t border-gray-800 px-4 mb-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400">© 2024 Callum Telfer</p>
                    <a href="https://github.com/VoidemLIVE/Personal_CV" target="_blank" 
                       class="text-gray-400 hover:text-white transition-colors">
                        View Source
                    </a>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>