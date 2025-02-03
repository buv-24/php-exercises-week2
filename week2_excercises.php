<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Utmanande Övningar</title>
    <style>
        h2 {
            margin: 0px;
            font-size: 1.1rem;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 5px;
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
            <h2>Övning 1: Update/Delete</h2>
            <?php
                // Skapa en array med tre länder och lägg till ett nytt namn med array_push().
                // Skriv ut hela arrayen.
                // Använd sedan unset() och ta bort ett land. Skriv ut array.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 1.2: Medelvärde</h2>
            <?php
                // Skapa ett PHP-skript som tar fem tal inuti en "vanlig" array
                // och sedan beräknar medelvärdet av dem. Visa resultatet.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 1.3: Sortera</h2>
            <?php
                // Skapa en array med fem tal i osorterad ordning.
                // Sortera dem i stigande ordning med sort() och skriv ut resultatet.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 2: Associerad array</h2>
            <?php
                // Skapa en associerad array med nycklar för "name", "age" och "city".
                // Skriv ut i följande format: "Peter är 25 år gammal och bor i Göteborg".
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 3: Fruktsallad</h2>
            <?php
                // Skapa två arrayer med olika frukter och slå ihop dem med array_merge().
                // Skriv ut resultatet.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 4: Gästbok i med array</h2>
            <?php
                // Skapa en enkel gästbok där användaren kan skriva ett meddelande
                // som sparas i en array och visas på sidan.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 5: Rensa en array</h2>
            <?php
                $plants = [
                    "grass", "grass", "lily", "grass", "grass",
                    "tulip", "grass", "rose", "grass", "sunflower"
                ];
                // Ta bort alla "grass" och sortera arrayen alfabetiskt.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 6: Multiplikationstabell 1 till 3</h2>
            <table>
                <?php
                    // Skapa en multiplikationstabell baserat på användarens input.
                ?>
            </table>
        </div>

        <div class="grid-item">
            <h2>Övning 7: Slumpade citat</h2>
            <?php
                // Skapa en array med olika inspirerande citat.
                // Visa ett slumpmässigt citat vid varje sidladdning.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 8: Visa veckodagens namn</h2>
            <?php
                // Använd date() för att skriva ut vilken veckodag det är idag.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 9: Hitta det största talet</h2>
            <?php
                // Skapa en array med 5 tal och hitta det största talet med en for-loop.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 10: Slå samman två arrayer och ta bort dubbletter manuellt</h2>
            <?php
                // Skapa två arrayer med gemensamma element.
                // Slå samman dem utan array_merge() och ta bort dubbletter manuellt.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 11: Omvänd ordningen i en array</h2>
            <?php
                // Skapa en array och vänd ordningen utan inbyggd funktion.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 12: Multidimensionell array veckoschema</h2>
            <?php
                // Skapa en multidimensionell array som representerar ett veckoschema.
            ?>
        </div>

        <div class="grid-item">
            <h2>Övning 13: Multidimensionell array med bilar</h2>
            <?php
                // Skapa en multidimensionell array med information om tre bilar.
                // Sök efter modellen "X5" och skriv ut information om den bilen.
            ?>
        </div>
    </div>
</body>
</html>