<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231206154153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gites ADD région VARCHAR(255) NOT NULL, ADD département VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, DROP localisation, DROP equipements');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gites ADD localisation LONGTEXT NOT NULL, ADD equipements LONGTEXT NOT NULL, DROP région, DROP département, DROP ville');
    }
}
