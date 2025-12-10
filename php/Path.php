<?php

class Path
{
    public $currentPath;

    public function __construct(string $path)
    {
        $this->currentPath = $path;
    }

    public function cd(string $newPath) : void
    {
        // 1. Si le nouveau chemin commence par '/', on repart de zéro (racine)
        if ($newPath[0] === '/') {
            $this->currentPath = $newPath;
            return;
        }

        // 2. Transformer le chemin actuel en tableau (pour le manipuler)
        // Astuce : utilisez explode()
        $parts = explode('/', $this->currentPath);

        // 3. Transformer le NOUVEAU chemin en tableau pour l'analyser
        $newParts = explode('/', $newPath);

        // 4. Bouclez sur $newParts. 
        // Si c'est '..', on retire le dernier élément de $parts.
        // Sinon, on l'ajoute.
        foreach ($newParts as $part) {
            if ($part === '..') {
                array_pop($parts);
            } else {
                $parts[] = $part;
            }
        }

        // 5. On recolle les morceaux avec implode
        $this->currentPath = implode('/', $parts);
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath; 
// Devrait afficher : /a/b/c/x