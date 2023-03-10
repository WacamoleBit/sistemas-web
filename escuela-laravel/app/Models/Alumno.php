<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public int $id;
    public string $firstname;
    public string $secondname;
    public int $age;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFirstName(string $firstname): void
    {
        $this->id = $firstname;
    }

    public function setSecondName(string $lastname): void
    {
        $this->id = $lastname;
    }

    public function setAge(int $age): void
    {
        $this->id = $age;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }

    public function getSecondName(): string
    {
        return $this->lastname;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
