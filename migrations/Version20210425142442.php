<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210425142442 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_E9E2810FD725330D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__voiture AS SELECT id, agence_id, matricule, marque, couleur, carburant, nbr_place, description, disponibilite, date_mise_en_circulation FROM voiture');
        $this->addSql('DROP TABLE voiture');
        $this->addSql('CREATE TABLE voiture (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, agence_id INTEGER NOT NULL, matricule VARCHAR(255) DEFAULT NULL COLLATE BINARY, marque VARCHAR(255) NOT NULL COLLATE BINARY, couleur VARCHAR(255) NOT NULL COLLATE BINARY, carburant VARCHAR(255) NOT NULL COLLATE BINARY, nbr_place INTEGER NOT NULL, description VARCHAR(600) NOT NULL COLLATE BINARY, disponibilite BOOLEAN NOT NULL, date_mise_en_circulation DATE NOT NULL, CONSTRAINT FK_E9E2810FD725330D FOREIGN KEY (agence_id) REFERENCES agence (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO voiture (id, agence_id, matricule, marque, couleur, carburant, nbr_place, description, disponibilite, date_mise_en_circulation) SELECT id, agence_id, matricule, marque, couleur, carburant, nbr_place, description, disponibilite, date_mise_en_circulation FROM __temp__voiture');
        $this->addSql('DROP TABLE __temp__voiture');
        $this->addSql('CREATE INDEX IDX_E9E2810FD725330D ON voiture (agence_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_E9E2810FD725330D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__voiture AS SELECT id, agence_id, matricule, marque, couleur, carburant, nbr_place, description, disponibilite, date_mise_en_circulation FROM voiture');
        $this->addSql('DROP TABLE voiture');
        $this->addSql('CREATE TABLE voiture (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matricule VARCHAR(255) DEFAULT NULL, marque VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, carburant VARCHAR(255) NOT NULL, nbr_place INTEGER NOT NULL, description VARCHAR(600) NOT NULL, disponibilite BOOLEAN NOT NULL, date_mise_en_circulation DATE NOT NULL, agence_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO voiture (id, agence_id, matricule, marque, couleur, carburant, nbr_place, description, disponibilite, date_mise_en_circulation) SELECT id, agence_id, matricule, marque, couleur, carburant, nbr_place, description, disponibilite, date_mise_en_circulation FROM __temp__voiture');
        $this->addSql('DROP TABLE __temp__voiture');
        $this->addSql('CREATE INDEX IDX_E9E2810FD725330D ON voiture (agence_id)');
    }
}
