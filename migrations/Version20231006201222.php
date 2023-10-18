<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231006201222 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD created_at DATETIME  NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD update_at DATETIME  NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE user ADD created_at DATETIME  NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD avatar VARCHAR(255)  NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP created_at, DROP update_at');
        $this->addSql('ALTER TABLE user DROP created_at, DROP avatar');
    }
}
