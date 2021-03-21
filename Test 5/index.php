<?php
$host = "host";
$username = "user";
$password = "pass";
$dbname = "name";
$link = mysqli_connect($host, $username, $password, $dbname);
/*Пункт 1*/
$query1 ="SELECT persons.fullname, 100 + IFNULL(SUM(transactions.amount*(IF(persons.id = transactions.from_person_id, -1, 1))), 0) AS current_balans FROM persons LEFT JOIN transactions ON persons.id = transactions.from_person_id OR persons.id = transactions.to_person_id GROUP BY persons.fullname";
$db_result1 = mysqli_query($link, $query1);

/*Пункт 2*/
$query2 ="SELECT fullname FROM persons WHERE id = (SELECT all_id FROM (SELECT from_person_id AS all_id FROM transactions UNION ALL SELECT to_person_id AS all_id FROM transactions) union_table GROUP BY all_id ORDER BY COUNT(all_id) DESC LIMIT 1)";
$db_result2 = mysqli_query($link, $query2);

/*Пункт 3*/
$query3 ="SELECT * FROM transactions AS trans WHERE (SELECT city_id FROM persons WHERE trans.from_person_id = persons.id) = (SELECT city_id FROM persons WHERE trans.to_person_id = persons.id)";
$db_result3 = mysqli_query($link, $query3);