<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourseRepository::class)
 */
class Course
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TypeCourse::class, inversedBy="courses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeCourse;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="instructorCourses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $instructor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDateTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCourse(): ?TypeCourse
    {
        return $this->typeCourse;
    }

    public function setTypeCourse(?TypeCourse $typeCourse): self
    {
        $this->typeCourse = $typeCourse;

        return $this;
    }

    public function getInstructor(): ?User
    {
        return $this->instructor;
    }

    public function setInstructor(?User $instructor): self
    {
        $this->instructor = $instructor;

        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }
}
