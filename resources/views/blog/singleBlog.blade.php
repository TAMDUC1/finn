<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('css/singleBlog.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="navbar">

    </div>
    <div class="container">
        <div class="title">
            <div><h1>Lorem ipsum dolor.</h1></div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, veritatis.</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nesciunt ratione ullam.</div>
        </div>
        <div class="sidebar">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at blanditiis dicta dignissimos dolorem doloremque, dolores excepturi exercitationem quasi quibusdam. Alias amet cumque dignissimos dolores esse exercitationem facere hic laboriosam laudantium mollitia, natus nesciunt omnis possimus quidem, sed veritatis voluptatem.
            </p>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam deserunt doloribus ea hic maiores, ratione sed tenetur velit. A eius exercitationem nam nemo, nisi sed unde veritatis. Ab accusamus accusantium amet, asperiores fugit ipsa neque praesentium quae ratione repellat, similique tempore, vero voluptatibus? Adipisci amet dignissimos, ex facere minus quas.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi cum ipsa laudantium placeat! Deleniti dolorem dolores ducimus ex iure magnam nulla omnis quaerat quasi quidem reiciendis, totam, voluptates voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minus quas quo ut vel? Debitis odio placeat rem repudiandae. Adipisci aliquid at dignissimos distinctio doloremque ducimus earum fuga, natus, possimus ratione rem unde ut veritatis voluptate voluptatibus. Alias autem consectetur, consequuntur cum deserunt dolore dolores eos error, ipsam labore laboriosam molestiae molestias nihil obcaecati officia praesentium quidem rem velit voluptatem voluptatibus? Autem dolor in ipsam, ipsum provident repellat sunt velit.</p>
        </div>
        <div class="footer">
            <div>
                <a href="https://vnexpress.net">vnexpress</a>
            </div>
            <?php
                $x=1;
                while ($x < 3){
                    echo " hi there!<br>";
                    $x++;
                }
                for($y = 0; $y <= 5; $y++){
                    echo"hei there ";
                }
                $array1 = array("tam","hai","alo");
                foreach ($array1 as $loop_data){
                    echo(" my name is ").$loop_data;
                }
            ?>

    </div>
    </body>

</html>