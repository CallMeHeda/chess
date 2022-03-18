<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220318091201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tuser CHANGE elo elo INT DEFAULT 0');
        $this->addSql('ALTER TABLE tournoi CHANGE is_classed is_classed TINYINT(1) DEFAULT 0 NOT NULL, CHANGE elo_min elo_min INT DEFAULT 0, CHANGE elo_max elo_max INT DEFAULT 0, CHANGE nb_ronde nb_ronde INT DEFAULT 0, CHANGE nb_min_joueurs nb_min_joueurs INT DEFAULT 2, CHANGE nb_max_joueurs nb_max_joueurs INT DEFAULT 2');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournoi CHANGE is_classed is_classed TINYINT(1) NOT NULL, CHANGE elo_min elo_min INT DEFAULT NULL, CHANGE elo_max elo_max INT DEFAULT NULL, CHANGE nb_ronde nb_ronde INT DEFAULT NULL, CHANGE nb_min_joueurs nb_min_joueurs INT DEFAULT NULL, CHANGE nb_max_joueurs nb_max_joueurs INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `TUser` CHANGE elo elo INT DEFAULT NULL');
    }
}
