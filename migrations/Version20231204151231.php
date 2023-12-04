<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231204151231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animaux (id INT AUTO_INCREMENT NOT NULL, gite_id INT DEFAULT NULL, accepte_animaux TINYINT(1) NOT NULL, tarif_animaux DOUBLE PRECISION NOT NULL, INDEX IDX_9ABE194D652CAE9B (gite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacts (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, horaires_disponibilite LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipements (id INT AUTO_INCREMENT NOT NULL, gite_id INT DEFAULT NULL, lavelinge TINYINT(1) NOT NULL, climatisation TINYINT(1) NOT NULL, television TINYINT(1) NOT NULL, terrasse TINYINT(1) NOT NULL, barbecue TINYINT(1) NOT NULL, pisicine_privee TINYINT(1) NOT NULL, piscine_partagee TINYINT(1) NOT NULL, tennis TINYINT(1) NOT NULL, ping_pong TINYINT(1) NOT NULL, INDEX IDX_3F02D86B652CAE9B (gite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gites (id INT AUTO_INCREMENT NOT NULL, proprietaire_id INT NOT NULL, contact_id INT NOT NULL, localisation LONGTEXT NOT NULL, surface_habitable DOUBLE PRECISION NOT NULL, nombre_chambres INT NOT NULL, nombres_couchages INT NOT NULL, equipements LONGTEXT NOT NULL, INDEX IDX_29609B2176C50E4A (proprietaire_id), INDEX IDX_29609B21E7A1254A (contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarifs (id INT AUTO_INCREMENT NOT NULL, gite_id INT DEFAULT NULL, periode_debut DATE NOT NULL, periode_fin DATE NOT NULL, tarif_hebdomadaire DOUBLE PRECISION NOT NULL, INDEX IDX_F9B8C496652CAE9B (gite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animaux ADD CONSTRAINT FK_9ABE194D652CAE9B FOREIGN KEY (gite_id) REFERENCES gites (id)');
        $this->addSql('ALTER TABLE equipements ADD CONSTRAINT FK_3F02D86B652CAE9B FOREIGN KEY (gite_id) REFERENCES gites (id)');
        $this->addSql('ALTER TABLE gites ADD CONSTRAINT FK_29609B2176C50E4A FOREIGN KEY (proprietaire_id) REFERENCES proprietaire (id)');
        $this->addSql('ALTER TABLE gites ADD CONSTRAINT FK_29609B21E7A1254A FOREIGN KEY (contact_id) REFERENCES contacts (id)');
        $this->addSql('ALTER TABLE tarifs ADD CONSTRAINT FK_F9B8C496652CAE9B FOREIGN KEY (gite_id) REFERENCES gites (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animaux DROP FOREIGN KEY FK_9ABE194D652CAE9B');
        $this->addSql('ALTER TABLE equipements DROP FOREIGN KEY FK_3F02D86B652CAE9B');
        $this->addSql('ALTER TABLE gites DROP FOREIGN KEY FK_29609B2176C50E4A');
        $this->addSql('ALTER TABLE gites DROP FOREIGN KEY FK_29609B21E7A1254A');
        $this->addSql('ALTER TABLE tarifs DROP FOREIGN KEY FK_F9B8C496652CAE9B');
        $this->addSql('DROP TABLE animaux');
        $this->addSql('DROP TABLE contacts');
        $this->addSql('DROP TABLE equipements');
        $this->addSql('DROP TABLE gites');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE tarifs');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
