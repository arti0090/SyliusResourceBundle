<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

#[ORM\Entity]
#[ORM\MappedSuperclass]
#[ORM\Table(name: 'app_blog_post')]
class BlogPost implements ResourceInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private array $currentPlace = ['draft' => 1];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurrentPlace(): array
    {
        return $this->currentPlace;
    }

    public function setCurrentPlace(array $currentPlace)
    {
        $this->currentPlace = $currentPlace;
    }
}
