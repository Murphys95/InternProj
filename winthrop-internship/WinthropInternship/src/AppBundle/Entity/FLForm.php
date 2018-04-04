<?php

namespace AppBundle\Entity;

/**
 * FLForm
 */
class FLForm
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $studentFormOne;
    /**
     * @var bool
     *
     * @ORM\Column(name="completedTitleIX", type="boolean")
     */


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set studentFormOne
     *
     * @param boolean $studentFormOne
     *
     * @return FLForm
     */
    public function setStudentFormOne($studentFormOne)
    {
        $this->studentFormOne = $studentFormOne;

        return $this;
    }

    /**
     * Get studentFormOne
     *
     * @return bool
     */
    public function getStudentFormOne()
    {
        return $this->studentFormOne;
    }
}

