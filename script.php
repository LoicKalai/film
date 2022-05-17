<?php


// $tab_director = [];
// $tab_category = [];
// $tab_title = [];
// $tab_year = [];
// $tab_all = [];


$row = 1;
if (($handle = fopen("film.csv", "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

        if($row == 1){
            $row++; 
            continue;
        }

        // $num = count($data);
        // $row++;
        
        // array_push($tab_director, $data[3]);
        // array_push($tab_category, $data[2]);
        // array_push($tab_year, $data[1]);
        // array_push($tab_title, $data[0]);

        // array_push($tab_all, $data);
        
    }

    fclose($handle);
    
}

// echo print_r($tab_director);
// echo print_r($tab_category);
// echo print_r($tab_title);
// echo print_r($tab_year);

// $tab_director = array_unique($tab_director);
// $tab_category = array_unique($tab_category);
// $tab_title = array_unique($tab_title);
// $tab_year = array_unique($tab_year);

// for ($i=0; $i < count($tab_color); $i++) { 
//     $sql = "INSERT INTO colors(color) VALUES(:color)";
//     $sth = $bdd->prepare($sql);
//     $sth->bindParam('color', $tab_color[$i], PDO::PARAM_STR);
//     $sth->execute();
// }

// for ($i=0; $i < count($tab_size); $i++) { 
//     $sql = "INSERT INTO size(value) VALUES(:size)";
//     $sth = $bdd->prepare($sql);
//     $sth->bindParam('size', $tab_size[$i], PDO::PARAM_STR);
//     $sth->execute();
// }

// for ($i=0; $i < count($tab_category); $i++) { 
//     $sql = "INSERT INTO categories(category) VALUES(:category)";
//     $sth = $bdd->prepare($sql);
//     $sth->bindParam('category', $tab_category[$i], PDO::PARAM_STR);
//     $sth->execute();
// }

?>