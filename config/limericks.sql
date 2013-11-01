    $limerick = <<<EOD
A conjecture both deep and profound 
Is whether the circle is round; 
In a paper by Erdo"s, 
written in Kurdish, 
A counterexample is found. 
EOD;
    $timestamp = time();
    $query = "INSERT INTO $tableName VALUES (DEFAULT, \"Deep Conjecture\", $limerick, \"anonymous\", 5, $timestamp)";
    mysqli_query($db_connect, $query);
       
    
    $limerick = <<<EOD
Integral z-squared dz 
from 1 to the cube root of 3 
times the cosine 
of three pi over 9 
equals log of the cube root of 'e'. 
EOD;
    $timestamp = time();
    $query = "INSERT INTO $tableName VALUES (DEFAULT, \"Integral z-squared\", $limerick, \"anonymous\", 5, $timestamp)";
    mysqli_query($db_connect, $query);
    
    
    $limerick = <<<EOD
If (1+x) (real close to 1) 
Is raised to the power of 1 
Over x, you will find 
Here's the value defined: 
2.718281...
EOD;
    $timestamp = time();
    $query = "INSERT INTO $tableName VALUES (DEFAULT, \"Close to One...\", $limerick, \"anonymous\", 4, $timestamp)";
    mysqli_query($db_connect, $query);
    
    
    $limerick = <<<EOD
'Tis a favorite project of mine 
A new value of pi to assign. 
I would fix it at 3 
For it's simpler, you see, 
Than 3 point 1 4 1 5 9 
EOD;
    $timestamp = time();
    $query = "INSERT INTO $tableName VALUES (DEFAULT, \"Favorite Project of Mine\", $limerick, \"anonymous\", 4, $timestamp)";
    mysqli_query($db_connect, $query);
    
    
    $limerick = <<<EOD
If inside a circle a line 
Hits the center and goes spine to spine 
And the line's length is "d" 
the circumference will be 
d times 3.14159
EOD;
    $timestamp = time();
    $query = "INSERT INTO $tableName VALUES (DEFAULT, \"Hitting the Center of a Circle\", $limerick, \"anonymous\", 5, $timestamp)";
    mysqli_query($db_connect, $query);
