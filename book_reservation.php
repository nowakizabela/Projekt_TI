<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include_once('navbar.php');
    ?>
    <?php include('connect.php');

    $bookId = $_GET['id'];
    $sql = "SELECT * FROM books WHERE book_id = $bookId";
    $result = $connect->query($sql);
    $row = $result->fetch_row();
    ?>


    <div class="main_container">
        <div class="mid_container">

            <div class="middle_block" id="user_info">
                <div class="line"><b>Tytuł:
                        <?php echo $row[1]; ?>
                    </b>
                    <?php ?> <b>Autor:</b>
                    <?php echo $row[2]; ?>
                </div>

            </div>

            <div class="left_block" id="user_info">
                <div class="info">
                    <div class="line"><b>Opis ksiażki</b></div>
                    <div class="line">
                        <?php echo $row[7]; ?>

                    </div>

                </div>
                <div class="line">
                    <img src="./img/<?php echo $row[5]; ?>" alt="<?php echo $row[5]; ?>">
                </div>
            </div><br>
            <div class="middle_block" id="choose_role">
                <div class="line"><b>Co chcesz zrobić?</b></div>
                <div class="line">
                    <div class="buttons">
                        <button onclick="location.href='books.php'">Anuluj</button>
                        <button onclick="location.href=''">Wypozycz</button>
                        <button onclick="location.href=''">Oddaje</button>

                    </div>
                </div>

            </div>



        </div>
    </div>

</body>

</html>
