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

            <div class="w-full h-full flex justify-center items-center relative z-10 mt-20">
                <h1 class="text-4xl font-bold text-center">Redesigning - Coming Soon</h1>
            </div>
        </section>
    </main>
</body>
</html>