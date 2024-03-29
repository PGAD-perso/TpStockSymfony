<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200914131608 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E66146F3EA3 ON article (ref)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4B365660EA750E8 ON stock (label)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_23A0E66146F3EA3 ON article');
        $this->addSql('DROP INDEX UNIQ_4B365660EA750E8 ON stock');
    }
}
