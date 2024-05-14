<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    echo "kids : ";
    $kids = ["mike","dustin","will","lucas","max","eleven"];
    print_r($kids);
    echo "<br> adults : "; // Lengkapi di sini
    $adults = ["hopper","nancy","joyce","jonathan","murray"];
    
    print_r($adults);
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    
    echo "<br>";
    echo "<ol>";
    foreach ($kids as $k) {
        echo "<li> $k </li>";
    }
    
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    foreach ($adults as $a) {
        echo "<li> $a </li>";
    }
    
    // Lanjutkan

    echo "</ol>";


    $siswa =
    [
        [
            "name" => "Will Byers",
            "age" => 12,
            "aliases " => "Will the Wise",
            "status"  => "alive"
        ],
        [
            "name" => "Mike Wheeler",
            "age" => 12,
            "aliases " => "Dungeon Master",
            "status"  => "alive"
        ],
        [
            "name" => "Jim Hopper",
            "age" => 43,
            "aliases " => "Chief Hopper",
            "status"  => "Deceased"
        ],
        [
            "name" => "Eleven",
            "age" => 12,
            "aliases " => "El",
            "status"  => "alive"
        ]
    ];

    echo "<pre>";
    print_r($siswa);
    echo "</pre>";
    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"

        


            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
            
        */
    ?>
</body>

</html>