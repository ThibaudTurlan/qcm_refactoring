<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210711175419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE qcm_table CHANGE question_table_id_qestion question_table_id_qestion INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE author author VARBINARY(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_qcm CHANGE user_id_user user_id_user INT DEFAULT NULL, CHANGE reply1 reply1 VARBINARY(255) NOT NULL, CHANGE reply2 reply2 VARBINARY(255) NOT NULL, CHANGE reply3 reply3 VARBINARY(255) NOT NULL, CHANGE reply4 reply4 VARBINARY(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE qcm_table CHANGE question_table_id_qestion question_table_id_qestion INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE author author BINARY(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE user_qcm CHANGE user_id_user user_id_user INT NOT NULL, CHANGE reply1 reply1 BINARY(1) DEFAULT \'0\' NOT NULL, CHANGE reply2 reply2 BINARY(1) DEFAULT \'0\' NOT NULL, CHANGE reply3 reply3 BINARY(1) DEFAULT \'0\' NOT NULL, CHANGE reply4 reply4 BINARY(1) DEFAULT \'0\' NOT NULL');
    }
}
