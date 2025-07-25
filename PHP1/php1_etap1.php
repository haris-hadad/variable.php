<?php

define('VICTORY_POINTS', 3);
define('DRAW_POINTS', 1);

$teams = [
    "OM" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "OGC" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "OL" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "LOSC" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "TFC" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "PSG" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0]
];

function playMatch($team1, $team2) {
    return [
        'team1_score' => rand(0, 5),
        'team2_score' => rand(0, 5)
    ];
}

function updateStats(&$teams, $team1, $team2, $score1, $score2) {
    $teams[$team1]['matches_played']++;
    $teams[$team2]['matches_played']++;

    if ($score1 > $score2) {
        $teams[$team1]['victories']++;
        $teams[$team2]['defeats']++;
        $teams[$team1]['points'] += VICTORY_POINTS;
    } elseif ($score2 > $score1) {
        $teams[$team2]['victories']++;
        $teams[$team1]['defeats']++;
        $teams[$team2]['points'] += VICTORY_POINTS;
    } else {
        $teams[$team1]['draws']++;
        $teams[$team2]['draws']++;
        $teams[$team1]['points'] += DRAW_POINTS;
        $teams[$team2]['points'] += DRAW_POINTS;
    }
}

function printMatchResult($team1, $team2, $score1, $score2) {
    echo "⚽ <strong>$team1 $score1 - $score2 $team2</strong><br>";
}

$teamNames = array_keys($teams);
for ($i = 0; $i < count($teamNames); $i++) {
    for ($j = $i + 1; $j < count($teamNames); $j++) {
        $team1 = $teamNames[$i];
        $team2 = $teamNames[$j];

        $result = playMatch($team1, $team2);
        updateStats($teams, $team1, $team2, $result['team1_score'], $result['team2_score']);
        printMatchResult($team1, $team2, $result['team1_score'], $result['team2_score']);
    }
}

uasort($teams, function($a, $b) {
    return $b['points'] <=> $a['points'];
});

echo "<h2>🏆 Classement final</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; font-family: Arial;'>";
echo "<tr style='background-color: #f2f2f2;'>
        <th>Rang</th>
        <th>Équipe</th>
        <th>Points</th>
        <th>Victoires</th>
        <th>Nuls</th>
        <th>Défaites</th>
        <th>Matchs joués</th>
    </tr>";

$rank = 1;
foreach ($teams as $teamName => $data) {
    echo "<tr>
        <td>$rank</td>
        <td>$teamName</td>
        <td>{$data['points']}</td>
        <td>{$data['victories']}</td>
        <td>{$data['draws']}</td>
        <td>{$data['defeats']}</td>
        <td>{$data['matches_played']}</td>
    </tr>";
    $rank++;
}

echo "</table>";
?>
