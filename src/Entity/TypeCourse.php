<?php

namespace App\Entity;

use App\Repository\TypeCourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeCourseRepository::class)
 */
class TypeCourse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $nameFR;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbMinutes;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxCapacity;

    /**
     * @ORM\OneToMany(targetEntity=Course::class, mappedBy="typeCourse")
     */
    private $courses;

    public function __construct()
    {
        $this->courses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameFR(): ?string
    {
        return $this->nameFR;
    }

    public function setNameFR(string $nameFR): self
    {
        $this->nameFR = $nameFR;

        return $this;
    }

    public function getNbMinutes(): ?int
    {
        return $this->nbMinutes;
    }

    public function setNbMinutes(int $nbMinutes): self
    {
        $this->nbMinutes = $nbMinutes;

        return $this;
    }

    public function getMaxCapacity(): ?int
    {
        return $this->maxCapacity;
    }

    public function setMaxCapacity(int $maxCapacity): self
    {
        $this->maxCapacity = $maxCapacity;

        return $this;
    }

    /**
     * @return Collection|Course[]
     */
    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(Course $course): self
    {
        if (!$this->courses->contains($course)) {
            $this->courses[] = $course;
            $course->setTypeCourse($this);
        }

        return $this;
    }

    public function removeCourse(Course $course): self
    {
        if ($this->courses->contains($course)) {
            $this->courses->removeElement($course);
            // set the owning side to null (unless already changed)
            if ($course->getTypeCourse() === $this) {
                $course->setTypeCourse(null);
            }
        }

        return $this;
    }
}
