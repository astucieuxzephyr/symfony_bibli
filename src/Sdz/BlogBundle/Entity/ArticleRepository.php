<?php
// src/Sdz/BlogBundle/Entity/ArticleRepository

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{

    /* ===================== code Tanguy */
    

/*
 * @name myFindAll
 * @desc fonction qui effectue la même chose que la fonction findAll() que l'on peut utiliser dans les classes de repositories. (cf p223-224)
 * Pour utiliser cette méthode dans le controleur Article il faudra faire
 * $listeArticles = $this->getDoctrine()->getManager()->getRepository('SdzBlogBundle:Article')->myFindAll();
*/
    public function myFindAll()
    {

        // 1 - construction de la requete
        // Pour rappel, l'alias "a" donné en argument est le raccourci que l'on a attribué à l'entité du repository
        // Ici on utilise donc "a" pour article
        $queryBuilder = $this->createQueryBuilder('a');
        // 2 - recuperation de la requête qui a été fabriquée par le queryBuilder
        $query = $queryBuilder->getQuery();
        // 3 - récuperation des résultats (un tableau d'entités)
        $resultats = $query->getResults();
        // 4 - on renvoie les résultats
        return($resultats);
    }




        /* ===================== FIN code Tanguy */
}
