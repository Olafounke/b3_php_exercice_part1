<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

 class Article{
    public function __construct(
        protected string $title,
        protected string $content
    )
    {
        
    }

    public function getSummary(int $maxLength): int|string
    {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . "…";
        }
        return $this->content;
    }


        /**
         * Get the value of title
         */
        public function getTitle(): string
        {
                return $this->title;
        }

        /**
         * Set the value of title
         */
        public function setTitle(string $title): self
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of content
         */
        public function getContent(): string
        {
                return $this->content;
        }

        /**
         * Set the value of content
         */
        public function setContent(string $content): self
        {
                $this->content = $content;

                return $this;
        }
 }

 

$article1 = new Article(
    "Test php",
    "Je teste mon code PHP pour afficher les premiers maxlength. On verra bien!"
);

echo "Titre : " . $article1->getTitle().". ";
echo "Résumé : " . $article1->getSummary(50);
