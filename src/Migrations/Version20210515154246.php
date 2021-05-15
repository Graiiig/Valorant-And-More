<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210515154246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE announces_players (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(150) DEFAULT NULL, date DATETIME DEFAULT NULL, agentplayed VARCHAR(150) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, level VARCHAR(100) DEFAULT NULL, status VARCHAR(100) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, french VARCHAR(255) DEFAULT NULL, english VARCHAR(255) DEFAULT NULL, spanish VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) NOT NULL, premium_status VARCHAR(255) NOT NULL, online VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages (id INT AUTO_INCREMENT NOT NULL, sender VARCHAR(255) NOT NULL, receiver VARCHAR(255) NOT NULL, msg LONGTEXT NOT NULL, readbyreceiver VARCHAR(255) NOT NULL, notified VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teams (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, title VARCHAR(100) DEFAULT NULL, creator VARCHAR(100) DEFAULT NULL, date DATETIME DEFAULT NULL, dateposted DATETIME DEFAULT NULL, availableslots VARCHAR(255) DEFAULT NULL, requirements VARCHAR(255) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, mediumlevel VARCHAR(50) DEFAULT NULL, premium_status VARCHAR(50) DEFAULT NULL, status VARCHAR(50) DEFAULT NULL, member1 VARCHAR(255) DEFAULT NULL, member2 VARCHAR(255) DEFAULT NULL, member3 VARCHAR(255) DEFAULT NULL, member4 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, email VARCHAR(255) NOT NULL, agent VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, level VARCHAR(150) NOT NULL, date_sign_in DATETIME NOT NULL, description VARCHAR(200) NOT NULL, languages VARCHAR(150) DEFAULT NULL, friendask VARCHAR(255) DEFAULT NULL, friendsend VARCHAR(255) DEFAULT NULL, teams VARCHAR(255) DEFAULT NULL, online VARCHAR(255) DEFAULT NULL, announce_status VARCHAR(255) NOT NULL, premium VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE friends (user_id INT NOT NULL, friend_user_id INT NOT NULL, INDEX IDX_21EE7069A76ED395 (user_id), INDEX IDX_21EE706993D1119E (friend_user_id), PRIMARY KEY(user_id, friend_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_provider (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7249979CF85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE friends ADD CONSTRAINT FK_21EE7069A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE friends ADD CONSTRAINT FK_21EE706993D1119E FOREIGN KEY (friend_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE friends DROP FOREIGN KEY FK_21EE7069A76ED395');
        $this->addSql('ALTER TABLE friends DROP FOREIGN KEY FK_21EE706993D1119E');
        $this->addSql('DROP TABLE announces_players');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE teams');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE friends');
        $this->addSql('DROP TABLE user_provider');
    }
}
