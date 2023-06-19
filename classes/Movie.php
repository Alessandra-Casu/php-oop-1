<?php
class Movie {
    //variabili d'istanza   
    public string $title;   
    public string $director;
    
    //variabili di classe (statiche)
    public static int $counter = 0;

    //costruttore
    public function __construct( string $titolo, string $regista)
    {
        $this->title = $titolo;
        $this->director = $regista;

        self::$counter += 1;
        
    }

    // metodi d'istanza
	public function getFullName($terminazione = '.')
	{
		return $this->title . ', ' . $this->director . $terminazione;
	}
}