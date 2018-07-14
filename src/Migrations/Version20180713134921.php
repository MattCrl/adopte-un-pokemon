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
            INSERT INTO pokemon (name, height, weight, type, ability, image) 
            VALUES (
            "' . $pokemon['name'] . '", 
            "' . $pokemon['height'] .'", 
            "' . $pokemon['weight'] .'",
            "' . $pokemon['type'][0] . '",
            "' . $pokemon['abilities'][0] . '",
            "' . $pokemon['image'] . '"
            
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
        return

            array (
                1 =>
                    array (
                        'name' => 'Bulbizarre',
                        'weight' => 6.9,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png',
                    ),
                2 =>
                    array (
                        'name' => 'Herbizarre',
                        'weight' => 13.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/002.png',
                    ),
                3 =>
                    array (
                        'name' => 'Florizarre',
                        'weight' => 100.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/003.png',
                    ),
                4 =>
                    array (
                        'name' => 'Salamèche',
                        'weight' => 8.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/004.png',
                    ),
                5 =>
                    array (
                        'name' => 'Reptincel',
                        'weight' => 19.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/005.png',
                    ),
                6 =>
                    array (
                        'name' => 'Dracaufeu',
                        'weight' => 90.5,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/006.png',
                    ),
                7 =>
                    array (
                        'name' => 'Carapuce',
                        'weight' => 9.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png',
                    ),
                8 =>
                    array (
                        'name' => 'Carabaffe',
                        'weight' => 22.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/008.png',
                    ),
                9 =>
                    array (
                        'name' => 'Tortank',
                        'weight' => 85.5,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/009.png',
                    ),
                10 =>
                    array (
                        'name' => 'Chenipan',
                        'weight' => 2.9,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/010.png',
                    ),
                11 =>
                    array (
                        'name' => 'Chrysacier',
                        'weight' => 9.9,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/011.png',
                    ),
                12 =>
                    array (
                        'name' => 'Papilusion',
                        'weight' => 32.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Œil Composé',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/012.png',
                    ),
                13 =>
                    array (
                        'name' => 'Aspicot',
                        'weight' => 3.2,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/013.png',
                    ),
                14 =>
                    array (
                        'name' => 'Coconfort',
                        'weight' => 10.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/014.png',
                    ),
                15 =>
                    array (
                        'name' => 'Dardargnan',
                        'weight' => 29.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/015.png',
                    ),
                16 =>
                    array (
                        'name' => 'Roucool',
                        'weight' => 1.8,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pieds Confus',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/016.png',
                    ),
                17 =>
                    array (
                        'name' => 'Roucoups',
                        'weight' => 30.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pieds Confus',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/017.png',
                    ),
                18 =>
                    array (
                        'name' => 'Roucarnage',
                        'weight' => 39.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pieds Confus',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/018.png',
                    ),
                19 =>
                    array (
                        'name' => 'Rattata',
                        'weight' => 3.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Fuite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/019.png',
                    ),
                20 =>
                    array (
                        'name' => 'Rattatac',
                        'weight' => 18.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Fuite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/020.png',
                    ),
                21 =>
                    array (
                        'name' => 'Piafabec',
                        'weight' => 2.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/021.png',
                    ),
                22 =>
                    array (
                        'name' => 'Rapasdepic',
                        'weight' => 38.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/022.png',
                    ),
                23 =>
                    array (
                        'name' => 'Abo',
                        'weight' => 6.9,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/023.png',
                    ),
                24 =>
                    array (
                        'name' => 'Arbok',
                        'weight' => 65.0,
                        'height' => 3.5,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/024.png',
                    ),
                25 =>
                    array (
                        'name' => 'Pikachu',
                        'weight' => 6.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/025.png',
                    ),
                26 =>
                    array (
                        'name' => 'Raichu',
                        'weight' => 30.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/026.png',
                    ),
                27 =>
                    array (
                        'name' => 'Sabelette',
                        'weight' => 12.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/027.png',
                    ),
                28 =>
                    array (
                        'name' => 'Sablaireau',
                        'weight' => 29.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/028.png',
                    ),
                29 =>
                    array (
                        'name' => 'Nidoran♀',
                        'weight' => 7.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/029.png',
                    ),
                30 =>
                    array (
                        'name' => 'Nidorina',
                        'weight' => 20.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/030.png',
                    ),
                31 =>
                    array (
                        'name' => 'Nidoqueen',
                        'weight' => 60.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/031.png',
                    ),
                32 =>
                    array (
                        'name' => 'Nidoran♂',
                        'weight' => 9.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/032.png',
                    ),
                33 =>
                    array (
                        'name' => 'Nidorino',
                        'weight' => 19.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/033.png',
                    ),
                34 =>
                    array (
                        'name' => 'Nidoking',
                        'weight' => 62.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/034.png',
                    ),
                35 =>
                    array (
                        'name' => 'Mélofée',
                        'weight' => 7.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Garde Magik',
                                1 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/035.png',
                    ),
                36 =>
                    array (
                        'name' => 'Mélodelfe',
                        'weight' => 40.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Garde Magik',
                                1 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/036.png',
                    ),
                37 =>
                    array (
                        'name' => 'Goupix',
                        'weight' => 9.9,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/037.png',
                    ),
                38 =>
                    array (
                        'name' => 'Feunard',
                        'weight' => 19.9,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/038.png',
                    ),
                39 =>
                    array (
                        'name' => 'Rondoudou',
                        'weight' => 5.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/039.png',
                    ),
                40 =>
                    array (
                        'name' => 'Grodoudou',
                        'weight' => 12.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/040.png',
                    ),
                41 =>
                    array (
                        'name' => 'Nosferapti',
                        'weight' => 7.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/041.png',
                    ),
                42 =>
                    array (
                        'name' => 'Nosferalto',
                        'weight' => 55.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/042.png',
                    ),
                43 =>
                    array (
                        'name' => 'Mystherbe',
                        'weight' => 5.4,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/043.png',
                    ),
                44 =>
                    array (
                        'name' => 'Ortide',
                        'weight' => 8.6,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/044.png',
                    ),
                45 =>
                    array (
                        'name' => 'Rafflesia',
                        'weight' => 18.6,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/045.png',
                    ),
                46 =>
                    array (
                        'name' => 'Paras',
                        'weight' => 5.4,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Sèche',
                                1 => 'Pose Spore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/046.png',
                    ),
                47 =>
                    array (
                        'name' => 'Parasect',
                        'weight' => 29.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Sèche',
                                1 => 'Pose Spore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/047.png',
                    ),
                48 =>
                    array (
                        'name' => 'Mimitoss',
                        'weight' => 30.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lentiteintée',
                                1 => 'Œil Composé',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/048.png',
                    ),
                49 =>
                    array (
                        'name' => 'Aéromite',
                        'weight' => 12.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                                1 => 'Lentiteintée',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/049.png',
                    ),
                50 =>
                    array (
                        'name' => 'Taupiqueur',
                        'weight' => 0.8,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Piège',
                                1 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/050.png',
                    ),
                51 =>
                    array (
                        'name' => 'Triopikeur',
                        'weight' => 33.3,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Piège',
                                1 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/051.png',
                    ),
                52 =>
                    array (
                        'name' => 'Miaouss',
                        'weight' => 4.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ramassage',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/052.png',
                    ),
                53 =>
                    array (
                        'name' => 'Persian',
                        'weight' => 32.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Échauffement',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/053.png',
                    ),
                54 =>
                    array (
                        'name' => 'Psykokwak',
                        'weight' => 19.6,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ciel Gris',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/054.png',
                    ),
                55 =>
                    array (
                        'name' => 'Akwakwak',
                        'weight' => 76.6,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ciel Gris',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/055.png',
                    ),
                56 =>
                    array (
                        'name' => 'Férosinge',
                        'weight' => 28.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Colérique',
                                1 => 'Esprit Vital',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/056.png',
                    ),
                57 =>
                    array (
                        'name' => 'Colossinge',
                        'weight' => 32.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Colérique',
                                1 => 'Esprit Vital',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/057.png',
                    ),
                58 =>
                    array (
                        'name' => 'Caninos',
                        'weight' => 19.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/058.png',
                    ),
                59 =>
                    array (
                        'name' => 'Arcanin',
                        'weight' => 155.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/059.png',
                    ),
                60 =>
                    array (
                        'name' => 'Ptitard',
                        'weight' => 12.4,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/060.png',
                    ),
                61 =>
                    array (
                        'name' => 'Têtarte',
                        'weight' => 20.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/061.png',
                    ),
                62 =>
                    array (
                        'name' => 'Tartard',
                        'weight' => 54.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/062.png',
                    ),
                63 =>
                    array (
                        'name' => 'Abra',
                        'weight' => 19.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/063.png',
                    ),
                64 =>
                    array (
                        'name' => 'Kadabra',
                        'weight' => 56.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/064.png',
                    ),
                65 =>
                    array (
                        'name' => 'Alakazam',
                        'weight' => 48.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/065.png',
                    ),
                66 =>
                    array (
                        'name' => 'Machoc',
                        'weight' => 19.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Annule Garde',
                                1 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/066.png',
                    ),
                67 =>
                    array (
                        'name' => 'Machopeur',
                        'weight' => 70.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Annule Garde',
                                1 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/067.png',
                    ),
                68 =>
                    array (
                        'name' => 'Mackogneur',
                        'weight' => 130.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Annule Garde',
                                1 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/068.png',
                    ),
                69 =>
                    array (
                        'name' => 'Chétiflor',
                        'weight' => 4.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/069.png',
                    ),
                70 =>
                    array (
                        'name' => 'Boustiflor',
                        'weight' => 6.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/070.png',
                    ),
                71 =>
                    array (
                        'name' => 'Empiflor',
                        'weight' => 15.5,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/071.png',
                    ),
                72 =>
                    array (
                        'name' => 'Tentacool',
                        'weight' => 45.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                                1 => 'Suintement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/072.png',
                    ),
                73 =>
                    array (
                        'name' => 'Tentacruel',
                        'weight' => 55.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                                1 => 'Suintement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/073.png',
                    ),
                74 =>
                    array (
                        'name' => 'Racaillou',
                        'weight' => 20.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/074.png',
                    ),
                75 =>
                    array (
                        'name' => 'Gravalanch',
                        'weight' => 105.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/075.png',
                    ),
                76 =>
                    array (
                        'name' => 'Grolem',
                        'weight' => 300.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/076.png',
                    ),
                77 =>
                    array (
                        'name' => 'Ponyta',
                        'weight' => 30.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/077.png',
                    ),
                78 =>
                    array (
                        'name' => 'Galopa',
                        'weight' => 95.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/078.png',
                    ),
                79 =>
                    array (
                        'name' => 'Ramoloss',
                        'weight' => 36.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/079.png',
                    ),
                80 =>
                    array (
                        'name' => 'Flagadoss',
                        'weight' => 78.5,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/080.png',
                    ),
                81 =>
                    array (
                        'name' => 'Magnéti',
                        'weight' => 6.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Magnépiège',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/081.png',
                    ),
                82 =>
                    array (
                        'name' => 'Magnéton',
                        'weight' => 60.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Magnépiège',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/082.png',
                    ),
                83 =>
                    array (
                        'name' => 'Canarticho',
                        'weight' => 15.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/083.png',
                    ),
                84 =>
                    array (
                        'name' => 'Doduo',
                        'weight' => 39.2,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/084.png',
                    ),
                85 =>
                    array (
                        'name' => 'Dodrio',
                        'weight' => 85.2,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/085.png',
                    ),
                86 =>
                    array (
                        'name' => 'Otaria',
                        'weight' => 90.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hydratation',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/086.png',
                    ),
                87 =>
                    array (
                        'name' => 'Lamantine',
                        'weight' => 120.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hydratation',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/087.png',
                    ),
                88 =>
                    array (
                        'name' => 'Tadmorv',
                        'weight' => 30.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Puanteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/088.png',
                    ),
                89 =>
                    array (
                        'name' => 'Grotadmorv',
                        'weight' => 30.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Puanteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/089.png',
                    ),
                90 =>
                    array (
                        'name' => 'Kokiyas',
                        'weight' => 4.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Multi-Coups',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/090.png',
                    ),
                91 =>
                    array (
                        'name' => 'Crustabri',
                        'weight' => 132.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Multi-Coups',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/091.png',
                    ),
                92 =>
                    array (
                        'name' => 'Fantominus',
                        'weight' => 0.1,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/092.png',
                    ),
                93 =>
                    array (
                        'name' => 'Spectrum',
                        'weight' => 0.1,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/093.png',
                    ),
                94 =>
                    array (
                        'name' => 'Ectoplasma',
                        'weight' => 40.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/094.png',
                    ),
                95 =>
                    array (
                        'name' => 'Onix',
                        'weight' => 210.0,
                        'height' => 8.8,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/095.png',
                    ),
                96 =>
                    array (
                        'name' => 'Soporifik',
                        'weight' => 32.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Insomnia',
                                1 => 'Prédiction',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/096.png',
                    ),
                97 =>
                    array (
                        'name' => 'Hypnomade',
                        'weight' => 75.6,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Insomnia',
                                1 => 'Prédiction',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/097.png',
                    ),
                98 =>
                    array (
                        'name' => 'Krabby',
                        'weight' => 6.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Hyper Cutter',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/098.png',
                    ),
                99 =>
                    array (
                        'name' => 'Krabboss',
                        'weight' => 60.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Hyper Cutter',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/099.png',
                    ),
                100 =>
                    array (
                        'name' => 'Voltorbe',
                        'weight' => 10.4,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/100.png',
                    ),
                101 =>
                    array (
                        'name' => 'Électrode',
                        'weight' => 66.6,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/101.png',
                    ),
                102 =>
                    array (
                        'name' => 'Noeunoeuf',
                        'weight' => 2.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/102.png',
                    ),
                103 =>
                    array (
                        'name' => 'Noadkoko',
                        'weight' => 120.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/103.png',
                    ),
                104 =>
                    array (
                        'name' => 'Osselait',
                        'weight' => 6.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/104.png',
                    ),
                105 =>
                    array (
                        'name' => 'Ossatueur',
                        'weight' => 45.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/105.png',
                    ),
                106 =>
                    array (
                        'name' => 'Kicklee',
                        'weight' => 49.8,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Échauffement',
                                1 => 'Téméraire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/106.png',
                    ),
                107 =>
                    array (
                        'name' => 'Tygnon',
                        'weight' => 50.2,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Poing de Fer',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/107.png',
                    ),
                108 =>
                    array (
                        'name' => 'Excelangue',
                        'weight' => 65.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/108.png',
                    ),
                109 =>
                    array (
                        'name' => 'Smogo',
                        'weight' => 1.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/109.png',
                    ),
                110 =>
                    array (
                        'name' => 'Smogogo',
                        'weight' => 9.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/110.png',
                    ),
                111 =>
                    array (
                        'name' => 'Rhinocorne',
                        'weight' => 115.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/111.png',
                    ),
                112 =>
                    array (
                        'name' => 'Rhinoféros',
                        'weight' => 120.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/112.png',
                    ),
                113 =>
                    array (
                        'name' => 'Leveinard',
                        'weight' => 34.6,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/113.png',
                    ),
                114 =>
                    array (
                        'name' => 'Saquedeneu',
                        'weight' => 35.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/114.png',
                    ),
                115 =>
                    array (
                        'name' => 'Kangourex',
                        'weight' => 80.0,
                        'height' => 2.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Matinal',
                                1 => 'Querelleur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/115.png',
                    ),
                116 =>
                    array (
                        'name' => 'Hypotrempe',
                        'weight' => 8.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/116.png',
                    ),
                117 =>
                    array (
                        'name' => 'Hypocéan',
                        'weight' => 25.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/117.png',
                    ),
                118 =>
                    array (
                        'name' => 'Poissirène',
                        'weight' => 15.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Ignifu-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/118.png',
                    ),
                119 =>
                    array (
                        'name' => 'Poissoroy',
                        'weight' => 39.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Ignifu-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/119.png',
                    ),
                120 =>
                    array (
                        'name' => 'Stari',
                        'weight' => 34.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lumiattirance',
                                1 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/120.png',
                    ),
                121 =>
                    array (
                        'name' => 'Staross',
                        'weight' => 80.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lumiattirance',
                                1 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/121.png',
                    ),
                122 =>
                    array (
                        'name' => 'M. Mime',
                        'weight' => 54.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Filtre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/122.png',
                    ),
                123 =>
                    array (
                        'name' => 'Insécateur',
                        'weight' => 56.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/123.png',
                    ),
                124 =>
                    array (
                        'name' => 'Lippoutou',
                        'weight' => 40.6,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Prédiction',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/124.png',
                    ),
                125 =>
                    array (
                        'name' => 'Élektek',
                        'weight' => 30.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/125.png',
                    ),
                126 =>
                    array (
                        'name' => 'Magmar',
                        'weight' => 44.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/126.png',
                    ),
                127 =>
                    array (
                        'name' => 'Scarabrute',
                        'weight' => 55.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                                1 => 'Hyper Cutter',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/127.png',
                    ),
                128 =>
                    array (
                        'name' => 'Tauros',
                        'weight' => 88.4,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Colérique',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/128.png',
                    ),
                129 =>
                    array (
                        'name' => 'Magicarpe',
                        'weight' => 10.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/129.png',
                    ),
                130 =>
                    array (
                        'name' => 'Léviator',
                        'weight' => 235.0,
                        'height' => 6.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/130.png',
                    ),
                131 =>
                    array (
                        'name' => 'Lokhlass',
                        'weight' => 220.0,
                        'height' => 2.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Coque Armure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/131.png',
                    ),
                132 =>
                    array (
                        'name' => 'Métamorph',
                        'weight' => 4.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Échauffement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/132.png',
                    ),
                133 =>
                    array (
                        'name' => 'Évoli',
                        'weight' => 6.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Adaptabilité',
                                1 => 'Fuite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/133.png',
                    ),
                134 =>
                    array (
                        'name' => 'Aquali',
                        'weight' => 29.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/134.png',
                    ),
                135 =>
                    array (
                        'name' => 'Voltali',
                        'weight' => 24.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Volt',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/135.png',
                    ),
                136 =>
                    array (
                        'name' => 'Pyroli',
                        'weight' => 25.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/136.png',
                    ),
                137 =>
                    array (
                        'name' => 'Porygon',
                        'weight' => 36.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Calque',
                                1 => 'Télécharge',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/137.png',
                    ),
                138 =>
                    array (
                        'name' => 'Amonita',
                        'weight' => 7.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/138.png',
                    ),
                139 =>
                    array (
                        'name' => 'Amonistar',
                        'weight' => 35.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/139.png',
                    ),
                140 =>
                    array (
                        'name' => 'Kabuto',
                        'weight' => 11.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/140.png',
                    ),
                141 =>
                    array (
                        'name' => 'Kabutops',
                        'weight' => 40.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/141.png',
                    ),
                142 =>
                    array (
                        'name' => 'Ptéra',
                        'weight' => 59.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/142.png',
                    ),
                143 =>
                    array (
                        'name' => 'Ronflex',
                        'weight' => 460.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Isograisse',
                                1 => 'Vaccin',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/143.png',
                    ),
                144 =>
                    array (
                        'name' => 'Artikodin',
                        'weight' => 55.4,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/144.png',
                    ),
                145 =>
                    array (
                        'name' => 'Électhor',
                        'weight' => 52.6,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/145.png',
                    ),
                146 =>
                    array (
                        'name' => 'Sulfura',
                        'weight' => 60.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/146.png',
                    ),
                147 =>
                    array (
                        'name' => 'Minidraco',
                        'weight' => 3.3,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/147.png',
                    ),
                148 =>
                    array (
                        'name' => 'Draco',
                        'weight' => 16.5,
                        'height' => 4.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/148.png',
                    ),
                149 =>
                    array (
                        'name' => 'Dracolosse',
                        'weight' => 210.0,
                        'height' => 2.2,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/149.png',
                    ),
                150 =>
                    array (
                        'name' => 'Mewtwo',
                        'weight' => 122.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/150.png',
                    ),
                151 =>
                    array (
                        'name' => 'Mew',
                        'weight' => 4.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/151.png',
                    ),
                152 =>
                    array (
                        'name' => 'Germignon',
                        'weight' => 6.4,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/152.png',
                    ),
                153 =>
                    array (
                        'name' => 'Macronium',
                        'weight' => 15.8,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/153.png',
                    ),
                154 =>
                    array (
                        'name' => 'Méganium',
                        'weight' => 100.5,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/154.png',
                    ),
                155 =>
                    array (
                        'name' => 'Héricendre',
                        'weight' => 7.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/155.png',
                    ),
                156 =>
                    array (
                        'name' => 'Feurisson',
                        'weight' => 19.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/156.png',
                    ),
                157 =>
                    array (
                        'name' => 'Typhlosion',
                        'weight' => 79.5,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/157.png',
                    ),
                158 =>
                    array (
                        'name' => 'Kaiminus',
                        'weight' => 9.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/158.png',
                    ),
                159 =>
                    array (
                        'name' => 'Crocrodil',
                        'weight' => 25.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/159.png',
                    ),
                160 =>
                    array (
                        'name' => 'Aligatueur',
                        'weight' => 88.8,
                        'height' => 2.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/160.png',
                    ),
                161 =>
                    array (
                        'name' => 'Fouinette',
                        'weight' => 6.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/161.png',
                    ),
                162 =>
                    array (
                        'name' => 'Fouinar',
                        'weight' => 32.5,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/162.png',
                    ),
                163 =>
                    array (
                        'name' => 'Hoothoot',
                        'weight' => 21.2,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Insomnia',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/163.png',
                    ),
                164 =>
                    array (
                        'name' => 'Noarfang',
                        'weight' => 40.8,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Insomnia',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/164.png',
                    ),
                165 =>
                    array (
                        'name' => 'Coxy',
                        'weight' => 10.8,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/165.png',
                    ),
                166 =>
                    array (
                        'name' => 'Coxyclaque',
                        'weight' => 35.6,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/166.png',
                    ),
                167 =>
                    array (
                        'name' => 'Mimigal',
                        'weight' => 8.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Insomnia',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/167.png',
                    ),
                168 =>
                    array (
                        'name' => 'Migalos',
                        'weight' => 33.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Insomnia',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/168.png',
                    ),
                169 =>
                    array (
                        'name' => 'Nostenfer',
                        'weight' => 75.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/169.png',
                    ),
                170 =>
                    array (
                        'name' => 'Loupio',
                        'weight' => 12.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Volt',
                                1 => 'Lumiattirance',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/170.png',
                    ),
                171 =>
                    array (
                        'name' => 'Lanturn',
                        'weight' => 22.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Volt',
                                1 => 'Lumiattirance',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/171.png',
                    ),
                172 =>
                    array (
                        'name' => 'Pichu',
                        'weight' => 2.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/172.png',
                    ),
                173 =>
                    array (
                        'name' => 'Mélo',
                        'weight' => 3.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Garde Magik',
                                1 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/173.png',
                    ),
                174 =>
                    array (
                        'name' => 'Toudoudou',
                        'weight' => 1.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/174.png',
                    ),
                175 =>
                    array (
                        'name' => 'Togepi',
                        'weight' => 1.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/175.png',
                    ),
                176 =>
                    array (
                        'name' => 'Togetic',
                        'weight' => 3.2,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fairy',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/176.png',
                    ),
                177 =>
                    array (
                        'name' => 'Natu',
                        'weight' => 2.0,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Matinal',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/177.png',
                    ),
                178 =>
                    array (
                        'name' => 'Xatu',
                        'weight' => 15.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Matinal',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/178.png',
                    ),
                179 =>
                    array (
                        'name' => 'Wattouat',
                        'weight' => 7.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/179.png',
                    ),
                180 =>
                    array (
                        'name' => 'Lainergie',
                        'weight' => 13.3,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/180.png',
                    ),
                181 =>
                    array (
                        'name' => 'Pharamp',
                        'weight' => 61.5,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/181.png',
                    ),
                182 =>
                    array (
                        'name' => 'Joliflor',
                        'weight' => 5.8,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/182.png',
                    ),
                183 =>
                    array (
                        'name' => 'Marill',
                        'weight' => 8.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coloforce',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/183.png',
                    ),
                184 =>
                    array (
                        'name' => 'Azumarill',
                        'weight' => 28.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coloforce',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/184.png',
                    ),
                185 =>
                    array (
                        'name' => 'Simularbre',
                        'weight' => 38.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/185.png',
                    ),
                186 =>
                    array (
                        'name' => 'Tarpaud',
                        'weight' => 33.9,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/186.png',
                    ),
                187 =>
                    array (
                        'name' => 'Granivol',
                        'weight' => 0.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/187.png',
                    ),
                188 =>
                    array (
                        'name' => 'Floravol',
                        'weight' => 1.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/188.png',
                    ),
                189 =>
                    array (
                        'name' => 'Cotovol',
                        'weight' => 3.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/189.png',
                    ),
                190 =>
                    array (
                        'name' => 'Capumain',
                        'weight' => 11.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/190.png',
                    ),
                191 =>
                    array (
                        'name' => 'Tournegrin',
                        'weight' => 1.8,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Force Soleil',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/191.png',
                    ),
                192 =>
                    array (
                        'name' => 'Héliatronc',
                        'weight' => 8.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Force Soleil',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/192.png',
                    ),
                193 =>
                    array (
                        'name' => 'Yanma',
                        'weight' => 38.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Œil Composé',
                                1 => 'Turbo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/193.png',
                    ),
                194 =>
                    array (
                        'name' => 'Axoloto',
                        'weight' => 8.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/194.png',
                    ),
                195 =>
                    array (
                        'name' => 'Maraiste',
                        'weight' => 75.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Moiteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/195.png',
                    ),
                196 =>
                    array (
                        'name' => 'Mentali',
                        'weight' => 26.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/196.png',
                    ),
                197 =>
                    array (
                        'name' => 'Noctali',
                        'weight' => 27.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/197.png',
                    ),
                198 =>
                    array (
                        'name' => 'Cornèbre',
                        'weight' => 2.1,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chanceux',
                                1 => 'Insomnia',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/198.png',
                    ),
                199 =>
                    array (
                        'name' => 'Roigada',
                        'weight' => 79.5,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/199.png',
                    ),
                200 =>
                    array (
                        'name' => 'Feuforêve',
                        'weight' => 1.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/200.png',
                    ),
                201 =>
                    array (
                        'name' => 'Zarbi',
                        'weight' => 5.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/201.png',
                    ),
                202 =>
                    array (
                        'name' => 'Qulbutoké',
                        'weight' => 28.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Marque Ombre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/202.png',
                    ),
                203 =>
                    array (
                        'name' => 'Girafarig',
                        'weight' => 41.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/203.png',
                    ),
                204 =>
                    array (
                        'name' => 'Pomdepik',
                        'weight' => 7.2,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/204.png',
                    ),
                205 =>
                    array (
                        'name' => 'Foretress',
                        'weight' => 125.8,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/205.png',
                    ),
                206 =>
                    array (
                        'name' => 'Insolourdo',
                        'weight' => 14.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/206.png',
                    ),
                207 =>
                    array (
                        'name' => 'Scorplane',
                        'weight' => 64.8,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hyper Cutter',
                                1 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/207.png',
                    ),
                208 =>
                    array (
                        'name' => 'Steelix',
                        'weight' => 400.0,
                        'height' => 9.2,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/208.png',
                    ),
                209 =>
                    array (
                        'name' => 'Snubbull',
                        'weight' => 7.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/209.png',
                    ),
                210 =>
                    array (
                        'name' => 'Granbull',
                        'weight' => 48.7,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Pied Véloce',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/210.png',
                    ),
                211 =>
                    array (
                        'name' => 'Qwilfish',
                        'weight' => 3.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/211.png',
                    ),
                212 =>
                    array (
                        'name' => 'Cizayox',
                        'weight' => 118.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/212.png',
                    ),
                213 =>
                    array (
                        'name' => 'Caratroc',
                        'weight' => 20.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/213.png',
                    ),
                214 =>
                    array (
                        'name' => 'Scarhino',
                        'weight' => 54.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/214.png',
                    ),
                215 =>
                    array (
                        'name' => 'Farfuret',
                        'weight' => 28.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/215.png',
                    ),
                216 =>
                    array (
                        'name' => 'Teddiursa',
                        'weight' => 8.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pied Véloce',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/216.png',
                    ),
                217 =>
                    array (
                        'name' => 'Ursaring',
                        'weight' => 125.8,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Pied Véloce',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/217.png',
                    ),
                218 =>
                    array (
                        'name' => 'Limagma',
                        'weight' => 35.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armumagma',
                                1 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/218.png',
                    ),
                219 =>
                    array (
                        'name' => 'Volcaropod',
                        'weight' => 55.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armumagma',
                                1 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/219.png',
                    ),
                220 =>
                    array (
                        'name' => 'Marcacrin',
                        'weight' => 6.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/220.png',
                    ),
                221 =>
                    array (
                        'name' => 'Cochignon',
                        'weight' => 55.8,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/221.png',
                    ),
                222 =>
                    array (
                        'name' => 'Corayon',
                        'weight' => 5.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/222.png',
                    ),
                223 =>
                    array (
                        'name' => 'Rémoraid',
                        'weight' => 12.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/223.png',
                    ),
                224 =>
                    array (
                        'name' => 'Octillery',
                        'weight' => 28.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sniper',
                                1 => 'Ventouse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/224.png',
                    ),
                225 =>
                    array (
                        'name' => 'Cadoizo',
                        'weight' => 16.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Esprit Vital',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/225.png',
                    ),
                226 =>
                    array (
                        'name' => 'Démanta',
                        'weight' => 220.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/226.png',
                    ),
                227 =>
                    array (
                        'name' => 'Airmure',
                        'weight' => 50.5,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/227.png',
                    ),
                228 =>
                    array (
                        'name' => 'Malosse',
                        'weight' => 10.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Matinal',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/228.png',
                    ),
                229 =>
                    array (
                        'name' => 'Démolosse',
                        'weight' => 35.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Matinal',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/229.png',
                    ),
                230 =>
                    array (
                        'name' => 'Hyporoi',
                        'weight' => 152.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/230.png',
                    ),
                231 =>
                    array (
                        'name' => 'Phanpy',
                        'weight' => 33.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/231.png',
                    ),
                232 =>
                    array (
                        'name' => 'Donphan',
                        'weight' => 120.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/232.png',
                    ),
                233 =>
                    array (
                        'name' => 'Porygon2',
                        'weight' => 32.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Calque',
                                1 => 'Télécharge',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/233.png',
                    ),
                234 =>
                    array (
                        'name' => 'Cerfrousse',
                        'weight' => 71.2,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/234.png',
                    ),
                235 =>
                    array (
                        'name' => 'Queulorior',
                        'weight' => 58.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Technicien',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/235.png',
                    ),
                236 =>
                    array (
                        'name' => 'Debugant',
                        'weight' => 21.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Impassible',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/236.png',
                    ),
                237 =>
                    array (
                        'name' => 'Kapoera',
                        'weight' => 48.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/237.png',
                    ),
                238 =>
                    array (
                        'name' => 'Lippouti',
                        'weight' => 6.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Prédiction',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/238.png',
                    ),
                239 =>
                    array (
                        'name' => 'Élekid',
                        'weight' => 23.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/239.png',
                    ),
                240 =>
                    array (
                        'name' => 'Magby',
                        'weight' => 21.4,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/240.png',
                    ),
                241 =>
                    array (
                        'name' => 'Écrémeuh',
                        'weight' => 75.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Isograisse',
                                1 => 'Querelleur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/241.png',
                    ),
                242 =>
                    array (
                        'name' => 'Leuphorie',
                        'weight' => 46.8,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/242.png',
                    ),
                243 =>
                    array (
                        'name' => 'Raikou',
                        'weight' => 178.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/243.png',
                    ),
                244 =>
                    array (
                        'name' => 'Entei',
                        'weight' => 198.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/244.png',
                    ),
                245 =>
                    array (
                        'name' => 'Suicune',
                        'weight' => 187.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/245.png',
                    ),
                246 =>
                    array (
                        'name' => 'Embrylex',
                        'weight' => 72.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/246.png',
                    ),
                247 =>
                    array (
                        'name' => 'Ymphect',
                        'weight' => 152.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/247.png',
                    ),
                248 =>
                    array (
                        'name' => 'Tyranocif',
                        'weight' => 202.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sable Volant',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/248.png',
                    ),
                249 =>
                    array (
                        'name' => 'Lugia',
                        'weight' => 216.0,
                        'height' => 5.2,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/249.png',
                    ),
                250 =>
                    array (
                        'name' => 'Ho-Oh',
                        'weight' => 199.0,
                        'height' => 3.8,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/250.png',
                    ),
                251 =>
                    array (
                        'name' => 'Celebi',
                        'weight' => 5.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/251.png',
                    ),
                252 =>
                    array (
                        'name' => 'Arcko',
                        'weight' => 5.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/252.png',
                    ),
                253 =>
                    array (
                        'name' => 'Massko',
                        'weight' => 21.6,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/253.png',
                    ),
                254 =>
                    array (
                        'name' => 'Jungko',
                        'weight' => 52.2,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/254.png',
                    ),
                255 =>
                    array (
                        'name' => 'Poussifeu',
                        'weight' => 2.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/255.png',
                    ),
                256 =>
                    array (
                        'name' => 'Galifeu',
                        'weight' => 19.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/256.png',
                    ),
                257 =>
                    array (
                        'name' => 'Braségali',
                        'weight' => 52.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/257.png',
                    ),
                258 =>
                    array (
                        'name' => 'Gobou',
                        'weight' => 7.6,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/258.png',
                    ),
                259 =>
                    array (
                        'name' => 'Flobio',
                        'weight' => 28.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/259.png',
                    ),
                260 =>
                    array (
                        'name' => 'Laggron',
                        'weight' => 81.9,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/260.png',
                    ),
                261 =>
                    array (
                        'name' => 'Medhyèna',
                        'weight' => 13.6,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Pied Véloce',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/261.png',
                    ),
                262 =>
                    array (
                        'name' => 'Grahyèna',
                        'weight' => 37.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Pied Véloce',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/262.png',
                    ),
                263 =>
                    array (
                        'name' => 'Zigzaton',
                        'weight' => 17.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/263.png',
                    ),
                264 =>
                    array (
                        'name' => 'Linéon',
                        'weight' => 32.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/264.png',
                    ),
                265 =>
                    array (
                        'name' => 'Chenipotte',
                        'weight' => 3.6,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/265.png',
                    ),
                266 =>
                    array (
                        'name' => 'Armulys',
                        'weight' => 10.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/266.png',
                    ),
                267 =>
                    array (
                        'name' => 'Charmillon',
                        'weight' => 28.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/267.png',
                    ),
                268 =>
                    array (
                        'name' => 'Blindalys',
                        'weight' => 11.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/268.png',
                    ),
                269 =>
                    array (
                        'name' => 'Papinox',
                        'weight' => 31.6,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/269.png',
                    ),
                270 =>
                    array (
                        'name' => 'Nénupiot',
                        'weight' => 2.6,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cuvette',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/270.png',
                    ),
                271 =>
                    array (
                        'name' => 'Lombre',
                        'weight' => 32.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cuvette',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/271.png',
                    ),
                272 =>
                    array (
                        'name' => 'Ludicolo',
                        'weight' => 55.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cuvette',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/272.png',
                    ),
                273 =>
                    array (
                        'name' => 'Grainipiot',
                        'weight' => 4.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/273.png',
                    ),
                274 =>
                    array (
                        'name' => 'Pifeuil',
                        'weight' => 28.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/274.png',
                    ),
                275 =>
                    array (
                        'name' => 'Tengalice',
                        'weight' => 59.6,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Matinal',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/275.png',
                    ),
                276 =>
                    array (
                        'name' => 'Nirondelle',
                        'weight' => 2.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/276.png',
                    ),
                277 =>
                    array (
                        'name' => 'Hélédelle',
                        'weight' => 19.8,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/277.png',
                    ),
                278 =>
                    array (
                        'name' => 'Goélise',
                        'weight' => 9.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/278.png',
                    ),
                279 =>
                    array (
                        'name' => 'Bekipan',
                        'weight' => 28.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/279.png',
                    ),
                280 =>
                    array (
                        'name' => 'Tarsal',
                        'weight' => 6.6,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Calque',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/280.png',
                    ),
                281 =>
                    array (
                        'name' => 'Kirlia',
                        'weight' => 20.2,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Calque',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/281.png',
                    ),
                282 =>
                    array (
                        'name' => 'Gardevoir',
                        'weight' => 48.4,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Calque',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/282.png',
                    ),
                283 =>
                    array (
                        'name' => 'Arakdo',
                        'weight' => 1.7,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/283.png',
                    ),
                284 =>
                    array (
                        'name' => 'Maskadra',
                        'weight' => 3.6,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/284.png',
                    ),
                285 =>
                    array (
                        'name' => 'Balignon',
                        'weight' => 4.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pose Spore',
                                1 => 'Soin Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/285.png',
                    ),
                286 =>
                    array (
                        'name' => 'Chapignon',
                        'weight' => 39.2,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pose Spore',
                                1 => 'Soin Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/286.png',
                    ),
                287 =>
                    array (
                        'name' => 'Parecool',
                        'weight' => 24.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absentéisme',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/287.png',
                    ),
                288 =>
                    array (
                        'name' => 'Vigoroth',
                        'weight' => 46.5,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Esprit Vital',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/288.png',
                    ),
                289 =>
                    array (
                        'name' => 'Monaflèmit',
                        'weight' => 130.5,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absentéisme',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/289.png',
                    ),
                290 =>
                    array (
                        'name' => 'Ningale',
                        'weight' => 5.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Œil Composé',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/290.png',
                    ),
                291 =>
                    array (
                        'name' => 'Ninjask',
                        'weight' => 12.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Turbo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/291.png',
                    ),
                292 =>
                    array (
                        'name' => 'Munja',
                        'weight' => 1.2,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Garde Mystik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/292.png',
                    ),
                293 =>
                    array (
                        'name' => 'Chuchmur',
                        'weight' => 16.3,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/293.png',
                    ),
                294 =>
                    array (
                        'name' => 'Ramboum',
                        'weight' => 40.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/294.png',
                    ),
                295 =>
                    array (
                        'name' => 'Brouhabam',
                        'weight' => 84.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/295.png',
                    ),
                296 =>
                    array (
                        'name' => 'Makuhita',
                        'weight' => 86.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/296.png',
                    ),
                297 =>
                    array (
                        'name' => 'Hariyama',
                        'weight' => 253.8,
                        'height' => 2.3,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/297.png',
                    ),
                298 =>
                    array (
                        'name' => 'Azurill',
                        'weight' => 2.0,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coloforce',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/298.png',
                    ),
                299 =>
                    array (
                        'name' => 'Tarinor',
                        'weight' => 97.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Magnépiège',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/299.png',
                    ),
                300 =>
                    array (
                        'name' => 'Skitty',
                        'weight' => 11.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Joli Sourire',
                                1 => 'Normalise',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/300.png',
                    ),
                301 =>
                    array (
                        'name' => 'Delcatty',
                        'weight' => 32.6,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Joli Sourire',
                                1 => 'Normalise',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/301.png',
                    ),
                302 =>
                    array (
                        'name' => 'Ténéfix',
                        'weight' => 11.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Frein',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/302.png',
                    ),
                303 =>
                    array (
                        'name' => 'Mysdibule',
                        'weight' => 11.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hyper Cutter',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/303.png',
                    ),
                304 =>
                    array (
                        'name' => 'Galekid',
                        'weight' => 60.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/304.png',
                    ),
                305 =>
                    array (
                        'name' => 'Galegon',
                        'weight' => 120.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/305.png',
                    ),
                306 =>
                    array (
                        'name' => 'Galeking',
                        'weight' => 360.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/306.png',
                    ),
                307 =>
                    array (
                        'name' => 'Méditikka',
                        'weight' => 11.2,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Force Pure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/307.png',
                    ),
                308 =>
                    array (
                        'name' => 'Charmina',
                        'weight' => 31.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Force Pure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/308.png',
                    ),
                309 =>
                    array (
                        'name' => 'Dynavolt',
                        'weight' => 15.2,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/309.png',
                    ),
                310 =>
                    array (
                        'name' => 'Élecsprint',
                        'weight' => 40.2,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/310.png',
                    ),
                311 =>
                    array (
                        'name' => 'Posipi',
                        'weight' => 4.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Plus',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/311.png',
                    ),
                312 =>
                    array (
                        'name' => 'Négapi',
                        'weight' => 4.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Minus',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/312.png',
                    ),
                313 =>
                    array (
                        'name' => 'Muciole',
                        'weight' => 17.7,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Lumiattirance',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/313.png',
                    ),
                314 =>
                    array (
                        'name' => 'Lumivole',
                        'weight' => 17.7,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Lentiteintée',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/314.png',
                    ),
                315 =>
                    array (
                        'name' => 'Rosélia',
                        'weight' => 2.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/315.png',
                    ),
                316 =>
                    array (
                        'name' => 'Gloupti',
                        'weight' => 10.3,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Suintement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/316.png',
                    ),
                317 =>
                    array (
                        'name' => 'Avaltout',
                        'weight' => 80.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Suintement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/317.png',
                    ),
                318 =>
                    array (
                        'name' => 'Carvanha',
                        'weight' => 20.8,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Dure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/318.png',
                    ),
                319 =>
                    array (
                        'name' => 'Sharpedo',
                        'weight' => 88.8,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Dure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/319.png',
                    ),
                320 =>
                    array (
                        'name' => 'Wailmer',
                        'weight' => 130.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Ignifu-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/320.png',
                    ),
                321 =>
                    array (
                        'name' => 'Wailord',
                        'weight' => 398.0,
                        'height' => 14.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Ignifu-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/321.png',
                    ),
                322 =>
                    array (
                        'name' => 'Chamallot',
                        'weight' => 24.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Simple',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/322.png',
                    ),
                323 =>
                    array (
                        'name' => 'Camérupt',
                        'weight' => 220.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armumagma',
                                1 => 'Solide Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/323.png',
                    ),
                324 =>
                    array (
                        'name' => 'Chartor',
                        'weight' => 80.4,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Fumée',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/324.png',
                    ),
                325 =>
                    array (
                        'name' => 'Spoink',
                        'weight' => 30.6,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Isograisse',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/325.png',
                    ),
                326 =>
                    array (
                        'name' => 'Groret',
                        'weight' => 71.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Isograisse',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/326.png',
                    ),
                327 =>
                    array (
                        'name' => 'Spinda',
                        'weight' => 5.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pieds Confus',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/327.png',
                    ),
                328 =>
                    array (
                        'name' => 'Kraknoix',
                        'weight' => 15.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hyper Cutter',
                                1 => 'Piège',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/328.png',
                    ),
                329 =>
                    array (
                        'name' => 'Vibraninf',
                        'weight' => 15.3,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/329.png',
                    ),
                330 =>
                    array (
                        'name' => 'Libégon',
                        'weight' => 82.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/330.png',
                    ),
                331 =>
                    array (
                        'name' => 'Cacnea',
                        'weight' => 51.3,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/331.png',
                    ),
                332 =>
                    array (
                        'name' => 'Cacturne',
                        'weight' => 77.4,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/332.png',
                    ),
                333 =>
                    array (
                        'name' => 'Tylton',
                        'weight' => 1.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/333.png',
                    ),
                334 =>
                    array (
                        'name' => 'Altaria',
                        'weight' => 20.6,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/334.png',
                    ),
                335 =>
                    array (
                        'name' => 'Mangriff',
                        'weight' => 40.3,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Vaccin',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/335.png',
                    ),
                336 =>
                    array (
                        'name' => 'Séviper',
                        'weight' => 52.5,
                        'height' => 2.7,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/336.png',
                    ),
                337 =>
                    array (
                        'name' => 'Séléroc',
                        'weight' => 168.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/337.png',
                    ),
                338 =>
                    array (
                        'name' => 'Solaroc',
                        'weight' => 154.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/338.png',
                    ),
                339 =>
                    array (
                        'name' => 'Barloche',
                        'weight' => 1.9,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anticipation',
                                1 => 'Benêt',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/339.png',
                    ),
                340 =>
                    array (
                        'name' => 'Barbicha',
                        'weight' => 23.6,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anticipation',
                                1 => 'Benêt',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/340.png',
                    ),
                341 =>
                    array (
                        'name' => 'Écrapince',
                        'weight' => 11.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Hyper Cutter',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/341.png',
                    ),
                342 =>
                    array (
                        'name' => 'Colhomard',
                        'weight' => 32.8,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Hyper Cutter',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/342.png',
                    ),
                343 =>
                    array (
                        'name' => 'Balbuto',
                        'weight' => 21.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/343.png',
                    ),
                344 =>
                    array (
                        'name' => 'Kaorine',
                        'weight' => 108.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/344.png',
                    ),
                345 =>
                    array (
                        'name' => 'Lilia',
                        'weight' => 23.8,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ventouse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/345.png',
                    ),
                346 =>
                    array (
                        'name' => 'Vacilys',
                        'weight' => 60.4,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ventouse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/346.png',
                    ),
                347 =>
                    array (
                        'name' => 'Anorith',
                        'weight' => 12.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/347.png',
                    ),
                348 =>
                    array (
                        'name' => 'Armaldo',
                        'weight' => 68.2,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/348.png',
                    ),
                349 =>
                    array (
                        'name' => 'Barpau',
                        'weight' => 7.4,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/349.png',
                    ),
                350 =>
                    array (
                        'name' => 'Milobellus',
                        'weight' => 162.0,
                        'height' => 6.2,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Écaille Spéciale',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/350.png',
                    ),
                351 =>
                    array (
                        'name' => 'Morphéo',
                        'weight' => 0.8,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Météo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/351.png',
                    ),
                352 =>
                    array (
                        'name' => 'Kecleon',
                        'weight' => 22.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Déguisement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/352.png',
                    ),
                353 =>
                    array (
                        'name' => 'Polichombr',
                        'weight' => 2.3,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Insomnia',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/353.png',
                    ),
                354 =>
                    array (
                        'name' => 'Branette',
                        'weight' => 12.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Insomnia',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/354.png',
                    ),
                355 =>
                    array (
                        'name' => 'Skelénox',
                        'weight' => 15.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/355.png',
                    ),
                356 =>
                    array (
                        'name' => 'Téraclope',
                        'weight' => 30.6,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/356.png',
                    ),
                357 =>
                    array (
                        'name' => 'Tropius',
                        'weight' => 100.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Force Soleil',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/357.png',
                    ),
                358 =>
                    array (
                        'name' => 'Éoko',
                        'weight' => 1.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/358.png',
                    ),
                359 =>
                    array (
                        'name' => 'Absol',
                        'weight' => 47.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chanceux',
                                1 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/359.png',
                    ),
                360 =>
                    array (
                        'name' => 'Okéoké',
                        'weight' => 14.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Marque Ombre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/360.png',
                    ),
                361 =>
                    array (
                        'name' => 'Stalgamin',
                        'weight' => 16.8,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Corps Gel',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/361.png',
                    ),
                362 =>
                    array (
                        'name' => 'Oniglali',
                        'weight' => 256.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Corps Gel',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/362.png',
                    ),
                363 =>
                    array (
                        'name' => 'Obalie',
                        'weight' => 39.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/363.png',
                    ),
                364 =>
                    array (
                        'name' => 'Phogleur',
                        'weight' => 87.6,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/364.png',
                    ),
                365 =>
                    array (
                        'name' => 'Kaimorse',
                        'weight' => 150.6,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                                1 => 'Isograisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/365.png',
                    ),
                366 =>
                    array (
                        'name' => 'Coquiperl',
                        'weight' => 52.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/366.png',
                    ),
                367 =>
                    array (
                        'name' => 'Serpang',
                        'weight' => 27.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/367.png',
                    ),
                368 =>
                    array (
                        'name' => 'Rosabyss',
                        'weight' => 22.6,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/368.png',
                    ),
                369 =>
                    array (
                        'name' => 'Relicanth',
                        'weight' => 23.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/369.png',
                    ),
                370 =>
                    array (
                        'name' => 'Lovdisc',
                        'weight' => 8.7,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/370.png',
                    ),
                371 =>
                    array (
                        'name' => 'Draby',
                        'weight' => 42.1,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/371.png',
                    ),
                372 =>
                    array (
                        'name' => 'Drackhaus',
                        'weight' => 110.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/372.png',
                    ),
                373 =>
                    array (
                        'name' => 'Drattak',
                        'weight' => 102.6,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/373.png',
                    ),
                374 =>
                    array (
                        'name' => 'Terhal',
                        'weight' => 95.2,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/374.png',
                    ),
                375 =>
                    array (
                        'name' => 'Métang',
                        'weight' => 202.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/375.png',
                    ),
                376 =>
                    array (
                        'name' => 'Métalosse',
                        'weight' => 550.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/376.png',
                    ),
                377 =>
                    array (
                        'name' => 'Regirock',
                        'weight' => 230.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/377.png',
                    ),
                378 =>
                    array (
                        'name' => 'Regice',
                        'weight' => 175.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/378.png',
                    ),
                379 =>
                    array (
                        'name' => 'Registeel',
                        'weight' => 205.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/379.png',
                    ),
                380 =>
                    array (
                        'name' => 'Latias',
                        'weight' => 40.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/380.png',
                    ),
                381 =>
                    array (
                        'name' => 'Latios',
                        'weight' => 60.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/381.png',
                    ),
                382 =>
                    array (
                        'name' => 'Kyogre',
                        'weight' => 352.0,
                        'height' => 4.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Crachin',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/382.png',
                    ),
                383 =>
                    array (
                        'name' => 'Groudon',
                        'weight' => 950.0,
                        'height' => 3.5,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sécheresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/383.png',
                    ),
                384 =>
                    array (
                        'name' => 'Rayquaza',
                        'weight' => 206.5,
                        'height' => 7.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Air Lock',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/384.png',
                    ),
                385 =>
                    array (
                        'name' => 'Jirachi',
                        'weight' => 1.1,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/385.png',
                    ),
                386 =>
                    array (
                        'name' => 'Deoxys',
                        'weight' => 60.8,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/386.png',
                    ),
                387 =>
                    array (
                        'name' => 'Tortipouss',
                        'weight' => 10.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/387.png',
                    ),
                388 =>
                    array (
                        'name' => 'Boskara',
                        'weight' => 97.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/388.png',
                    ),
                389 =>
                    array (
                        'name' => 'Torterra',
                        'weight' => 310.0,
                        'height' => 2.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/389.png',
                    ),
                390 =>
                    array (
                        'name' => 'Ouisticram',
                        'weight' => 6.2,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/390.png',
                    ),
                391 =>
                    array (
                        'name' => 'Chimpenfeu',
                        'weight' => 22.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/391.png',
                    ),
                392 =>
                    array (
                        'name' => 'Simiabraz',
                        'weight' => 55.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/392.png',
                    ),
                393 =>
                    array (
                        'name' => 'Tiplouf',
                        'weight' => 5.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/393.png',
                    ),
                394 =>
                    array (
                        'name' => 'Prinplouf',
                        'weight' => 23.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/394.png',
                    ),
                395 =>
                    array (
                        'name' => 'Pingoléon',
                        'weight' => 84.5,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/395.png',
                    ),
                396 =>
                    array (
                        'name' => 'Étourmi',
                        'weight' => 2.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/396.png',
                    ),
                397 =>
                    array (
                        'name' => 'Étourvol',
                        'weight' => 15.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/397.png',
                    ),
                398 =>
                    array (
                        'name' => 'Étouraptor',
                        'weight' => 24.9,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/398.png',
                    ),
                399 =>
                    array (
                        'name' => 'Keunotor',
                        'weight' => 20.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Inconscient',
                                1 => 'Simple',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/399.png',
                    ),
                400 =>
                    array (
                        'name' => 'Castorno',
                        'weight' => 31.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Inconscient',
                                1 => 'Simple',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/400.png',
                    ),
                401 =>
                    array (
                        'name' => 'Crikzik',
                        'weight' => 2.2,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/401.png',
                    ),
                402 =>
                    array (
                        'name' => 'Mélokrik',
                        'weight' => 25.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/402.png',
                    ),
                403 =>
                    array (
                        'name' => 'Lixy',
                        'weight' => 9.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/403.png',
                    ),
                404 =>
                    array (
                        'name' => 'Luxio',
                        'weight' => 30.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/404.png',
                    ),
                405 =>
                    array (
                        'name' => 'Luxray',
                        'weight' => 42.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Intimidation',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/405.png',
                    ),
                406 =>
                    array (
                        'name' => 'Rozbouton',
                        'weight' => 1.2,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/406.png',
                    ),
                407 =>
                    array (
                        'name' => 'Roserade',
                        'weight' => 14.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/407.png',
                    ),
                408 =>
                    array (
                        'name' => 'Kranidos',
                        'weight' => 31.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/408.png',
                    ),
                409 =>
                    array (
                        'name' => 'Charkos',
                        'weight' => 102.5,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/409.png',
                    ),
                410 =>
                    array (
                        'name' => 'Dinoclier',
                        'weight' => 57.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/410.png',
                    ),
                411 =>
                    array (
                        'name' => 'Bastiodon',
                        'weight' => 149.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/411.png',
                    ),
                412 =>
                    array (
                        'name' => 'Cheniti',
                        'weight' => 3.4,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/412.png',
                    ),
                413 =>
                    array (
                        'name' => 'Cheniselle',
                        'weight' => 6.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anticipation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/413.png',
                    ),
                414 =>
                    array (
                        'name' => 'Papilord',
                        'weight' => 23.3,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/414.png',
                    ),
                415 =>
                    array (
                        'name' => 'Apitrini',
                        'weight' => 5.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cherche Miel',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/415.png',
                    ),
                416 =>
                    array (
                        'name' => 'Apireine',
                        'weight' => 38.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/416.png',
                    ),
                417 =>
                    array (
                        'name' => 'Pachirisu',
                        'weight' => 3.9,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/417.png',
                    ),
                418 =>
                    array (
                        'name' => 'Mustébouée',
                        'weight' => 29.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/418.png',
                    ),
                419 =>
                    array (
                        'name' => 'Mustéflott',
                        'weight' => 33.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/419.png',
                    ),
                420 =>
                    array (
                        'name' => 'Ceribou',
                        'weight' => 3.3,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/420.png',
                    ),
                421 =>
                    array (
                        'name' => 'Ceriflor',
                        'weight' => 9.3,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Don Floral',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/421.png',
                    ),
                422 =>
                    array (
                        'name' => 'Sancoki',
                        'weight' => 6.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Lavabo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/422.png',
                    ),
                423 =>
                    array (
                        'name' => 'Tritosor',
                        'weight' => 29.9,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Lavabo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/423.png',
                    ),
                424 =>
                    array (
                        'name' => 'Capidextre',
                        'weight' => 20.3,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ramassage',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/424.png',
                    ),
                425 =>
                    array (
                        'name' => 'Baudrive',
                        'weight' => 1.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boom Final',
                                1 => 'Délestage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/425.png',
                    ),
                426 =>
                    array (
                        'name' => 'Grodrive',
                        'weight' => 15.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boom Final',
                                1 => 'Délestage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/426.png',
                    ),
                427 =>
                    array (
                        'name' => 'Laporeille',
                        'weight' => 5.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Maladresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/427.png',
                    ),
                428 =>
                    array (
                        'name' => 'Lockpin',
                        'weight' => 33.3,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Joli Sourire',
                                1 => 'Maladresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/428.png',
                    ),
                429 =>
                    array (
                        'name' => 'Magirêve',
                        'weight' => 4.4,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/429.png',
                    ),
                430 =>
                    array (
                        'name' => 'Corboss',
                        'weight' => 27.3,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chanceux',
                                1 => 'Insomnia',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/430.png',
                    ),
                431 =>
                    array (
                        'name' => 'Chaglam',
                        'weight' => 3.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Échauffement',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/431.png',
                    ),
                432 =>
                    array (
                        'name' => 'Chaffreux',
                        'weight' => 43.8,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Isograisse',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/432.png',
                    ),
                433 =>
                    array (
                        'name' => 'Korillon',
                        'weight' => 0.6,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/433.png',
                    ),
                434 =>
                    array (
                        'name' => 'Moufouette',
                        'weight' => 19.2,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boom Final',
                                1 => 'Puanteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/434.png',
                    ),
                435 =>
                    array (
                        'name' => 'Moufflair',
                        'weight' => 38.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boom Final',
                                1 => 'Puanteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/435.png',
                    ),
                436 =>
                    array (
                        'name' => 'Archéomire',
                        'weight' => 60.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ignifugé',
                                1 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/436.png',
                    ),
                437 =>
                    array (
                        'name' => 'Archéodong',
                        'weight' => 187.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Ignifugé',
                                1 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/437.png',
                    ),
                438 =>
                    array (
                        'name' => 'Manzaï',
                        'weight' => 15.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Tête de Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/438.png',
                    ),
                439 =>
                    array (
                        'name' => 'Mime Jr.',
                        'weight' => 13.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Filtre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/439.png',
                    ),
                440 =>
                    array (
                        'name' => 'Ptiravi',
                        'weight' => 24.4,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/440.png',
                    ),
                441 =>
                    array (
                        'name' => 'Pijako',
                        'weight' => 1.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pieds Confus',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/441.png',
                    ),
                442 =>
                    array (
                        'name' => 'Spiritomb',
                        'weight' => 108.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/442.png',
                    ),
                443 =>
                    array (
                        'name' => 'Griknot',
                        'weight' => 20.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/443.png',
                    ),
                444 =>
                    array (
                        'name' => 'Carmache',
                        'weight' => 56.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/444.png',
                    ),
                445 =>
                    array (
                        'name' => 'Carchacrok',
                        'weight' => 95.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/445.png',
                    ),
                446 =>
                    array (
                        'name' => 'Goinfrex',
                        'weight' => 105.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Isograisse',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/446.png',
                    ),
                447 =>
                    array (
                        'name' => 'Riolu',
                        'weight' => 20.2,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Impassible',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/447.png',
                    ),
                448 =>
                    array (
                        'name' => 'Lucario',
                        'weight' => 54.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Impassible',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/448.png',
                    ),
                449 =>
                    array (
                        'name' => 'Hippopotas',
                        'weight' => 49.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sable Volant',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/449.png',
                    ),
                450 =>
                    array (
                        'name' => 'Hippodocus',
                        'weight' => 300.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sable Volant',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/450.png',
                    ),
                451 =>
                    array (
                        'name' => 'Rapion',
                        'weight' => 12.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/451.png',
                    ),
                452 =>
                    array (
                        'name' => 'Drascore',
                        'weight' => 61.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/452.png',
                    ),
                453 =>
                    array (
                        'name' => 'Cradopaud',
                        'weight' => 23.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anticipation',
                                1 => 'Peau Sèche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/453.png',
                    ),
                454 =>
                    array (
                        'name' => 'Coatox',
                        'weight' => 44.4,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anticipation',
                                1 => 'Peau Sèche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/454.png',
                    ),
                455 =>
                    array (
                        'name' => 'Vortente',
                        'weight' => 27.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/455.png',
                    ),
                456 =>
                    array (
                        'name' => 'Écayon',
                        'weight' => 7.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Lavabo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/456.png',
                    ),
                457 =>
                    array (
                        'name' => 'Luminéon',
                        'weight' => 24.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Lavabo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/457.png',
                    ),
                458 =>
                    array (
                        'name' => 'Babimanta',
                        'weight' => 65.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Glissade',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/458.png',
                    ),
                459 =>
                    array (
                        'name' => 'Blizzi',
                        'weight' => 50.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Alerte Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/459.png',
                    ),
                460 =>
                    array (
                        'name' => 'Blizzaroi',
                        'weight' => 135.5,
                        'height' => 2.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Alerte Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/460.png',
                    ),
                461 =>
                    array (
                        'name' => 'Dimoret',
                        'weight' => 34.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/461.png',
                    ),
                462 =>
                    array (
                        'name' => 'Magnézone',
                        'weight' => 180.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Magnépiège',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/462.png',
                    ),
                463 =>
                    array (
                        'name' => 'Coudlangue',
                        'weight' => 140.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/463.png',
                    ),
                464 =>
                    array (
                        'name' => 'Rhinastoc',
                        'weight' => 282.8,
                        'height' => 2.4,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Paratonnerre',
                                1 => 'Solide Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/464.png',
                    ),
                465 =>
                    array (
                        'name' => 'Bouldeneu',
                        'weight' => 128.6,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/465.png',
                    ),
                466 =>
                    array (
                        'name' => 'Élekable',
                        'weight' => 138.6,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Motorisé',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/466.png',
                    ),
                467 =>
                    array (
                        'name' => 'Maganon',
                        'weight' => 68.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/467.png',
                    ),
                468 =>
                    array (
                        'name' => 'Togekiss',
                        'weight' => 38.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'fairy',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/468.png',
                    ),
                469 =>
                    array (
                        'name' => 'Yanmega',
                        'weight' => 51.5,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lentiteintée',
                                1 => 'Turbo',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/469.png',
                    ),
                470 =>
                    array (
                        'name' => 'Phyllali',
                        'weight' => 25.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/470.png',
                    ),
                471 =>
                    array (
                        'name' => 'Givrali',
                        'weight' => 25.9,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/471.png',
                    ),
                472 =>
                    array (
                        'name' => 'Scorvol',
                        'weight' => 42.5,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hyper Cutter',
                                1 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/472.png',
                    ),
                473 =>
                    array (
                        'name' => 'Mammochon',
                        'weight' => 291.0,
                        'height' => 2.5,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/473.png',
                    ),
                474 =>
                    array (
                        'name' => 'Porygon-Z',
                        'weight' => 34.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Adaptabilité',
                                1 => 'Télécharge',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/474.png',
                    ),
                475 =>
                    array (
                        'name' => 'Gallame',
                        'weight' => 52.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Impassible',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/475.png',
                    ),
                476 =>
                    array (
                        'name' => 'Tarinorme',
                        'weight' => 340.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Magnépiège',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/476.png',
                    ),
                477 =>
                    array (
                        'name' => 'Noctunoir',
                        'weight' => 106.6,
                        'height' => 2.2,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/477.png',
                    ),
                478 =>
                    array (
                        'name' => 'Momartik',
                        'weight' => 26.6,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'ice',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/478.png',
                    ),
                479 =>
                    array (
                        'name' => 'Motisma',
                        'weight' => 0.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/479.png',
                    ),
                480 =>
                    array (
                        'name' => 'Créhelf',
                        'weight' => 0.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/480.png',
                    ),
                481 =>
                    array (
                        'name' => 'Créfollet',
                        'weight' => 0.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/481.png',
                    ),
                482 =>
                    array (
                        'name' => 'Créfadet',
                        'weight' => 0.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/482.png',
                    ),
                483 =>
                    array (
                        'name' => 'Dialga',
                        'weight' => 683.0,
                        'height' => 5.4,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/483.png',
                    ),
                484 =>
                    array (
                        'name' => 'Palkia',
                        'weight' => 336.0,
                        'height' => 4.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/484.png',
                    ),
                485 =>
                    array (
                        'name' => 'Heatran',
                        'weight' => 430.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/485.png',
                    ),
                486 =>
                    array (
                        'name' => 'Regigigas',
                        'weight' => 420.0,
                        'height' => 3.7,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Début Calme',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/486.png',
                    ),
                487 =>
                    array (
                        'name' => 'Giratina',
                        'weight' => 750.0,
                        'height' => 4.5,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/487.png',
                    ),
                488 =>
                    array (
                        'name' => 'Cresselia',
                        'weight' => 85.6,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/488.png',
                    ),
                489 =>
                    array (
                        'name' => 'Phione',
                        'weight' => 3.1,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/489.png',
                    ),
                490 =>
                    array (
                        'name' => 'Manaphy',
                        'weight' => 1.4,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/490.png',
                    ),
                491 =>
                    array (
                        'name' => 'Darkrai',
                        'weight' => 50.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mauvais Rêve',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/491.png',
                    ),
                492 =>
                    array (
                        'name' => 'Shaymin',
                        'weight' => 2.1,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/492.png',
                    ),
                493 =>
                    array (
                        'name' => 'Arceus',
                        'weight' => 320.0,
                        'height' => 3.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Multi-Type',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/493.png',
                    ),
                494 =>
                    array (
                        'name' => 'Victini',
                        'weight' => 4.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Victorieux',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/494.png',
                    ),
                495 =>
                    array (
                        'name' => 'Vipélierre',
                        'weight' => 8.1,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/495.png',
                    ),
                496 =>
                    array (
                        'name' => 'Lianaja',
                        'weight' => 16.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/496.png',
                    ),
                497 =>
                    array (
                        'name' => 'Majaspic',
                        'weight' => 63.0,
                        'height' => 3.3,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/497.png',
                    ),
                498 =>
                    array (
                        'name' => 'Gruikui',
                        'weight' => 9.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/498.png',
                    ),
                499 =>
                    array (
                        'name' => 'Grotichon',
                        'weight' => 55.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/499.png',
                    ),
                500 =>
                    array (
                        'name' => 'Roitiflam',
                        'weight' => 150.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/500.png',
                    ),
                501 =>
                    array (
                        'name' => 'Moustillon',
                        'weight' => 5.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/501.png',
                    ),
                502 =>
                    array (
                        'name' => 'Mateloutre',
                        'weight' => 24.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/502.png',
                    ),
                503 =>
                    array (
                        'name' => 'Clamiral',
                        'weight' => 94.6,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/503.png',
                    ),
                504 =>
                    array (
                        'name' => 'Ratentif',
                        'weight' => 11.6,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fuite',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/504.png',
                    ),
                505 =>
                    array (
                        'name' => 'Miradar',
                        'weight' => 27.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lumiattirance',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/505.png',
                    ),
                506 =>
                    array (
                        'name' => 'Ponchiot',
                        'weight' => 4.1,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Esprit Vital',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/506.png',
                    ),
                507 =>
                    array (
                        'name' => 'Ponchien',
                        'weight' => 14.7,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Baigne Sable',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/507.png',
                    ),
                508 =>
                    array (
                        'name' => 'Mastouffe',
                        'weight' => 61.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Baigne Sable',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/508.png',
                    ),
                509 =>
                    array (
                        'name' => 'Chacripan',
                        'weight' => 10.1,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Délestage',
                                1 => 'Échauffement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/509.png',
                    ),
                510 =>
                    array (
                        'name' => 'Léopardus',
                        'weight' => 37.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Délestage',
                                1 => 'Échauffement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/510.png',
                    ),
                511 =>
                    array (
                        'name' => 'Feuillajou',
                        'weight' => 10.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/511.png',
                    ),
                512 =>
                    array (
                        'name' => 'Feuiloutan',
                        'weight' => 30.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/512.png',
                    ),
                513 =>
                    array (
                        'name' => 'Flamajou',
                        'weight' => 11.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/513.png',
                    ),
                514 =>
                    array (
                        'name' => 'Flamoutan',
                        'weight' => 28.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/514.png',
                    ),
                515 =>
                    array (
                        'name' => 'Flotajou',
                        'weight' => 13.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/515.png',
                    ),
                516 =>
                    array (
                        'name' => 'Flotoutan',
                        'weight' => 29.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/516.png',
                    ),
                517 =>
                    array (
                        'name' => 'Munna',
                        'weight' => 23.3,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Prédiction',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/517.png',
                    ),
                518 =>
                    array (
                        'name' => 'Mushana',
                        'weight' => 60.5,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Prédiction',
                                1 => 'Synchro',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/518.png',
                    ),
                519 =>
                    array (
                        'name' => 'Poichigeon',
                        'weight' => 2.1,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chanceux',
                                1 => 'Cœur de Coq',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/519.png',
                    ),
                520 =>
                    array (
                        'name' => 'Colombeau',
                        'weight' => 15.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chanceux',
                                1 => 'Cœur de Coq',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/520.png',
                    ),
                521 =>
                    array (
                        'name' => 'Déflaisan',
                        'weight' => 29.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chanceux',
                                1 => 'Cœur de Coq',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/521.png',
                    ),
                522 =>
                    array (
                        'name' => 'Zébibron',
                        'weight' => 29.8,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Motorisé',
                                1 => 'Paratonnerre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/522.png',
                    ),
                523 =>
                    array (
                        'name' => 'Zéblitz',
                        'weight' => 79.5,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Motorisé',
                                1 => 'Paratonnerre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/523.png',
                    ),
                524 =>
                    array (
                        'name' => 'Nodulithe',
                        'weight' => 18.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/524.png',
                    ),
                525 =>
                    array (
                        'name' => 'Géolithe',
                        'weight' => 102.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/525.png',
                    ),
                526 =>
                    array (
                        'name' => 'Gigalithe',
                        'weight' => 260.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/526.png',
                    ),
                527 =>
                    array (
                        'name' => 'Chovsourir',
                        'weight' => 2.1,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Inconscient',
                                1 => 'Maladresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/527.png',
                    ),
                528 =>
                    array (
                        'name' => 'Rhinolove',
                        'weight' => 10.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Inconscient',
                                1 => 'Maladresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/528.png',
                    ),
                529 =>
                    array (
                        'name' => 'Rototaupe',
                        'weight' => 8.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Baigne Sable',
                                1 => 'Force Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/529.png',
                    ),
                530 =>
                    array (
                        'name' => 'Minotaupe',
                        'weight' => 40.4,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Baigne Sable',
                                1 => 'Force Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/530.png',
                    ),
                531 =>
                    array (
                        'name' => 'Nanméouïe',
                        'weight' => 31.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Soin',
                                1 => 'Régé-Force',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/531.png',
                    ),
                532 =>
                    array (
                        'name' => 'Charpenti',
                        'weight' => 12.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/532.png',
                    ),
                533 =>
                    array (
                        'name' => 'Ouvrifier',
                        'weight' => 40.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/533.png',
                    ),
                534 =>
                    array (
                        'name' => 'Bétochef',
                        'weight' => 87.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cran',
                                1 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/534.png',
                    ),
                535 =>
                    array (
                        'name' => 'Tritonde',
                        'weight' => 4.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/535.png',
                    ),
                536 =>
                    array (
                        'name' => 'Batracné',
                        'weight' => 17.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/536.png',
                    ),
                537 =>
                    array (
                        'name' => 'Crapustule',
                        'weight' => 62.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glissade',
                                1 => 'Toxitouche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/537.png',
                    ),
                538 =>
                    array (
                        'name' => 'Judokrak',
                        'weight' => 55.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Cran',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/538.png',
                    ),
                539 =>
                    array (
                        'name' => 'Karaclée',
                        'weight' => 51.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/539.png',
                    ),
                540 =>
                    array (
                        'name' => 'Larveyette',
                        'weight' => 2.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/540.png',
                    ),
                541 =>
                    array (
                        'name' => 'Couverdure',
                        'weight' => 7.3,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/541.png',
                    ),
                542 =>
                    array (
                        'name' => 'Manternel',
                        'weight' => 20.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/542.png',
                    ),
                543 =>
                    array (
                        'name' => 'Venipatte',
                        'weight' => 5.3,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/543.png',
                    ),
                544 =>
                    array (
                        'name' => 'Scobolide',
                        'weight' => 58.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/544.png',
                    ),
                545 =>
                    array (
                        'name' => 'Brutapode',
                        'weight' => 200.5,
                        'height' => 2.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Point Poison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/545.png',
                    ),
                546 =>
                    array (
                        'name' => 'Doudouvet',
                        'weight' => 0.6,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Farceur',
                                1 => 'Infiltration',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/546.png',
                    ),
                547 =>
                    array (
                        'name' => 'Farfaduvet',
                        'weight' => 6.6,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Farceur',
                                1 => 'Infiltration',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/547.png',
                    ),
                548 =>
                    array (
                        'name' => 'Chlorobule',
                        'weight' => 6.6,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/548.png',
                    ),
                549 =>
                    array (
                        'name' => 'Fragilady',
                        'weight' => 16.3,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/549.png',
                    ),
                550 =>
                    array (
                        'name' => 'Bargantua',
                        'weight' => 18.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Adaptabilité',
                                1 => 'Téméraire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/550.png',
                    ),
                551 =>
                    array (
                        'name' => 'Mascaïman',
                        'weight' => 15.2,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Impudence',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/551.png',
                    ),
                552 =>
                    array (
                        'name' => 'Escroco',
                        'weight' => 33.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Impudence',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/552.png',
                    ),
                553 =>
                    array (
                        'name' => 'Crocorible',
                        'weight' => 96.3,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Impudence',
                                1 => 'Intimidation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/553.png',
                    ),
                554 =>
                    array (
                        'name' => 'Darumarond',
                        'weight' => 37.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/554.png',
                    ),
                555 =>
                    array (
                        'name' => 'Darumacho',
                        'weight' => 92.9,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/555.png',
                    ),
                556 =>
                    array (
                        'name' => 'Maracachi',
                        'weight' => 28.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Chlorophylle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/556.png',
                    ),
                557 =>
                    array (
                        'name' => 'Crabicoque',
                        'weight' => 14.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/557.png',
                    ),
                558 =>
                    array (
                        'name' => 'Crabaraque',
                        'weight' => 200.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/558.png',
                    ),
                559 =>
                    array (
                        'name' => 'Baggiguane',
                        'weight' => 11.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Impudence',
                                1 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/559.png',
                    ),
                560 =>
                    array (
                        'name' => 'Baggaïd',
                        'weight' => 30.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Impudence',
                                1 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/560.png',
                    ),
                561 =>
                    array (
                        'name' => 'Cryptéro',
                        'weight' => 14.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Garde Magik',
                                1 => 'Peau Miracle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/561.png',
                    ),
                562 =>
                    array (
                        'name' => 'Tutafeh',
                        'weight' => 1.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Momie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/562.png',
                    ),
                563 =>
                    array (
                        'name' => 'Tutankafer',
                        'weight' => 76.5,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Momie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/563.png',
                    ),
                564 =>
                    array (
                        'name' => 'Carapagos',
                        'weight' => 16.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Solide Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/564.png',
                    ),
                565 =>
                    array (
                        'name' => 'Mégapagos',
                        'weight' => 81.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                                1 => 'Solide Roc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/565.png',
                    ),
                566 =>
                    array (
                        'name' => 'Arkéapti',
                        'weight' => 9.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Défaitiste',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/566.png',
                    ),
                567 =>
                    array (
                        'name' => 'Aéroptéryx',
                        'weight' => 32.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Défaitiste',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/567.png',
                    ),
                568 =>
                    array (
                        'name' => 'Miamiasme',
                        'weight' => 31.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Puanteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/568.png',
                    ),
                569 =>
                    array (
                        'name' => 'Miasmax',
                        'weight' => 107.3,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurouillée',
                                1 => 'Puanteur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/569.png',
                    ),
                570 =>
                    array (
                        'name' => 'Zorua',
                        'weight' => 12.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Illusion',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/570.png',
                    ),
                571 =>
                    array (
                        'name' => 'Zoroark',
                        'weight' => 81.1,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Illusion',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/571.png',
                    ),
                572 =>
                    array (
                        'name' => 'Chinchidou',
                        'weight' => 5.8,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Joli Sourire',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/572.png',
                    ),
                573 =>
                    array (
                        'name' => 'Pashmilla',
                        'weight' => 7.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Joli Sourire',
                                1 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/573.png',
                    ),
                574 =>
                    array (
                        'name' => 'Scrutella',
                        'weight' => 5.8,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Fouille',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/574.png',
                    ),
                575 =>
                    array (
                        'name' => 'Mesmérella',
                        'weight' => 18.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Fouille',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/575.png',
                    ),
                576 =>
                    array (
                        'name' => 'Sidérella',
                        'weight' => 44.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Battant',
                                1 => 'Fouille',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/576.png',
                    ),
                577 =>
                    array (
                        'name' => 'Nucléos',
                        'weight' => 1.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Envelocape',
                                1 => 'Garde Magik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/577.png',
                    ),
                578 =>
                    array (
                        'name' => 'Méios',
                        'weight' => 8.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Envelocape',
                                1 => 'Garde Magik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/578.png',
                    ),
                579 =>
                    array (
                        'name' => 'Symbios',
                        'weight' => 20.1,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Envelocape',
                                1 => 'Garde Magik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/579.png',
                    ),
                580 =>
                    array (
                        'name' => 'Couaneton',
                        'weight' => 5.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur de Coq',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/580.png',
                    ),
                581 =>
                    array (
                        'name' => 'Lakmécygne',
                        'weight' => 24.2,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur de Coq',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/581.png',
                    ),
                582 =>
                    array (
                        'name' => 'Sorbébé',
                        'weight' => 5.7,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/582.png',
                    ),
                583 =>
                    array (
                        'name' => 'Sorboul',
                        'weight' => 41.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/583.png',
                    ),
                584 =>
                    array (
                        'name' => 'Sorbouboul',
                        'weight' => 57.5,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/584.png',
                    ),
                585 =>
                    array (
                        'name' => 'Vivaldaim',
                        'weight' => 19.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Herbivore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/585.png',
                    ),
                586 =>
                    array (
                        'name' => 'Haydaim',
                        'weight' => 92.5,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Chlorophylle',
                                1 => 'Herbivore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/586.png',
                    ),
                587 =>
                    array (
                        'name' => 'Emolga',
                        'weight' => 5.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/587.png',
                    ),
                588 =>
                    array (
                        'name' => 'Carabing',
                        'weight' => 5.9,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                                1 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/588.png',
                    ),
                589 =>
                    array (
                        'name' => 'Lançargot',
                        'weight' => 33.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/589.png',
                    ),
                590 =>
                    array (
                        'name' => 'Trompignon',
                        'weight' => 1.0,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pose Spore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/590.png',
                    ),
                591 =>
                    array (
                        'name' => 'Gaulet',
                        'weight' => 10.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pose Spore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/591.png',
                    ),
                592 =>
                    array (
                        'name' => 'Viskuse',
                        'weight' => 33.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Corps Maudit',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/592.png',
                    ),
                593 =>
                    array (
                        'name' => 'Moyade',
                        'weight' => 135.0,
                        'height' => 2.2,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                                1 => 'Corps Maudit',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/593.png',
                    ),
                594 =>
                    array (
                        'name' => 'Mamanbo',
                        'weight' => 31.6,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Soin',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/594.png',
                    ),
                595 =>
                    array (
                        'name' => 'Statitik',
                        'weight' => 0.6,
                        'height' => 0.1,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Œil Composé',
                                1 => 'Tension',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/595.png',
                    ),
                596 =>
                    array (
                        'name' => 'Mygavolt',
                        'weight' => 14.3,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Œil Composé',
                                1 => 'Tension',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/596.png',
                    ),
                597 =>
                    array (
                        'name' => 'Grindur',
                        'weight' => 18.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Épine de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/597.png',
                    ),
                598 =>
                    array (
                        'name' => 'Noacier',
                        'weight' => 110.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Épine de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/598.png',
                    ),
                599 =>
                    array (
                        'name' => 'Tic',
                        'weight' => 21.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Minus',
                                1 => 'Plus',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/599.png',
                    ),
                600 =>
                    array (
                        'name' => 'Clic',
                        'weight' => 51.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Minus',
                                1 => 'Plus',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/600.png',
                    ),
                601 =>
                    array (
                        'name' => 'Cliticlic',
                        'weight' => 81.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Minus',
                                1 => 'Plus',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/601.png',
                    ),
                602 =>
                    array (
                        'name' => 'Anchwatt',
                        'weight' => 0.3,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/602.png',
                    ),
                603 =>
                    array (
                        'name' => 'Lampéroie',
                        'weight' => 22.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/603.png',
                    ),
                604 =>
                    array (
                        'name' => 'Ohmassacre',
                        'weight' => 80.5,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/604.png',
                    ),
                605 =>
                    array (
                        'name' => 'Lewsor',
                        'weight' => 9.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Synchro',
                                1 => 'Télépathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/605.png',
                    ),
                606 =>
                    array (
                        'name' => 'Neitram',
                        'weight' => 34.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Synchro',
                                1 => 'Télépathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/606.png',
                    ),
                607 =>
                    array (
                        'name' => 'Funécire',
                        'weight' => 3.1,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/607.png',
                    ),
                608 =>
                    array (
                        'name' => 'Mélancolux',
                        'weight' => 13.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/608.png',
                    ),
                609 =>
                    array (
                        'name' => 'Lugulabre',
                        'weight' => 34.3,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/609.png',
                    ),
                610 =>
                    array (
                        'name' => 'Coupenotte',
                        'weight' => 18.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/610.png',
                    ),
                611 =>
                    array (
                        'name' => 'Incisache',
                        'weight' => 36.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/611.png',
                    ),
                612 =>
                    array (
                        'name' => 'Tranchodon',
                        'weight' => 105.5,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                                1 => 'Rivalité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/612.png',
                    ),
                613 =>
                    array (
                        'name' => 'Polarhume',
                        'weight' => 8.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/613.png',
                    ),
                614 =>
                    array (
                        'name' => 'Polagriffe',
                        'weight' => 260.0,
                        'height' => 2.6,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Rideau Neige',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/614.png',
                    ),
                615 =>
                    array (
                        'name' => 'Hexagel',
                        'weight' => 148.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/615.png',
                    ),
                616 =>
                    array (
                        'name' => 'Escargaume',
                        'weight' => 7.7,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/616.png',
                    ),
                617 =>
                    array (
                        'name' => 'Limaspeed',
                        'weight' => 25.3,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Glue',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/617.png',
                    ),
                618 =>
                    array (
                        'name' => 'Limonde',
                        'weight' => 11.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Échauffement',
                                1 => 'Statik',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/618.png',
                    ),
                619 =>
                    array (
                        'name' => 'Kungfouine',
                        'weight' => 20.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Régé-Force',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/619.png',
                    ),
                620 =>
                    array (
                        'name' => 'Shaofouine',
                        'weight' => 35.5,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Régé-Force',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/620.png',
                    ),
                621 =>
                    array (
                        'name' => 'Drakkarmin',
                        'weight' => 139.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Dure',
                                1 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/621.png',
                    ),
                622 =>
                    array (
                        'name' => 'Gringolem',
                        'weight' => 92.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Maladresse',
                                1 => 'Poing de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/622.png',
                    ),
                623 =>
                    array (
                        'name' => 'Golemastoc',
                        'weight' => 330.0,
                        'height' => 2.8,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Maladresse',
                                1 => 'Poing de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/623.png',
                    ),
                624 =>
                    array (
                        'name' => 'Scalpion',
                        'weight' => 10.2,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Acharné',
                                1 => 'Attention',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/624.png',
                    ),
                625 =>
                    array (
                        'name' => 'Scalproie',
                        'weight' => 70.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Acharné',
                                1 => 'Attention',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/625.png',
                    ),
                626 =>
                    array (
                        'name' => 'Frison',
                        'weight' => 94.6,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Herbivore',
                                1 => 'Téméraire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/626.png',
                    ),
                627 =>
                    array (
                        'name' => 'Furaiglon',
                        'weight' => 10.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                                1 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/627.png',
                    ),
                628 =>
                    array (
                        'name' => 'Gueriaigle',
                        'weight' => 41.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Regard Vif',
                                1 => 'Sans Limite',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/628.png',
                    ),
                629 =>
                    array (
                        'name' => 'Vostourno',
                        'weight' => 9.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur de Coq',
                                1 => 'Envelocape',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/629.png',
                    ),
                630 =>
                    array (
                        'name' => 'Vaututrice',
                        'weight' => 39.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur de Coq',
                                1 => 'Envelocape',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/630.png',
                    ),
                631 =>
                    array (
                        'name' => 'Aflamanoir',
                        'weight' => 58.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gloutonnerie',
                                1 => 'Torche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/631.png',
                    ),
                632 =>
                    array (
                        'name' => 'Fermite',
                        'weight' => 33.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                                1 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/632.png',
                    ),
                633 =>
                    array (
                        'name' => 'Solochi',
                        'weight' => 17.3,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/633.png',
                    ),
                634 =>
                    array (
                        'name' => 'Diamat',
                        'weight' => 50.0,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Agitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/634.png',
                    ),
                635 =>
                    array (
                        'name' => 'Trioxhydre',
                        'weight' => 160.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/635.png',
                    ),
                636 =>
                    array (
                        'name' => 'Pyronille',
                        'weight' => 28.8,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/636.png',
                    ),
                637 =>
                    array (
                        'name' => 'Pyrax',
                        'weight' => 46.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/637.png',
                    ),
                638 =>
                    array (
                        'name' => 'Cobaltium',
                        'weight' => 250.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Noble',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/638.png',
                    ),
                639 =>
                    array (
                        'name' => 'Terrakium',
                        'weight' => 260.0,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Noble',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/639.png',
                    ),
                640 =>
                    array (
                        'name' => 'Viridium',
                        'weight' => 200.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Noble',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/640.png',
                    ),
                641 =>
                    array (
                        'name' => 'Boréas',
                        'weight' => 63.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Farceur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/641.png',
                    ),
                642 =>
                    array (
                        'name' => 'Fulguris',
                        'weight' => 61.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Farceur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/642.png',
                    ),
                643 =>
                    array (
                        'name' => 'Reshiram',
                        'weight' => 330.0,
                        'height' => 3.2,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'TurboBrasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/643.png',
                    ),
                644 =>
                    array (
                        'name' => 'Zekrom',
                        'weight' => 345.0,
                        'height' => 2.9,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Téra-Voltage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/644.png',
                    ),
                645 =>
                    array (
                        'name' => 'Démétéros',
                        'weight' => 68.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'ground',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Force Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/645.png',
                    ),
                646 =>
                    array (
                        'name' => 'Kyurem',
                        'weight' => 325.0,
                        'height' => 3.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Pression',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/646.png',
                    ),
                647 =>
                    array (
                        'name' => 'Keldeo',
                        'weight' => 48.5,
                        'height' => 1.4,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Noble',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/647.png',
                    ),
                648 =>
                    array (
                        'name' => 'Meloetta',
                        'weight' => 6.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sérénité',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/648.png',
                    ),
                649 =>
                    array (
                        'name' => 'Genesect',
                        'weight' => 82.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Télécharge',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/649.png',
                    ),
                650 =>
                    array (
                        'name' => 'Marisson',
                        'weight' => 9.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/650.png',
                    ),
                651 =>
                    array (
                        'name' => 'Boguérisse',
                        'weight' => 29.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/651.png',
                    ),
                652 =>
                    array (
                        'name' => 'Blindépique',
                        'weight' => 90.0,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/652.png',
                    ),
                653 =>
                    array (
                        'name' => 'Feunnec',
                        'weight' => 9.4,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/653.png',
                    ),
                654 =>
                    array (
                        'name' => 'Roussil',
                        'weight' => 14.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/654.png',
                    ),
                655 =>
                    array (
                        'name' => 'Goupelin',
                        'weight' => 39.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/655.png',
                    ),
                656 =>
                    array (
                        'name' => 'Grenousse',
                        'weight' => 7.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/656.png',
                    ),
                657 =>
                    array (
                        'name' => 'Croâporal',
                        'weight' => 10.9,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/657.png',
                    ),
                658 =>
                    array (
                        'name' => 'Amphinobi',
                        'weight' => 40.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/658.png',
                    ),
                659 =>
                    array (
                        'name' => 'Sapereau',
                        'weight' => 5.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Bajoues',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/659.png',
                    ),
                660 =>
                    array (
                        'name' => 'Excavarenne',
                        'weight' => 42.4,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Bajoues',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/660.png',
                    ),
                661 =>
                    array (
                        'name' => 'Passerouge',
                        'weight' => 1.7,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur de Coq',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/661.png',
                    ),
                662 =>
                    array (
                        'name' => 'Braisillon',
                        'weight' => 16.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/662.png',
                    ),
                663 =>
                    array (
                        'name' => 'Flambusard',
                        'weight' => 24.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Ardent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/663.png',
                    ),
                664 =>
                    array (
                        'name' => 'Lépidonille',
                        'weight' => 2.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                                1 => 'Œil Composé',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/664.png',
                    ),
                665 =>
                    array (
                        'name' => 'Pérégrain',
                        'weight' => 8.4,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Mue',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/665.png',
                    ),
                666 =>
                    array (
                        'name' => 'Prismillon',
                        'weight' => 17.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Écran Poudre',
                                1 => 'Œil Composé',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/666.png',
                    ),
                667 =>
                    array (
                        'name' => 'Hélionceau',
                        'weight' => 13.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Rivalité',
                                1 => 'Tension',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/667.png',
                    ),
                668 =>
                    array (
                        'name' => 'Némélios',
                        'weight' => 81.5,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Rivalité',
                                1 => 'Tension',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/668.png',
                    ),
                669 =>
                    array (
                        'name' => 'Flabébé',
                        'weight' => 0.1,
                        'height' => 0.1,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Flora-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/669.png',
                    ),
                670 =>
                    array (
                        'name' => 'FLOETTE',
                        'weight' => 0.9,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Flora-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/670.png',
                    ),
                671 =>
                    array (
                        'name' => 'Florges',
                        'weight' => 10.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Flora-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/671.png',
                    ),
                672 =>
                    array (
                        'name' => 'Cabriolaine',
                        'weight' => 31.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Herbivore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/672.png',
                    ),
                673 =>
                    array (
                        'name' => 'Chevroum',
                        'weight' => 91.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Herbivore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/673.png',
                    ),
                674 =>
                    array (
                        'name' => 'Pandespiègle',
                        'weight' => 8.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                                1 => 'Poing de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/674.png',
                    ),
                675 =>
                    array (
                        'name' => 'Pandarbare',
                        'weight' => 136.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brise Moule',
                                1 => 'Poing de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/675.png',
                    ),
                676 =>
                    array (
                        'name' => 'Couafarel',
                        'weight' => 28.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Toison Épaisse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/676.png',
                    ),
                677 =>
                    array (
                        'name' => 'Psystigri',
                        'weight' => 3.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Infiltration',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/677.png',
                    ),
                678 =>
                    array (
                        'name' => 'Mistigrix',
                        'weight' => 8.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Infiltration',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/678.png',
                    ),
                679 =>
                    array (
                        'name' => 'Monorpale',
                        'weight' => 2.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Annule Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/679.png',
                    ),
                680 =>
                    array (
                        'name' => 'Dimoclès',
                        'weight' => 4.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Annule Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/680.png',
                    ),
                681 =>
                    array (
                        'name' => 'Exagide',
                        'weight' => 53.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Déclic Tactique',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/681.png',
                    ),
                682 =>
                    array (
                        'name' => 'Fluvetin',
                        'weight' => 0.5,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Soin',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/682.png',
                    ),
                683 =>
                    array (
                        'name' => 'Cocotine',
                        'weight' => 15.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cœur Soin',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/683.png',
                    ),
                684 =>
                    array (
                        'name' => 'Sucroquin',
                        'weight' => 3.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gluco-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/684.png',
                    ),
                685 =>
                    array (
                        'name' => 'Cupcanaille',
                        'weight' => 5.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Gluco-Voile',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/685.png',
                    ),
                686 =>
                    array (
                        'name' => 'Sepiatop',
                        'weight' => 3.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Contestation',
                                1 => 'Ventouse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/686.png',
                    ),
                687 =>
                    array (
                        'name' => 'Sepiatroce',
                        'weight' => 47.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Contestation',
                                1 => 'Ventouse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/687.png',
                    ),
                688 =>
                    array (
                        'name' => 'Opermine',
                        'weight' => 31.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Griffe Dure',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/688.png',
                    ),
                689 =>
                    array (
                        'name' => 'Golgopathe',
                        'weight' => 96.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Griffe Dure',
                                1 => 'Sniper',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/689.png',
                    ),
                690 =>
                    array (
                        'name' => 'Venalgue',
                        'weight' => 7.3,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Toxitouche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/690.png',
                    ),
                691 =>
                    array (
                        'name' => 'Kravarech',
                        'weight' => 81.5,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Point Poison',
                                1 => 'Toxitouche',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/691.png',
                    ),
                692 =>
                    array (
                        'name' => 'Flingouste',
                        'weight' => 8.3,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Méga Blaster',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/692.png',
                    ),
                693 =>
                    array (
                        'name' => 'Gamblast',
                        'weight' => 35.3,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Méga Blaster',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/693.png',
                    ),
                694 =>
                    array (
                        'name' => 'Galvaran',
                        'weight' => 6.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Sèche',
                                1 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/694.png',
                    ),
                695 =>
                    array (
                        'name' => 'Iguolta',
                        'weight' => 21.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Sèche',
                                1 => 'Voile Sable',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/695.png',
                    ),
                696 =>
                    array (
                        'name' => 'Ptyranidur',
                        'weight' => 26.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Prognathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/696.png',
                    ),
                697 =>
                    array (
                        'name' => 'Rexillius',
                        'weight' => 270.0,
                        'height' => 2.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Prognathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/697.png',
                    ),
                698 =>
                    array (
                        'name' => 'Amagara',
                        'weight' => 25.2,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Gelée',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/698.png',
                    ),
                699 =>
                    array (
                        'name' => 'Dragmara',
                        'weight' => 225.0,
                        'height' => 2.7,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Peau Gelée',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/699.png',
                    ),
                700 =>
                    array (
                        'name' => 'Nymphali',
                        'weight' => 23.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Joli Sourire',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/700.png',
                    ),
                701 =>
                    array (
                        'name' => 'Brutalibré',
                        'weight' => 21.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Délestage',
                                1 => 'Échauffement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/701.png',
                    ),
                702 =>
                    array (
                        'name' => 'DEDENNE',
                        'weight' => 2.2,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Bajoues',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/702.png',
                    ),
                703 =>
                    array (
                        'name' => 'Strassie',
                        'weight' => 5.7,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/703.png',
                    ),
                704 =>
                    array (
                        'name' => 'Mucuscule',
                        'weight' => 2.8,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Herbivore',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/704.png',
                    ),
                705 =>
                    array (
                        'name' => 'Colimucus',
                        'weight' => 17.5,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Herbivore',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/705.png',
                    ),
                706 =>
                    array (
                        'name' => 'Muplodocus',
                        'weight' => 150.5,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Herbivore',
                                1 => 'Hydratation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/706.png',
                    ),
                707 =>
                    array (
                        'name' => 'Trousselin',
                        'weight' => 3.0,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Farceur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/707.png',
                    ),
                708 =>
                    array (
                        'name' => 'Brocélôme',
                        'weight' => 7.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/708.png',
                    ),
                709 =>
                    array (
                        'name' => 'Desséliande',
                        'weight' => 71.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Médic Nature',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/709.png',
                    ),
                710 =>
                    array (
                        'name' => 'Pitrouille',
                        'weight' => 5.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/710.png',
                    ),
                711 =>
                    array (
                        'name' => 'Banshitrouye',
                        'weight' => 12.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Ramassage',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/711.png',
                    ),
                712 =>
                    array (
                        'name' => 'Grelaçon',
                        'weight' => 99.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/712.png',
                    ),
                713 =>
                    array (
                        'name' => 'Séracrawl',
                        'weight' => 505.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Gel',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/713.png',
                    ),
                714 =>
                    array (
                        'name' => 'Sonistrelle',
                        'weight' => 8.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'flying',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Infiltration',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/714.png',
                    ),
                715 =>
                    array (
                        'name' => 'Bruyverne',
                        'weight' => 85.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'flying',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fouille',
                                1 => 'Infiltration',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/715.png',
                    ),
                716 =>
                    array (
                        'name' => 'Xerneas',
                        'weight' => 215.0,
                        'height' => 3.0,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Aura Féérique',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/716.png',
                    ),
                717 =>
                    array (
                        'name' => 'Yveltal',
                        'weight' => 203.0,
                        'height' => 5.8,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Aura Ténébreuse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/717.png',
                    ),
                718 =>
                    array (
                        'name' => 'Zygarde',
                        'weight' => 305.0,
                        'height' => 5.0,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Aura Inversée',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/718.png',
                    ),
                719 =>
                    array (
                        'name' => 'Diancie',
                        'weight' => 8.8,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Sain',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/719.png',
                    ),
                720 =>
                    array (
                        'name' => 'Hoopa',
                        'weight' => 9.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Magicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/720.png',
                    ),
                721 =>
                    array (
                        'name' => 'Volcanion',
                        'weight' => 195.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Absorb Eau',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/721.png',
                    ),
                722 =>
                    array (
                        'name' => 'Brindibou',
                        'weight' => 1.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/722.png',
                    ),
                723 =>
                    array (
                        'name' => 'Efflèche',
                        'weight' => 16.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/723.png',
                    ),
                724 =>
                    array (
                        'name' => 'Archéduc',
                        'weight' => 36.6,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Engrais',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/724.png',
                    ),
                725 =>
                    array (
                        'name' => 'Flamiaou',
                        'weight' => 4.3,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/725.png',
                    ),
                726 =>
                    array (
                        'name' => 'Matoufeu',
                        'weight' => 25.0,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/726.png',
                    ),
                727 =>
                    array (
                        'name' => 'Félinferno',
                        'weight' => 83.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'dark',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Brasier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/727.png',
                    ),
                728 =>
                    array (
                        'name' => 'Otaquin',
                        'weight' => 7.5,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/728.png',
                    ),
                729 =>
                    array (
                        'name' => 'Otarlette',
                        'weight' => 17.5,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/729.png',
                    ),
                730 =>
                    array (
                        'name' => 'Oratoria',
                        'weight' => 44.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Torrent',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/730.png',
                    ),
                731 =>
                    array (
                        'name' => 'Picassaut',
                        'weight' => 1.2,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Multi-Coups',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/731.png',
                    ),
                732 =>
                    array (
                        'name' => 'Piclairon',
                        'weight' => 14.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Multi-Coups',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/732.png',
                    ),
                733 =>
                    array (
                        'name' => 'Bazoucan',
                        'weight' => 26.0,
                        'height' => 1.1,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Multi-Coups',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/733.png',
                    ),
                734 =>
                    array (
                        'name' => 'Manglouton',
                        'weight' => 6.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Filature',
                                1 => 'Prognathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/734.png',
                    ),
                735 =>
                    array (
                        'name' => 'Argouste',
                        'weight' => 14.2,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Filature',
                                1 => 'Prognathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/735.png',
                    ),
                736 =>
                    array (
                        'name' => 'Larvibule',
                        'weight' => 4.4,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Essaim',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/736.png',
                    ),
                737 =>
                    array (
                        'name' => 'Chrysapile',
                        'weight' => 10.5,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Batterie',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/737.png',
                    ),
                738 =>
                    array (
                        'name' => 'Lucanon',
                        'weight' => 45.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lévitation',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/738.png',
                    ),
                739 =>
                    array (
                        'name' => 'Crabagarre',
                        'weight' => 7.0,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hyper Cutter',
                                1 => 'Poing de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/739.png',
                    ),
                740 =>
                    array (
                        'name' => 'Crabominable',
                        'weight' => 180.0,
                        'height' => 1.7,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'ice',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hyper Cutter',
                                1 => 'Poing de Fer',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/740.png',
                    ),
                741 =>
                    array (
                        'name' => 'Plumeline',
                        'weight' => 3.4,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Danseuse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/741.png',
                    ),
                742 =>
                    array (
                        'name' => 'Bombydou',
                        'weight' => 0.2,
                        'height' => 0.1,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cherche Miel',
                                1 => 'Écran Poudre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/742.png',
                    ),
                743 =>
                    array (
                        'name' => 'Rubombelle',
                        'weight' => 0.5,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cherche Miel',
                                1 => 'Écran Poudre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/743.png',
                    ),
                744 =>
                    array (
                        'name' => 'Rocabot',
                        'weight' => 9.2,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Esprit Vital',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/744.png',
                    ),
                745 =>
                    array (
                        'name' => 'Lougaroc',
                        'weight' => 25.0,
                        'height' => 0.8,
                        'type' =>
                            array (
                                0 => 'rock',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Baigne Sable',
                                1 => 'Regard Vif',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/745.png',
                    ),
                746 =>
                    array (
                        'name' => 'Froussardine',
                        'weight' => 0.3,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Banc',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/746.png',
                    ),
                747 =>
                    array (
                        'name' => 'Vorastérie',
                        'weight' => 8.0,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cruauté',
                                1 => 'Échauffement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/747.png',
                    ),
                748 =>
                    array (
                        'name' => 'Prédastérie',
                        'weight' => 14.5,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Cruauté',
                                1 => 'Échauffement',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/748.png',
                    ),
                749 =>
                    array (
                        'name' => 'Tiboudet',
                        'weight' => 110.0,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Endurance',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/749.png',
                    ),
                750 =>
                    array (
                        'name' => 'Bourrinos',
                        'weight' => 920.0,
                        'height' => 2.5,
                        'type' =>
                            array (
                                0 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Endurance',
                                1 => 'Tempo Perso',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/750.png',
                    ),
                751 =>
                    array (
                        'name' => 'Araqua',
                        'weight' => 4.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Aquabulle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/751.png',
                    ),
                752 =>
                    array (
                        'name' => 'Tarenbulle',
                        'weight' => 82.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'bug',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Aquabulle',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/752.png',
                    ),
                753 =>
                    array (
                        'name' => 'Mimantis',
                        'weight' => 1.5,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/753.png',
                    ),
                754 =>
                    array (
                        'name' => 'Floramantis',
                        'weight' => 18.5,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/754.png',
                    ),
                755 =>
                    array (
                        'name' => 'Spododo',
                        'weight' => 1.5,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lumiattirance',
                                1 => 'Pose Spore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/755.png',
                    ),
                756 =>
                    array (
                        'name' => 'Lampignon',
                        'weight' => 11.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Lumiattirance',
                                1 => 'Pose Spore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/756.png',
                    ),
                757 =>
                    array (
                        'name' => 'Tritox',
                        'weight' => 4.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corrosion',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/757.png',
                    ),
                758 =>
                    array (
                        'name' => 'Malamandre',
                        'weight' => 22.2,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'fire',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corrosion',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/758.png',
                    ),
                759 =>
                    array (
                        'name' => 'Nounourson',
                        'weight' => 6.8,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boule de Poils',
                                1 => 'Maladresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/759.png',
                    ),
                760 =>
                    array (
                        'name' => 'Chelours',
                        'weight' => 135.0,
                        'height' => 2.1,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boule de Poils',
                                1 => 'Maladresse',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/760.png',
                    ),
                761 =>
                    array (
                        'name' => 'Croquine',
                        'weight' => 3.2,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/761.png',
                    ),
                762 =>
                    array (
                        'name' => 'Candine',
                        'weight' => 8.2,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Benêt',
                                1 => 'Feuille Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/762.png',
                    ),
                763 =>
                    array (
                        'name' => 'Sucreine',
                        'weight' => 21.4,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Feuille Garde',
                                1 => 'Prestance Royale',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/763.png',
                    ),
                764 =>
                    array (
                        'name' => 'Guérilande',
                        'weight' => 0.3,
                        'height' => 0.1,
                        'type' =>
                            array (
                                0 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Flora-Voile',
                                1 => 'Prioguérison',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/764.png',
                    ),
                765 =>
                    array (
                        'name' => 'Gouroutan',
                        'weight' => 76.0,
                        'height' => 1.5,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Attention',
                                1 => 'Télépathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/765.png',
                    ),
                766 =>
                    array (
                        'name' => 'Quartermac',
                        'weight' => 82.8,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Receveur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/766.png',
                    ),
                767 =>
                    array (
                        'name' => 'Sovkipou',
                        'weight' => 12.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Escampette',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/767.png',
                    ),
                768 =>
                    array (
                        'name' => 'Sarmuraï',
                        'weight' => 108.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Repli Tactique',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/768.png',
                    ),
                769 =>
                    array (
                        'name' => 'Bacabouh',
                        'weight' => 70.0,
                        'height' => 0.5,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sable Humide',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/769.png',
                    ),
                770 =>
                    array (
                        'name' => 'Trépassable',
                        'weight' => 250.0,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'ground',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Sable Humide',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/770.png',
                    ),
                771 =>
                    array (
                        'name' => 'Concombaffe',
                        'weight' => 1.2,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'water',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Expuls\'Organes',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/771.png',
                    ),
                772 =>
                    array (
                        'name' => 'Type:0',
                        'weight' => 120.5,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Armurbaston',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/772.png',
                    ),
                773 =>
                    array (
                        'name' => 'Silvallié',
                        'weight' => 100.5,
                        'height' => 2.3,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Système Alpha',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/773.png',
                    ),
                774 =>
                    array (
                        'name' => 'Météno',
                        'weight' => 40.0,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Bouclier-Carcan',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/774.png',
                    ),
                775 =>
                    array (
                        'name' => 'Dodoala',
                        'weight' => 19.9,
                        'height' => 0.4,
                        'type' =>
                            array (
                                0 => 'normal',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Hypersommeil',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/775.png',
                    ),
                776 =>
                    array (
                        'name' => 'Boumata',
                        'weight' => 212.0,
                        'height' => 2.0,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Coque Armure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/776.png',
                    ),
                777 =>
                    array (
                        'name' => 'Togedemaru',
                        'weight' => 3.3,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Épine de Fer',
                                1 => 'Paratonnerre',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/777.png',
                    ),
                778 =>
                    array (
                        'name' => 'Mimiqui',
                        'weight' => 0.7,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fantômasque',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/778.png',
                    ),
                779 =>
                    array (
                        'name' => 'Denticrisse',
                        'weight' => 19.0,
                        'height' => 0.9,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Corps Coloré',
                                1 => 'Prognathe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/779.png',
                    ),
                780 =>
                    array (
                        'name' => 'Draïeul',
                        'weight' => 185.0,
                        'height' => 3.0,
                        'type' =>
                            array (
                                0 => 'normal',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Dracolère',
                                1 => 'Herbivore',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/780.png',
                    ),
                781 =>
                    array (
                        'name' => 'Sinistrail',
                        'weight' => 210.0,
                        'height' => 3.9,
                        'type' =>
                            array (
                                0 => 'ghost',
                                1 => 'grass',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Expert Acier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/781.png',
                    ),
                782 =>
                    array (
                        'name' => 'Bébécaille',
                        'weight' => 29.7,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Pare-Balles',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/782.png',
                    ),
                783 =>
                    array (
                        'name' => 'Écaïd',
                        'weight' => 47.0,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Pare-Balles',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/783.png',
                    ),
                784 =>
                    array (
                        'name' => 'Ékaïser',
                        'weight' => 78.2,
                        'height' => 1.6,
                        'type' =>
                            array (
                                0 => 'dragon',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Anti-Bruit',
                                1 => 'Pare-Balles',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/784.png',
                    ),
                785 =>
                    array (
                        'name' => 'Tokorico',
                        'weight' => 20.5,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'electric',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Créa-Élec',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/785.png',
                    ),
                786 =>
                    array (
                        'name' => 'Tokopiyon',
                        'weight' => 18.6,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Créa-Psy',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/786.png',
                    ),
                787 =>
                    array (
                        'name' => 'Tokotoro',
                        'weight' => 45.5,
                        'height' => 1.9,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Créa-Herbe',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/787.png',
                    ),
                788 =>
                    array (
                        'name' => 'Tokopisco',
                        'weight' => 21.2,
                        'height' => 1.3,
                        'type' =>
                            array (
                                0 => 'water',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Créa-Brume',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/788.png',
                    ),
                789 =>
                    array (
                        'name' => 'Cosmog',
                        'weight' => 0.1,
                        'height' => 0.2,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Inconscient',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/789.png',
                    ),
                790 =>
                    array (
                        'name' => 'Cosmovum',
                        'weight' => 999.9,
                        'height' => 0.1,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Fermeté',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/790.png',
                    ),
                791 =>
                    array (
                        'name' => 'Solgaleo',
                        'weight' => 230.0,
                        'height' => 3.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Métallo-Garde',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/791.png',
                    ),
                792 =>
                    array (
                        'name' => 'Lunala',
                        'weight' => 120.0,
                        'height' => 4.0,
                        'type' =>
                            array (
                                0 => 'psychic',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Spectro-Bouclier',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/792.png',
                    ),
                793 =>
                    array (
                        'name' => 'Zéroïd',
                        'weight' => 55.5,
                        'height' => 1.2,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/793.png',
                    ),
                794 =>
                    array (
                        'name' => 'Mouscoto',
                        'weight' => 333.6,
                        'height' => 2.4,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/794.png',
                    ),
                795 =>
                    array (
                        'name' => 'Cancrelove',
                        'weight' => 25.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'bug',
                                1 => 'fighting',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/795.png',
                    ),
                796 =>
                    array (
                        'name' => 'Câblifère',
                        'weight' => 100.0,
                        'height' => 3.8,
                        'type' =>
                            array (
                                0 => 'electric',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/796.png',
                    ),
                797 =>
                    array (
                        'name' => 'Bamboiselle',
                        'weight' => 999.9,
                        'height' => 9.2,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'flying',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/797.png',
                    ),
                798 =>
                    array (
                        'name' => 'Katagami',
                        'weight' => 0.1,
                        'height' => 0.3,
                        'type' =>
                            array (
                                0 => 'grass',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/798.png',
                    ),
                799 =>
                    array (
                        'name' => 'Engloutyran',
                        'weight' => 888.0,
                        'height' => 5.5,
                        'type' =>
                            array (
                                0 => 'dark',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/799.png',
                    ),
                800 =>
                    array (
                        'name' => 'Necrozma',
                        'weight' => 230.0,
                        'height' => 2.4,
                        'type' =>
                            array (
                                0 => 'psychic',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Prisme-Armure',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/800.png',
                    ),
                801 =>
                    array (
                        'name' => 'Magearna',
                        'weight' => 80.5,
                        'height' => 1.0,
                        'type' =>
                            array (
                                0 => 'steel',
                                1 => 'fairy',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Animacœur',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/801.png',
                    ),
                802 =>
                    array (
                        'name' => 'Marshadow',
                        'weight' => 22.2,
                        'height' => 0.7,
                        'type' =>
                            array (
                                0 => 'fighting',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Technicien',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/802.png',
                    ),
                803 =>
                    array (
                        'name' => 'Vémini',
                        'weight' => 1.8,
                        'height' => 0.6,
                        'type' =>
                            array (
                                0 => 'poison',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/803.png',
                    ),
                804 =>
                    array (
                        'name' => 'Mandrillon',
                        'weight' => 150.0,
                        'height' => 3.6,
                        'type' =>
                            array (
                                0 => 'poison',
                                1 => 'dragon',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/804.png',
                    ),
                805 =>
                    array (
                        'name' => 'Ama-Ama',
                        'weight' => 820.0,
                        'height' => 5.5,
                        'type' =>
                            array (
                                0 => 'rock',
                                1 => 'steel',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/805.png',
                    ),
                806 =>
                    array (
                        'name' => 'Pierroteknik',
                        'weight' => 13.0,
                        'height' => 1.8,
                        'type' =>
                            array (
                                0 => 'fire',
                                1 => 'ghost',
                            ),
                        'abilities' =>
                            array (
                                0 => 'Boost Chimère',
                            ),
                        'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/806.png',
                    ),
            );


    }
}