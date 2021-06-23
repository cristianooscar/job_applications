<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My job applications</title>
</head>
<body>
    <table>
    <th>
    
    </th>
    </table>
    <?php

$date = $_POST['date'];
$title = $_POST['position_title'];
$company = $_POST['company'];
$remote = $_POST['remote'];
$area = $_POST['position_area'];
$link = $_POST['position_link'];
$cover_letter = $_POST['cover_letter'];
$exp = $_POST['exp'];



echo "Date of the application: $date <br>";
echo "Title of the position: $title <br>";
echo "Name of the company: $company<br>";
echo "The position is remote (Y/N): $remote<br>";
echo "The area of work: $area<br>";
echo "The link where you applied: $link <br>";
echo "Sent a cover letter (Y/N): $cover_letter<br>";
echo "The position asked for previous experience (Y/N): $exp<br>";

?>
<br>
    <a href='index.php'>Review</a>
    <br>
    <a href='confirmation.php'>Continue</a>
</body>
</html>