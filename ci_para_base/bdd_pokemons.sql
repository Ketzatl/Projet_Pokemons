-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 01 fév. 2020 à 04:01
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_pokemons`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_name` varchar(50) NOT NULL,
  `article_content` varchar(2000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `article_name`, `article_content`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Un nouvel article', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 3, '2020-02-01 03:58:26', '2020-02-01 03:58:26');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` int(11) NOT NULL,
  `contenu` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `contenu`, `created_at`, `titre`, `image`) VALUES
(1, 'azerty', '2020-01-29 14:31:33', 'Dorian', 'https://cdn.pixabay.com/photo/2015/07/30/17/24/audience-868074_1280.jpg'),
(2, '130 au DC', '2020-01-29 15:27:24', 'Come', 'https://cdn.pixabay.com/photo/2014/08/26/20/08/alcohol-428392_1280.jpg'),
(3, 'animal', '2020-01-29 15:28:20', 'Kevin', 'https://cdn.pixabay.com/photo/2015/05/15/14/50/concert-768722_1280.jpg'),
(4, 'BG', '2020-01-29 15:28:37', 'Ben', 'https://cdn.pixabay.com/photo/2015/07/10/17/53/cheers-839865_1280.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int(11) NOT NULL,
  `pok_name` varchar(100) DEFAULT NULL,
  `pok_type` int(11) DEFAULT NULL,
  `pok_hp` int(11) DEFAULT NULL,
  `pok_weight` varchar(50) DEFAULT NULL,
  `pok_height` varchar(50) DEFAULT NULL,
  `pok_atk` int(3) NOT NULL,
  `pok_def` int(3) NOT NULL,
  `pok_evol_id` int(11) DEFAULT NULL,
  `pok_description` varchar(255) DEFAULT NULL,
  `pok_img_url` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pokemons`
--

INSERT INTO `pokemons` (`id`, `pok_name`, `pok_type`, `pok_hp`, `pok_weight`, `pok_height`, `pok_atk`, `pok_def`, `pok_evol_id`, `pok_description`, `pok_img_url`, `created_at`) VALUES
(1, 'Bulbizarre', 1, 294, '6.9', '0,7', 0, 0, 5, 'Il peut survivre plusieurs jours sans manger grace aux nutriments contenus dans le bulbe sur son dos.', 'https://projectpokemon.org/images/normal-sprite/bulbasaur.gif', '0000-00-00 00:00:00'),
(2, 'Herbizarre', 1, 324, '13,0 kg', '1,0 m', 0, 0, 5, 'En emmagasinant de l\'énergie, son bulbe grossit. Un arôme en émane quand il s\'apprête à éclore.', 'https://projectpokemon.org/images/normal-sprite/ivysaur.gif', '0000-00-00 00:00:00'),
(3, 'Florizarre', 1, 364, '100,0 kg', '2,0 m', 0, 0, 5, 'Les pétales de sa fleur dorsale absorbent les rayons du soleil pour les convertir en énergie.', 'https://projectpokemon.org/images/normal-sprite/venusaur-f.gif', '0000-00-00 00:00:00'),
(4, 'Salameche', 3, 282, '8,5 kg', '0,6 m', 0, 0, 5, 'Depuis sa naissance, une petite flamme brûle au bout de sa queue. Si cette flamme s\'éteint, la vie de ce Pokémon s\'éteindra elle aussi.', 'https://projectpokemon.org/images/normal-sprite/charmander.gif', '0000-00-00 00:00:00'),
(5, 'Reptincel', 3, 320, '19,0 kg', '1,1 m', 0, 0, 5, 'S\'il s\'excite pendant un combat, il crache de grandes flammes, brûlant tout ce qui se trouve aux alentours.', 'https://projectpokemon.org/images/normal-sprite/charmeleon.gif', '0000-00-00 00:00:00'),
(6, 'Dracaufeu', 3, 360, '90,5 kg', '1,7 m', 0, 0, 5, 'Ses ailes lui permettent de voler à plus de 1 400 m d\'altitude. Ce Pokémon crache du feu à des températures très élevées.', 'https://projectpokemon.org/images/normal-sprite/charizard.gif', '0000-00-00 00:00:00'),
(7, 'Carapuce', 5, 292, '9,0 kg', '0,5 m', 0, 0, 5, 'Caché sous les flots, il crache un jet d\'eau sur sa proie et se réfugie à l\'intérieur de sa carapace en cas de danger.', 'https://projectpokemon.org/images/normal-sprite/squirtle.gif', '0000-00-00 00:00:00'),
(8, 'Carabaffe', 5, 322, '22,5 kg', '1,0 m', 0, 0, 5, 'Quand on lui tapôte la tête, il se cache dans sa carapace, mais son corps ne peut pas y tenir en entier.', 'https://projectpokemon.org/images/normal-sprite/wartortle.gif', '0000-00-00 00:00:00'),
(9, 'Tortank', 5, 362, '85,5 kg', '1,6 m', 0, 0, 5, 'Une fois sa cible dans sa ligne de mire, il projette des jets d\'eau plus puissants qu\'une lance à incendie.', 'https://projectpokemon.org/images/normal-sprite/blastoise.gif', '0000-00-00 00:00:00'),
(10, 'Chenipan', 6, 294, '2,9 kg', '0,3 m', 0, 0, 5, 'Ses petites pattes munies de ventouses lui permettent de monter les pentes et de grimper aux murs sans se fatiguer.', 'https://projectpokemon.org/images/normal-sprite/caterpie.gif', '0000-00-00 00:00:00'),
(11, 'Chrysacier', 6, 304, '9,9 kg', '0,7 m', 0, 0, 5, 'Bien que son corps soit entouré d\'une carapace solide, l\'intérieur est si mou qu\'il ne résisterait pas à une attaque violente.', 'https://projectpokemon.org/images/normal-sprite/metapod.gif', '0000-00-00 00:00:00'),
(12, 'Papilusion', 6, 324, '32,0 kg', '1,1 m', 0, 0, 5, 'Il ramasse du nectar chaque jour et l\'agglutine sur les poils de ses pattes pour le transporter jusqu\'à son nid.', 'https://projectpokemon.org/images/normal-sprite/butterfree.gif', '0000-00-00 00:00:00'),
(13, 'Aspicot', 6, 284, '3,2 kg', '0,3 m', 0, 0, 5, 'L\'aiguillon sur son front est très pointu. Il se cache dans les bois et les hautes herbes, où il se gave de feuilles.', 'https://projectpokemon.org/images/normal-sprite/weedle.gif', '0000-00-00 00:00:00'),
(14, 'Coconfort', 6, 294, '10,0 kg', '0,6 m', 0, 0, 5, 'Il peut à peine bouger. Quand il est menacé, il sort parfois son aiguillon pour empoisonner ses ennemis.', 'https://projectpokemon.org/images/normal-sprite/kakuna.gif', '0000-00-00 00:00:00'),
(15, 'Dardargnan', 6, 334, '29,5 kg', '1,0 m', 0, 0, 5, 'Il se sert de ses trois aiguillons empoisonnés situés sur les pattes avant et l\'abdomen pour attaquer sans relâche ses adversaires.', 'https://projectpokemon.org/images/normal-sprite/beedrill.gif', '0000-00-00 00:00:00'),
(16, 'Roucool', 7, 284, '1,8 kg', '0,3 m', 0, 0, 5, 'De nature très docile, il préfère projeter du sable pour se défendre plutôt que contre-attaquer.', 'https://projectpokemon.org/images/normal-sprite/pidgey.gif', '0000-00-00 00:00:00'),
(17, 'Roucoups', 7, 330, '30,0 kg', '1,1 m', 0, 0, 5, 'Ce Pokémon est très endurant. Il survole en permanence son territoire pour chasser.', 'https://projectpokemon.org/images/normal-sprite/pidgeotto.gif', '0000-00-00 00:00:00'),
(18, 'Roucarnage', 7, 370, '39,5 kg', '1,5 m', 0, 0, 5, 'Ce Pokémon vole à Mach 2 quand il chasse. Ses grandes serres sont des armes redoutables.', 'https://projectpokemon.org/images/normal-sprite/pidgeot.gif', '0000-00-00 00:00:00'),
(19, 'Rattata', 7, 264, '3,5 kg', '0,3 m', 0, 0, 5, 'Il peut ronger n\'importe quoi avec ses deux dents. Quand on en voit un, il y en a certainement 40 dans le coin.', 'https://projectpokemon.org/images/normal-sprite/rattata.gif', '0000-00-00 00:00:00'),
(20, 'Rattatac', 7, 314, '18,5 kg', '0,7 m', 0, 0, 5, 'Ses pattes arrière sont palmées. Il peut donc poursuivre sa proie dans les cours d\'eau et les rivières.', 'https://projectpokemon.org/images/normal-sprite/raticate.gif', '0000-00-00 00:00:00'),
(21, 'Piafabec', 7, 284, '2,0 kg', '0,3 m', 0, 0, 5, 'Il est incapable de voler à haute altitude. Il se déplace très vite pour protéger son territoire.', 'https://projectpokemon.org/images/normal-sprite/spearow.gif', '0000-00-00 00:00:00'),
(22, 'Rapasdepic', 7, 334, '38,0 kg', '1,2 m', 0, 0, 5, 'Un Pokémon très ancien. S\'il perçoit un danger, il fuit instantanément à haute altitude.', 'https://projectpokemon.org/images/normal-sprite/fearow.gif', '0000-00-00 00:00:00'),
(23, 'Abo', 2, 274, '6,9 kg', '2,0 m', 0, 0, 5, 'Plus il est âgé, plus son corps est long. La nuit, il s\'enroule autour de branches d\'arbres pour se reposer.', 'https://projectpokemon.org/images/normal-sprite/ekans.gif', '0000-00-00 00:00:00'),
(24, 'Arbok', 2, 324, '65,0 kg', '3,5 m', 0, 0, 5, 'Des études ont révélé que les marques effrayantes de son corps pouvaient former six motifs différents.', 'https://projectpokemon.org/images/normal-sprite/arbok.gif', '0000-00-00 00:00:00'),
(25, 'Pikachu', 8, 274, '6,0 kg', '0,4 m', 0, 0, 5, 'Les Pikachu se disent bonjour en se frottant la queue et en y faisant passer du courant électrique.', 'https://projectpokemon.org/images/normal-sprite/pikachu-f.gif', '0000-00-00 00:00:00'),
(26, 'Raichu', 8, 324, '30,0 kg', '0,8 m', 0, 0, 5, 'Si ses joues sont à court d\'énergie, il lève la queue et capte l\'électricité contenue dans l\'atmosphère.', 'https://projectpokemon.org/images/normal-sprite/raichu-f.gif', '0000-00-00 00:00:00'),
(27, 'Sabelette', 9, 304, '12,0 kg', '0,6 m', 0, 0, 5, 'Son corps est sec. Quand la nuit déploie ses ailes de fraîcheur, son épiderme se couvre de rosée.', 'https://projectpokemon.org/images/normal-sprite/sandshrew.gif', '0000-00-00 00:00:00'),
(28, 'Sablaireau', 9, 354, '29,5 kg', '1,0 m', 0, 0, 5, 'Ses griffes sont redoutables. Si l\'une d\'elles se casse en combat, elle repousse en un jour.', 'https://projectpokemon.org/images/normal-sprite/sandslash.gif', '0000-00-00 00:00:00'),
(29, 'Nidoran♀', 2, 314, '7,0 kg', '0,4 m', 0, 0, 5, 'Un Pokémon paisible qui n\'aime pas se battre. Sa petite corne est empoisonnée.', 'https://projectpokemon.org/images/normal-sprite/nidoran_f.gif', '0000-00-00 00:00:00'),
(30, 'Nidorina', 2, 344, '20,0 kg', '0,8 m', 0, 0, 5, 'Quand ce Pokémon s\'abrite au fond de son terrier, ses cornes se rétractent. C\'est signe qu\'il est détendu.', 'https://projectpokemon.org/images/normal-sprite/nidorina.gif', '0000-00-00 00:00:00'),
(31, 'Nidoqueen', 2, 384, '60,0 kg', '1,3 m', 0, 0, 5, 'Son corps musclé est recouvert de dures écailles. On dit qu\'elles peuvent repousser.', 'https://projectpokemon.org/images/normal-sprite/nidoqueen.gif', '0000-00-00 00:00:00'),
(32, 'Nidoran♂', 2, 296, '9,0 kg', '0,5 m', 0, 0, 5, 'Ses grandes oreilles sont toujours dressées et à l\'affût de ce qu\'il se passe alentour. S\'il est menacé, il se défend avec ses dards venimeux.', 'https://projectpokemon.org/images/normal-sprite/nidoran_m.gif', '0000-00-00 00:00:00'),
(33, 'Nidorino', 2, 326, '19,5 kg', '0,9 m', 0, 0, 5, 'Sa corne est venimeuse. Si elle perce un ennemi, elle lui injecte un poison violent.', 'https://projectpokemon.org/images/normal-sprite/nidorino.gif', '0000-00-00 00:00:00'),
(34, 'Nidoking', 2, 366, '62,0 kg', '1,4 m', 0, 0, 5, 'Ses charges sont dévastatrices grâce à sa peau d\'acier. Sa corne perce même le diamant.', 'https://projectpokemon.org/images/normal-sprite/nidoking.gif', '0000-00-00 00:00:00'),
(35, 'Melofee', 17, 344, '7,5 kg', '0,6 m', 0, 0, 5, 'Son comportement et son cri adorables font de lui un Pokémon très populaire. Malheureusement, il est difficile d\'en croiser un spécimen.', 'https://projectpokemon.org/images/normal-sprite/clefairy.gif', '0000-00-00 00:00:00'),
(36, 'Melodelfe', 17, 394, '40,0 kg', '1,3 m', 0, 0, 5, 'Capable d\'entendre une aiguille tomber à plus d\'un kilomètre, ce Pokémon préfère les endroits calmes et isolés.', 'https://projectpokemon.org/images/normal-sprite/clefable.gif', '0000-00-00 00:00:00'),
(37, 'Goupix', 3, 280, '9,9 kg', '0,6 m', 0, 0, 5, 'Avec l\'âge, la fourrure de ses six queues devient de plus en plus belle et soyeuse. Elle est chaude au toucher.', 'https://projectpokemon.org/images/normal-sprite/vulpix.gif', '0000-00-00 00:00:00'),
(38, 'Feunard', 3, 350, '19,9 kg', '1,1 m', 0, 0, 5, 'Il est très intelligent et rancunier. Quiconque attrape une de ses queues se fera maudire pour 1 000 ans.', 'https://projectpokemon.org/images/normal-sprite/ninetales.gif', '0000-00-00 00:00:00'),
(39, 'Rondoudou', 7, 434, '5,5 kg', '0,5 m', 0, 0, 5, 'Il déstabilise ses adversaires grâce à son regard, puis chante une berceuse pour les endormir.', 'https://projectpokemon.org/images/normal-sprite/jigglypuff.gif', '0000-00-00 00:00:00'),
(40, 'Grodoudou', 7, 484, '12,0 kg', '1,0 m', 0, 0, 5, 'Son corps est malléable. En aspirant de l\'air, il se gonfle jusqu\'à atteindre des proportions gigantesques.', 'https://projectpokemon.org/images/normal-sprite/wigglytuff.gif', '0000-00-00 00:00:00'),
(41, 'Nosferapti', 2, 284, '7,5 kg', '0,8 m', 0, 0, 5, 'Il émet des ultrasons pour se diriger et éviter les obstacles sur son trajet.', 'https://projectpokemon.org/images/normal-sprite/zubat.gif', '0000-00-00 00:00:00'),
(42, 'Nosferalto', 2, 354, '55,0 kg', '1,6 m', 0, 0, 5, 'l s\'approche furtivement et attaque sans crier gare. Ses crocs acérés lui servent à sucer le sang.', 'https://projectpokemon.org/images/normal-sprite/golbat.gif', '0000-00-00 00:00:00'),
(43, 'Mystherbe', 1, 294, '5,4 kg', '0,5 m', 0, 0, 5, 'Pendant la journée, il reste en sous-sol et évite le soleil. Il grandit en se baignant au clair de lune.', 'https://projectpokemon.org/images/normal-sprite/oddish.gif', '0000-00-00 00:00:00'),
(44, 'Ortide', 1, 324, '8,6 kg', '0,8 m', 0, 0, 5, 'Ce qui semble être sa bave est en fait du nectar très collant. Si on le touche, il est très difficile de s\'en dépêtrer.', 'https://projectpokemon.org/images/normal-sprite/gloom.gif', '0000-00-00 00:00:00'),
(45, 'Rafflesia', 1, 354, '18,6 kg', '1,2 m', 0, 0, 5, 'Plus ses pétales sont grands, plus il produit de pollen toxique. Toutefois, le poids de sa tête le fatigue.', 'https://projectpokemon.org/images/normal-sprite/vileplume.gif', '0000-00-00 00:00:00'),
(46, 'Paras', 6, 274, '5,4 kg', '0,3 m', 0, 0, 5, 'Il s\'enfouit pour ronger des racines, mais ce sont les champignons sur son dos qui absorbent presque tous les nutriments.', 'https://projectpokemon.org/images/normal-sprite/paras.gif', '0000-00-00 00:00:00'),
(47, 'Parasect', 6, 324, '29,5 kg', '1,0 m', 0, 0, 5, 'À force de voir son énergie aspirée, il semblerait que ce ne soit plus l\'insecte qui réfléchisse, mais le champignon sur son dos.', 'https://projectpokemon.org/images/normal-sprite/parasect.gif', '0000-00-00 00:00:00'),
(48, 'Mimitoss', 6, 324, '30,0 kg', '1,0 m', 0, 0, 5, 'Ses grands yeux lui servent de radar. En pleine lumière, on peut y distinguer des facettes.', 'https://projectpokemon.org/images/normal-sprite/venonat.gif', '0000-00-00 00:00:00'),
(49, 'Aeromite', 6, 344, '12,5 kg', '1,5 m', 0, 0, 5, 'Les écailles de ses ailes sont presque impossibles à retirer lorsqu\'elles se collent à la peau, et elles libèrent un poison violent au contact.', 'https://projectpokemon.org/images/normal-sprite/venomoth.gif', '0000-00-00 00:00:00'),
(50, 'Taupiqueur', 9, 224, '0,8 kg', '0,2 m', 0, 0, 5, 'Ce Pokémon creuse sous terre à faible profondeur. La terre qu\'il laisse dans son sillage le rend facile à repérer.', 'https://projectpokemon.org/images/normal-sprite/diglett.gif', '0000-00-00 00:00:00'),
(51, 'Triopikeur', 9, 274, '33,3 kg', '0,7 m', 0, 0, 5, 'Ce trio de Taupiqueur est capable de creuser jusqu\'à 100 km sous terre, vers l\'inconnu.', 'https://projectpokemon.org/images/normal-sprite/dugtrio.gif', '0000-00-00 00:00:00'),
(52, 'Miaouss', 7, 284, '4,2 kg', '0,4 m', 0, 0, 5, 'Tatillon sur la propreté de la pièce sur son front, il se lave la figure avec grand soin. Il ne s\'entend pas avec les Miaouss de Galar.', 'https://projectpokemon.org/images/normal-sprite/meowth.gif', '0000-00-00 00:00:00'),
(53, 'Persian', 7, 334, '32,0 kg', '1,0 m', 0, 0, 5, 'Il se comporte avec grâce et élégance, et ne s\'entend pas avec les rustres Berserkatt : les deux espèces se méprisent.', 'https://projectpokemon.org/images/normal-sprite/persian.gif', '0000-00-00 00:00:00'),
(54, 'Psykokwak', 5, 304, '19,6 kg', '0,8 m', 0, 0, 5, 'Il est toujours en proie à des maux de tête. On ignore s\'il contrôle ses pouvoirs psychiques.', 'https://projectpokemon.org/images/normal-sprite/psyduck.gif', '0000-00-00 00:00:00'),
(55, 'Akwakwak', 5, 364, '76,6 kg', '1,7 m', 0, 0, 5, 'Ses membres longs et fins se terminent par des nageoires qui lui permettent de nager élégamment.', 'https://projectpokemon.org/images/normal-sprite/golduck.gif', '0000-00-00 00:00:00'),
(56, 'Ferosinge', 10, 284, '28,0 kg', '0,5 m', 0, 0, 5, 'Agile et rapide, ce Pokémon vit dans les arbres. Il s\'énerve facilement et s\'attaque à tout ce qui bouge quand il est en colère.', 'https://projectpokemon.org/images/normal-sprite/mankey.gif', '0000-00-00 00:00:00'),
(57, 'Colossinge', 10, 334, '32,0 kg', '1,0 m', 0, 0, 5, 'Sa fureur prend fin quand il n\'a plus personne à frapper. Il est difficile d\'en être témoin.', 'https://projectpokemon.org/images/normal-sprite/primeape.gif', '0000-00-00 00:00:00'),
(58, 'Caninos', 3, 314, '19,0 kg', '0,7 m', 0, 0, 5, 'Très fidèle il aboie de toutes ses forces pour protéger son Dresseur d\'Origine quand un danger le guette.', 'https://projectpokemon.org/images/normal-sprite/growlithe.gif', '0000-00-00 00:00:00'),
(59, 'Arcanin', 3, 384, '155,0 kg', '1,9 m', 0, 0, 5, 'Ce Pokémon est admiré depuis toujours pour sa beauté. Il court avec tellement de légèreté qu\'on dirait qu\'il vole.', 'https://projectpokemon.org/images/normal-sprite/arcanine.gif', '0000-00-00 00:00:00'),
(60, 'Ptitard', 5, 284, '12,4 kg', '0,6 m', 0, 0, 5, 'Le sens de la spirale sur son ventre diffère selon son origine. Il préfère la nage à la marche.', 'https://projectpokemon.org/images/normal-sprite/poliwag.gif', '0000-00-00 00:00:00'),
(61, 'Tetarte', 5, 334, '20,0 kg', '1,0 m', 0, 0, 5, 'S\'il se fait attaquer, il se sert de sa spirale pour endormir ses ennemis. Il peut ainsi s\'enfuir.', 'https://projectpokemon.org/images/normal-sprite/poliwhirl.gif', '0000-00-00 00:00:00'),
(62, 'Tartard', 5, 384, '54,0 kg', '1,3 m', 0, 0, 5, 'Son corps très musclé lui permet de nager plus rapidement qu\'un champion de natation.', 'https://projectpokemon.org/images/normal-sprite/poliwrath.gif', '0000-00-00 00:00:00'),
(63, 'Abra', 11, 254, '19,5 kg', '0,9 m', 0, 0, 5, 'Il dort 18 heures par jour. En cas de danger, il se téléporte vers un lieu sûr, même s\'il est assoupi.', 'https://projectpokemon.org/images/normal-sprite/abra.gif', '0000-00-00 00:00:00'),
(64, 'Kadabra', 11, 284, '56,5 kg', '1,3 m', 0, 0, 5, 'Sa présence cause des évènements étranges, comme des horloges tournant à l\'envers.', 'https://projectpokemon.org/images/normal-sprite/kadabra.gif', '0000-00-00 00:00:00'),
(65, 'Alakazam', 11, 314, '48,0 kg', '1,5 m', 0, 0, 5, 'Ce Pokémon est très intelligent. Sa mémoire infaillible lui permet de retenir tout ce qu\'il apprend.', 'https://projectpokemon.org/images/normal-sprite/alakazam.gif', '0000-00-00 00:00:00'),
(66, 'Machoc', 10, 344, '19,5 kg', '0,8 m', 0, 0, 5, 'Il essaie de dépenser son énergie débordante en soulevant des rochers, ce qui le rend encore plus fort.', 'https://projectpokemon.org/images/normal-sprite/machop.gif', '0000-00-00 00:00:00'),
(67, 'Machopeur', 10, 364, '70,5 kg', '1,5 m', 0, 0, 5, 'Son corps robuste ne se fatigue jamais. Il n\'hésite pas à aider les gens lorsqu\'il s\'agit de soulever des objets très lourds.', 'https://projectpokemon.org/images/normal-sprite/machoke.gif', '0000-00-00 00:00:00'),
(68, 'Mackogneur', 10, 384, '130,0 kg', '1,6 m', 0, 0, 5, 'Il enchaîne les coups de poing avec ses quatre bras à une vitesse surprenante.', 'https://projectpokemon.org/images/normal-sprite/machamp.gif', '0000-00-00 00:00:00'),
(69, 'Chetiflor', 1, 304, '4,0 kg', '0,7 m', 0, 0, 5, 'Il préfère les endroits chauds et humides. Il capture les Pokémon Insecte avec ses lianes pour les dévorer.', 'https://projectpokemon.org/images/normal-sprite/bellsprout.gif', '0000-00-00 00:00:00'),
(70, 'Boustiflor', 1, 334, '6,4 kg', '1,0 m', 0, 0, 5, 'Quand il a faim, il avale tout ce qui bouge, puis achève ses proies avec de l\'acide.', 'https://projectpokemon.org/images/normal-sprite/weepinbell.gif', '0000-00-00 00:00:00'),
(71, 'Empiflor', 1, 364, '15,5 kg', '1,7 m', 0, 0, 5, 'Il attire ses proies avec une odeur de miel et les avale tout entières. Il les digère en un jour seulement, les os y compris.', 'https://projectpokemon.org/images/normal-sprite/victreebel.gif', '0000-00-00 00:00:00'),
(72, 'Tentacool', 5, 284, '45,5 kg', '0,9 m', 0, 0, 5, 'Certains échouent sur la plage et sèchent sur le sable. Poussez-les dans l\'eau pour les ranimer.', 'https://projectpokemon.org/images/normal-sprite/tentacool.gif', '0000-00-00 00:00:00'),
(73, 'Tentacruel', 5, 364, '55,0 kg', '1,6 m', 0, 0, 5, 'Ses 80 tentacules peuvent s\'allonger et se rétracter à volonté. Il les utilise pour enserrer sa proie et l\'affaiblir avec une toxine.', 'https://projectpokemon.org/images/normal-sprite/tentacruel.gif', '0000-00-00 00:00:00'),
(74, 'Racaillou', 12, 284, '20,0 kg', '0,4 m', 0, 0, 5, 'On en trouve près des sentiers de montagne. Si vous marchez dessus par inadvertance, ils s\'énervent et attaquent.', 'https://projectpokemon.org/images/normal-sprite/geodude.gif', '0000-00-00 00:00:00'),
(75, 'Gravalanch', 12, 314, '105,0 kg', '1,0 m', 0, 0, 5, 'Il dévale les sentiers de montagne et traverse les obstacles en les pulvérisant.', 'https://projectpokemon.org/images/normal-sprite/graveler.gif', '0000-00-00 00:00:00'),
(76, 'Grolem', 12, 364, '300,0 kg', '1,4 m', 0, 0, 5, 'Juste après la mue, son corps est blanc et tendre. Au contact de l\'air, sa peau se solidifie et forme une armure.', 'https://projectpokemon.org/images/normal-sprite/golem.gif', '0000-00-00 00:00:00'),
(77, 'Ponyta', 3, 304, '30,0 kg', '1,0 m', 0, 0, 5, 'Il est capable de sauter très haut. Ses sabots et ses jambes peuvent amortir l\'impact de l\'atterrissage.', 'https://projectpokemon.org/images/normal-sprite/ponyta.gif', '0000-00-00 00:00:00'),
(78, 'Galopa', 3, 334, '95,0 kg', '1,7 m', 0, 0, 5, 'Il aime la course. Il poursuit tout ce qui va plus vite que lui. Question d\'honneur.', 'https://projectpokemon.org/images/normal-sprite/rapidash.gif', '0000-00-00 00:00:00'),
(79, 'Ramoloss', 5, 384, '36,0 kg', '1,2 m', 0, 0, 5, 'Lent et stupide, il aime se la couler douce sans se soucier du temps qui passe.', 'https://projectpokemon.org/images/normal-sprite/slowpoke.gif', '0000-00-00 00:00:00'),
(80, 'Flagadoss', 5, 394, '78,5 kg', '1,6 m', 0, 0, 5, 'Il mène une vie tranquille en bord de mer. Si le Kokiyas accroché à sa queue s\'en va, il redevient un Ramoloss.', 'https://projectpokemon.org/images/normal-sprite/slowbro.gif', '0000-00-00 00:00:00'),
(81, 'Magneti', 8, 254, '6,0 kg', '0,3 m', 0, 0, 5, 'Sa nature défie les lois de la gravité. Il flotte grâce à un champ électromagnétique.', 'https://projectpokemon.org/images/normal-sprite/magnemite.gif', '0000-00-00 00:00:00'),
(82, 'Magneton', 8, 304, '60,0 kg', '1,0 m', 0, 0, 5, 'Il émet un signal radio étrange. Sa présence augmente la température de 2 °C dans un rayon de 1000 m.', 'https://projectpokemon.org/images/normal-sprite/magneton.gif', '0000-00-00 00:00:00'),
(83, 'Canarticho', 7, 308, '15,0 kg', '0,8 m', 0, 0, 5, 'Il vit là où poussent des tiges. Ces endroits sont rares, ce qui pourrait faire penser que cette espèce de Pokémon est en voie d\'extinction.', 'https://projectpokemon.org/images/normal-sprite/farfetchd.gif', '0000-00-00 00:00:00'),
(84, 'Doduo', 7, 274, '39,2 kg', '1,4 m', 0, 0, 5, 'Ses petites ailes ne lui permettent pas de voler, mais grâce à ses puissantes pattes, il peut courir très rapidement.', 'https://projectpokemon.org/images/normal-sprite/doduo.gif', '0000-00-00 00:00:00'),
(85, 'Dodrio', 7, 324, '85,2 kg', '1,8 m', 0, 0, 5, 'Quand une des têtes de Doduo se divise, il devient un Dodrio capable de courir à 60 km/h.', 'https://projectpokemon.org/images/normal-sprite/dodrio.gif', '0000-00-00 00:00:00'),
(86, 'Otaria', 5, 334, '90,0 kg', '1,1 m', 0, 0, 5, 'Il est à l\'aise dans les endroits gelés. Il nage avec plaisir dans de l\'eau à -10°C.', 'https://projectpokemon.org/images/normal-sprite/seel.gif', '0000-00-00 00:00:00'),
(87, 'Lamantine', 5, 384, '120,0 kg', '1,7 m', 0, 0, 5, 'Son corps entier est aussi blanc que la neige. Il résiste bien au froid et peut même nager au milieu des icebergs.', 'https://projectpokemon.org/images/normal-sprite/dewgong.gif', '0000-00-00 00:00:00'),
(88, 'Tadmorv', 2, 364, '30,0 kg', '0,9 m', 0, 0, 5, 'Ce tas de fange sent si mauvais qu\'il est impossible de le toucher. Plus rien ne pousse dans son sillage putride.', 'https://projectpokemon.org/images/normal-sprite/grimer.gif', '0000-00-00 00:00:00'),
(89, 'Grotadmorv', 2, 414, '30,0 kg', '1,2 m', 0, 0, 5, 'Son odeur immonde provoque des évanouissements. Son odorat s\'est atrophié à cause de sa propre puanteur.', 'https://projectpokemon.org/images/normal-sprite/muk.gif', '0000-00-00 00:00:00'),
(90, 'Kokiyas', 5, 264, '4,0 kg', '0,3 m', 0, 0, 5, 'Sa coquille est si résistante qu\'elle repousse toutes les attaques. En revanche, il est vulnérable quand celle-ci s\'ouvre.', 'https://projectpokemon.org/images/normal-sprite/shellder.gif', '0000-00-00 00:00:00'),
(91, 'Crustabri', 5, 304, '132,5 kg', '1,5 m', 0, 0, 5, 'Quand il referme sa coquille, il est impossible de la rouvrir, même avec une force hors du commun.', 'https://projectpokemon.org/images/normal-sprite/cloyster.gif', '0000-00-00 00:00:00'),
(92, 'Fantominus', 14, 264, '0,1 kg', '1,3 m', 0, 0, 5, 'Son corps gazéiforme lui permet de se glisser n\'importe où, mais au moindre coup de vent, il s\'envole.', 'https://projectpokemon.org/images/normal-sprite/gastly.gif', '0000-00-00 00:00:00'),
(93, 'Spectrum', 14, 294, '0,1 kg', '1,6 m', 0, 0, 5, 'On dit que lorsque quelqu\'un a l\'impression d\'être surveillé dans le noir, c\'est sûrement qu\'un Spectrum se trouve dans les parages.', 'https://projectpokemon.org/images/normal-sprite/haunter.gif', '0000-00-00 00:00:00'),
(94, 'Ectoplasma', 14, 324, '40,5 kg', '1,5 m', 0, 0, 5, 'On dit qu\'Ectoplasma surgit parfois des ténèbres pour prendre la vie des personnes égarées en montagne.', 'https://projectpokemon.org/images/normal-sprite/gengar.gif', '0000-00-00 00:00:00'),
(95, 'Onix', 12, 274, '210,0 kg', '8,8 m', 0, 0, 5, 'Il creuse dans le sol à une vitesse de 80 km/h en contorsionnant son immense corps de pierre.', 'https://projectpokemon.org/images/normal-sprite/onix.gif', '0000-00-00 00:00:00'),
(96, 'Soporifik', 11, 324, '32,4 kg', '1,0 m', 0, 0, 5, 'Si vous dormez tout le temps près de lui, il partagera parfois avec vous les rêves qu’il a dévorés par le passé.', 'https://projectpokemon.org/images/normal-sprite/drowzee.gif', '0000-00-00 00:00:00'),
(97, 'Hypnomade', 11, 374, '75,6 kg', '1,6 m', 0, 0, 5, 'Évitez son regard quand vous en croisez un, ou il pourrait essayer de vous hypnotiser avec son pendule.', 'https://projectpokemon.org/images/normal-sprite/hypno.gif', '0000-00-00 00:00:00'),
(98, 'Krabby', 5, 264, '6,5 kg', '0,4 m', 0, 0, 5, 'S\'il se sent menacé, il se cache derrière les bulles émises par sa bouche pour paraître plus gros.', 'https://projectpokemon.org/images/normal-sprite/krabby.gif', '0000-00-00 00:00:00'),
(99, 'Krabboss', 5, 314, '60,0 kg', '1,3 m', 0, 0, 5, 'Sa pince gigantesque possède une puissance destructrice phénoménale, mais hors combat, son poids devient un handicap.', 'https://projectpokemon.org/images/normal-sprite/kingler.gif', '0000-00-00 00:00:00'),
(100, 'Voltorbe', 8, 284, '10,4 kg', '0,5 m', 0, 0, 5, 'On dit qu\'il se déguise en Poké Ball. Il s\'autodétruit à la moindre stimulation.', 'https://projectpokemon.org/images/normal-sprite/voltorb.gif', '0000-00-00 00:00:00'),
(101, 'Electrode', 8, 324, '66,6 kg', '1,2 m', 0, 0, 5, 'Il stocke de l\'énergie électrique dans son corps, ce qui le rend instable et explosif.', 'https://projectpokemon.org/images/normal-sprite/electrode.gif', '0000-00-00 00:00:00'),
(102, 'Noeunoeuf', 1, 324, '2,5 kg', '0,4 m', 0, 0, 5, 'Ses têtes sont attirées les unes vers les autres et pivotent. Il en faut six pour qu\'il maintienne son équilibre.', 'https://projectpokemon.org/images/normal-sprite/exeggcute.gif', '0000-00-00 00:00:00'),
(103, 'Noadkoko', 1, 394, '120,0 kg', '2,0 m', 0, 0, 5, 'Si son cri est aussi bruyant, c\'est parce que chacune de ses trois têtes dit ce qu\'elle pense.', 'https://projectpokemon.org/images/normal-sprite/exeggutor.gif', '0000-00-00 00:00:00'),
(104, 'Osselait', 9, 304, '6,5 kg', '0,4 m', 0, 0, 5, 'Il porte le crâne de sa défunte mère. Ses pleurs résonnent dans son casque en une triste mélodie.', 'https://projectpokemon.org/images/normal-sprite/cubone.gif', '0000-00-00 00:00:00'),
(105, 'Ossatueur', 9, 324, '45,0 kg', '1,0 m', 0, 0, 5, 'Ce Pokémon, autrefois si petit et si faible, est devenu très féroce. Il se bat habilement, armé de son os.', 'https://projectpokemon.org/images/normal-sprite/marowak.gif', '0000-00-00 00:00:00'),
(106, 'Kicklee', 10, 304, '49,8 kg', '1,5 m', 0, 0, 5, 'Kicklee peut rétracter et étendre ses jambes à sa guise. La formidable allonge dont il dispose lui permet de frapper des adversaires éloignés.', 'https://projectpokemon.org/images/normal-sprite/hitmonlee.gif', '0000-00-00 00:00:00'),
(107, 'Tygnon', 10, 304, '50,2 kg', '1,4 m', 0, 0, 5, 'Ses poings fendent l\'air, mais il se fatigue au bout de trois minutes à enchaîner les coups.', 'https://projectpokemon.org/images/normal-sprite/hitmonchan.gif', '0000-00-00 00:00:00'),
(108, 'Excelangue', 7, 384, '65,5 kg', '1,2 m', 0, 0, 5, 'Sa langue mesure 2 m et elle est plus agile que ses pattes. Son contact provoque la paralysie.', 'https://projectpokemon.org/images/normal-sprite/lickitung.gif', '0000-00-00 00:00:00'),
(109, 'Smogo', 2, 284, '1,0 kg', '0,6 m', 0, 0, 5, 'On raconte qu’il y a longtemps, ces Pokémon amateurs d’air pollué étaient beaucoup plus nombreux à Galar.', 'https://projectpokemon.org/images/normal-sprite/koffing.gif', '0000-00-00 00:00:00'),
(110, 'Smogogo', 2, 334, '9,5 kg', '1,2 m', 0, 0, 5, 'Ce Pokémon se nourrit des gaz toxiques, des germes et de la poussière qu\'il trouve dans les tas d\'ordures.', 'https://projectpokemon.org/images/normal-sprite/weezing.gif', '0000-00-00 00:00:00'),
(111, 'Rhinocorne', 9, 364, '115,0 kg', '1,0 m', 0, 0, 5, 'Il ne peut se souvenir que d\'une chose à la fois. S\'il se met à courir, il en oublie tout de suite la raison.', 'https://projectpokemon.org/images/normal-sprite/rhyhorn.gif', '0000-00-00 00:00:00'),
(112, 'Rhinoferos', 9, 414, '120,0 kg', '1,9 m', 0, 0, 5, 'Son épiderme est si épais qu\'il lui permet même de survivre dans du magma d\'une température de 2 000 °C.', 'https://projectpokemon.org/images/normal-sprite/rhydon.gif', '0000-00-00 00:00:00'),
(113, 'Leveinard', 7, 704, '34,6 kg', '1,1 m', 0, 0, 5, 'D\'un naturel gentil et aimable, il partage ses œufs nourrissants avec les blessés.', 'https://projectpokemon.org/images/normal-sprite/chansey.gif', '0000-00-00 00:00:00'),
(114, 'Saquedeneu', 1, 334, '35,0 kg', '1,0 m', 0, 0, 5, 'Son corps est masqué par une masse épaisse de lianes bleues qui poussent en permanence.', 'https://projectpokemon.org/images/normal-sprite/tangela.gif', '0000-00-00 00:00:00'),
(115, 'Kangourex', 7, 414, '80,0 kg', '2,2 m', 0, 0, 5, 'Ce Pokémon élève son petit dans sa poche ventrale. Il est prêt à combattre n\'importe quel ennemi pour le protéger.', 'https://projectpokemon.org/images/normal-sprite/kangaskhan.gif', '0000-00-00 00:00:00'),
(116, 'Hypotrempe', 5, 264, '8,0 kg', '0,4 m', 0, 0, 5, 'Lorsqu\'il est menacé, ce Pokémon crache une encre spéciale ou de l\'eau pour se défendre.', 'https://projectpokemon.org/images/normal-sprite/horsea.gif', '0000-00-00 00:00:00'),
(117, 'Hypocean', 5, 314, '25,0 kg', '1,2 m', 0, 0, 5, 'Le contact de ses nageoires dorsales engourdit. Il ancre sa queue au corail quand il dort pour éviter que le courant ne l\'emporte.', 'https://projectpokemon.org/images/normal-sprite/seadra.gif', '0000-00-00 00:00:00'),
(118, 'Poissirene', 5, 294, '15,0 kg', '0,6 m', 0, 0, 5, 'Ses nageoires dorsales et pectorales sont très développées. Elles lui permettent de nager à une vitesse de cinq nœuds.', 'https://projectpokemon.org/images/normal-sprite/goldeen.gif', '0000-00-00 00:00:00'),
(119, 'Poissoroy', 5, 364, '39,0 kg', '1,3 m', 0, 0, 5, 'S\'il fait des trous dans les rochers avec sa corne pour bâtir son nid, c\'est pour éviter que ses Œufs ne soient emportés par les flots.', 'https://projectpokemon.org/images/normal-sprite/seaking.gif', '0000-00-00 00:00:00'),
(120, 'Stari', 5, 264, '34,5 kg', '0,8 m', 0, 0, 5, 'Même découpé en mille morceaux, il peut régénérer les parties de son corps tant que sa partie centrale reste indemne.', 'https://projectpokemon.org/images/normal-sprite/staryu.gif', '0000-00-00 00:00:00'),
(121, 'Staross', 5, 324, '80,0 kg', '1,1 m', 0, 0, 5, 'On dit que si le centre de son corps, appelé le cœur, brille de sept couleurs, c\'est parce qu\'il est en train de communiquer.', 'https://projectpokemon.org/images/normal-sprite/starmie.gif', '0000-00-00 00:00:00'),
(122, 'M. Mime', 11, 284, '54,5 kg', '1,3 m', 0, 0, 5, 'Son talent pour le mime est indéniable. Il émet des ondes du bout des doigts pour créer un mur qui le protège de nombreuses attaques.', 'https://www.pokepedia.fr/images/2/2e/Sprite_122_XY.png', '0000-00-00 00:00:00'),
(123, 'Insecateur', 6, 344, '56,0 kg', '1,5 m', 0, 0, 5, 'Bondissant hors de l\'herbe comme un ninja, il lacère sa proie de ses griffes acérées.', 'https://projectpokemon.org/images/normal-sprite/scyther.gif', '0000-00-00 00:00:00'),
(124, 'Lippoutou', 13, 334, '40,6 kg', '1,4 m', 0, 0, 5, 'Ce Pokémon bouge en rythme comme s\'il dansait. Il ondule même du popotin quand il marche.', 'https://projectpokemon.org/images/normal-sprite/jynx.gif', '0000-00-00 00:00:00'),
(125, 'Elektek', 8, 334, '30,0 kg', '1,1 m', 0, 0, 5, 'Il provoque de grosses pannes de courant en se nourrissant de l\'électricité des centrales.', 'https://projectpokemon.org/images/normal-sprite/electabuzz.gif', '0000-00-00 00:00:00'),
(126, 'Magmar', 3, 334, '44,5 kg', '1,3 m', 0, 0, 5, 'Né dans le cratère d\'un volcan, son corps est recouvert de flammes. Il ressemble ainsi à une boule de feu.', 'https://projectpokemon.org/images/normal-sprite/magmar.gif', '0000-00-00 00:00:00'),
(127, 'Scarabrute', 6, 334, '55,0 kg', '1,5 m', 0, 0, 5, 'Il enserre sa proie de sa puissante pince. Il ne peut pas se déplacer dans le froid, donc on le trouve dans les milieux chauds.', 'https://projectpokemon.org/images/normal-sprite/pinsir.gif', '0000-00-00 00:00:00'),
(128, 'Tauros', 7, 354, '88,4 kg', '1,4 m', 0, 0, 5, 'Ce Pokémon brutal est très endurant. Rien n\'arrête sa charge tant qu\'il n\'a pas pulvérisé sa cible.', 'https://projectpokemon.org/images/normal-sprite/tauros.gif', '0000-00-00 00:00:00'),
(129, 'Magicarpe', 5, 244, '10,0 kg', '0,9 m', 0, 0, 5, 'Ce Pokémon est si faible que, dans les eaux à forts courants, il se contente de se laisser porter lamentablement.', 'https://projectpokemon.org/images/normal-sprite/magikarp.gif', '0000-00-00 00:00:00'),
(130, 'Leviator', 5, 394, '235,0 kg', '6,5 m', 0, 0, 5, 'Quand il se laisse emporter par la rage, même la plus violente des tempêtes ne peut l\'empêcher de détruire tout ce qui l\'entoure.', 'https://projectpokemon.org/images/normal-sprite/gyarados-f.gif', '0000-00-00 00:00:00'),
(131, 'Lokhlass', 5, 464, '220,0 kg', '2,5 m', 0, 0, 5, 'Il résiste bien aux très basses températures et peut nager dans des mers glaciales. Sa peau est lisse et légèrement froide au toucher.', 'https://projectpokemon.org/images/normal-sprite/lapras.gif', '0000-00-00 00:00:00'),
(132, 'Metamorph', 7, 300, '4,0 kg', '0,3 m', 0, 0, 5, 'Quand il rencontre l\'un de ses semblables, il s\'agite avec plus de vivacité que d\'habitude pour adopter exactement la même forme que lui.', 'https://projectpokemon.org/images/normal-sprite/ditto.gif', '0000-00-00 00:00:00'),
(133, 'Evoli', 7, 314, '6,5 kg', '0,3 m', 0, 0, 5, 'L\'ADN de ce Pokémon très particulier recèle de nombreuses possibilités d\'évolution.', 'https://projectpokemon.org/images/normal-sprite/eevee.gif', '0000-00-00 00:00:00'),
(134, 'Aquali', 5, 464, '29,0 kg', '1,0 m', 0, 0, 5, 'Sa structure cellulaire est similaire à la composition moléculaire de l\'eau. Une fois dans cet élément, il devient indétectable à l’œil nu.', 'https://projectpokemon.org/images/normal-sprite/vaporeon.gif', '0000-00-00 00:00:00'),
(135, 'Voltali', 8, 334, '24,5 kg', '0,8 m', 0, 0, 5, 'Il se charge d\'ions négatifs contenus dans l\'air pour envoyer des décharges d\'environ 10 000 volts.', 'https://projectpokemon.org/images/normal-sprite/jolteon.gif', '0000-00-00 00:00:00'),
(136, 'Pyroli', 3, 334, '25,0 kg', '0,9 m', 0, 0, 5, 'Il emmagasine de l\'air dans sa poche de flammes et le chauffe à une température de 1 700 °C.', 'https://projectpokemon.org/images/normal-sprite/flareon.gif', '0000-00-00 00:00:00'),
(137, 'Porygon', 7, 334, '36,5 kg', '0,8 m', 0, 0, 5, 'Ce Pokémon est censé être le seul à pouvoir voler jusque dans l\'espace, mais pour l\'instant, aucun Porygon n\'y est jamais parvenu.', 'https://projectpokemon.org/images/normal-sprite/porygon.gif', '0000-00-00 00:00:00'),
(138, 'Amonita', 12, 274, '7,5 kg', '0,4 m', 0, 0, 5, 'Un ancien Pokémon reconstitué à partir d’un fossile. Il nageait dans les mers antiques grâce à ses dix tentacules.', 'https://projectpokemon.org/images/normal-sprite/omanyte.gif', '0000-00-00 00:00:00'),
(139, 'Amonistar', 12, 344, '35,0 kg', '1,0 m', 0, 0, 5, 'Sa bouche est formée de crocs aiguisés. Il aurait disparu car sa coquille, trop grosse, l\'empêchait de se déplacer facilement.', 'https://projectpokemon.org/images/normal-sprite/omastar.gif', '0000-00-00 00:00:00'),
(140, 'Kabuto', 12, 264, '11,5 kg', '0,5 m', 0, 0, 5, 'Un Pokémon reconstitué à partir d\'un fossile. Il utilise les yeux situés sur son dos pour regarder alentour quand il se cache au fond de l\'eau.', 'https://projectpokemon.org/images/normal-sprite/kabuto.gif', '0000-00-00 00:00:00'),
(141, 'Kabutops', 12, 324, '40,5 kg', '1,3 m', 0, 0, 5, 'Ce Pokémon au corps fin est très bon nageur. Il lacère sa proie de ses longues griffes pour en absorber les fluides corporels.', 'https://projectpokemon.org/images/normal-sprite/kabutops.gif', '0000-00-00 00:00:00'),
(142, 'Ptera', 12, 364, '59,0 kg', '1,8 m', 0, 0, 5, 'Un Pokémon féroce disparu il y a longtemps. Il a été reconstitué à partir d\'ADN fossilisé dans de l\'ambre.', 'https://projectpokemon.org/images/normal-sprite/aerodactyl.gif', '0000-00-00 00:00:00'),
(143, 'Ronflex', 7, 524, '460,0 kg', '2,1 m', 0, 0, 5, 'L\'estomac de ce Pokémon est si résistant qu\'il peut même digérer de la nourriture avariée.', 'https://projectpokemon.org/images/normal-sprite/snorlax.gif', '0000-00-00 00:00:00'),
(144, 'Artikodin', 13, 384, '55,4 kg', '1,7 m', 0, 0, 5, 'Un Pokémon oiseau légendaire. L\'hiver, il glace la vapeur d\'eau contenue dans l\'air pour faire de la neige.', 'https://projectpokemon.org/images/normal-sprite/articuno.gif', '0000-00-00 00:00:00'),
(145, 'Electhor', 8, 384, '52,6 kg', '1,6 m', 0, 0, 5, 'Ce Pokémon oiseau légendaire apparaît quand le ciel s\'assombrit et que la foudre ne cesse de tomber.', 'https://projectpokemon.org/images/normal-sprite/zapdos.gif', '0000-00-00 00:00:00'),
(146, 'Sulfura', 3, 384, '60,0 kg', '2,0 m', 0, 0, 5, 'Quand ce Pokémon oiseau légendaire agite ses ailes de feu, même la nuit noire s\'embrase et rougeoie.', 'https://projectpokemon.org/images/normal-sprite/moltres.gif', '0000-00-00 00:00:00'),
(147, 'Minidraco', 15, 286, '3,3 kg', '1,8 m', 0, 0, 5, 'L\'existence de ce Pokémon mythique n\'a été confirmée que récemment par un pêcheur.', 'https://projectpokemon.org/images/normal-sprite/dratini.gif', '0000-00-00 00:00:00'),
(148, 'Draco', 15, 326, '16,5 kg', '4,0 m', 0, 0, 5, 'Selon des témoins, son corps est baigné d\'une étrange aura lui donnant un air mystique.', 'https://projectpokemon.org/images/normal-sprite/dragonair.gif', '0000-00-00 00:00:00'),
(149, 'Dracolosse', 15, 386, '210,0 kg', '2,2 m', 0, 0, 5, 'On raconte que ce Pokémon vit quelque part dans la mer et qu\'il peut voler. Rien n\'est moins sûr.', 'https://projectpokemon.org/images/normal-sprite/dragonite.gif', '0000-00-00 00:00:00'),
(150, 'Mewtwo', 11, 416, '122,0 kg', '2,0 m', 0, 0, 5, 'Son ADN est presque le même que celui de Mew, mais sa taille et son caractère sont très différents.', 'https://projectpokemon.org/images/normal-sprite/mewtwo.gif', '0000-00-00 00:00:00'),
(151, 'Mew', 11, 404, '4,0 kg', '0,4 m', 0, 0, 5, 'À l\'aide d\'un microscope, on peut distinguer le pelage extrêmement court, fin et délicat de ce Pokémon.', 'https://projectpokemon.org/images/normal-sprite/mew.gif', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `poke_type`
--

CREATE TABLE `poke_type` (
  `id` int(11) NOT NULL,
  `typ_name` varchar(255) DEFAULT NULL,
  `typ_img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poke_type`
--

INSERT INTO `poke_type` (`id`, `typ_name`, `typ_img_url`) VALUES
(1, 'Plante', 'https://www.pokepedia.fr/images/thumb/3/35/Miniature_Type_Plante_EB.png/68px-Miniature_Type_Plante_EB.png'),
(2, 'Poison', 'https://www.pokepedia.fr/images/thumb/2/28/Miniature_Type_Poison_EB.png/68px-Miniature_Type_Poison_EB.png'),
(3, 'Feu', 'https://www.pokepedia.fr/images/thumb/f/fc/Miniature_Type_Feu_EB.png/68px-Miniature_Type_Feu_EB.png'),
(4, 'Vol', 'https://www.pokepedia.fr/images/thumb/6/62/Miniature_Type_Vol_EB.png/68px-Miniature_Type_Vol_EB.png'),
(5, 'Eau', 'https://www.pokepedia.fr/images/thumb/4/4c/Miniature_Type_Eau_EB.png/68px-Miniature_Type_Eau_EB.png'),
(6, 'Insecte', 'https://www.pokepedia.fr/images/thumb/e/ee/Miniature_Type_Insecte_EB.png/68px-Miniature_Type_Insecte_EB.png'),
(7, 'Normal', 'https://www.pokepedia.fr/images/thumb/2/2e/Miniature_Type_Normal_EB.png/68px-Miniature_Type_Normal_EB.png'),
(8, 'Electrik', 'https://www.pokepedia.fr/images/thumb/6/6c/Miniature_Type_%C3%89lectrik_EB.png/68px-Miniature_Type_%C3%89lectrik_EB.png'),
(9, 'Sol', 'https://www.pokepedia.fr/images/thumb/d/d6/Miniature_Type_Sol_EB.png/68px-Miniature_Type_Sol_EB.png'),
(10, 'Combat', 'https://www.pokepedia.fr/images/thumb/1/1c/Miniature_Type_Combat_EB.png/68px-Miniature_Type_Combat_EB.png'),
(11, 'Psy', 'https://www.pokepedia.fr/images/thumb/d/da/Miniature_Type_Psy_EB.png/68px-Miniature_Type_Psy_EB.png'),
(12, 'Roche', 'https://www.pokepedia.fr/images/thumb/d/d3/Miniature_Type_Roche_EB.png/68px-Miniature_Type_Roche_EB.png'),
(13, 'Glace', 'https://www.pokepedia.fr/images/thumb/7/7e/Miniature_Type_Glace_EB.png/68px-Miniature_Type_Glace_EB.png'),
(14, 'Spectre', 'https://www.pokepedia.fr/images/thumb/e/e5/Miniature_Type_Spectre_EB.png/68px-Miniature_Type_Spectre_EB.png'),
(15, 'Dragon', 'https://www.pokepedia.fr/images/thumb/2/23/Miniature_Type_Dragon_EB.png/68px-Miniature_Type_Dragon_EB.png'),
(16, 'Acier', 'https://www.pokepedia.fr/images/thumb/b/b9/Miniature_Type_Acier_EB.png/68px-Miniature_Type_Acier_EB.png'),
(17, 'Fee', 'https://www.pokepedia.fr/images/thumb/3/3e/Miniature_Type_F%C3%A9e_EB.png/68px-Miniature_Type_F%C3%A9e_EB.png'),
(18, 'Tenebres', 'https://www.pokepedia.fr/images/thumb/f/f4/Miniature_Type_T%C3%A9n%C3%A8bres_EB.png/68px-Miniature_Type_T%C3%A9n%C3%A8bres_EB.png');

-- --------------------------------------------------------

--
-- Structure de la table `preferences`
--

CREATE TABLE `preferences` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `preferences`
--

INSERT INTO `preferences` (`id`, `libelle`) VALUES
(1, 'J\'aime le chocolat'),
(2, 'J\'ai le nougat');

-- --------------------------------------------------------

--
-- Structure de la table `signalements`
--

CREATE TABLE `signalements` (
  `id` int(11) NOT NULL,
  `sig_raison` varchar(255) DEFAULT NULL,
  `sig_description` text,
  `evenement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `use_pseudo` varchar(255) NOT NULL,
  `use_email` varchar(255) NOT NULL,
  `use_password` varchar(255) NOT NULL,
  `pok_pref` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_preferences`
--

CREATE TABLE `users_preferences` (
  `id_preference` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_name` (`article_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pok_name` (`pok_name`),
  ADD KEY `pokemons_poke_type_id_fk` (`pok_type`) USING BTREE;

--
-- Index pour la table `poke_type`
--
ALTER TABLE `poke_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signalements`
--
ALTER TABLE `signalements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `signalements_article_test_id_fk` (`evenement_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_users_poke_fav` (`pok_pref`);

--
-- Index pour la table `users_preferences`
--
ALTER TABLE `users_preferences`
  ADD PRIMARY KEY (`id_preference`,`id_user`),
  ADD KEY `users_preferences_users0_FK` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT pour la table `poke_type`
--
ALTER TABLE `poke_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `signalements`
--
ALTER TABLE `signalements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_user_id_article` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `pokemons`
--
ALTER TABLE `pokemons`
  ADD CONSTRAINT `poke_type_fk` FOREIGN KEY (`pok_type`) REFERENCES `poke_type` (`id`);

--
-- Contraintes pour la table `signalements`
--
ALTER TABLE `signalements`
  ADD CONSTRAINT `signalements_article_test_id_fk` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_poke_fav` FOREIGN KEY (`pok_pref`) REFERENCES `pokemons` (`id`);

--
-- Contraintes pour la table `users_preferences`
--
ALTER TABLE `users_preferences`
  ADD CONSTRAINT `users_preferences_preferences_FK` FOREIGN KEY (`id_preference`) REFERENCES `preferences` (`id`),
  ADD CONSTRAINT `users_preferences_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
