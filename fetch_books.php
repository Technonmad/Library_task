
<div id="main">
    <?php
    $connect = new mysqli('localhost', 'root', '','library');
    $result = $connect->query("select * from `books`");
    while($row = $result->fetch_row())
    {
        echo 
        "
        <div id = 'book'>
            <div id='book_and_parameters'>
                <img src='books_img/$row[4]'>
                $row[1]
                &nbsp&nbsp<br>$row[2]</br>
                Страниц: $row[5]
                <br>Цена: $row[3]
            </div>
            <div id='description'>
                $row[7]
            </div>
        </div>
        ";
    }
?>
</div>