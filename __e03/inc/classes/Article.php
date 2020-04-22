<?php

//!par convention, les nom des classes doivent commencer par une majuscule
//!par convention, les fichiers stockant le code source des classes, ont le même nom que les classes qu'ils définissent
//!attention à ne pas oublier la/les majuscules dans les noms de fichier

/*
*reverse engeenering de index.php
$prems->title = 'Ivre, il refait tous les challenges en un week-end sans dormir.';
$prems->content = 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.';
$prems->author = 'Alexandre';
$prems->date = '2017-07-13';
$prems->category = 'Ma Vie De Dev';
*/

class Article
{
    //!ces propriétés on été déduites en lisant le code source de "index.php"

    //!de façon arbitraire, nous donnes une valeur par défaut à nos propriétés, elles vaudront chaine vide par défaut
    public $title = '';
    public $content = '';
    public $author = '';

    //!la proriété $date est désormais privée.
    //!seules les méthodes de la classe Article auront accès à cette propriété
    private $date = '';

    private $category = '';

    /*
    dans index.php le code source nous indique quels sont les paramètre à passer au constructeur
    $deuz = new Article(
        'POO or not POO, that is the question.',    //title
        'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.', //content
        'Julie', //author
        '2017-07-04', //date
        'TeamBack' //category
    );
    */
    public function __construct($title = "", $content = "", $author = '', $date = null, $category = '')
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;


        //BONUS illustratif===================================
        //!si $date vaut null, alors nous donnons comme valeur par défaut à la propriété date, la date du jour
        if($date === null) {
            //!date au format année-mois-jour
            //?https://www.php.net/manual/fr/function.date.php
            $date = date('Y-m-d');  //?format dit "DATETIME"
        }
        //======================================================

        $this->date = $date;
        $this->category = $category;
    }


    //!getCategory est une méthode dite "getter", permet d'accéder (get) à une propriété
    //!de façon "conventionnelle" (donc pas obligatoire) on utilise la nomenclature get+nomDeLaPropriété
    public function getCategory()
    {
        return $this->category;
    }

    //!déclarons un "setter" pour pouvoir renseigner la catégorie d'un article
    public function setCategory($categoryName)
    {
        //!si la category est une chaine vide, alors nous n'acceptons pas cette catégorie
        if($categoryName === '') {
            exit('La catégorie est invalide !');
        }
        else {
            $this->category = $categoryName;
        }
    }


    //!setDate est appellé "un setter" (ça "set" une valeur)
    public function setDate($date)
    {
        //méthode naïve (et inutile)
        ////$this->date = $date;
        //!nous allons contrôler si la date est "valide"
        //!convertissons la date en timestamp
        $timestamp = strtotime($date);

        //!si le $timestamp vaut false ; alors nous considérons que la date est invalide
        if($timestamp === false) {
            echo "La date est invalide";
            exit();
        }
        else {//!la date est valide
            $this->date = $date;
        }
    }


    //!retournons la date au format "français"
    //@deprecated
    public function getDateFr()
    {
        //!on appelle la fonction "plus générique" en lui spécifiant que nous souhaitant avoir la date en français.
        return $this->getDate('fr');
    }


    //!créons une fonction getDate($lang)
    //!par défaut cette méthode renvoie la date au format anglais
    public function getDate($lang = 'en')
    {
        //!on converti la date de l'article en timestamp
        $timestamp = strtotime($this->date);

        if($lang === 'en') {
            //!on retourne la date au format anglais
            return date('Y-m-d', $timestamp);
        }
        else if($lang === 'fr') {
            //!on retourne la date au format français
            return date('d/m/Y', $timestamp);
        }

        /*il faudrait gérer les autres langues et également gérer si la langue demandée n'existe pas...*/
    }



}

