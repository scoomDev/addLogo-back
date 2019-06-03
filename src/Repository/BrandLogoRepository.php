<?php

namespace App\Repository;

use App\Entity\BrandLogo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BrandLogo|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrandLogo|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrandLogo[]    findAll()
 * @method BrandLogo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandLogoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BrandLogo::class);
    }

    // /**
    //  * @return BrandLogo[] Returns an array of BrandLogo objects
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
    public function findOneBySomeField($value): ?BrandLogo
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
