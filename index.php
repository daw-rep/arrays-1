<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays Example</title>
    </head>
    <body>
        <?php
        /* First method to create array. */
        $indexedArray = [1, 2, 3, 4, 5];
        echo "<p>List Indexed Array 1</p>";
        foreach ($indexedArray as $index => $value) {
            echo "Value of \$indexedArray in position $index is $value <br />";
        }
        /* Second method to create array. */
        $indexedArray = [];
        $indexedArray[] = "one";
        $indexedArray[] = "two";
        $indexedArray[] = "three";
        $indexedArray[] = "four";
        $indexedArray[] = "five";

        echo "<p>List Indexed Array 2</p>";
        foreach ($indexedArray as $index => $value) {
            echo "Value of \$indexedArray in position $index is $value <br />";
        }

        /* First method to associate create array. */
        $associativeArray = ["mohammad" => 2000, "qadir" => 1000, "zara" => 500];
        
        $associativeArray = ["mohammad" => 2000, "qadir" => 1000, "zara" => 500];

        echo "<p>List Associative Array 1</p>";
        
        
        foreach ($associativeArray as $index => $value) {
            echo "Salary of $index is " . $value . "<br />";
        }

        /* Second method to create array. */
        $associativeArray = [];
        $associativeArray['mohammad'] = "high";
        $associativeArray['qadir'] = "medium";
        $associativeArray['zara'] = "low";

        echo "<p>List Associative Array 2</p>";
        foreach ($associativeArray as $index => $value) {
            echo "Salary of $index is " . $associativeArray[$index] . "<br />";
        }

        /* marks */


        $bidimensionalIndexedArray = [[23, 20, 19], [22, 19, 22], [12, 3, 5]];

        echo "<p>List bidimensional Array 1</p>";
        foreach ($bidimensionalIndexedArray as $indexArray => $array) {
            echo "The array number $indexArray <br />";
            foreach ($array as $indexValue => $value)
                echo "$indexValue => $value  ";
            echo "<br />";
        }

        $bidimensionalAssociativeArray = ["cero" => [23, 20, 19], "uno" => [22, 19, 22], "dos" => [12, 3, 5]];

        echo "<p>List bidimensional Array 2</p>";
        foreach ($bidimensionalAssociativeArray as $indexArray => $array) {
            echo "The array named $indexArray <br />";
            foreach ($array as $indexValue => $value)
                echo "$indexValue => $value  ";
            echo "<br />";
        }
        ?>
    </body>
</html>
