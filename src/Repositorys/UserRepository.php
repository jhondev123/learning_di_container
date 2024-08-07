<?php

namespace Jhonattan\LearningDiContainer\Repositorys;

use PDO;

class UserRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function searchUsers(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
