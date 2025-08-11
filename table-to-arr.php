        <table border="1">
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Ayush</td>
            <td>ayush@gmail.com</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Ayush</td>
            <td>ayush@gmail.com</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Ayush</td>
            <td>ayush@gmail.com</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Ayush</td>
            <td>ayush@gmail.com</td>
        </tr>
        </table>

<?php

$users=[
    [1,"anil","anil@test.com"],
    [2,"Ayush","Ayush@test.com"],
    [1,"anil","anil@test.com"],
    [2,"Ayush","Ayush@test.com"],
    [1,"anil","anil@test.com"],
    [2,"Ayush","Ayush@test.com"],
];


echo "<table border=1>";
for ($i=0;$i<count($users);$i++){
    echo "<tr>";
    for($j=0;$j<count($users[$i]);$j++){
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    };
    echo "</tr>";
};
echo "</table>";