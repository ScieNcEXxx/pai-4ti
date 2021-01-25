<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nasz sklep komputerowy</title>
        <link rel="stylesheet" href="style8.css">
    </head>

    <body>
        <div class="logo">
            <nav>
                <a href="index.php">Główna</a>
                <a href="procesory.html">Procesory</a>
                <a href="ram.html">Ram</a>
                <a href="grafika.html">Grafika</a>
            </nav>
        </div>

        <div class="logo">
                <div><h2>Podzespoły komputerowe</h2></div>
        </div>
        
        <section>
        <div class="glowny">
            <h1>Dzisiejsze promocje</h1>


            <?php
    
                $conn = mysqli_connect("localhost", "root", "", "sklep");

                $sql = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena<1000";
                $query = mysqli_query($conn, $sql);
            ?>

            
            <table>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>


                <?php
                while($row = mysqli_fetch_array($query)){

                ?>


                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nazwa']?></td>
                    <td><?php echo $row['opis']?></td>
                    <td class="prawo"><?php echo $row['cena']?></td>
                </tr>

                <?php
                }
                ?>


            </table>

            <?php
                 mysqli_close($conn);

            ?>
        </div>
        </section>

        <footer>
            <div class="stopka">
                <img src="scalak.jpg" alt="promocje na procesory"/>
            </div>

            <div class="stopka">
                <h4>Nasz Sklep Komputerowy</h4>
                <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
            </div>

            <div class="stopka">
                <p>zadzwoń: 601 602 603</p>
            </div>

            <div class="stopka">
                <p>Stronę wykonał: PESEL</p>
            </div>
        </footer>




    </body>
</html>