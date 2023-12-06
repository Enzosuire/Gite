<?php

namespace App\Repository;

use App\Entity\Gites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gites>
 *
 * @method Gites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gites[]    findAll()
 * @method Gites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gites::class);
    }

    public function searchByEquipements($criteria)
    {
        $queryBuilder = $this->createQueryBuilder('g')
            ->leftJoin('g.equipement', 'e')
            ->leftJoin('g.services', 's'); // Assurez-vous que la relation est nommée 'equipements' dans l'entité Gites
    // setParameter Cela est utile pour éviter les problèmes d'injection SQL
        if ($criteria['lavelinge']) {
            $queryBuilder->andWhere('e.lavelinge = :lavelinge')
                    ->setParameter('lavelinge', true);
        }
        if (!empty($criteria['lavevaiselle'])) {
            $queryBuilder->andWhere('e.lavevaiselle = :lavevaiselle')
                         ->setParameter('lavevaiselle', true);
        }
        if ($criteria['climatisation']) {
            $queryBuilder->andWhere('e.climatisation = :climatisation')
                     ->setParameter('climatisation', true);
        }
        if (!empty($criteria['television'])) {
            $queryBuilder->andWhere('e.television = :television')
                         ->setParameter('television', true);
        }
        if (!empty($criteria['terrasse'])) {
            $queryBuilder->andWhere('e.terrasse = :terrasse')
                         ->setParameter('terrasse', true);
        }
        if (!empty($criteria['barbecue'])) {
            $queryBuilder->andWhere('e.barbecue = :barbecue')
                         ->setParameter('barbecue', true);
        }
        if (!empty($criteria['piscinePrivee'])) {
            $queryBuilder->andWhere('e.piscinePrivee = :piscinePrivee')
                         ->setParameter('piscinePrivee', true);
        }
        if (!empty($criteria['piscinePartagee'])) {
            $queryBuilder->andWhere('e.piscinePartagee = :piscinePartagee')
                         ->setParameter('piscinePartagee', true);
        }
        if (!empty($criteria['tennis'])) {
            $queryBuilder->andWhere('e.tennis = :tennis')
                         ->setParameter('tennis', true);
        }
        if (!empty($criteria['pingPong'])) {
            $queryBuilder->andWhere('e.pingPong = :pingPong')
                         ->setParameter('pingPong', true);
        }

        if (!empty($criteria['locationLinge'])) {
            $queryBuilder->andWhere('s.locationLinge = :locationLinge')
                         ->setParameter('locationLinge', true);
        }
        if (!empty($criteria['menageFinSejour'])) {
            $queryBuilder->andWhere('s.menageFinSejour = :menageFinSejour')
                         ->setParameter('menageFinSejour', true);
        }
        if (!empty($criteria['accesInternet'])) {
            $queryBuilder->andWhere('s.accesInternet = :accesInternet')
                         ->setParameter('accesInternet', true);
        }


        // if (!empty($criteria['motCle'])) {
        //     $queryBuilder->andWhere('g.nom LIKE :motCle OR g.description LIKE :motCle')
        //                  ->setParameter('motCle', '%' . $criteria['motCle'] . '%');
        // }
       

    
        return $queryBuilder->getQuery()->getResult();
    }
 
    

}


//    /**
//     * @return Gites[] Returns an array of Gites objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gites
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
// }
