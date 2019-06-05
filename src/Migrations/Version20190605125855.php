<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190605125855 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE brand_logo_brand_color (brand_logo_id INT NOT NULL, brand_color_id INT NOT NULL, INDEX IDX_8D4422FB1EB4B131 (brand_logo_id), INDEX IDX_8D4422FBBDEA8CA4 (brand_color_id), PRIMARY KEY(brand_logo_id, brand_color_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brand_color (id INT AUTO_INCREMENT NOT NULL, hex VARCHAR(255) NOT NULL, red VARCHAR(255) DEFAULT NULL, green VARCHAR(255) DEFAULT NULL, blue VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE brand_logo_brand_color ADD CONSTRAINT FK_8D4422FB1EB4B131 FOREIGN KEY (brand_logo_id) REFERENCES brand_logo (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brand_logo_brand_color ADD CONSTRAINT FK_8D4422FBBDEA8CA4 FOREIGN KEY (brand_color_id) REFERENCES brand_color (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE brand_logo_brand_color DROP FOREIGN KEY FK_8D4422FBBDEA8CA4');
        $this->addSql('DROP TABLE brand_logo_brand_color');
        $this->addSql('DROP TABLE brand_color');
    }
}
