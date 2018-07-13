<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180713134921 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        foreach ($this->getPokemon() as $pokemon) {
            $this->addSql('
            INSERT INTO pokemon (name, height, weight, type, ability) 
            VALUES (
            "' . $pokemon['name'] . '", 
            "' . $pokemon['height'] .'", 
            "' . $pokemon['weight'] .'",
            "' . $pokemon['type'][0] . '",
            "' . $pokemon['abilities'][0] . '"
            
            )');
        }

    }

    public function down(Schema $schema) : void
    {
        // Foreign key: https://stackoverflow.com/questions/5452760/how-to-truncate-a-foreign-key-constrained-table/8074510#8074510
        $this->addSql('SET FOREIGN_KEY_CHECKS = 0');
        $this->addSql('TRUNCATE TABLE pokemon');
        $this->addSql('SET FOREIGN_KEY_CHECKS = 1');

    }

    private function getPokemon(): array
    {
        return [
        1 =>
            array (
                'name' => 'Bulbizarre',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 6.9,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        2 =>
            array (
                'name' => 'Herbizarre',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 13.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        3 =>
            array (
                'name' => 'Florizarre',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 100.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        4 =>
            array (
                'name' => 'Salamèche',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 8.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        5 =>
            array (
                'name' => 'Reptincel',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 19.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        6 =>
            array (
                'name' => 'Dracaufeu',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'flying',
                    ),
                'weight' => 90.5,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        7 =>
            array (
                'name' => 'Carapuce',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 9.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        8 =>
            array (
                'name' => 'Carabaffe',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 22.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        9 =>
            array (
                'name' => 'Tortank',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 85.5,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        10 =>
            array (
                'name' => 'Chenipan',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 2.9,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                    ),
            ),
        11 =>
            array (
                'name' => 'Chrysacier',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 9.9,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        12 =>
            array (
                'name' => 'Papilusion',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 32.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Œil Composé',
                    ),
            ),
        13 =>
            array (
                'name' => 'Aspicot',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 3.2,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                    ),
            ),
        14 =>
            array (
                'name' => 'Coconfort',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 10.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        15 =>
            array (
                'name' => 'Dardargnan',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 29.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                    ),
            ),
        16 =>
            array (
                'name' => 'Roucool',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 1.8,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Pieds Confus',
                        1 => 'Regard Vif',
                    ),
            ),
        17 =>
            array (
                'name' => 'Roucoups',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 30.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Pieds Confus',
                        1 => 'Regard Vif',
                    ),
            ),
        18 =>
            array (
                'name' => 'Roucarnage',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 39.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Pieds Confus',
                        1 => 'Regard Vif',
                    ),
            ),
        19 =>
            array (
                'name' => 'Rattata',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 3.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Fuite',
                    ),
            ),
        20 =>
            array (
                'name' => 'Rattatac',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 18.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Fuite',
                    ),
            ),
        21 =>
            array (
                'name' => 'Piafabec',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 2.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                    ),
            ),
        22 =>
            array (
                'name' => 'Rapasdepic',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 38.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                    ),
            ),
        23 =>
            array (
                'name' => 'Abo',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 6.9,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Mue',
                    ),
            ),
        24 =>
            array (
                'name' => 'Arbok',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 65.0,
                'height' => 3.5,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Mue',
                    ),
            ),
        25 =>
            array (
                'name' => 'Pikachu',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 6.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        26 =>
            array (
                'name' => 'Raichu',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 30.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        27 =>
            array (
                'name' => 'Sabelette',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 12.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        28 =>
            array (
                'name' => 'Sablaireau',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 29.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        29 =>
            array (
                'name' => 'Nidoran♀',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 7.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Rivalité',
                    ),
            ),
        30 =>
            array (
                'name' => 'Nidorina',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 20.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Rivalité',
                    ),
            ),
        31 =>
            array (
                'name' => 'Nidoqueen',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'ground',
                    ),
                'weight' => 60.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Rivalité',
                    ),
            ),
        32 =>
            array (
                'name' => 'Nidoran♂',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 9.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Rivalité',
                    ),
            ),
        33 =>
            array (
                'name' => 'Nidorino',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 19.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Rivalité',
                    ),
            ),
        34 =>
            array (
                'name' => 'Nidoking',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'ground',
                    ),
                'weight' => 62.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Rivalité',
                    ),
            ),
        35 =>
            array (
                'name' => 'Mélofée',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 7.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Garde Magik',
                        1 => 'Joli Sourire',
                    ),
            ),
        36 =>
            array (
                'name' => 'Mélodelfe',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 40.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Garde Magik',
                        1 => 'Joli Sourire',
                    ),
            ),
        37 =>
            array (
                'name' => 'Goupix',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 9.9,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Torche',
                    ),
            ),
        38 =>
            array (
                'name' => 'Feunard',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 19.9,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Torche',
                    ),
            ),
        39 =>
            array (
                'name' => 'Rondoudou',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'fairy',
                    ),
                'weight' => 5.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Joli Sourire',
                    ),
            ),
        40 =>
            array (
                'name' => 'Grodoudou',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'fairy',
                    ),
                'weight' => 12.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Joli Sourire',
                    ),
            ),
        41 =>
            array (
                'name' => 'Nosferapti',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'flying',
                    ),
                'weight' => 7.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Attention',
                    ),
            ),
        42 =>
            array (
                'name' => 'Nosferalto',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'flying',
                    ),
                'weight' => 55.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Attention',
                    ),
            ),
        43 =>
            array (
                'name' => 'Mystherbe',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 5.4,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        44 =>
            array (
                'name' => 'Ortide',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 8.6,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        45 =>
            array (
                'name' => 'Rafflesia',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 18.6,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        46 =>
            array (
                'name' => 'Paras',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'grass',
                    ),
                'weight' => 5.4,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Peau Sèche',
                        1 => 'Pose Spore',
                    ),
            ),
        47 =>
            array (
                'name' => 'Parasect',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'grass',
                    ),
                'weight' => 29.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Peau Sèche',
                        1 => 'Pose Spore',
                    ),
            ),
        48 =>
            array (
                'name' => 'Mimitoss',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 30.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Lentiteintée',
                        1 => 'Œil Composé',
                    ),
            ),
        49 =>
            array (
                'name' => 'Aéromite',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 12.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                        1 => 'Lentiteintée',
                    ),
            ),
        50 =>
            array (
                'name' => 'Taupiqueur',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 0.8,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Piège',
                        1 => 'Voile Sable',
                    ),
            ),
        51 =>
            array (
                'name' => 'Triopikeur',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 33.3,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Piège',
                        1 => 'Voile Sable',
                    ),
            ),
        52 =>
            array (
                'name' => 'Miaouss',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 4.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Ramassage',
                        1 => 'Technicien',
                    ),
            ),
        53 =>
            array (
                'name' => 'Persian',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 32.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Échauffement',
                        1 => 'Technicien',
                    ),
            ),
        54 =>
            array (
                'name' => 'Psykokwak',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 19.6,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Ciel Gris',
                        1 => 'Moiteur',
                    ),
            ),
        55 =>
            array (
                'name' => 'Akwakwak',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 76.6,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Ciel Gris',
                        1 => 'Moiteur',
                    ),
            ),
        56 =>
            array (
                'name' => 'Férosinge',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 28.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Colérique',
                        1 => 'Esprit Vital',
                    ),
            ),
        57 =>
            array (
                'name' => 'Colossinge',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 32.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Colérique',
                        1 => 'Esprit Vital',
                    ),
            ),
        58 =>
            array (
                'name' => 'Caninos',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 19.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Torche',
                    ),
            ),
        59 =>
            array (
                'name' => 'Arcanin',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 155.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Torche',
                    ),
            ),
        60 =>
            array (
                'name' => 'Ptitard',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 12.4,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Moiteur',
                    ),
            ),
        61 =>
            array (
                'name' => 'Têtarte',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 20.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Moiteur',
                    ),
            ),
        62 =>
            array (
                'name' => 'Tartard',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'fighting',
                    ),
                'weight' => 54.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Moiteur',
                    ),
            ),
        63 =>
            array (
                'name' => 'Abra',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 19.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Synchro',
                    ),
            ),
        64 =>
            array (
                'name' => 'Kadabra',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 56.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Synchro',
                    ),
            ),
        65 =>
            array (
                'name' => 'Alakazam',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 48.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Synchro',
                    ),
            ),
        66 =>
            array (
                'name' => 'Machoc',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 19.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Annule Garde',
                        1 => 'Cran',
                    ),
            ),
        67 =>
            array (
                'name' => 'Machopeur',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 70.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Annule Garde',
                        1 => 'Cran',
                    ),
            ),
        68 =>
            array (
                'name' => 'Mackogneur',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 130.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Annule Garde',
                        1 => 'Cran',
                    ),
            ),
        69 =>
            array (
                'name' => 'Chétiflor',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 4.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        70 =>
            array (
                'name' => 'Boustiflor',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 6.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        71 =>
            array (
                'name' => 'Empiflor',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 15.5,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        72 =>
            array (
                'name' => 'Tentacool',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'poison',
                    ),
                'weight' => 45.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                        1 => 'Suintement',
                    ),
            ),
        73 =>
            array (
                'name' => 'Tentacruel',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'poison',
                    ),
                'weight' => 55.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                        1 => 'Suintement',
                    ),
            ),
        74 =>
            array (
                'name' => 'Racaillou',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ground',
                    ),
                'weight' => 20.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        75 =>
            array (
                'name' => 'Gravalanch',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ground',
                    ),
                'weight' => 105.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        76 =>
            array (
                'name' => 'Grolem',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ground',
                    ),
                'weight' => 300.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        77 =>
            array (
                'name' => 'Ponyta',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 30.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Torche',
                    ),
            ),
        78 =>
            array (
                'name' => 'Galopa',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 95.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Torche',
                    ),
            ),
        79 =>
            array (
                'name' => 'Ramoloss',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'psychic',
                    ),
                'weight' => 36.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Tempo Perso',
                    ),
            ),
        80 =>
            array (
                'name' => 'Flagadoss',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'psychic',
                    ),
                'weight' => 78.5,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Tempo Perso',
                    ),
            ),
        81 =>
            array (
                'name' => 'Magnéti',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'steel',
                    ),
                'weight' => 6.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Magnépiège',
                    ),
            ),
        82 =>
            array (
                'name' => 'Magnéton',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'steel',
                    ),
                'weight' => 60.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Magnépiège',
                    ),
            ),
        83 =>
            array (
                'name' => 'Canarticho',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 15.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Regard Vif',
                    ),
            ),
        84 =>
            array (
                'name' => 'Doduo',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 39.2,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Matinal',
                    ),
            ),
        85 =>
            array (
                'name' => 'Dodrio',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 85.2,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Matinal',
                    ),
            ),
        86 =>
            array (
                'name' => 'Otaria',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 90.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Hydratation',
                        1 => 'Isograisse',
                    ),
            ),
        87 =>
            array (
                'name' => 'Lamantine',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ice',
                    ),
                'weight' => 120.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Hydratation',
                        1 => 'Isograisse',
                    ),
            ),
        88 =>
            array (
                'name' => 'Tadmorv',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 30.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Puanteur',
                    ),
            ),
        89 =>
            array (
                'name' => 'Grotadmorv',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 30.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Puanteur',
                    ),
            ),
        90 =>
            array (
                'name' => 'Kokiyas',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 4.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Multi-Coups',
                    ),
            ),
        91 =>
            array (
                'name' => 'Crustabri',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ice',
                    ),
                'weight' => 132.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Multi-Coups',
                    ),
            ),
        92 =>
            array (
                'name' => 'Fantominus',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'poison',
                    ),
                'weight' => 0.1,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        93 =>
            array (
                'name' => 'Spectrum',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'poison',
                    ),
                'weight' => 0.1,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        94 =>
            array (
                'name' => 'Ectoplasma',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'poison',
                    ),
                'weight' => 40.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        95 =>
            array (
                'name' => 'Onix',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ground',
                    ),
                'weight' => 210.0,
                'height' => 8.8,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        96 =>
            array (
                'name' => 'Soporifik',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 32.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Insomnia',
                        1 => 'Prédiction',
                    ),
            ),
        97 =>
            array (
                'name' => 'Hypnomade',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 75.6,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Insomnia',
                        1 => 'Prédiction',
                    ),
            ),
        98 =>
            array (
                'name' => 'Krabby',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 6.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Hyper Cutter',
                    ),
            ),
        99 =>
            array (
                'name' => 'Krabboss',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 60.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Hyper Cutter',
                    ),
            ),
        100 =>
            array (
                'name' => 'Voltorbe',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 10.4,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Statik',
                    ),
            ),
        101 =>
            array (
                'name' => 'Électrode',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 66.6,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Statik',
                    ),
            ),
        102 =>
            array (
                'name' => 'Noeunoeuf',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'psychic',
                    ),
                'weight' => 2.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        103 =>
            array (
                'name' => 'Noadkoko',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'psychic',
                    ),
                'weight' => 120.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        104 =>
            array (
                'name' => 'Osselait',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 6.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Tête de Roc',
                    ),
            ),
        105 =>
            array (
                'name' => 'Ossatueur',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 45.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Tête de Roc',
                    ),
            ),
        106 =>
            array (
                'name' => 'Kicklee',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 49.8,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Échauffement',
                        1 => 'Téméraire',
                    ),
            ),
        107 =>
            array (
                'name' => 'Tygnon',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 50.2,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Poing de Fer',
                        1 => 'Regard Vif',
                    ),
            ),
        108 =>
            array (
                'name' => 'Excelangue',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 65.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Tempo Perso',
                    ),
            ),
        109 =>
            array (
                'name' => 'Smogo',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 1.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        110 =>
            array (
                'name' => 'Smogogo',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 9.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        111 =>
            array (
                'name' => 'Rhinocorne',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'rock',
                    ),
                'weight' => 115.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Tête de Roc',
                    ),
            ),
        112 =>
            array (
                'name' => 'Rhinoféros',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'rock',
                    ),
                'weight' => 120.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Tête de Roc',
                    ),
            ),
        113 =>
            array (
                'name' => 'Leveinard',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 34.6,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                        1 => 'Sérénité',
                    ),
            ),
        114 =>
            array (
                'name' => 'Saquedeneu',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 35.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Feuille Garde',
                    ),
            ),
        115 =>
            array (
                'name' => 'Kangourex',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 80.0,
                'height' => 2.2,
                'abilities' =>
                    array (
                        0 => 'Matinal',
                        1 => 'Querelleur',
                    ),
            ),
        116 =>
            array (
                'name' => 'Hypotrempe',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 8.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Sniper',
                    ),
            ),
        117 =>
            array (
                'name' => 'Hypocéan',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 25.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Sniper',
                    ),
            ),
        118 =>
            array (
                'name' => 'Poissirène',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 15.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Ignifu-Voile',
                    ),
            ),
        119 =>
            array (
                'name' => 'Poissoroy',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 39.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Ignifu-Voile',
                    ),
            ),
        120 =>
            array (
                'name' => 'Stari',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 34.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Lumiattirance',
                        1 => 'Médic Nature',
                    ),
            ),
        121 =>
            array (
                'name' => 'Staross',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'psychic',
                    ),
                'weight' => 80.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Lumiattirance',
                        1 => 'Médic Nature',
                    ),
            ),
        122 =>
            array (
                'name' => 'M. Mime',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fairy',
                    ),
                'weight' => 54.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Filtre',
                    ),
            ),
        123 =>
            array (
                'name' => 'Insécateur',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 56.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Technicien',
                    ),
            ),
        124 =>
            array (
                'name' => 'Lippoutou',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'psychic',
                    ),
                'weight' => 40.6,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Prédiction',
                    ),
            ),
        125 =>
            array (
                'name' => 'Élektek',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 30.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        126 =>
            array (
                'name' => 'Magmar',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 44.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        127 =>
            array (
                'name' => 'Scarabrute',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 55.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                        1 => 'Hyper Cutter',
                    ),
            ),
        128 =>
            array (
                'name' => 'Tauros',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 88.4,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Colérique',
                        1 => 'Intimidation',
                    ),
            ),
        129 =>
            array (
                'name' => 'Magicarpe',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 10.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        130 =>
            array (
                'name' => 'Léviator',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 235.0,
                'height' => 6.5,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                    ),
            ),
        131 =>
            array (
                'name' => 'Lokhlass',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ice',
                    ),
                'weight' => 220.0,
                'height' => 2.5,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Coque Armure',
                    ),
            ),
        132 =>
            array (
                'name' => 'Métamorph',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 4.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Échauffement',
                    ),
            ),
        133 =>
            array (
                'name' => 'Évoli',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 6.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Adaptabilité',
                        1 => 'Fuite',
                    ),
            ),
        134 =>
            array (
                'name' => 'Aquali',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 29.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                    ),
            ),
        135 =>
            array (
                'name' => 'Voltali',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 24.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Absorb Volt',
                    ),
            ),
        136 =>
            array (
                'name' => 'Pyroli',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 25.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Torche',
                    ),
            ),
        137 =>
            array (
                'name' => 'Porygon',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 36.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Calque',
                        1 => 'Télécharge',
                    ),
            ),
        138 =>
            array (
                'name' => 'Amonita',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'water',
                    ),
                'weight' => 7.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Glissade',
                    ),
            ),
        139 =>
            array (
                'name' => 'Amonistar',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'water',
                    ),
                'weight' => 35.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Glissade',
                    ),
            ),
        140 =>
            array (
                'name' => 'Kabuto',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'water',
                    ),
                'weight' => 11.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                        1 => 'Glissade',
                    ),
            ),
        141 =>
            array (
                'name' => 'Kabutops',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'water',
                    ),
                'weight' => 40.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                        1 => 'Glissade',
                    ),
            ),
        142 =>
            array (
                'name' => 'Ptéra',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'flying',
                    ),
                'weight' => 59.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Pression',
                        1 => 'Tête de Roc',
                    ),
            ),
        143 =>
            array (
                'name' => 'Ronflex',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 460.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Isograisse',
                        1 => 'Vaccin',
                    ),
            ),
        144 =>
            array (
                'name' => 'Artikodin',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'flying',
                    ),
                'weight' => 55.4,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        145 =>
            array (
                'name' => 'Électhor',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'flying',
                    ),
                'weight' => 52.6,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        146 =>
            array (
                'name' => 'Sulfura',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'flying',
                    ),
                'weight' => 60.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        147 =>
            array (
                'name' => 'Minidraco',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 3.3,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        148 =>
            array (
                'name' => 'Draco',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 16.5,
                'height' => 4.0,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        149 =>
            array (
                'name' => 'Dracolosse',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'flying',
                    ),
                'weight' => 210.0,
                'height' => 2.2,
                'abilities' =>
                    array (
                        0 => 'Attention',
                    ),
            ),
        150 =>
            array (
                'name' => 'Mewtwo',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 122.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        151 =>
            array (
                'name' => 'Mew',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 4.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Synchro',
                    ),
            ),
        152 =>
            array (
                'name' => 'Germignon',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 6.4,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        153 =>
            array (
                'name' => 'Macronium',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 15.8,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        154 =>
            array (
                'name' => 'Méganium',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 100.5,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        155 =>
            array (
                'name' => 'Héricendre',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 7.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        156 =>
            array (
                'name' => 'Feurisson',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 19.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        157 =>
            array (
                'name' => 'Typhlosion',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 79.5,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        158 =>
            array (
                'name' => 'Kaiminus',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 9.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        159 =>
            array (
                'name' => 'Crocrodil',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 25.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        160 =>
            array (
                'name' => 'Aligatueur',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 88.8,
                'height' => 2.3,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        161 =>
            array (
                'name' => 'Fouinette',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 6.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Regard Vif',
                    ),
            ),
        162 =>
            array (
                'name' => 'Fouinar',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 32.5,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Regard Vif',
                    ),
            ),
        163 =>
            array (
                'name' => 'Hoothoot',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 21.2,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Insomnia',
                        1 => 'Regard Vif',
                    ),
            ),
        164 =>
            array (
                'name' => 'Noarfang',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 40.8,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Insomnia',
                        1 => 'Regard Vif',
                    ),
            ),
        165 =>
            array (
                'name' => 'Coxy',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 10.8,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Matinal',
                    ),
            ),
        166 =>
            array (
                'name' => 'Coxyclaque',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 35.6,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Matinal',
                    ),
            ),
        167 =>
            array (
                'name' => 'Mimigal',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 8.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Insomnia',
                    ),
            ),
        168 =>
            array (
                'name' => 'Migalos',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 33.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Insomnia',
                    ),
            ),
        169 =>
            array (
                'name' => 'Nostenfer',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'flying',
                    ),
                'weight' => 75.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Attention',
                    ),
            ),
        170 =>
            array (
                'name' => 'Loupio',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'electric',
                    ),
                'weight' => 12.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Absorb Volt',
                        1 => 'Lumiattirance',
                    ),
            ),
        171 =>
            array (
                'name' => 'Lanturn',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'electric',
                    ),
                'weight' => 22.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Absorb Volt',
                        1 => 'Lumiattirance',
                    ),
            ),
        172 =>
            array (
                'name' => 'Pichu',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 2.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        173 =>
            array (
                'name' => 'Mélo',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 3.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Garde Magik',
                        1 => 'Joli Sourire',
                    ),
            ),
        174 =>
            array (
                'name' => 'Toudoudou',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'fairy',
                    ),
                'weight' => 1.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Joli Sourire',
                    ),
            ),
        175 =>
            array (
                'name' => 'Togepi',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 1.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Sérénité',
                    ),
            ),
        176 =>
            array (
                'name' => 'Togetic',
                'type' =>
                    array (
                        0 => 'fairy',
                        1 => 'flying',
                    ),
                'weight' => 3.2,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Sérénité',
                    ),
            ),
        177 =>
            array (
                'name' => 'Natu',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'flying',
                    ),
                'weight' => 2.0,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Matinal',
                        1 => 'Synchro',
                    ),
            ),
        178 =>
            array (
                'name' => 'Xatu',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'flying',
                    ),
                'weight' => 15.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Matinal',
                        1 => 'Synchro',
                    ),
            ),
        179 =>
            array (
                'name' => 'Wattouat',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 7.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        180 =>
            array (
                'name' => 'Lainergie',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 13.3,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        181 =>
            array (
                'name' => 'Pharamp',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 61.5,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        182 =>
            array (
                'name' => 'Joliflor',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 5.8,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        183 =>
            array (
                'name' => 'Marill',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'fairy',
                    ),
                'weight' => 8.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Coloforce',
                        1 => 'Isograisse',
                    ),
            ),
        184 =>
            array (
                'name' => 'Azumarill',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'fairy',
                    ),
                'weight' => 28.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Coloforce',
                        1 => 'Isograisse',
                    ),
            ),
        185 =>
            array (
                'name' => 'Simularbre',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 38.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        186 =>
            array (
                'name' => 'Tarpaud',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 33.9,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Moiteur',
                    ),
            ),
        187 =>
            array (
                'name' => 'Granivol',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'flying',
                    ),
                'weight' => 0.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Feuille Garde',
                    ),
            ),
        188 =>
            array (
                'name' => 'Floravol',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'flying',
                    ),
                'weight' => 1.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Feuille Garde',
                    ),
            ),
        189 =>
            array (
                'name' => 'Cotovol',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'flying',
                    ),
                'weight' => 3.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Feuille Garde',
                    ),
            ),
        190 =>
            array (
                'name' => 'Capumain',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 11.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Ramassage',
                    ),
            ),
        191 =>
            array (
                'name' => 'Tournegrin',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 1.8,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Force Soleil',
                    ),
            ),
        192 =>
            array (
                'name' => 'Héliatronc',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 8.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Force Soleil',
                    ),
            ),
        193 =>
            array (
                'name' => 'Yanma',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 38.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Œil Composé',
                        1 => 'Turbo',
                    ),
            ),
        194 =>
            array (
                'name' => 'Axoloto',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 8.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Moiteur',
                    ),
            ),
        195 =>
            array (
                'name' => 'Maraiste',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 75.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Moiteur',
                    ),
            ),
        196 =>
            array (
                'name' => 'Mentali',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 26.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Synchro',
                    ),
            ),
        197 =>
            array (
                'name' => 'Noctali',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 27.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Synchro',
                    ),
            ),
        198 =>
            array (
                'name' => 'Cornèbre',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'flying',
                    ),
                'weight' => 2.1,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Chanceux',
                        1 => 'Insomnia',
                    ),
            ),
        199 =>
            array (
                'name' => 'Roigada',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'psychic',
                    ),
                'weight' => 79.5,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Tempo Perso',
                    ),
            ),
        200 =>
            array (
                'name' => 'Feuforêve',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 1.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        201 =>
            array (
                'name' => 'Zarbi',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 5.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        202 =>
            array (
                'name' => 'Qulbutoké',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 28.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Marque Ombre',
                    ),
            ),
        203 =>
            array (
                'name' => 'Girafarig',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'psychic',
                    ),
                'weight' => 41.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Matinal',
                    ),
            ),
        204 =>
            array (
                'name' => 'Pomdepik',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 7.2,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        205 =>
            array (
                'name' => 'Foretress',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'steel',
                    ),
                'weight' => 125.8,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        206 =>
            array (
                'name' => 'Insolourdo',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 14.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Sérénité',
                    ),
            ),
        207 =>
            array (
                'name' => 'Scorplane',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'flying',
                    ),
                'weight' => 64.8,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Hyper Cutter',
                        1 => 'Voile Sable',
                    ),
            ),
        208 =>
            array (
                'name' => 'Steelix',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'ground',
                    ),
                'weight' => 400.0,
                'height' => 9.2,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        209 =>
            array (
                'name' => 'Snubbull',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 7.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Intimidation',
                    ),
            ),
        210 =>
            array (
                'name' => 'Granbull',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 48.7,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Pied Véloce',
                    ),
            ),
        211 =>
            array (
                'name' => 'Qwilfish',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'poison',
                    ),
                'weight' => 3.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Point Poison',
                    ),
            ),
        212 =>
            array (
                'name' => 'Cizayox',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'steel',
                    ),
                'weight' => 118.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Technicien',
                    ),
            ),
        213 =>
            array (
                'name' => 'Caratroc',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'rock',
                    ),
                'weight' => 20.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Gloutonnerie',
                    ),
            ),
        214 =>
            array (
                'name' => 'Scarhino',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fighting',
                    ),
                'weight' => 54.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Essaim',
                    ),
            ),
        215 =>
            array (
                'name' => 'Farfuret',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'ice',
                    ),
                'weight' => 28.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Regard Vif',
                    ),
            ),
        216 =>
            array (
                'name' => 'Teddiursa',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 8.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Pied Véloce',
                        1 => 'Ramassage',
                    ),
            ),
        217 =>
            array (
                'name' => 'Ursaring',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 125.8,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Pied Véloce',
                    ),
            ),
        218 =>
            array (
                'name' => 'Limagma',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 35.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Armumagma',
                        1 => 'Corps Ardent',
                    ),
            ),
        219 =>
            array (
                'name' => 'Volcaropod',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'rock',
                    ),
                'weight' => 55.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Armumagma',
                        1 => 'Corps Ardent',
                    ),
            ),
        220 =>
            array (
                'name' => 'Marcacrin',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'ground',
                    ),
                'weight' => 6.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Rideau Neige',
                    ),
            ),
        221 =>
            array (
                'name' => 'Cochignon',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'ground',
                    ),
                'weight' => 55.8,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Rideau Neige',
                    ),
            ),
        222 =>
            array (
                'name' => 'Corayon',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'rock',
                    ),
                'weight' => 5.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Médic Nature',
                    ),
            ),
        223 =>
            array (
                'name' => 'Rémoraid',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 12.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Sniper',
                    ),
            ),
        224 =>
            array (
                'name' => 'Octillery',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 28.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Sniper',
                        1 => 'Ventouse',
                    ),
            ),
        225 =>
            array (
                'name' => 'Cadoizo',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'flying',
                    ),
                'weight' => 16.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Esprit Vital',
                    ),
            ),
        226 =>
            array (
                'name' => 'Démanta',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 220.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Glissade',
                    ),
            ),
        227 =>
            array (
                'name' => 'Airmure',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'flying',
                    ),
                'weight' => 50.5,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Regard Vif',
                    ),
            ),
        228 =>
            array (
                'name' => 'Malosse',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'fire',
                    ),
                'weight' => 10.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Matinal',
                        1 => 'Torche',
                    ),
            ),
        229 =>
            array (
                'name' => 'Démolosse',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'fire',
                    ),
                'weight' => 35.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Matinal',
                        1 => 'Torche',
                    ),
            ),
        230 =>
            array (
                'name' => 'Hyporoi',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'dragon',
                    ),
                'weight' => 152.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Sniper',
                    ),
            ),
        231 =>
            array (
                'name' => 'Phanpy',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 33.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Ramassage',
                    ),
            ),
        232 =>
            array (
                'name' => 'Donphan',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 120.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        233 =>
            array (
                'name' => 'Porygon2',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 32.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Calque',
                        1 => 'Télécharge',
                    ),
            ),
        234 =>
            array (
                'name' => 'Cerfrousse',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 71.2,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Intimidation',
                    ),
            ),
        235 =>
            array (
                'name' => 'Queulorior',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 58.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Technicien',
                        1 => 'Tempo Perso',
                    ),
            ),
        236 =>
            array (
                'name' => 'Debugant',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 21.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Impassible',
                    ),
            ),
        237 =>
            array (
                'name' => 'Kapoera',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 48.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Technicien',
                    ),
            ),
        238 =>
            array (
                'name' => 'Lippouti',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'psychic',
                    ),
                'weight' => 6.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Prédiction',
                    ),
            ),
        239 =>
            array (
                'name' => 'Élekid',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 23.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        240 =>
            array (
                'name' => 'Magby',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 21.4,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        241 =>
            array (
                'name' => 'Écrémeuh',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 75.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Isograisse',
                        1 => 'Querelleur',
                    ),
            ),
        242 =>
            array (
                'name' => 'Leuphorie',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 46.8,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                        1 => 'Sérénité',
                    ),
            ),
        243 =>
            array (
                'name' => 'Raikou',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 178.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        244 =>
            array (
                'name' => 'Entei',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 198.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        245 =>
            array (
                'name' => 'Suicune',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 187.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        246 =>
            array (
                'name' => 'Embrylex',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ground',
                    ),
                'weight' => 72.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Cran',
                    ),
            ),
        247 =>
            array (
                'name' => 'Ymphect',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ground',
                    ),
                'weight' => 152.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        248 =>
            array (
                'name' => 'Tyranocif',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'dark',
                    ),
                'weight' => 202.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Sable Volant',
                    ),
            ),
        249 =>
            array (
                'name' => 'Lugia',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'flying',
                    ),
                'weight' => 216.0,
                'height' => 5.2,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        250 =>
            array (
                'name' => 'Ho-Oh',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'flying',
                    ),
                'weight' => 199.0,
                'height' => 3.8,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        251 =>
            array (
                'name' => 'Celebi',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'grass',
                    ),
                'weight' => 5.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                    ),
            ),
        252 =>
            array (
                'name' => 'Arcko',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 5.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        253 =>
            array (
                'name' => 'Massko',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 21.6,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        254 =>
            array (
                'name' => 'Jungko',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 52.2,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        255 =>
            array (
                'name' => 'Poussifeu',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 2.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        256 =>
            array (
                'name' => 'Galifeu',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'fighting',
                    ),
                'weight' => 19.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        257 =>
            array (
                'name' => 'Braségali',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'fighting',
                    ),
                'weight' => 52.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        258 =>
            array (
                'name' => 'Gobou',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 7.6,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        259 =>
            array (
                'name' => 'Flobio',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 28.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        260 =>
            array (
                'name' => 'Laggron',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 81.9,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        261 =>
            array (
                'name' => 'Medhyèna',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 13.6,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Pied Véloce',
                    ),
            ),
        262 =>
            array (
                'name' => 'Grahyèna',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 37.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Pied Véloce',
                    ),
            ),
        263 =>
            array (
                'name' => 'Zigzaton',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 17.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                        1 => 'Ramassage',
                    ),
            ),
        264 =>
            array (
                'name' => 'Linéon',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 32.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                        1 => 'Ramassage',
                    ),
            ),
        265 =>
            array (
                'name' => 'Chenipotte',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 3.6,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                    ),
            ),
        266 =>
            array (
                'name' => 'Armulys',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 10.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        267 =>
            array (
                'name' => 'Charmillon',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 28.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                    ),
            ),
        268 =>
            array (
                'name' => 'Blindalys',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 11.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        269 =>
            array (
                'name' => 'Papinox',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 31.6,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                    ),
            ),
        270 =>
            array (
                'name' => 'Nénupiot',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'grass',
                    ),
                'weight' => 2.6,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Cuvette',
                        1 => 'Glissade',
                    ),
            ),
        271 =>
            array (
                'name' => 'Lombre',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'grass',
                    ),
                'weight' => 32.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Cuvette',
                        1 => 'Glissade',
                    ),
            ),
        272 =>
            array (
                'name' => 'Ludicolo',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'grass',
                    ),
                'weight' => 55.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Cuvette',
                        1 => 'Glissade',
                    ),
            ),
        273 =>
            array (
                'name' => 'Grainipiot',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 4.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Matinal',
                    ),
            ),
        274 =>
            array (
                'name' => 'Pifeuil',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'dark',
                    ),
                'weight' => 28.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Matinal',
                    ),
            ),
        275 =>
            array (
                'name' => 'Tengalice',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'dark',
                    ),
                'weight' => 59.6,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Matinal',
                    ),
            ),
        276 =>
            array (
                'name' => 'Nirondelle',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 2.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Cran',
                    ),
            ),
        277 =>
            array (
                'name' => 'Hélédelle',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 19.8,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Cran',
                    ),
            ),
        278 =>
            array (
                'name' => 'Goélise',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 9.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                    ),
            ),
        279 =>
            array (
                'name' => 'Bekipan',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 28.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                    ),
            ),
        280 =>
            array (
                'name' => 'Tarsal',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fairy',
                    ),
                'weight' => 6.6,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Calque',
                        1 => 'Synchro',
                    ),
            ),
        281 =>
            array (
                'name' => 'Kirlia',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fairy',
                    ),
                'weight' => 20.2,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Calque',
                        1 => 'Synchro',
                    ),
            ),
        282 =>
            array (
                'name' => 'Gardevoir',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fairy',
                    ),
                'weight' => 48.4,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Calque',
                        1 => 'Synchro',
                    ),
            ),
        283 =>
            array (
                'name' => 'Arakdo',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'water',
                    ),
                'weight' => 1.7,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        284 =>
            array (
                'name' => 'Maskadra',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 3.6,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                    ),
            ),
        285 =>
            array (
                'name' => 'Balignon',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 4.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Pose Spore',
                        1 => 'Soin Poison',
                    ),
            ),
        286 =>
            array (
                'name' => 'Chapignon',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fighting',
                    ),
                'weight' => 39.2,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Pose Spore',
                        1 => 'Soin Poison',
                    ),
            ),
        287 =>
            array (
                'name' => 'Parecool',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 24.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Absentéisme',
                    ),
            ),
        288 =>
            array (
                'name' => 'Vigoroth',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 46.5,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Esprit Vital',
                    ),
            ),
        289 =>
            array (
                'name' => 'Monaflèmit',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 130.5,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Absentéisme',
                    ),
            ),
        290 =>
            array (
                'name' => 'Ningale',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'ground',
                    ),
                'weight' => 5.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Œil Composé',
                    ),
            ),
        291 =>
            array (
                'name' => 'Ninjask',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 12.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Turbo',
                    ),
            ),
        292 =>
            array (
                'name' => 'Munja',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'ghost',
                    ),
                'weight' => 1.2,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Garde Mystik',
                    ),
            ),
        293 =>
            array (
                'name' => 'Chuchmur',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 16.3,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                    ),
            ),
        294 =>
            array (
                'name' => 'Ramboum',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 40.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                    ),
            ),
        295 =>
            array (
                'name' => 'Brouhabam',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 84.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                    ),
            ),
        296 =>
            array (
                'name' => 'Makuhita',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 86.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Isograisse',
                    ),
            ),
        297 =>
            array (
                'name' => 'Hariyama',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 253.8,
                'height' => 2.3,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Isograisse',
                    ),
            ),
        298 =>
            array (
                'name' => 'Azurill',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'fairy',
                    ),
                'weight' => 2.0,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Coloforce',
                        1 => 'Isograisse',
                    ),
            ),
        299 =>
            array (
                'name' => 'Tarinor',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 97.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Magnépiège',
                    ),
            ),
        300 =>
            array (
                'name' => 'Skitty',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 11.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Joli Sourire',
                        1 => 'Normalise',
                    ),
            ),
        301 =>
            array (
                'name' => 'Delcatty',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 32.6,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Joli Sourire',
                        1 => 'Normalise',
                    ),
            ),
        302 =>
            array (
                'name' => 'Ténéfix',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'ghost',
                    ),
                'weight' => 11.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Frein',
                        1 => 'Regard Vif',
                    ),
            ),
        303 =>
            array (
                'name' => 'Mysdibule',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'fairy',
                    ),
                'weight' => 11.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Hyper Cutter',
                        1 => 'Intimidation',
                    ),
            ),
        304 =>
            array (
                'name' => 'Galekid',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'rock',
                    ),
                'weight' => 60.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        305 =>
            array (
                'name' => 'Galegon',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'rock',
                    ),
                'weight' => 120.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        306 =>
            array (
                'name' => 'Galeking',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'rock',
                    ),
                'weight' => 360.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        307 =>
            array (
                'name' => 'Méditikka',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'psychic',
                    ),
                'weight' => 11.2,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Force Pure',
                    ),
            ),
        308 =>
            array (
                'name' => 'Charmina',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'psychic',
                    ),
                'weight' => 31.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Force Pure',
                    ),
            ),
        309 =>
            array (
                'name' => 'Dynavolt',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 15.2,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Statik',
                    ),
            ),
        310 =>
            array (
                'name' => 'Élecsprint',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 40.2,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Statik',
                    ),
            ),
        311 =>
            array (
                'name' => 'Posipi',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 4.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Plus',
                    ),
            ),
        312 =>
            array (
                'name' => 'Négapi',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 4.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Minus',
                    ),
            ),
        313 =>
            array (
                'name' => 'Muciole',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 17.7,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Lumiattirance',
                    ),
            ),
        314 =>
            array (
                'name' => 'Lumivole',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 17.7,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Lentiteintée',
                    ),
            ),
        315 =>
            array (
                'name' => 'Rosélia',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 2.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                        1 => 'Point Poison',
                    ),
            ),
        316 =>
            array (
                'name' => 'Gloupti',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 10.3,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Suintement',
                    ),
            ),
        317 =>
            array (
                'name' => 'Avaltout',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 80.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Suintement',
                    ),
            ),
        318 =>
            array (
                'name' => 'Carvanha',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'dark',
                    ),
                'weight' => 20.8,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Peau Dure',
                    ),
            ),
        319 =>
            array (
                'name' => 'Sharpedo',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'dark',
                    ),
                'weight' => 88.8,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Peau Dure',
                    ),
            ),
        320 =>
            array (
                'name' => 'Wailmer',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 130.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Ignifu-Voile',
                    ),
            ),
        321 =>
            array (
                'name' => 'Wailord',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 398.0,
                'height' => 14.5,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Ignifu-Voile',
                    ),
            ),
        322 =>
            array (
                'name' => 'Chamallot',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'ground',
                    ),
                'weight' => 24.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Simple',
                    ),
            ),
        323 =>
            array (
                'name' => 'Camérupt',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'ground',
                    ),
                'weight' => 220.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Armumagma',
                        1 => 'Solide Roc',
                    ),
            ),
        324 =>
            array (
                'name' => 'Chartor',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 80.4,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Écran Fumée',
                    ),
            ),
        325 =>
            array (
                'name' => 'Spoink',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 30.6,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Isograisse',
                        1 => 'Tempo Perso',
                    ),
            ),
        326 =>
            array (
                'name' => 'Groret',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 71.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Isograisse',
                        1 => 'Tempo Perso',
                    ),
            ),
        327 =>
            array (
                'name' => 'Spinda',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 5.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Pieds Confus',
                        1 => 'Tempo Perso',
                    ),
            ),
        328 =>
            array (
                'name' => 'Kraknoix',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 15.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Hyper Cutter',
                        1 => 'Piège',
                    ),
            ),
        329 =>
            array (
                'name' => 'Vibraninf',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'dragon',
                    ),
                'weight' => 15.3,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        330 =>
            array (
                'name' => 'Libégon',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'dragon',
                    ),
                'weight' => 82.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        331 =>
            array (
                'name' => 'Cacnea',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 51.3,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        332 =>
            array (
                'name' => 'Cacturne',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'dark',
                    ),
                'weight' => 77.4,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        333 =>
            array (
                'name' => 'Tylton',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 1.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                    ),
            ),
        334 =>
            array (
                'name' => 'Altaria',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'flying',
                    ),
                'weight' => 20.6,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                    ),
            ),
        335 =>
            array (
                'name' => 'Mangriff',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 40.3,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Vaccin',
                    ),
            ),
        336 =>
            array (
                'name' => 'Séviper',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 52.5,
                'height' => 2.7,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        337 =>
            array (
                'name' => 'Séléroc',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'psychic',
                    ),
                'weight' => 168.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        338 =>
            array (
                'name' => 'Solaroc',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'psychic',
                    ),
                'weight' => 154.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        339 =>
            array (
                'name' => 'Barloche',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 1.9,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Anticipation',
                        1 => 'Benêt',
                    ),
            ),
        340 =>
            array (
                'name' => 'Barbicha',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 23.6,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Anticipation',
                        1 => 'Benêt',
                    ),
            ),
        341 =>
            array (
                'name' => 'Écrapince',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 11.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Hyper Cutter',
                    ),
            ),
        342 =>
            array (
                'name' => 'Colhomard',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'dark',
                    ),
                'weight' => 32.8,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Hyper Cutter',
                    ),
            ),
        343 =>
            array (
                'name' => 'Balbuto',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'psychic',
                    ),
                'weight' => 21.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        344 =>
            array (
                'name' => 'Kaorine',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'psychic',
                    ),
                'weight' => 108.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        345 =>
            array (
                'name' => 'Lilia',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'grass',
                    ),
                'weight' => 23.8,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Ventouse',
                    ),
            ),
        346 =>
            array (
                'name' => 'Vacilys',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'grass',
                    ),
                'weight' => 60.4,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Ventouse',
                    ),
            ),
        347 =>
            array (
                'name' => 'Anorith',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'bug',
                    ),
                'weight' => 12.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                    ),
            ),
        348 =>
            array (
                'name' => 'Armaldo',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'bug',
                    ),
                'weight' => 68.2,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                    ),
            ),
        349 =>
            array (
                'name' => 'Barpau',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 7.4,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Glissade',
                    ),
            ),
        350 =>
            array (
                'name' => 'Milobellus',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 162.0,
                'height' => 6.2,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Écaille Spéciale',
                    ),
            ),
        351 =>
            array (
                'name' => 'Morphéo',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 0.8,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Météo',
                    ),
            ),
        352 =>
            array (
                'name' => 'Kecleon',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 22.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Déguisement',
                    ),
            ),
        353 =>
            array (
                'name' => 'Polichombr',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 2.3,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Insomnia',
                    ),
            ),
        354 =>
            array (
                'name' => 'Branette',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 12.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Insomnia',
                    ),
            ),
        355 =>
            array (
                'name' => 'Skelénox',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 15.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        356 =>
            array (
                'name' => 'Téraclope',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 30.6,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        357 =>
            array (
                'name' => 'Tropius',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'flying',
                    ),
                'weight' => 100.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Force Soleil',
                    ),
            ),
        358 =>
            array (
                'name' => 'Éoko',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 1.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        359 =>
            array (
                'name' => 'Absol',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 47.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Chanceux',
                        1 => 'Pression',
                    ),
            ),
        360 =>
            array (
                'name' => 'Okéoké',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 14.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Marque Ombre',
                    ),
            ),
        361 =>
            array (
                'name' => 'Stalgamin',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 16.8,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Corps Gel',
                    ),
            ),
        362 =>
            array (
                'name' => 'Oniglali',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 256.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Corps Gel',
                    ),
            ),
        363 =>
            array (
                'name' => 'Obalie',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'water',
                    ),
                'weight' => 39.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                        1 => 'Isograisse',
                    ),
            ),
        364 =>
            array (
                'name' => 'Phogleur',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'water',
                    ),
                'weight' => 87.6,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                        1 => 'Isograisse',
                    ),
            ),
        365 =>
            array (
                'name' => 'Kaimorse',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'water',
                    ),
                'weight' => 150.6,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                        1 => 'Isograisse',
                    ),
            ),
        366 =>
            array (
                'name' => 'Coquiperl',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 52.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                    ),
            ),
        367 =>
            array (
                'name' => 'Serpang',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 27.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        368 =>
            array (
                'name' => 'Rosabyss',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 22.6,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        369 =>
            array (
                'name' => 'Relicanth',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'rock',
                    ),
                'weight' => 23.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Tête de Roc',
                    ),
            ),
        370 =>
            array (
                'name' => 'Lovdisc',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 8.7,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        371 =>
            array (
                'name' => 'Draby',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 42.1,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Tête de Roc',
                    ),
            ),
        372 =>
            array (
                'name' => 'Drackhaus',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 110.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Tête de Roc',
                    ),
            ),
        373 =>
            array (
                'name' => 'Drattak',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'flying',
                    ),
                'weight' => 102.6,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                    ),
            ),
        374 =>
            array (
                'name' => 'Terhal',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'psychic',
                    ),
                'weight' => 95.2,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        375 =>
            array (
                'name' => 'Métang',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'psychic',
                    ),
                'weight' => 202.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        376 =>
            array (
                'name' => 'Métalosse',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'psychic',
                    ),
                'weight' => 550.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        377 =>
            array (
                'name' => 'Regirock',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 230.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        378 =>
            array (
                'name' => 'Regice',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 175.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        379 =>
            array (
                'name' => 'Registeel',
                'type' =>
                    array (
                        0 => 'steel',
                    ),
                'weight' => 205.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        380 =>
            array (
                'name' => 'Latias',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'psychic',
                    ),
                'weight' => 40.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        381 =>
            array (
                'name' => 'Latios',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'psychic',
                    ),
                'weight' => 60.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        382 =>
            array (
                'name' => 'Kyogre',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 352.0,
                'height' => 4.5,
                'abilities' =>
                    array (
                        0 => 'Crachin',
                    ),
            ),
        383 =>
            array (
                'name' => 'Groudon',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 950.0,
                'height' => 3.5,
                'abilities' =>
                    array (
                        0 => 'Sécheresse',
                    ),
            ),
        384 =>
            array (
                'name' => 'Rayquaza',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'flying',
                    ),
                'weight' => 206.5,
                'height' => 7.0,
                'abilities' =>
                    array (
                        0 => 'Air Lock',
                    ),
            ),
        385 =>
            array (
                'name' => 'Jirachi',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'psychic',
                    ),
                'weight' => 1.1,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Sérénité',
                    ),
            ),
        386 =>
            array (
                'name' => 'Deoxys',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 60.8,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        387 =>
            array (
                'name' => 'Tortipouss',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 10.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        388 =>
            array (
                'name' => 'Boskara',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 97.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        389 =>
            array (
                'name' => 'Torterra',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'ground',
                    ),
                'weight' => 310.0,
                'height' => 2.2,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        390 =>
            array (
                'name' => 'Ouisticram',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 6.2,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        391 =>
            array (
                'name' => 'Chimpenfeu',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'fighting',
                    ),
                'weight' => 22.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        392 =>
            array (
                'name' => 'Simiabraz',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'fighting',
                    ),
                'weight' => 55.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        393 =>
            array (
                'name' => 'Tiplouf',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 5.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        394 =>
            array (
                'name' => 'Prinplouf',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 23.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        395 =>
            array (
                'name' => 'Pingoléon',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'steel',
                    ),
                'weight' => 84.5,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        396 =>
            array (
                'name' => 'Étourmi',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 2.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                    ),
            ),
        397 =>
            array (
                'name' => 'Étourvol',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 15.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                    ),
            ),
        398 =>
            array (
                'name' => 'Étouraptor',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 24.9,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                    ),
            ),
        399 =>
            array (
                'name' => 'Keunotor',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 20.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Inconscient',
                        1 => 'Simple',
                    ),
            ),
        400 =>
            array (
                'name' => 'Castorno',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'water',
                    ),
                'weight' => 31.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Inconscient',
                        1 => 'Simple',
                    ),
            ),
        401 =>
            array (
                'name' => 'Crikzik',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 2.2,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        402 =>
            array (
                'name' => 'Mélokrik',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 25.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                    ),
            ),
        403 =>
            array (
                'name' => 'Lixy',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 9.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Rivalité',
                    ),
            ),
        404 =>
            array (
                'name' => 'Luxio',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 30.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Rivalité',
                    ),
            ),
        405 =>
            array (
                'name' => 'Luxray',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 42.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Intimidation',
                        1 => 'Rivalité',
                    ),
            ),
        406 =>
            array (
                'name' => 'Rozbouton',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 1.2,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                        1 => 'Point Poison',
                    ),
            ),
        407 =>
            array (
                'name' => 'Roserade',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 14.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                        1 => 'Point Poison',
                    ),
            ),
        408 =>
            array (
                'name' => 'Kranidos',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 31.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                    ),
            ),
        409 =>
            array (
                'name' => 'Charkos',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 102.5,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                    ),
            ),
        410 =>
            array (
                'name' => 'Dinoclier',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'steel',
                    ),
                'weight' => 57.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        411 =>
            array (
                'name' => 'Bastiodon',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'steel',
                    ),
                'weight' => 149.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        412 =>
            array (
                'name' => 'Cheniti',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 3.4,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        413 =>
            array (
                'name' => 'Cheniselle',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'grass',
                    ),
                'weight' => 6.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Anticipation',
                    ),
            ),
        414 =>
            array (
                'name' => 'Papilord',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 23.3,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                    ),
            ),
        415 =>
            array (
                'name' => 'Apitrini',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 5.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Cherche Miel',
                    ),
            ),
        416 =>
            array (
                'name' => 'Apireine',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 38.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        417 =>
            array (
                'name' => 'Pachirisu',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 3.9,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Ramassage',
                    ),
            ),
        418 =>
            array (
                'name' => 'Mustébouée',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 29.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        419 =>
            array (
                'name' => 'Mustéflott',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 33.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                    ),
            ),
        420 =>
            array (
                'name' => 'Ceribou',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 3.3,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                    ),
            ),
        421 =>
            array (
                'name' => 'Ceriflor',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 9.3,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Don Floral',
                    ),
            ),
        422 =>
            array (
                'name' => 'Sancoki',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 6.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Lavabo',
                    ),
            ),
        423 =>
            array (
                'name' => 'Tritosor',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 29.9,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Lavabo',
                    ),
            ),
        424 =>
            array (
                'name' => 'Capidextre',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 20.3,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Ramassage',
                        1 => 'Technicien',
                    ),
            ),
        425 =>
            array (
                'name' => 'Baudrive',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'flying',
                    ),
                'weight' => 1.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Boom Final',
                        1 => 'Délestage',
                    ),
            ),
        426 =>
            array (
                'name' => 'Grodrive',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'flying',
                    ),
                'weight' => 15.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Boom Final',
                        1 => 'Délestage',
                    ),
            ),
        427 =>
            array (
                'name' => 'Laporeille',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 5.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Maladresse',
                    ),
            ),
        428 =>
            array (
                'name' => 'Lockpin',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 33.3,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Joli Sourire',
                        1 => 'Maladresse',
                    ),
            ),
        429 =>
            array (
                'name' => 'Magirêve',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 4.4,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        430 =>
            array (
                'name' => 'Corboss',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'flying',
                    ),
                'weight' => 27.3,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Chanceux',
                        1 => 'Insomnia',
                    ),
            ),
        431 =>
            array (
                'name' => 'Chaglam',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 3.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Échauffement',
                        1 => 'Tempo Perso',
                    ),
            ),
        432 =>
            array (
                'name' => 'Chaffreux',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 43.8,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Isograisse',
                        1 => 'Tempo Perso',
                    ),
            ),
        433 =>
            array (
                'name' => 'Korillon',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 0.6,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        434 =>
            array (
                'name' => 'Moufouette',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'dark',
                    ),
                'weight' => 19.2,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Boom Final',
                        1 => 'Puanteur',
                    ),
            ),
        435 =>
            array (
                'name' => 'Moufflair',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'dark',
                    ),
                'weight' => 38.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Boom Final',
                        1 => 'Puanteur',
                    ),
            ),
        436 =>
            array (
                'name' => 'Archéomire',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'psychic',
                    ),
                'weight' => 60.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Ignifugé',
                        1 => 'Lévitation',
                    ),
            ),
        437 =>
            array (
                'name' => 'Archéodong',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'psychic',
                    ),
                'weight' => 187.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Ignifugé',
                        1 => 'Lévitation',
                    ),
            ),
        438 =>
            array (
                'name' => 'Manzaï',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 15.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Tête de Roc',
                    ),
            ),
        439 =>
            array (
                'name' => 'Mime Jr.',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fairy',
                    ),
                'weight' => 13.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Filtre',
                    ),
            ),
        440 =>
            array (
                'name' => 'Ptiravi',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 24.4,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                        1 => 'Sérénité',
                    ),
            ),
        441 =>
            array (
                'name' => 'Pijako',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 1.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Pieds Confus',
                        1 => 'Regard Vif',
                    ),
            ),
        442 =>
            array (
                'name' => 'Spiritomb',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'dark',
                    ),
                'weight' => 108.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        443 =>
            array (
                'name' => 'Griknot',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'ground',
                    ),
                'weight' => 20.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        444 =>
            array (
                'name' => 'Carmache',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'ground',
                    ),
                'weight' => 56.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        445 =>
            array (
                'name' => 'Carchacrok',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'ground',
                    ),
                'weight' => 95.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Voile Sable',
                    ),
            ),
        446 =>
            array (
                'name' => 'Goinfrex',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 105.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Isograisse',
                        1 => 'Ramassage',
                    ),
            ),
        447 =>
            array (
                'name' => 'Riolu',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 20.2,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Impassible',
                    ),
            ),
        448 =>
            array (
                'name' => 'Lucario',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'steel',
                    ),
                'weight' => 54.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Impassible',
                    ),
            ),
        449 =>
            array (
                'name' => 'Hippopotas',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 49.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Sable Volant',
                    ),
            ),
        450 =>
            array (
                'name' => 'Hippodocus',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 300.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Sable Volant',
                    ),
            ),
        451 =>
            array (
                'name' => 'Rapion',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'bug',
                    ),
                'weight' => 12.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                        1 => 'Sniper',
                    ),
            ),
        452 =>
            array (
                'name' => 'Drascore',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'dark',
                    ),
                'weight' => 61.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                        1 => 'Sniper',
                    ),
            ),
        453 =>
            array (
                'name' => 'Cradopaud',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'fighting',
                    ),
                'weight' => 23.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Anticipation',
                        1 => 'Peau Sèche',
                    ),
            ),
        454 =>
            array (
                'name' => 'Coatox',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'fighting',
                    ),
                'weight' => 44.4,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Anticipation',
                        1 => 'Peau Sèche',
                    ),
            ),
        455 =>
            array (
                'name' => 'Vortente',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 27.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        456 =>
            array (
                'name' => 'Écayon',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 7.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Lavabo',
                    ),
            ),
        457 =>
            array (
                'name' => 'Luminéon',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 24.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Lavabo',
                    ),
            ),
        458 =>
            array (
                'name' => 'Babimanta',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 65.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Glissade',
                    ),
            ),
        459 =>
            array (
                'name' => 'Blizzi',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'ice',
                    ),
                'weight' => 50.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Alerte Neige',
                    ),
            ),
        460 =>
            array (
                'name' => 'Blizzaroi',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'ice',
                    ),
                'weight' => 135.5,
                'height' => 2.2,
                'abilities' =>
                    array (
                        0 => 'Alerte Neige',
                    ),
            ),
        461 =>
            array (
                'name' => 'Dimoret',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'ice',
                    ),
                'weight' => 34.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        462 =>
            array (
                'name' => 'Magnézone',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'steel',
                    ),
                'weight' => 180.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Magnépiège',
                    ),
            ),
        463 =>
            array (
                'name' => 'Coudlangue',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 140.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Tempo Perso',
                    ),
            ),
        464 =>
            array (
                'name' => 'Rhinastoc',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'rock',
                    ),
                'weight' => 282.8,
                'height' => 2.4,
                'abilities' =>
                    array (
                        0 => 'Paratonnerre',
                        1 => 'Solide Roc',
                    ),
            ),
        465 =>
            array (
                'name' => 'Bouldeneu',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 128.6,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Feuille Garde',
                    ),
            ),
        466 =>
            array (
                'name' => 'Élekable',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 138.6,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Motorisé',
                    ),
            ),
        467 =>
            array (
                'name' => 'Maganon',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 68.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        468 =>
            array (
                'name' => 'Togekiss',
                'type' =>
                    array (
                        0 => 'fairy',
                        1 => 'flying',
                    ),
                'weight' => 38.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Sérénité',
                    ),
            ),
        469 =>
            array (
                'name' => 'Yanmega',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 51.5,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Lentiteintée',
                        1 => 'Turbo',
                    ),
            ),
        470 =>
            array (
                'name' => 'Phyllali',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 25.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Feuille Garde',
                    ),
            ),
        471 =>
            array (
                'name' => 'Givrali',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 25.9,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Rideau Neige',
                    ),
            ),
        472 =>
            array (
                'name' => 'Scorvol',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'flying',
                    ),
                'weight' => 42.5,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Hyper Cutter',
                        1 => 'Voile Sable',
                    ),
            ),
        473 =>
            array (
                'name' => 'Mammochon',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'ground',
                    ),
                'weight' => 291.0,
                'height' => 2.5,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Rideau Neige',
                    ),
            ),
        474 =>
            array (
                'name' => 'Porygon-Z',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 34.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Adaptabilité',
                        1 => 'Télécharge',
                    ),
            ),
        475 =>
            array (
                'name' => 'Gallame',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fighting',
                    ),
                'weight' => 52.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Impassible',
                    ),
            ),
        476 =>
            array (
                'name' => 'Tarinorme',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'steel',
                    ),
                'weight' => 340.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Magnépiège',
                    ),
            ),
        477 =>
            array (
                'name' => 'Noctunoir',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 106.6,
                'height' => 2.2,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        478 =>
            array (
                'name' => 'Momartik',
                'type' =>
                    array (
                        0 => 'ice',
                        1 => 'ghost',
                    ),
                'weight' => 26.6,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Rideau Neige',
                    ),
            ),
        479 =>
            array (
                'name' => 'Motisma',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'ghost',
                    ),
                'weight' => 0.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        480 =>
            array (
                'name' => 'Créhelf',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 0.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        481 =>
            array (
                'name' => 'Créfollet',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 0.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        482 =>
            array (
                'name' => 'Créfadet',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 0.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        483 =>
            array (
                'name' => 'Dialga',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'dragon',
                    ),
                'weight' => 683.0,
                'height' => 5.4,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        484 =>
            array (
                'name' => 'Palkia',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'dragon',
                    ),
                'weight' => 336.0,
                'height' => 4.2,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        485 =>
            array (
                'name' => 'Heatran',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'steel',
                    ),
                'weight' => 430.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Torche',
                    ),
            ),
        486 =>
            array (
                'name' => 'Regigigas',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 420.0,
                'height' => 3.7,
                'abilities' =>
                    array (
                        0 => 'Début Calme',
                    ),
            ),
        487 =>
            array (
                'name' => 'Giratina',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'dragon',
                    ),
                'weight' => 750.0,
                'height' => 4.5,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        488 =>
            array (
                'name' => 'Cresselia',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 85.6,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        489 =>
            array (
                'name' => 'Phione',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 3.1,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Hydratation',
                    ),
            ),
        490 =>
            array (
                'name' => 'Manaphy',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 1.4,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Hydratation',
                    ),
            ),
        491 =>
            array (
                'name' => 'Darkrai',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 50.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Mauvais Rêve',
                    ),
            ),
        492 =>
            array (
                'name' => 'Shaymin',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 2.1,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Médic Nature',
                    ),
            ),
        493 =>
            array (
                'name' => 'Arceus',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 320.0,
                'height' => 3.2,
                'abilities' =>
                    array (
                        0 => 'Multi-Type',
                    ),
            ),
        494 =>
            array (
                'name' => 'Victini',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fire',
                    ),
                'weight' => 4.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Victorieux',
                    ),
            ),
        495 =>
            array (
                'name' => 'Vipélierre',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 8.1,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        496 =>
            array (
                'name' => 'Lianaja',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 16.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        497 =>
            array (
                'name' => 'Majaspic',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 63.0,
                'height' => 3.3,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        498 =>
            array (
                'name' => 'Gruikui',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 9.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        499 =>
            array (
                'name' => 'Grotichon',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'fighting',
                    ),
                'weight' => 55.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        500 =>
            array (
                'name' => 'Roitiflam',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'fighting',
                    ),
                'weight' => 150.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        501 =>
            array (
                'name' => 'Moustillon',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 5.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        502 =>
            array (
                'name' => 'Mateloutre',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 24.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        503 =>
            array (
                'name' => 'Clamiral',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 94.6,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        504 =>
            array (
                'name' => 'Ratentif',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 11.6,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Fuite',
                        1 => 'Regard Vif',
                    ),
            ),
        505 =>
            array (
                'name' => 'Miradar',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 27.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Lumiattirance',
                        1 => 'Regard Vif',
                    ),
            ),
        506 =>
            array (
                'name' => 'Ponchiot',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 4.1,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Esprit Vital',
                        1 => 'Ramassage',
                    ),
            ),
        507 =>
            array (
                'name' => 'Ponchien',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 14.7,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Baigne Sable',
                        1 => 'Intimidation',
                    ),
            ),
        508 =>
            array (
                'name' => 'Mastouffe',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 61.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Baigne Sable',
                        1 => 'Intimidation',
                    ),
            ),
        509 =>
            array (
                'name' => 'Chacripan',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 10.1,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Délestage',
                        1 => 'Échauffement',
                    ),
            ),
        510 =>
            array (
                'name' => 'Léopardus',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 37.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Délestage',
                        1 => 'Échauffement',
                    ),
            ),
        511 =>
            array (
                'name' => 'Feuillajou',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 10.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                    ),
            ),
        512 =>
            array (
                'name' => 'Feuiloutan',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 30.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                    ),
            ),
        513 =>
            array (
                'name' => 'Flamajou',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 11.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                    ),
            ),
        514 =>
            array (
                'name' => 'Flamoutan',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 28.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                    ),
            ),
        515 =>
            array (
                'name' => 'Flotajou',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 13.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                    ),
            ),
        516 =>
            array (
                'name' => 'Flotoutan',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 29.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                    ),
            ),
        517 =>
            array (
                'name' => 'Munna',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 23.3,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Prédiction',
                        1 => 'Synchro',
                    ),
            ),
        518 =>
            array (
                'name' => 'Mushana',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 60.5,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Prédiction',
                        1 => 'Synchro',
                    ),
            ),
        519 =>
            array (
                'name' => 'Poichigeon',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 2.1,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Chanceux',
                        1 => 'Cœur de Coq',
                    ),
            ),
        520 =>
            array (
                'name' => 'Colombeau',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 15.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Chanceux',
                        1 => 'Cœur de Coq',
                    ),
            ),
        521 =>
            array (
                'name' => 'Déflaisan',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 29.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Chanceux',
                        1 => 'Cœur de Coq',
                    ),
            ),
        522 =>
            array (
                'name' => 'Zébibron',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 29.8,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Motorisé',
                        1 => 'Paratonnerre',
                    ),
            ),
        523 =>
            array (
                'name' => 'Zéblitz',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 79.5,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Motorisé',
                        1 => 'Paratonnerre',
                    ),
            ),
        524 =>
            array (
                'name' => 'Nodulithe',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 18.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        525 =>
            array (
                'name' => 'Géolithe',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 102.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        526 =>
            array (
                'name' => 'Gigalithe',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 260.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        527 =>
            array (
                'name' => 'Chovsourir',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'flying',
                    ),
                'weight' => 2.1,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Inconscient',
                        1 => 'Maladresse',
                    ),
            ),
        528 =>
            array (
                'name' => 'Rhinolove',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'flying',
                    ),
                'weight' => 10.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Inconscient',
                        1 => 'Maladresse',
                    ),
            ),
        529 =>
            array (
                'name' => 'Rototaupe',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 8.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Baigne Sable',
                        1 => 'Force Sable',
                    ),
            ),
        530 =>
            array (
                'name' => 'Minotaupe',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'steel',
                    ),
                'weight' => 40.4,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Baigne Sable',
                        1 => 'Force Sable',
                    ),
            ),
        531 =>
            array (
                'name' => 'Nanméouïe',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 31.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Cœur Soin',
                        1 => 'Régé-Force',
                    ),
            ),
        532 =>
            array (
                'name' => 'Charpenti',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 12.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Sans Limite',
                    ),
            ),
        533 =>
            array (
                'name' => 'Ouvrifier',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 40.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Sans Limite',
                    ),
            ),
        534 =>
            array (
                'name' => 'Bétochef',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 87.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Cran',
                        1 => 'Sans Limite',
                    ),
            ),
        535 =>
            array (
                'name' => 'Tritonde',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 4.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Hydratation',
                    ),
            ),
        536 =>
            array (
                'name' => 'Batracné',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 17.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Hydratation',
                    ),
            ),
        537 =>
            array (
                'name' => 'Crapustule',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ground',
                    ),
                'weight' => 62.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Glissade',
                        1 => 'Toxitouche',
                    ),
            ),
        538 =>
            array (
                'name' => 'Judokrak',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 55.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Cran',
                    ),
            ),
        539 =>
            array (
                'name' => 'Karaclée',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 51.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Fermeté',
                    ),
            ),
        540 =>
            array (
                'name' => 'Larveyette',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'grass',
                    ),
                'weight' => 2.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Essaim',
                    ),
            ),
        541 =>
            array (
                'name' => 'Couverdure',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'grass',
                    ),
                'weight' => 7.3,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Feuille Garde',
                    ),
            ),
        542 =>
            array (
                'name' => 'Manternel',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'grass',
                    ),
                'weight' => 20.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Essaim',
                    ),
            ),
        543 =>
            array (
                'name' => 'Venipatte',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 5.3,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Point Poison',
                    ),
            ),
        544 =>
            array (
                'name' => 'Scobolide',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 58.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Point Poison',
                    ),
            ),
        545 =>
            array (
                'name' => 'Brutapode',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'poison',
                    ),
                'weight' => 200.5,
                'height' => 2.5,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Point Poison',
                    ),
            ),
        546 =>
            array (
                'name' => 'Doudouvet',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fairy',
                    ),
                'weight' => 0.6,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Farceur',
                        1 => 'Infiltration',
                    ),
            ),
        547 =>
            array (
                'name' => 'Farfaduvet',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fairy',
                    ),
                'weight' => 6.6,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Farceur',
                        1 => 'Infiltration',
                    ),
            ),
        548 =>
            array (
                'name' => 'Chlorobule',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 6.6,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Tempo Perso',
                    ),
            ),
        549 =>
            array (
                'name' => 'Fragilady',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 16.3,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Tempo Perso',
                    ),
            ),
        550 =>
            array (
                'name' => 'Bargantua',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 18.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Adaptabilité',
                        1 => 'Téméraire',
                    ),
            ),
        551 =>
            array (
                'name' => 'Mascaïman',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'dark',
                    ),
                'weight' => 15.2,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Impudence',
                        1 => 'Intimidation',
                    ),
            ),
        552 =>
            array (
                'name' => 'Escroco',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'dark',
                    ),
                'weight' => 33.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Impudence',
                        1 => 'Intimidation',
                    ),
            ),
        553 =>
            array (
                'name' => 'Crocorible',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'dark',
                    ),
                'weight' => 96.3,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Impudence',
                        1 => 'Intimidation',
                    ),
            ),
        554 =>
            array (
                'name' => 'Darumarond',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 37.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                    ),
            ),
        555 =>
            array (
                'name' => 'Darumacho',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 92.9,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Sans Limite',
                    ),
            ),
        556 =>
            array (
                'name' => 'Maracachi',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 28.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Chlorophylle',
                    ),
            ),
        557 =>
            array (
                'name' => 'Crabicoque',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'rock',
                    ),
                'weight' => 14.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Fermeté',
                    ),
            ),
        558 =>
            array (
                'name' => 'Crabaraque',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'rock',
                    ),
                'weight' => 200.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Fermeté',
                    ),
            ),
        559 =>
            array (
                'name' => 'Baggiguane',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'fighting',
                    ),
                'weight' => 11.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Impudence',
                        1 => 'Mue',
                    ),
            ),
        560 =>
            array (
                'name' => 'Baggaïd',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'fighting',
                    ),
                'weight' => 30.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Impudence',
                        1 => 'Mue',
                    ),
            ),
        561 =>
            array (
                'name' => 'Cryptéro',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'flying',
                    ),
                'weight' => 14.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Garde Magik',
                        1 => 'Peau Miracle',
                    ),
            ),
        562 =>
            array (
                'name' => 'Tutafeh',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 1.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Momie',
                    ),
            ),
        563 =>
            array (
                'name' => 'Tutankafer',
                'type' =>
                    array (
                        0 => 'ghost',
                    ),
                'weight' => 76.5,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Momie',
                    ),
            ),
        564 =>
            array (
                'name' => 'Carapagos',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'rock',
                    ),
                'weight' => 16.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Solide Roc',
                    ),
            ),
        565 =>
            array (
                'name' => 'Mégapagos',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'rock',
                    ),
                'weight' => 81.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                        1 => 'Solide Roc',
                    ),
            ),
        566 =>
            array (
                'name' => 'Arkéapti',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'flying',
                    ),
                'weight' => 9.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Défaitiste',
                    ),
            ),
        567 =>
            array (
                'name' => 'Aéroptéryx',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'flying',
                    ),
                'weight' => 32.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Défaitiste',
                    ),
            ),
        568 =>
            array (
                'name' => 'Miamiasme',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 31.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Puanteur',
                    ),
            ),
        569 =>
            array (
                'name' => 'Miasmax',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 107.3,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Armurouillée',
                        1 => 'Puanteur',
                    ),
            ),
        570 =>
            array (
                'name' => 'Zorua',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 12.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Illusion',
                    ),
            ),
        571 =>
            array (
                'name' => 'Zoroark',
                'type' =>
                    array (
                        0 => 'dark',
                    ),
                'weight' => 81.1,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Illusion',
                    ),
            ),
        572 =>
            array (
                'name' => 'Chinchidou',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 5.8,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Joli Sourire',
                        1 => 'Technicien',
                    ),
            ),
        573 =>
            array (
                'name' => 'Pashmilla',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 7.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Joli Sourire',
                        1 => 'Technicien',
                    ),
            ),
        574 =>
            array (
                'name' => 'Scrutella',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 5.8,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Fouille',
                    ),
            ),
        575 =>
            array (
                'name' => 'Mesmérella',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 18.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Fouille',
                    ),
            ),
        576 =>
            array (
                'name' => 'Sidérella',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 44.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Battant',
                        1 => 'Fouille',
                    ),
            ),
        577 =>
            array (
                'name' => 'Nucléos',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 1.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Envelocape',
                        1 => 'Garde Magik',
                    ),
            ),
        578 =>
            array (
                'name' => 'Méios',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 8.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Envelocape',
                        1 => 'Garde Magik',
                    ),
            ),
        579 =>
            array (
                'name' => 'Symbios',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 20.1,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Envelocape',
                        1 => 'Garde Magik',
                    ),
            ),
        580 =>
            array (
                'name' => 'Couaneton',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 5.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Cœur de Coq',
                        1 => 'Regard Vif',
                    ),
            ),
        581 =>
            array (
                'name' => 'Lakmécygne',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'flying',
                    ),
                'weight' => 24.2,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Cœur de Coq',
                        1 => 'Regard Vif',
                    ),
            ),
        582 =>
            array (
                'name' => 'Sorbébé',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 5.7,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                    ),
            ),
        583 =>
            array (
                'name' => 'Sorboul',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 41.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                    ),
            ),
        584 =>
            array (
                'name' => 'Sorbouboul',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 57.5,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                    ),
            ),
        585 =>
            array (
                'name' => 'Vivaldaim',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'grass',
                    ),
                'weight' => 19.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Herbivore',
                    ),
            ),
        586 =>
            array (
                'name' => 'Haydaim',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'grass',
                    ),
                'weight' => 92.5,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Chlorophylle',
                        1 => 'Herbivore',
                    ),
            ),
        587 =>
            array (
                'name' => 'Emolga',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'flying',
                    ),
                'weight' => 5.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Statik',
                    ),
            ),
        588 =>
            array (
                'name' => 'Carabing',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 5.9,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                        1 => 'Mue',
                    ),
            ),
        589 =>
            array (
                'name' => 'Lançargot',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'steel',
                    ),
                'weight' => 33.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Essaim',
                    ),
            ),
        590 =>
            array (
                'name' => 'Trompignon',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 1.0,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Pose Spore',
                    ),
            ),
        591 =>
            array (
                'name' => 'Gaulet',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'poison',
                    ),
                'weight' => 10.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Pose Spore',
                    ),
            ),
        592 =>
            array (
                'name' => 'Viskuse',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ghost',
                    ),
                'weight' => 33.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Corps Maudit',
                    ),
            ),
        593 =>
            array (
                'name' => 'Moyade',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'ghost',
                    ),
                'weight' => 135.0,
                'height' => 2.2,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                        1 => 'Corps Maudit',
                    ),
            ),
        594 =>
            array (
                'name' => 'Mamanbo',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 31.6,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Cœur Soin',
                        1 => 'Hydratation',
                    ),
            ),
        595 =>
            array (
                'name' => 'Statitik',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'electric',
                    ),
                'weight' => 0.6,
                'height' => 0.1,
                'abilities' =>
                    array (
                        0 => 'Œil Composé',
                        1 => 'Tension',
                    ),
            ),
        596 =>
            array (
                'name' => 'Mygavolt',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'electric',
                    ),
                'weight' => 14.3,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Œil Composé',
                        1 => 'Tension',
                    ),
            ),
        597 =>
            array (
                'name' => 'Grindur',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'steel',
                    ),
                'weight' => 18.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Épine de Fer',
                    ),
            ),
        598 =>
            array (
                'name' => 'Noacier',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'steel',
                    ),
                'weight' => 110.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Épine de Fer',
                    ),
            ),
        599 =>
            array (
                'name' => 'Tic',
                'type' =>
                    array (
                        0 => 'steel',
                    ),
                'weight' => 21.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Minus',
                        1 => 'Plus',
                    ),
            ),
        600 =>
            array (
                'name' => 'Clic',
                'type' =>
                    array (
                        0 => 'steel',
                    ),
                'weight' => 51.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Minus',
                        1 => 'Plus',
                    ),
            ),
        601 =>
            array (
                'name' => 'Cliticlic',
                'type' =>
                    array (
                        0 => 'steel',
                    ),
                'weight' => 81.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Minus',
                        1 => 'Plus',
                    ),
            ),
        602 =>
            array (
                'name' => 'Anchwatt',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 0.3,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        603 =>
            array (
                'name' => 'Lampéroie',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 22.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        604 =>
            array (
                'name' => 'Ohmassacre',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 80.5,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        605 =>
            array (
                'name' => 'Lewsor',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 9.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Synchro',
                        1 => 'Télépathe',
                    ),
            ),
        606 =>
            array (
                'name' => 'Neitram',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 34.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Synchro',
                        1 => 'Télépathe',
                    ),
            ),
        607 =>
            array (
                'name' => 'Funécire',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'fire',
                    ),
                'weight' => 3.1,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                        1 => 'Torche',
                    ),
            ),
        608 =>
            array (
                'name' => 'Mélancolux',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'fire',
                    ),
                'weight' => 13.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                        1 => 'Torche',
                    ),
            ),
        609 =>
            array (
                'name' => 'Lugulabre',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'fire',
                    ),
                'weight' => 34.3,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                        1 => 'Torche',
                    ),
            ),
        610 =>
            array (
                'name' => 'Coupenotte',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 18.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                        1 => 'Rivalité',
                    ),
            ),
        611 =>
            array (
                'name' => 'Incisache',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 36.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                        1 => 'Rivalité',
                    ),
            ),
        612 =>
            array (
                'name' => 'Tranchodon',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 105.5,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                        1 => 'Rivalité',
                    ),
            ),
        613 =>
            array (
                'name' => 'Polarhume',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 8.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Rideau Neige',
                    ),
            ),
        614 =>
            array (
                'name' => 'Polagriffe',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 260.0,
                'height' => 2.6,
                'abilities' =>
                    array (
                        0 => 'Rideau Neige',
                    ),
            ),
        615 =>
            array (
                'name' => 'Hexagel',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 148.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        616 =>
            array (
                'name' => 'Escargaume',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 7.7,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                        1 => 'Hydratation',
                    ),
            ),
        617 =>
            array (
                'name' => 'Limaspeed',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 25.3,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Glue',
                        1 => 'Hydratation',
                    ),
            ),
        618 =>
            array (
                'name' => 'Limonde',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'electric',
                    ),
                'weight' => 11.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Échauffement',
                        1 => 'Statik',
                    ),
            ),
        619 =>
            array (
                'name' => 'Kungfouine',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 20.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Régé-Force',
                    ),
            ),
        620 =>
            array (
                'name' => 'Shaofouine',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 35.5,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Régé-Force',
                    ),
            ),
        621 =>
            array (
                'name' => 'Drakkarmin',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 139.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Peau Dure',
                        1 => 'Sans Limite',
                    ),
            ),
        622 =>
            array (
                'name' => 'Gringolem',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'ghost',
                    ),
                'weight' => 92.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Maladresse',
                        1 => 'Poing de Fer',
                    ),
            ),
        623 =>
            array (
                'name' => 'Golemastoc',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'ghost',
                    ),
                'weight' => 330.0,
                'height' => 2.8,
                'abilities' =>
                    array (
                        0 => 'Maladresse',
                        1 => 'Poing de Fer',
                    ),
            ),
        624 =>
            array (
                'name' => 'Scalpion',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'steel',
                    ),
                'weight' => 10.2,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Acharné',
                        1 => 'Attention',
                    ),
            ),
        625 =>
            array (
                'name' => 'Scalproie',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'steel',
                    ),
                'weight' => 70.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Acharné',
                        1 => 'Attention',
                    ),
            ),
        626 =>
            array (
                'name' => 'Frison',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 94.6,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Herbivore',
                        1 => 'Téméraire',
                    ),
            ),
        627 =>
            array (
                'name' => 'Furaiglon',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 10.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                        1 => 'Sans Limite',
                    ),
            ),
        628 =>
            array (
                'name' => 'Gueriaigle',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 41.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Regard Vif',
                        1 => 'Sans Limite',
                    ),
            ),
        629 =>
            array (
                'name' => 'Vostourno',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'flying',
                    ),
                'weight' => 9.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Cœur de Coq',
                        1 => 'Envelocape',
                    ),
            ),
        630 =>
            array (
                'name' => 'Vaututrice',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'flying',
                    ),
                'weight' => 39.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Cœur de Coq',
                        1 => 'Envelocape',
                    ),
            ),
        631 =>
            array (
                'name' => 'Aflamanoir',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 58.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Gloutonnerie',
                        1 => 'Torche',
                    ),
            ),
        632 =>
            array (
                'name' => 'Fermite',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'steel',
                    ),
                'weight' => 33.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                        1 => 'Essaim',
                    ),
            ),
        633 =>
            array (
                'name' => 'Solochi',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'dragon',
                    ),
                'weight' => 17.3,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                    ),
            ),
        634 =>
            array (
                'name' => 'Diamat',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'dragon',
                    ),
                'weight' => 50.0,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Agitation',
                    ),
            ),
        635 =>
            array (
                'name' => 'Trioxhydre',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'dragon',
                    ),
                'weight' => 160.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        636 =>
            array (
                'name' => 'Pyronille',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fire',
                    ),
                'weight' => 28.8,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        637 =>
            array (
                'name' => 'Pyrax',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fire',
                    ),
                'weight' => 46.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        638 =>
            array (
                'name' => 'Cobaltium',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'fighting',
                    ),
                'weight' => 250.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Cœur Noble',
                    ),
            ),
        639 =>
            array (
                'name' => 'Terrakium',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'fighting',
                    ),
                'weight' => 260.0,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Cœur Noble',
                    ),
            ),
        640 =>
            array (
                'name' => 'Viridium',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fighting',
                    ),
                'weight' => 200.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Cœur Noble',
                    ),
            ),
        641 =>
            array (
                'name' => 'Boréas',
                'type' =>
                    array (
                        0 => 'flying',
                    ),
                'weight' => 63.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Farceur',
                    ),
            ),
        642 =>
            array (
                'name' => 'Fulguris',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'flying',
                    ),
                'weight' => 61.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Farceur',
                    ),
            ),
        643 =>
            array (
                'name' => 'Reshiram',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'fire',
                    ),
                'weight' => 330.0,
                'height' => 3.2,
                'abilities' =>
                    array (
                        0 => 'TurboBrasier',
                    ),
            ),
        644 =>
            array (
                'name' => 'Zekrom',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'electric',
                    ),
                'weight' => 345.0,
                'height' => 2.9,
                'abilities' =>
                    array (
                        0 => 'Téra-Voltage',
                    ),
            ),
        645 =>
            array (
                'name' => 'Démétéros',
                'type' =>
                    array (
                        0 => 'ground',
                        1 => 'flying',
                    ),
                'weight' => 68.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Force Sable',
                    ),
            ),
        646 =>
            array (
                'name' => 'Kyurem',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'ice',
                    ),
                'weight' => 325.0,
                'height' => 3.0,
                'abilities' =>
                    array (
                        0 => 'Pression',
                    ),
            ),
        647 =>
            array (
                'name' => 'Keldeo',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'fighting',
                    ),
                'weight' => 48.5,
                'height' => 1.4,
                'abilities' =>
                    array (
                        0 => 'Cœur Noble',
                    ),
            ),
        648 =>
            array (
                'name' => 'Meloetta',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'psychic',
                    ),
                'weight' => 6.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Sérénité',
                    ),
            ),
        649 =>
            array (
                'name' => 'Genesect',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'steel',
                    ),
                'weight' => 82.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Télécharge',
                    ),
            ),
        650 =>
            array (
                'name' => 'Marisson',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 9.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        651 =>
            array (
                'name' => 'Boguérisse',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 29.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        652 =>
            array (
                'name' => 'Blindépique',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fighting',
                    ),
                'weight' => 90.0,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        653 =>
            array (
                'name' => 'Feunnec',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 9.4,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        654 =>
            array (
                'name' => 'Roussil',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 14.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        655 =>
            array (
                'name' => 'Goupelin',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'psychic',
                    ),
                'weight' => 39.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        656 =>
            array (
                'name' => 'Grenousse',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 7.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        657 =>
            array (
                'name' => 'Croâporal',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 10.9,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        658 =>
            array (
                'name' => 'Amphinobi',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'dark',
                    ),
                'weight' => 40.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        659 =>
            array (
                'name' => 'Sapereau',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 5.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Bajoues',
                        1 => 'Ramassage',
                    ),
            ),
        660 =>
            array (
                'name' => 'Excavarenne',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'ground',
                    ),
                'weight' => 42.4,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Bajoues',
                        1 => 'Ramassage',
                    ),
            ),
        661 =>
            array (
                'name' => 'Passerouge',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 1.7,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Cœur de Coq',
                    ),
            ),
        662 =>
            array (
                'name' => 'Braisillon',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'flying',
                    ),
                'weight' => 16.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        663 =>
            array (
                'name' => 'Flambusard',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'flying',
                    ),
                'weight' => 24.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Corps Ardent',
                    ),
            ),
        664 =>
            array (
                'name' => 'Lépidonille',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 2.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                        1 => 'Œil Composé',
                    ),
            ),
        665 =>
            array (
                'name' => 'Pérégrain',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 8.4,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Mue',
                    ),
            ),
        666 =>
            array (
                'name' => 'Prismillon',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'flying',
                    ),
                'weight' => 17.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Écran Poudre',
                        1 => 'Œil Composé',
                    ),
            ),
        667 =>
            array (
                'name' => 'Hélionceau',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'normal',
                    ),
                'weight' => 13.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Rivalité',
                        1 => 'Tension',
                    ),
            ),
        668 =>
            array (
                'name' => 'Némélios',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'normal',
                    ),
                'weight' => 81.5,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Rivalité',
                        1 => 'Tension',
                    ),
            ),
        669 =>
            array (
                'name' => 'Flabébé',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 0.1,
                'height' => 0.1,
                'abilities' =>
                    array (
                        0 => 'Flora-Voile',
                    ),
            ),
        670 =>
            array (
                'name' => 'FLOETTE',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 0.9,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Flora-Voile',
                    ),
            ),
        671 =>
            array (
                'name' => 'Florges',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 10.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Flora-Voile',
                    ),
            ),
        672 =>
            array (
                'name' => 'Cabriolaine',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 31.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Herbivore',
                    ),
            ),
        673 =>
            array (
                'name' => 'Chevroum',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 91.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Herbivore',
                    ),
            ),
        674 =>
            array (
                'name' => 'Pandespiègle',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 8.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                        1 => 'Poing de Fer',
                    ),
            ),
        675 =>
            array (
                'name' => 'Pandarbare',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'dark',
                    ),
                'weight' => 136.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Brise Moule',
                        1 => 'Poing de Fer',
                    ),
            ),
        676 =>
            array (
                'name' => 'Couafarel',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 28.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Toison Épaisse',
                    ),
            ),
        677 =>
            array (
                'name' => 'Psystigri',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 3.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Infiltration',
                        1 => 'Regard Vif',
                    ),
            ),
        678 =>
            array (
                'name' => 'Mistigrix',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 8.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Infiltration',
                        1 => 'Regard Vif',
                    ),
            ),
        679 =>
            array (
                'name' => 'Monorpale',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'ghost',
                    ),
                'weight' => 2.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Annule Garde',
                    ),
            ),
        680 =>
            array (
                'name' => 'Dimoclès',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'ghost',
                    ),
                'weight' => 4.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Annule Garde',
                    ),
            ),
        681 =>
            array (
                'name' => 'Exagide',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'ghost',
                    ),
                'weight' => 53.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Déclic Tactique',
                    ),
            ),
        682 =>
            array (
                'name' => 'Fluvetin',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 0.5,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Cœur Soin',
                    ),
            ),
        683 =>
            array (
                'name' => 'Cocotine',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 15.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Cœur Soin',
                    ),
            ),
        684 =>
            array (
                'name' => 'Sucroquin',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 3.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Gluco-Voile',
                    ),
            ),
        685 =>
            array (
                'name' => 'Cupcanaille',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 5.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Gluco-Voile',
                    ),
            ),
        686 =>
            array (
                'name' => 'Sepiatop',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'psychic',
                    ),
                'weight' => 3.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Contestation',
                        1 => 'Ventouse',
                    ),
            ),
        687 =>
            array (
                'name' => 'Sepiatroce',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'psychic',
                    ),
                'weight' => 47.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Contestation',
                        1 => 'Ventouse',
                    ),
            ),
        688 =>
            array (
                'name' => 'Opermine',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'water',
                    ),
                'weight' => 31.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Griffe Dure',
                        1 => 'Sniper',
                    ),
            ),
        689 =>
            array (
                'name' => 'Golgopathe',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'water',
                    ),
                'weight' => 96.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Griffe Dure',
                        1 => 'Sniper',
                    ),
            ),
        690 =>
            array (
                'name' => 'Venalgue',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'water',
                    ),
                'weight' => 7.3,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Toxitouche',
                    ),
            ),
        691 =>
            array (
                'name' => 'Kravarech',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'dragon',
                    ),
                'weight' => 81.5,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Point Poison',
                        1 => 'Toxitouche',
                    ),
            ),
        692 =>
            array (
                'name' => 'Flingouste',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 8.3,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Méga Blaster',
                    ),
            ),
        693 =>
            array (
                'name' => 'Gamblast',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 35.3,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Méga Blaster',
                    ),
            ),
        694 =>
            array (
                'name' => 'Galvaran',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'normal',
                    ),
                'weight' => 6.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Peau Sèche',
                        1 => 'Voile Sable',
                    ),
            ),
        695 =>
            array (
                'name' => 'Iguolta',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'normal',
                    ),
                'weight' => 21.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Peau Sèche',
                        1 => 'Voile Sable',
                    ),
            ),
        696 =>
            array (
                'name' => 'Ptyranidur',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'dragon',
                    ),
                'weight' => 26.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Prognathe',
                    ),
            ),
        697 =>
            array (
                'name' => 'Rexillius',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'dragon',
                    ),
                'weight' => 270.0,
                'height' => 2.5,
                'abilities' =>
                    array (
                        0 => 'Prognathe',
                    ),
            ),
        698 =>
            array (
                'name' => 'Amagara',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ice',
                    ),
                'weight' => 25.2,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Peau Gelée',
                    ),
            ),
        699 =>
            array (
                'name' => 'Dragmara',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'ice',
                    ),
                'weight' => 225.0,
                'height' => 2.7,
                'abilities' =>
                    array (
                        0 => 'Peau Gelée',
                    ),
            ),
        700 =>
            array (
                'name' => 'Nymphali',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 23.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Joli Sourire',
                    ),
            ),
        701 =>
            array (
                'name' => 'Brutalibré',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'flying',
                    ),
                'weight' => 21.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Délestage',
                        1 => 'Échauffement',
                    ),
            ),
        702 =>
            array (
                'name' => 'DEDENNE',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'fairy',
                    ),
                'weight' => 2.2,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Bajoues',
                        1 => 'Ramassage',
                    ),
            ),
        703 =>
            array (
                'name' => 'Strassie',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'fairy',
                    ),
                'weight' => 5.7,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        704 =>
            array (
                'name' => 'Mucuscule',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 2.8,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Herbivore',
                        1 => 'Hydratation',
                    ),
            ),
        705 =>
            array (
                'name' => 'Colimucus',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 17.5,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Herbivore',
                        1 => 'Hydratation',
                    ),
            ),
        706 =>
            array (
                'name' => 'Muplodocus',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 150.5,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Herbivore',
                        1 => 'Hydratation',
                    ),
            ),
        707 =>
            array (
                'name' => 'Trousselin',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'fairy',
                    ),
                'weight' => 3.0,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Farceur',
                    ),
            ),
        708 =>
            array (
                'name' => 'Brocélôme',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'grass',
                    ),
                'weight' => 7.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Médic Nature',
                    ),
            ),
        709 =>
            array (
                'name' => 'Desséliande',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'grass',
                    ),
                'weight' => 71.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Médic Nature',
                    ),
            ),
        710 =>
            array (
                'name' => 'Pitrouille',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'grass',
                    ),
                'weight' => 5.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Ramassage',
                    ),
            ),
        711 =>
            array (
                'name' => 'Banshitrouye',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'grass',
                    ),
                'weight' => 12.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Ramassage',
                    ),
            ),
        712 =>
            array (
                'name' => 'Grelaçon',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 99.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                        1 => 'Tempo Perso',
                    ),
            ),
        713 =>
            array (
                'name' => 'Séracrawl',
                'type' =>
                    array (
                        0 => 'ice',
                    ),
                'weight' => 505.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Corps Gel',
                        1 => 'Tempo Perso',
                    ),
            ),
        714 =>
            array (
                'name' => 'Sonistrelle',
                'type' =>
                    array (
                        0 => 'flying',
                        1 => 'dragon',
                    ),
                'weight' => 8.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Infiltration',
                    ),
            ),
        715 =>
            array (
                'name' => 'Bruyverne',
                'type' =>
                    array (
                        0 => 'flying',
                        1 => 'dragon',
                    ),
                'weight' => 85.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Fouille',
                        1 => 'Infiltration',
                    ),
            ),
        716 =>
            array (
                'name' => 'Xerneas',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 215.0,
                'height' => 3.0,
                'abilities' =>
                    array (
                        0 => 'Aura Féérique',
                    ),
            ),
        717 =>
            array (
                'name' => 'Yveltal',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'flying',
                    ),
                'weight' => 203.0,
                'height' => 5.8,
                'abilities' =>
                    array (
                        0 => 'Aura Ténébreuse',
                    ),
            ),
        718 =>
            array (
                'name' => 'Zygarde',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'ground',
                    ),
                'weight' => 305.0,
                'height' => 5.0,
                'abilities' =>
                    array (
                        0 => 'Aura Inversée',
                    ),
            ),
        719 =>
            array (
                'name' => 'Diancie',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'fairy',
                    ),
                'weight' => 8.8,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Corps Sain',
                    ),
            ),
        720 =>
            array (
                'name' => 'Hoopa',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'ghost',
                    ),
                'weight' => 9.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Magicien',
                    ),
            ),
        721 =>
            array (
                'name' => 'Volcanion',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'water',
                    ),
                'weight' => 195.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Absorb Eau',
                    ),
            ),
        722 =>
            array (
                'name' => 'Brindibou',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'flying',
                    ),
                'weight' => 1.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        723 =>
            array (
                'name' => 'Efflèche',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'flying',
                    ),
                'weight' => 16.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        724 =>
            array (
                'name' => 'Archéduc',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'ghost',
                    ),
                'weight' => 36.6,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Engrais',
                    ),
            ),
        725 =>
            array (
                'name' => 'Flamiaou',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 4.3,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        726 =>
            array (
                'name' => 'Matoufeu',
                'type' =>
                    array (
                        0 => 'fire',
                    ),
                'weight' => 25.0,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        727 =>
            array (
                'name' => 'Félinferno',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'dark',
                    ),
                'weight' => 83.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Brasier',
                    ),
            ),
        728 =>
            array (
                'name' => 'Otaquin',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 7.5,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        729 =>
            array (
                'name' => 'Otarlette',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 17.5,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        730 =>
            array (
                'name' => 'Oratoria',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'fairy',
                    ),
                'weight' => 44.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Torrent',
                    ),
            ),
        731 =>
            array (
                'name' => 'Picassaut',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 1.2,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Multi-Coups',
                        1 => 'Regard Vif',
                    ),
            ),
        732 =>
            array (
                'name' => 'Piclairon',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 14.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Multi-Coups',
                        1 => 'Regard Vif',
                    ),
            ),
        733 =>
            array (
                'name' => 'Bazoucan',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'flying',
                    ),
                'weight' => 26.0,
                'height' => 1.1,
                'abilities' =>
                    array (
                        0 => 'Multi-Coups',
                        1 => 'Regard Vif',
                    ),
            ),
        734 =>
            array (
                'name' => 'Manglouton',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 6.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Filature',
                        1 => 'Prognathe',
                    ),
            ),
        735 =>
            array (
                'name' => 'Argouste',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 14.2,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Filature',
                        1 => 'Prognathe',
                    ),
            ),
        736 =>
            array (
                'name' => 'Larvibule',
                'type' =>
                    array (
                        0 => 'bug',
                    ),
                'weight' => 4.4,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Essaim',
                    ),
            ),
        737 =>
            array (
                'name' => 'Chrysapile',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'electric',
                    ),
                'weight' => 10.5,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Batterie',
                    ),
            ),
        738 =>
            array (
                'name' => 'Lucanon',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'electric',
                    ),
                'weight' => 45.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Lévitation',
                    ),
            ),
        739 =>
            array (
                'name' => 'Crabagarre',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 7.0,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Hyper Cutter',
                        1 => 'Poing de Fer',
                    ),
            ),
        740 =>
            array (
                'name' => 'Crabominable',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'ice',
                    ),
                'weight' => 180.0,
                'height' => 1.7,
                'abilities' =>
                    array (
                        0 => 'Hyper Cutter',
                        1 => 'Poing de Fer',
                    ),
            ),
        741 =>
            array (
                'name' => 'Plumeline',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'flying',
                    ),
                'weight' => 3.4,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Danseuse',
                    ),
            ),
        742 =>
            array (
                'name' => 'Bombydou',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fairy',
                    ),
                'weight' => 0.2,
                'height' => 0.1,
                'abilities' =>
                    array (
                        0 => 'Cherche Miel',
                        1 => 'Écran Poudre',
                    ),
            ),
        743 =>
            array (
                'name' => 'Rubombelle',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fairy',
                    ),
                'weight' => 0.5,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Cherche Miel',
                        1 => 'Écran Poudre',
                    ),
            ),
        744 =>
            array (
                'name' => 'Rocabot',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 9.2,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Esprit Vital',
                        1 => 'Regard Vif',
                    ),
            ),
        745 =>
            array (
                'name' => 'Lougaroc',
                'type' =>
                    array (
                        0 => 'rock',
                    ),
                'weight' => 25.0,
                'height' => 0.8,
                'abilities' =>
                    array (
                        0 => 'Baigne Sable',
                        1 => 'Regard Vif',
                    ),
            ),
        746 =>
            array (
                'name' => 'Froussardine',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 0.3,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Banc',
                    ),
            ),
        747 =>
            array (
                'name' => 'Vorastérie',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'water',
                    ),
                'weight' => 8.0,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Cruauté',
                        1 => 'Échauffement',
                    ),
            ),
        748 =>
            array (
                'name' => 'Prédastérie',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'water',
                    ),
                'weight' => 14.5,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Cruauté',
                        1 => 'Échauffement',
                    ),
            ),
        749 =>
            array (
                'name' => 'Tiboudet',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 110.0,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Endurance',
                        1 => 'Tempo Perso',
                    ),
            ),
        750 =>
            array (
                'name' => 'Bourrinos',
                'type' =>
                    array (
                        0 => 'ground',
                    ),
                'weight' => 920.0,
                'height' => 2.5,
                'abilities' =>
                    array (
                        0 => 'Endurance',
                        1 => 'Tempo Perso',
                    ),
            ),
        751 =>
            array (
                'name' => 'Araqua',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'bug',
                    ),
                'weight' => 4.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Aquabulle',
                    ),
            ),
        752 =>
            array (
                'name' => 'Tarenbulle',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'bug',
                    ),
                'weight' => 82.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Aquabulle',
                    ),
            ),
        753 =>
            array (
                'name' => 'Mimantis',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 1.5,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Feuille Garde',
                    ),
            ),
        754 =>
            array (
                'name' => 'Floramantis',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 18.5,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Feuille Garde',
                    ),
            ),
        755 =>
            array (
                'name' => 'Spododo',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fairy',
                    ),
                'weight' => 1.5,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Lumiattirance',
                        1 => 'Pose Spore',
                    ),
            ),
        756 =>
            array (
                'name' => 'Lampignon',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fairy',
                    ),
                'weight' => 11.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Lumiattirance',
                        1 => 'Pose Spore',
                    ),
            ),
        757 =>
            array (
                'name' => 'Tritox',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'fire',
                    ),
                'weight' => 4.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Corrosion',
                    ),
            ),
        758 =>
            array (
                'name' => 'Malamandre',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'fire',
                    ),
                'weight' => 22.2,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Corrosion',
                    ),
            ),
        759 =>
            array (
                'name' => 'Nounourson',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'fighting',
                    ),
                'weight' => 6.8,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Boule de Poils',
                        1 => 'Maladresse',
                    ),
            ),
        760 =>
            array (
                'name' => 'Chelours',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'fighting',
                    ),
                'weight' => 135.0,
                'height' => 2.1,
                'abilities' =>
                    array (
                        0 => 'Boule de Poils',
                        1 => 'Maladresse',
                    ),
            ),
        761 =>
            array (
                'name' => 'Croquine',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 3.2,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Feuille Garde',
                    ),
            ),
        762 =>
            array (
                'name' => 'Candine',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 8.2,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Benêt',
                        1 => 'Feuille Garde',
                    ),
            ),
        763 =>
            array (
                'name' => 'Sucreine',
                'type' =>
                    array (
                        0 => 'grass',
                    ),
                'weight' => 21.4,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Feuille Garde',
                        1 => 'Prestance Royale',
                    ),
            ),
        764 =>
            array (
                'name' => 'Guérilande',
                'type' =>
                    array (
                        0 => 'fairy',
                    ),
                'weight' => 0.3,
                'height' => 0.1,
                'abilities' =>
                    array (
                        0 => 'Flora-Voile',
                        1 => 'Prioguérison',
                    ),
            ),
        765 =>
            array (
                'name' => 'Gouroutan',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'psychic',
                    ),
                'weight' => 76.0,
                'height' => 1.5,
                'abilities' =>
                    array (
                        0 => 'Attention',
                        1 => 'Télépathe',
                    ),
            ),
        766 =>
            array (
                'name' => 'Quartermac',
                'type' =>
                    array (
                        0 => 'fighting',
                    ),
                'weight' => 82.8,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Receveur',
                    ),
            ),
        767 =>
            array (
                'name' => 'Sovkipou',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'water',
                    ),
                'weight' => 12.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Escampette',
                    ),
            ),
        768 =>
            array (
                'name' => 'Sarmuraï',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'water',
                    ),
                'weight' => 108.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Repli Tactique',
                    ),
            ),
        769 =>
            array (
                'name' => 'Bacabouh',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'ground',
                    ),
                'weight' => 70.0,
                'height' => 0.5,
                'abilities' =>
                    array (
                        0 => 'Sable Humide',
                    ),
            ),
        770 =>
            array (
                'name' => 'Trépassable',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'ground',
                    ),
                'weight' => 250.0,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Sable Humide',
                    ),
            ),
        771 =>
            array (
                'name' => 'Concombaffe',
                'type' =>
                    array (
                        0 => 'water',
                    ),
                'weight' => 1.2,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Expuls\'Organes',
                    ),
            ),
        772 =>
            array (
                'name' => 'Type:0',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 120.5,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Armurbaston',
                    ),
            ),
        773 =>
            array (
                'name' => 'Silvallié',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 100.5,
                'height' => 2.3,
                'abilities' =>
                    array (
                        0 => 'Système Alpha',
                    ),
            ),
        774 =>
            array (
                'name' => 'Météno',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'flying',
                    ),
                'weight' => 40.0,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Bouclier-Carcan',
                    ),
            ),
        775 =>
            array (
                'name' => 'Dodoala',
                'type' =>
                    array (
                        0 => 'normal',
                    ),
                'weight' => 19.9,
                'height' => 0.4,
                'abilities' =>
                    array (
                        0 => 'Hypersommeil',
                    ),
            ),
        776 =>
            array (
                'name' => 'Boumata',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'dragon',
                    ),
                'weight' => 212.0,
                'height' => 2.0,
                'abilities' =>
                    array (
                        0 => 'Coque Armure',
                    ),
            ),
        777 =>
            array (
                'name' => 'Togedemaru',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'steel',
                    ),
                'weight' => 3.3,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Épine de Fer',
                        1 => 'Paratonnerre',
                    ),
            ),
        778 =>
            array (
                'name' => 'Mimiqui',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'fairy',
                    ),
                'weight' => 0.7,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Fantômasque',
                    ),
            ),
        779 =>
            array (
                'name' => 'Denticrisse',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'psychic',
                    ),
                'weight' => 19.0,
                'height' => 0.9,
                'abilities' =>
                    array (
                        0 => 'Corps Coloré',
                        1 => 'Prognathe',
                    ),
            ),
        780 =>
            array (
                'name' => 'Draïeul',
                'type' =>
                    array (
                        0 => 'normal',
                        1 => 'dragon',
                    ),
                'weight' => 185.0,
                'height' => 3.0,
                'abilities' =>
                    array (
                        0 => 'Dracolère',
                        1 => 'Herbivore',
                    ),
            ),
        781 =>
            array (
                'name' => 'Sinistrail',
                'type' =>
                    array (
                        0 => 'ghost',
                        1 => 'grass',
                    ),
                'weight' => 210.0,
                'height' => 3.9,
                'abilities' =>
                    array (
                        0 => 'Expert Acier',
                    ),
            ),
        782 =>
            array (
                'name' => 'Bébécaille',
                'type' =>
                    array (
                        0 => 'dragon',
                    ),
                'weight' => 29.7,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Pare-Balles',
                    ),
            ),
        783 =>
            array (
                'name' => 'Écaïd',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'fighting',
                    ),
                'weight' => 47.0,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Pare-Balles',
                    ),
            ),
        784 =>
            array (
                'name' => 'Ékaïser',
                'type' =>
                    array (
                        0 => 'dragon',
                        1 => 'fighting',
                    ),
                'weight' => 78.2,
                'height' => 1.6,
                'abilities' =>
                    array (
                        0 => 'Anti-Bruit',
                        1 => 'Pare-Balles',
                    ),
            ),
        785 =>
            array (
                'name' => 'Tokorico',
                'type' =>
                    array (
                        0 => 'electric',
                        1 => 'fairy',
                    ),
                'weight' => 20.5,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Créa-Élec',
                    ),
            ),
        786 =>
            array (
                'name' => 'Tokopiyon',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'fairy',
                    ),
                'weight' => 18.6,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Créa-Psy',
                    ),
            ),
        787 =>
            array (
                'name' => 'Tokotoro',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'fairy',
                    ),
                'weight' => 45.5,
                'height' => 1.9,
                'abilities' =>
                    array (
                        0 => 'Créa-Herbe',
                    ),
            ),
        788 =>
            array (
                'name' => 'Tokopisco',
                'type' =>
                    array (
                        0 => 'water',
                        1 => 'fairy',
                    ),
                'weight' => 21.2,
                'height' => 1.3,
                'abilities' =>
                    array (
                        0 => 'Créa-Brume',
                    ),
            ),
        789 =>
            array (
                'name' => 'Cosmog',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 0.1,
                'height' => 0.2,
                'abilities' =>
                    array (
                        0 => 'Inconscient',
                    ),
            ),
        790 =>
            array (
                'name' => 'Cosmovum',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 999.9,
                'height' => 0.1,
                'abilities' =>
                    array (
                        0 => 'Fermeté',
                    ),
            ),
        791 =>
            array (
                'name' => 'Solgaleo',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'steel',
                    ),
                'weight' => 230.0,
                'height' => 3.4,
                'abilities' =>
                    array (
                        0 => 'Métallo-Garde',
                    ),
            ),
        792 =>
            array (
                'name' => 'Lunala',
                'type' =>
                    array (
                        0 => 'psychic',
                        1 => 'ghost',
                    ),
                'weight' => 120.0,
                'height' => 4.0,
                'abilities' =>
                    array (
                        0 => 'Spectro-Bouclier',
                    ),
            ),
        793 =>
            array (
                'name' => 'Zéroïd',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'poison',
                    ),
                'weight' => 55.5,
                'height' => 1.2,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        794 =>
            array (
                'name' => 'Mouscoto',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fighting',
                    ),
                'weight' => 333.6,
                'height' => 2.4,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        795 =>
            array (
                'name' => 'Cancrelove',
                'type' =>
                    array (
                        0 => 'bug',
                        1 => 'fighting',
                    ),
                'weight' => 25.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        796 =>
            array (
                'name' => 'Câblifère',
                'type' =>
                    array (
                        0 => 'electric',
                    ),
                'weight' => 100.0,
                'height' => 3.8,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        797 =>
            array (
                'name' => 'Bamboiselle',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'flying',
                    ),
                'weight' => 999.9,
                'height' => 9.2,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        798 =>
            array (
                'name' => 'Katagami',
                'type' =>
                    array (
                        0 => 'grass',
                        1 => 'steel',
                    ),
                'weight' => 0.1,
                'height' => 0.3,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        799 =>
            array (
                'name' => 'Engloutyran',
                'type' =>
                    array (
                        0 => 'dark',
                        1 => 'dragon',
                    ),
                'weight' => 888.0,
                'height' => 5.5,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        800 =>
            array (
                'name' => 'Necrozma',
                'type' =>
                    array (
                        0 => 'psychic',
                    ),
                'weight' => 230.0,
                'height' => 2.4,
                'abilities' =>
                    array (
                        0 => 'Prisme-Armure',
                    ),
            ),
        801 =>
            array (
                'name' => 'Magearna',
                'type' =>
                    array (
                        0 => 'steel',
                        1 => 'fairy',
                    ),
                'weight' => 80.5,
                'height' => 1.0,
                'abilities' =>
                    array (
                        0 => 'Animacœur',
                    ),
            ),
        802 =>
            array (
                'name' => 'Marshadow',
                'type' =>
                    array (
                        0 => 'fighting',
                        1 => 'ghost',
                    ),
                'weight' => 22.2,
                'height' => 0.7,
                'abilities' =>
                    array (
                        0 => 'Technicien',
                    ),
            ),
        803 =>
            array (
                'name' => 'Vémini',
                'type' =>
                    array (
                        0 => 'poison',
                    ),
                'weight' => 1.8,
                'height' => 0.6,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        804 =>
            array (
                'name' => 'Mandrillon',
                'type' =>
                    array (
                        0 => 'poison',
                        1 => 'dragon',
                    ),
                'weight' => 150.0,
                'height' => 3.6,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        805 =>
            array (
                'name' => 'Ama-Ama',
                'type' =>
                    array (
                        0 => 'rock',
                        1 => 'steel',
                    ),
                'weight' => 820.0,
                'height' => 5.5,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
        806 =>
            array (
                'name' => 'Pierroteknik',
                'type' =>
                    array (
                        0 => 'fire',
                        1 => 'ghost',
                    ),
                'weight' => 13.0,
                'height' => 1.8,
                'abilities' =>
                    array (
                        0 => 'Boost Chimère',
                    ),
            ),
    ];

    }


}
