<?php

class LeagueTable
{
    private array $standings;
    
    public function __construct(array $players)
    {
        foreach ($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0
            ];
        }
    }

    public function recordResult(string $player, int $score): void
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

    public function playerRank(int $rank): string
    {
        $playerName = "";
        $rankIndex = $rank - 1;

        if ($rankIndex >= 0 && $rankIndex < count($this->standings)) {
            $ranking = $this->standings;
    
            // Sort by score descending
            uasort($ranking, function($p1, $p2) {
                return $p2['score'] <=> $p1['score'];
            });

            // Sort by games played
            uasort($ranking, function($p1, $p2) {
                if ($p1['score'] === $p2['score']) {
                    return $p1['games_played'] <=> $p2['games_played'];
                }
                return 0;
            });
         
            $playerName = array_keys($ranking)[$rankIndex];
        }

        return $playerName;
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);