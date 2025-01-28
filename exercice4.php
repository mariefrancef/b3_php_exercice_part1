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
    protected string $content){}

  

  public function getSummary($maxLength){
    if (strlen($this->content) > $maxLength) {
      $truncatedContent = substr_replace($this->content, '...', $maxLength);
    } else {
      $truncatedContent = $this->content;
    }
    echo $truncatedContent;
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

$article1 = new Article("title 1", "Lorem ipsum, blablabla description");
echo $article1->getSummary(5);