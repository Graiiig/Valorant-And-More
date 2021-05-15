<?php

namespace App\Repository;

use App\Entity\Teamsd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Teamsd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teamsd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teamsd[]    findAll()
 * @method Teamsd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamsdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teamsd::class);
    }

    // /**
    //  * @return Teamsd[] Returns an array of Teamsd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Teamsd
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
