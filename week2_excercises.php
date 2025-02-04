<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Utmanande Övningar</title>
    <style>
        h2 {
            margin:0px;
            font-size: 1.1rem;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 1px;
            text-align: left;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .grid-item {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>PHP Övningar vecka 2</h1>

    <div class="grid-container">
    <div class="grid-item">


    <?php

    /*Exempel på de 3 olika array:erna som finns. (indexerad, associativ, och multidimensionell)
    //Indexerad array (vanlig array)
        $frukter = [
        "Äpple", 
        "Banan", 
        "Apelsin"];
        echo $frukter[0]; // Skriver ut "Äpple"

        //Eller skrivet på en enda  rad:
        $frukter = ["Äpple", "Banan", "Apelsin"];
    

    //Associerad array (kallas ofta key value pair-array)
        $person = [
            "namn" => "Lisa",
            "ålder" => 25
        ];
        echo $person["namn"]; // Skriver ut "Lisa"

        Kan även skrivas på en enda rad såklart:
        $person = [ "namn" => "Lisa", "ålder" => 25];
    

    //Multidimensionell array (tre arrayer inuti en array. I det här fallet 3 indexerade (vanliga arrayer))
        $maträtt = [
            ["Pasta", "Tomatsås", "Ost"],
            ["Bröd", "Smör", "Ost"],
            ["Ris", "Kyckling", "Curry"]
        ];
        echo $maträtt[2][1]; // Skriver ut "Kyckling"
    
    */
    ?>

Övning 1: <h2>Update/Delete</h2>

    <?php
    //Skapa en array med tre länder och lägg till ett nytt namn med array_push(). Skriv ut hela arrayen.
    //Använd sedan unset() och ta bort ett land. Skriv ut array.
    //tips: Lista med alla inbyggda array funktioner: https://www.w3schools.com/php/php_ref_array.asp
    //tips: https://www.w3schools.com/php/func_array_push.asp
    ?>

    </div>

    <div class="grid-item">
    Övning 1.2: <h2>Medelvärde</h2>
            
    <?php
    //Beräkna medelvärde. Skapa ett PHP-skript som tar fem tal inuti en "vanlig", indexerad array och sedan beräknar medelvärdet av dem. Visa resultatet.
    //Tips: Använd arrayName[x] (till exempel arrayName[1]) för att komma åt ett specifikt värde.
    ?>

    </div>
    <div class="grid-item">

    Övning 1.3: <h2>Sortera</h2>

    <?php
    //Skapa en array med fem tal i osorterad ordning. Sortera dem i stigande ordning med sort() och skriv ut resultatet.
    ?>

    </div>
    <div class="grid-item">
    Övning 2: <h2>Associerad array</h2>

    <?php
    //Skapa en associerad array med nycklar för "name", "age" och "city", och skriv ut i följande format: "Peter är 25 år gammal och bor i Göteborg" från arrayen.
    /*Tips: Skriv arrayen på följande sätt så blir det mer lättläst:
        $person = [
            "" => "",
            "" => ,
            "" => ""
        ];
    Sedan kan du använda $person[''] med specifik nyckel*/
    ?>

    </div>
    <div class="grid-item">
    Övning 3:<h2> Fruktsallad</h2>
    <?php
    // Skapa två arrayer med olika frukter och slå ihop dem med array_merge(). Skriv ut resultatet.
    // Dokumentation: https://www.php.net/manual/en/function.array-merge.php
    ?>
    </div>

    <div class="grid-item">
    Övning 4: <h2>Gästbok i med array</h2>
    <?php
    // Skapa en enkel gästbok med HTML forms och method POST eller GET där användaren kan skriva ett meddelande som sparas i en array och visas på sidan
    // Obs, det gör inget att arrayen inte sparas efter refresh av sidan.
    // Tips: Använd en inbyggd funktion för att lägga till item till array
    // Inbyggda array funktioner: https://www.w3schools.com/php/php_arrays_functions.asp
    // Tips: använd if ($_SERVER["REQUEST_METHOD"] == "POST") {} för att kolla ifall submit har tryckts på formuläret.
    ?>

    </div>

    <div class="grid-item">
    Övning 5:<h2>Rensa en array</h2>
    <?php // Ta bort alla items som är "grass" från följande array.
    // Går att lösa på flera sätt.
    // Sortera sedan arrayen i bokstavsordning med en inbyggd array sortering.
    $plants = [
        "grass",
        "grass",
        "lily",
        "grass",
        "grass",
        "tulip",
        "grass",
        "rose",
        "grass",
        "sunflower",
    ]; ?>

        </div>
        <div class="grid-item">
        Övning 6:<h2>Multiplikationstabell 1 till 3</h2>

        <table>
    <?php
    //Skapa ett PHP-skript som skriver ut en multiplikationstabell för ett tal som användaren anger i ett formulär. Använd en for-loop för att skriva ut varje rad. Resultatet ska se ut som tabellen nedan:
    ?>
        </table>
        <h4>Målbild:</h4> 
        Multiplikationstabell
        <table>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>6</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>6</td>
                <td>9</td>
            </tr>
        </table>
        
    </div>
    <div class="grid-item">
    Övning 7:<h2>Slumpade citat</h2>
    <?php
    // Skapa en array med olika inspirerande citat och visa ett slumpmässigt citat vid varje sidladdning.
    //Tips: Använd array_rand();
    ?>


    </div>
    <div class="grid-item">
    Övning 8:<h2>Visa veckodagens namn</h2>
    <?php
    // Använd date() för att skriva ut vilken veckodag det är idag, t.ex. "Idag är det måndag".
    // Officiell dokumentation:
    // https://www.php.net/manual/en/function.date.php
    ?>

    </div>
    <div class="grid-item">
    Övning 9:<h2>Hitta det största talet</h2>
    <?php
    // Skapa en array med 5 tal och använd en for-loop för att hitta och skriva ut det största talet.
    ?>
        </div>

    <div class="grid-item">
    Övning 10: <h2>Slå samman två arrayer och ta bort dubbletter manuellt
    </h2>
    <?php
    // Skapa två arrayer med några gemensamma element. Skriv ett skript som slår samman dessa två arrayer utan att använda array_merge(), och ta sedan bort eventuella dubbletter manuellt. Du ska jämföra varje element och säkerställa att inga dubbletter läggs till i den sammanslagna arrayen.
    ?>

    </div>

    <div class="grid-item">
    Övning 11: <h2>Omvänd ordningen i en array
    </h2>
    <?php
    // Skapa en array med några element och använd for-loop för att skapa en ny array där ordningen på elementen är omvänd.
    // Lös utan att använda en inbyggd array funktion
    ?>

    </div>
    <div class="grid-item">
    Övning 12: <h2>Multidimensionell array veckoschema 
    </h2>
    <?php
//Skapa en multidimensionell array som representerar ett veckoschema (5 dagar) där varje dag innehåller tre aktiviteter.
//Skapa tre st indexerade arrayer inuti en multidimensionella array
//Skriv sedan ut vad 3:de aktiviteten på fredag, samt den 2:de aktiviteten på tisdag med en echo.
?>

    </div>
    <div class="grid-item">
    Övning 13: <h2>Multidimensionell array med bilar</h2>
    <?php
// Skapa en multidimensionell array som innehåller information om tre olika bilar (märke, modell, år). Använd en loop för att hitta och skriva ut informationen om en specifik bilmodell.
//Skriv ett PHP-skript som letar efter modellen "X5" och skriver ut:
//"Bilen är en BMW X5 från 2019."
// Tips: Skapa tre associativa arrayer inuti en array med av syntaxen nedan, och använd 3 key value-pair:
/*
$array = [

    ["" => "",],
    [],
    []

];

*/

?>

    </div>
    </div>

</body>
</html>
