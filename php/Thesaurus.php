<?php

class Thesaurus
{
    private $thesaurus;

    public function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word): string
    {
        $tbl = [
            "word" => $word,
            "synonyms" => []
        ];

        if (isset($this->thesaurus[$word])) {
            $tbl['synonyms'] = $this->thesaurus[$word];
        }

        $json = json_encode($tbl);

        return $json;
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]
);

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");