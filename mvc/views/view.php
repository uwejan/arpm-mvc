<!DOCTYPE html>
<html>
<head>
    <title>MVC Example</title>
</head>
<body>
<h1>Hi</h1>
<div>
    <?php
    switch ($_GET['url']) {
        case '':
            echo "I'm in the homepage";
            break;
        case 'folder1':
            echo "I'm in folder1";
            break;
        case 'folder2':
            echo "I'm in folder2";
            break;
        default:
            echo "Page not found.";
            break;
    }
    ?>
</div>
</body>
</html>
