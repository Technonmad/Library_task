<?php
    $connect = new mysqli('localhost', 'root', '','library');
    $result = $connect->query("select * from `books`");
    while($row = $result->fetch_row())
    {
        echo 
        "
        <div id = 'book'>
            <div id='book_and_desc'>
                <img src='books_img/$row[4]'>
                $row[1]
                &nbsp&nbsp$row[2]
                $row[5]
            </div>
            <div id = 'price'>
            $row[3]
            </div>
        </div>
        ";
    }
?>