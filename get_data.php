<?php
include 'database.php';

$query = mysqli_query($base, <<<QUERY
    SELECT
        names_teams.content as full_name,
        teams.name as name,
        teams.link as link,
        teams.group_ch as group_ch,
        teams.group_pos as group_pos
    FROM
        names_teams
    INNER JOIN 
        teams ON teams.name = names_teams.team_id
    INNER JOIN 
        lang ON lang.id = names_teams.lang_id
    WHERE
        lang.name = "polish";
QUERY);

$teams = array();
while($row = mysqli_fetch_assoc($query)) {

    $full_name = $row['full_name'];
    $name = $row['name'];
    $link = $row['link'];

    $group_ch = $row['group_ch'];
    $group_pos = $row['group_pos'];

    $teams_object = [
        'fullName' => $full_name,
        'name' => $name,
        'link' => $link,

        'group_ch' => $group_ch,
        'group_pos' => $group_pos,
    ];
    $teams[$name] = $teams_object;
}

echo json_encode($teams);

?>