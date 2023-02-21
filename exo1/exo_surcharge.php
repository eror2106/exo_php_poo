<?php

/*
 * This file is part of the OpenClassRoom PHP Object Course.
 *
 * (c) Grégoire Hébert <contact@gheb.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

//use Player as GlobalPlayer;

class Lobby
{
  //** @var array<QueuingPlayer> */
  public array $queuingPlayers = [];

  public function findOponents(QueuingPlayer $player)
  {
    $minLevel = round($player->getRatio() / 100);
    $maxLevel = $minLevel + $player->getRange();
  }

  public function addPlayer(Player $player): void
  {
    var_dump($player);
    $this->queuingPlayers[] = new QueuingPlayer($player);
  }

  public function addPlayers(Player ...$players): void
  {
    foreach ($players as $player) {
      $this->addPlayer($player);
    }
  }
}

class Player
{
  public function __construct(protected string $name, protected float $ratio = 400.0)
  {
  }

  public function getName(): string
  {
    return $this->name;
  }

  private function probabilityAgainst(self $player): float
  {
    return 1 / (1 + (10 ** (($player->getRatio() - $this->getRatio()) / 400)));
  }

  public function updateRatioAgainst(self $player, int $result): void
  {
    $this->ratio += 32 * ($result - $this->probabilityAgainst($player));
  }

  public function getRatio(): float
  {
    return $this->ratio;
  }
}
class QueuingPlayer extends Player
{
  public function __construct(Player $player, protected int $range = 1)
  {
    parent::__construct($player->getName(), $player->getRatio());
  }
  public function getName(): string
  {
    return $this->name . "2";
  }

  public function getRange(): int
  {
    return $this->range;
  }

  public function upgradeRange(): void
  {
    $this->range = min($this->range + 1, 40);
  }
}

class Player2 extends Player
{
  public function __construct(protected string $name, protected float $ratio = 400.0)
  {
    parent::__construct($name, $ratio);
  }
  public function getName(): string
  {
    return $this->name . "2";
  }
}


$greg = new Player('greg', 400);
$jade = new Player2('jade', 476);
var_dump($jade->getName());
$lobby = new Lobby();
$lobby->addPlayers($greg, $jade);

var_dump($lobby->findOponents($lobby->queuingPlayers[0]));

exit(0);
