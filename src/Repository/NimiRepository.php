<?php

namespace App\Repository;

use App\Entity\Nimi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Nimi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nimi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nimi[]    findAll()
 * @method Nimi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NimiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nimi::class);
    }

    // /**
    //  * @return Nimi[] Returns an array of Nimi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nimi
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
