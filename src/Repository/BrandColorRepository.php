<?php

namespace App\Repository;

use App\Entity\BrandColor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BrandColor|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrandColor|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrandColor[]    findAll()
 * @method BrandColor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandColorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BrandColor::class);
    }

    // /**
    //  * @return BrandColor[] Returns an array of BrandColor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BrandColor
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
