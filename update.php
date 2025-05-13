<?php
header('Content-Type: application/json');

$programme = $_GET['programme'] ?? '';

$subjects = [
    'CG' => [
        "SECV3223 Multimedia Data Processing",
        "SECV3263 Multimedia Web Programming",
        "SECV3233 Data Visualisation",
        "SECJ3563 Computational Intelligence",
        "SECV3123 Real-Time Computer Graphics",
        "SECV4213 Computer Games Development"
    ],
    'SE' => [
        "SECJ3343 Software Quality Assurance",
        "SECJ3623 Mobile Application Programming",
        "SECR3043 Cloud Computing",
        "SECJ3563 Computational Intelligence",
        "SECJ3483 Web Technology",
        "SECJ3203 Theory of Computer Science"
    ]
];

echo json_encode([
    'programme' => $programme,
    'subjects' => $subjects[$programme] ?? []
]);
