<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Count My String!</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="user-string" placeholder="Type a string!" id="string-input">
        <div class="result">
            <div class="word">
                <?php 
                    if(isset($_POST['submit'])){
                        if(strlen($_POST['user-string']) >= 30 || strlen($_POST['user-string']) == 0){
                            echo null;
                        }else{
                            echo 'String: ' . strip_tags($_POST['user-string']);
                        }   
                    }else{
                        echo 'Waiting for a string...';
                    }
                ?>
            </div>
            <div class="results"><?php include 'handlers/submitBtnHandler.php'?></div>
        </div>
        <div class="bottom">
            <div class="options" opened='false'>Options <i class="fa fa-cog" aria-hidden="true"></i></div>
            <div class="input-container border">
                <input type="checkbox" name="space-option" id="space-option" class="radio">
                <label for="space-option">Include spaces</label>
            </div>
            <div class="input-container">
                <input type="checkbox" name="caps-option" id="caps-option" class="radio">
                <label for="caps-option">Include capital letters</label>
            </div>
            <button type="submit" name='submit' id="submit">Count characters <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </form>

    <script src="js/app.js"></script>
</body>
</html>