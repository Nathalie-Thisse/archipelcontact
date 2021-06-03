<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210603085604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE days (id INT AUTO_INCREMENT NOT NULL, tours_id INT DEFAULT NULL, title VARCHAR(500) DEFAULT NULL, description LONGTEXT DEFAULT NULL, hotel VARCHAR(255) DEFAULT NULL, photo VARCHAR(500) DEFAULT NULL, INDEX IDX_EBE4FC668B14082 (tours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tours (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, duration INT DEFAULT NULL, price INT DEFAULT NULL, islands LONGTEXT DEFAULT NULL, photo VARCHAR(500) DEFAULT NULL, map VARCHAR(500) DEFAULT NULL, included LONGTEXT DEFAULT NULL, not_included LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE days ADD CONSTRAINT FK_EBE4FC668B14082 FOREIGN KEY (tours_id) REFERENCES tours (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days DROP FOREIGN KEY FK_EBE4FC668B14082');
        $this->addSql('DROP TABLE days');
        $this->addSql('DROP TABLE tours');
    }
}
