<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151207130509 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categorys (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE current_finish (id INT AUTO_INCREMENT NOT NULL, codFinist INT NOT NULL, name VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finish (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `group` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(200) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mueble (id INT AUTO_INCREMENT NOT NULL, style_id INT DEFAULT NULL, type_id INT DEFAULT NULL, group_id INT DEFAULT NULL, category_id INT DEFAULT NULL, character_id INT DEFAULT NULL, cod_ur VARCHAR(40) NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION DEFAULT NULL, width DOUBLE PRECISION DEFAULT NULL, height DOUBLE PRECISION DEFAULT NULL, deep DOUBLE PRECISION DEFAULT NULL, diameter DOUBLE PRECISION DEFAULT NULL, currentFinish_id INT DEFAULT NULL, INDEX IDX_87A17B9BBACD6074 (style_id), INDEX IDX_87A17B9BC54C8C93 (type_id), INDEX IDX_87A17B9BFE54D947 (group_id), INDEX IDX_87A17B9B12469DE2 (category_id), INDEX IDX_87A17B9B1136BE75 (character_id), INDEX IDX_87A17B9B1A0FDA02 (currentFinish_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE muebles_finishs (muebles_id INT NOT NULL, finish_id INT NOT NULL, INDEX IDX_6D9CE68337EBB673 (muebles_id), INDEX IDX_6D9CE6832B4667EB (finish_id), PRIMARY KEY(muebles_id, finish_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE style (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mueble ADD CONSTRAINT FK_87A17B9BBACD6074 FOREIGN KEY (style_id) REFERENCES style (id)');
        $this->addSql('ALTER TABLE mueble ADD CONSTRAINT FK_87A17B9BC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE mueble ADD CONSTRAINT FK_87A17B9BFE54D947 FOREIGN KEY (group_id) REFERENCES `group` (id)');
        $this->addSql('ALTER TABLE mueble ADD CONSTRAINT FK_87A17B9B12469DE2 FOREIGN KEY (category_id) REFERENCES categorys (id)');
        $this->addSql('ALTER TABLE mueble ADD CONSTRAINT FK_87A17B9B1136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id)');
        $this->addSql('ALTER TABLE mueble ADD CONSTRAINT FK_87A17B9B1A0FDA02 FOREIGN KEY (currentFinish_id) REFERENCES current_finish (id)');
        $this->addSql('ALTER TABLE muebles_finishs ADD CONSTRAINT FK_6D9CE68337EBB673 FOREIGN KEY (muebles_id) REFERENCES mueble (id)');
        $this->addSql('ALTER TABLE muebles_finishs ADD CONSTRAINT FK_6D9CE6832B4667EB FOREIGN KEY (finish_id) REFERENCES finish (id)');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE post');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mueble DROP FOREIGN KEY FK_87A17B9B12469DE2');
        $this->addSql('ALTER TABLE mueble DROP FOREIGN KEY FK_87A17B9B1136BE75');
        $this->addSql('ALTER TABLE mueble DROP FOREIGN KEY FK_87A17B9B1A0FDA02');
        $this->addSql('ALTER TABLE muebles_finishs DROP FOREIGN KEY FK_6D9CE6832B4667EB');
        $this->addSql('ALTER TABLE mueble DROP FOREIGN KEY FK_87A17B9BFE54D947');
        $this->addSql('ALTER TABLE muebles_finishs DROP FOREIGN KEY FK_6D9CE68337EBB673');
        $this->addSql('ALTER TABLE mueble DROP FOREIGN KEY FK_87A17B9BBACD6074');
        $this->addSql('ALTER TABLE mueble DROP FOREIGN KEY FK_87A17B9BC54C8C93');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, item VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, body VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, date VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE categorys');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE current_finish');
        $this->addSql('DROP TABLE finish');
        $this->addSql('DROP TABLE `group`');
        $this->addSql('DROP TABLE mueble');
        $this->addSql('DROP TABLE muebles_finishs');
        $this->addSql('DROP TABLE style');
        $this->addSql('DROP TABLE type');
    }
}
