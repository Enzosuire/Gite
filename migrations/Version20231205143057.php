<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205143057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE services ADD gite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169652CAE9B FOREIGN KEY (gite_id) REFERENCES gites (id)');
        $this->addSql('CREATE INDEX IDX_7332E169652CAE9B ON services (gite_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE services DROP FOREIGN KEY FK_7332E169652CAE9B');
        $this->addSql('DROP INDEX IDX_7332E169652CAE9B ON services');
        $this->addSql('ALTER TABLE services DROP gite_id');
    }
}
