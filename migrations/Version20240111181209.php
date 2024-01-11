<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240111181209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO admin (id, username, roles, password) VALUES (nextval('admin_id_seq'), 'admin', '[\"ROLE_ADMIN\"]', '\$2y\$13\$TRRZ9l0NkSPAicGEsB7gzue5AUKWPSil70p9tfqjSgSyndxAO5PLm')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
    }
}
