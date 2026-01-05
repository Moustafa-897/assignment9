<?php
//1
function printh()
{
    echo "Hi from void function";
}

//2 first name and last name and prints the full name.
function fullname($firstname, $lastname)
{
    echo "$firstname $lastname";
}

//3
function numbers(...$number)
{
    foreach ($number as $num) {
        echo $num;
    }
}

//4
function defaulparam($param = "Hello, Guest!")
{
    return $param;
}

//5
function param($name, $age, $city)
{
    return "" . $name . "is" . $age . "years old and lives in" . $city . ".";
}

//6
function multipication($n1, $n2)
{
    $res = $n1 * $n2;
    return $res;
}

//7
function printoddnumber($num)
{
    if ($num % 2 == 0) {
        echo " number ($num) is even. Stopping the function.\n";
        return;
    }

    for ($i = 1; $i <= $num; $i += 2) {
        echo $i;
    }

    printh();
    echo "-------------------------------------";
    fullname("Moustafa","Sayed");
    echo "-------------------------------------";
    numbers(1,2,5,6);
    echo "-------------------------------------";
    defaulparam();
    echo "-------------------------------------";
    param("Moustafa",25,"Beirut");
    echo "-------------------------------------";
    multipication(10,15);
    echo "-------------------------------------";
    printoddnumber(5);
    echo "-------------------------------------";
    printoddnumber(6);
}

?>