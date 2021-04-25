<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210425022032 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agence (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(300) NOT NULL, tel_agence VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE voiture (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, agence_id INTEGER DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, marque VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, carburant VARCHAR(255) NOT NULL, nbr_place INTEGER NOT NULL, description VARCHAR(600) NOT NULL, disponibilite BOOLEAN NOT NULL, date_mise_en_circulation DATE NOT NULL)');
        $this->addSql('CREATE INDEX IDX_E9E2810FD725330D ON voiture (agence_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE agence');
        $this->addSql('DROP TABLE voiture');
    }
}
