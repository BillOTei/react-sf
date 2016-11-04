<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 */
class UserRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function getAllOrderedByLastname()
    {
        return $this->_em->createQuery("SELECT p FROM AppBundle\Entity\User p ORDER BY p.lastname ASC")->getResult();
    }

    /**
     * Unit method
     * @param User $u
     */
    public function save(User $u)
    {
        $this->_em->persist($u);
        $this->_em->flush();
    }
}
