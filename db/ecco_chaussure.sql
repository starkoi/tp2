-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Avril 2017 à 23:58
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecco_chaussure`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'bottes'),
(2, 'sandales'),
(3, 'athlétiques'),
(4, 'chaussures');

-- --------------------------------------------------------

--
-- Structure de la table `chaussures`
--

CREATE TABLE `chaussures` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL COMMENT 'nom du produit',
  `marque` varchar(255) NOT NULL COMMENT 'marque du produit',
  `fichier_img` varchar(128) NOT NULL,
  `description` varchar(1027) NOT NULL COMMENT 'description du produit',
  `prix` varchar(255) NOT NULL COMMENT 'prix du produit',
  `sexe` int(11) NOT NULL COMMENT 'genre hommes ou femmes',
  `pointure` varchar(255) NOT NULL COMMENT 'pointure de chaussure',
  `categorie_id` int(11) NOT NULL COMMENT 'relation avec le tableau de categorie'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `chaussures`
--

INSERT INTO `chaussures` (`id`, `nom`, `marque`, `fichier_img`, `description`, `prix`, `sexe`, `pointure`, `categorie_id`) VALUES
(1, 'brelynn', 'k-studio', 'f-wedge-1.jpg', '<p>Modèle fourreau.\r\nTechnologie N5 Comfort offrant une semelle flexible, des matières légères, un coussinage supplémentaire, un équilibre des orteils au talon et une doublure respirante.\r\nSemelle extérieure antidérapante assurant la stabilité, talon compensé de 4,4 cm. </p>', '129,00 $', 0, '7,8,9,10,11', 4),
(2, 'girly', 'k-studio', 'f-flats-1.jpg', '<p>Modèle décontracté ajusté à dessus en cuir synthétique et bout plat.\r\nModèle fourreau.\r\nPlis décoratifs sur l\'empeigne\r\nDoublure lisse, semelle intérieure coussinée pour un confort tout au long de la journée.\r\nSemelle extérieure de traction pour plus de stabilité, talon de 1,9 cm. </p>', '79,00 $', 0, '6,7,8,9,10', 4),
(3, 'odette', 'hush-puppies', 'f-pump-1.jpg', '<p>Modèle décontracté de fin de semaine à dessus en cuir synthétique et bout rond.\r\nModèle fourreau.\r\nPiqûres et nœud sur le bout\r\nDoublure lisse, semelle intérieure coussinée pour un confort tout au long de la journée.\r\nSemelle extérieure antidérapante assurant la stabilité, talon de 1,9 cm.\r\n</p>', '89,00 $', 0, '7,8,9,10,11', 4),
(4, 'michelle', 'naturalizer', 'f-pump-2.jpg', '<p>Modèle habillé sobre à dessus en cuir, cuir synthétique ou suède et bout rond.\r\nEmpeigne de style escarpin classique\r\nDoublure lisse,semelle antidérapante,\r\nsemelle intercalaire plateforme de 1,2cm, talon de 6,4cm.\r\nHauteur totale du talon: 7,6cm. </p>', '139,00 $', 0, '6,7,8,9,10', 4),
(5, 'bateau', 'sperry', 'h-casual-1.jpg', '<p>Cuir résistant aux taches et à l\'eau\r\nCousu à la main à façon mocassin véritable.\r\nSystème de laçage 360° aux œillets inoxydables.\r\nTalon amortisseur de chocs en EVA\r\nSemelle extérieure non marquante en caoutchouc intégrant la technologie\r\nWave-Siping pour l\'adhérence optimale sur surface humide/sèche.</p>', '109,00 $', 1, '8,9,10,11,12', 4),
(6, 'cotrell', 'clarks', 'h-clarks-1.jpg', '<p>Tige en cuir huilé.\r\nTechnologie Cushion Soft.\r\nSemelle intercalaire en EVA procure un excellent amorti, col rembourré,\r\nmodèle facile à enfiler,\r\npanneau élastique sur les deux côtés,\r\nassise plantaire amovible coussinée, ortholite, semelle extérieure légère en EVA, grande largeur.</p>', '99.99 $', 1, '7,8,9,10,11', 4),
(7, 'brenan', 'martens', 'h-casual-3.jpg', '<p>Tige en faux cuir nubuck,\r\ndoublure respirante en textile,\r\nfabrication à trépointe cousue : la tige et la semelle sont cousues et thermoscellées ensemble,\r\nassise plantaire coussinée SoftWair.\r\nModèle à enfiler avec élastiques latéraux.\r\nSemelle extérieure durable ultralégère en Phylon. </p>', '99,99 $', 1, '8,9,10,11,12', 4),
(8, 'berner', 'merrell', 'h-merrel-1.jpg', '<p>Tige en nubuck et en suède.\r\nModèle à enfiler\r\nCambrion de voûte plantaire moulé,\r\nassise plantaire M Select Move avec technologie M Select Fresh pour le contrôle des odeurs.\r\nSemelle intercalaire en EVA procure un plus grand confort.\r\nSemelle extérieure M Select GRIP procure une adhérence sur laquelle vous pouvez compter.</p>', '124,99 $', 1, '8,9,10,11,12', 4),
(9, 'original', 'stone', 'h-boots-1.jpg', '<p>Tige en cuir tanné à l\'huile de première qualité avec élastiques sur les côtés.\r\nSemelle en polyuréthane avec motif original.\r\nSystème de protection d\'impact (SPI) breveté pour le confort.\r\nAssise plantaire amovible entièrement coussinée.\r\nSemelle extérieure résistante à 140 °C\r\nAntidérapantes, légères et durables. Bout rond.\r\nPORON dans la zone de contact du talon pour une plus grande protection contre les impacts.\r\nPointures Royaume-Uni - Largeur moyenne\r\nVeuillez consulter le Guide des pointures.</p>', '209,99 $', 1, '9,10,11,12,13', 1),
(10, 'moc', 'martens', 'h-boots-2.jpg', '<p>Tige en cuir gras mat, intérieur en cuir brut.\r\nLaçage à 8 œillets pour un ajustement ferme et personnalisé, cousu trépointe pour durabilité, surpiqûre jaune classique,semelle extérieure en PVC durable à coussin d\'air absorbe l\'impact et est résistante à l\'huile.\r\nHauteur approx. du talon : 1 po.\r\nHauteur approx. de la tige : 6 ¼ po.\r\n</p>', '184,99 $', 1, '9,10,11,12,13', 1),
(11, 'crazy-horse', 'martens', 'h-boots-3.jpg', '<p>Tige en cuir Crazy Horse (huilé)\r\nIntérieur en cuir brut, laçage à 8 œillets pour un ajustement ferme et personnalisé, cousu trépointe pour durabilité,surpiqûre jaune classique,\r\nsemelle extérieure en PVC durable à coussin d\'air absorbe les chocs et résiste à l\'huile.\r\nHauteur approx. du talon : 1 po\r\nHauteur approx. de la tige : 6 ¼ po </p>', '194,99 $', 1, '8,9,10,11,12', 1),
(12, 'icon', 'timberland', 'h-boots-4.jpg', '<p>Tige imperméable en cuir nubuck, doublure en cuir et en textile, assise plantaire OrthoLite offre un amorti durable,technologie Dynamic SensorFlex offre un soutien et une flexibilité sans pareils sur tout type de surface, semelle extérieure crantée procure une adhérence exceptionnelle sur tout type de surface. </p>', '199,99 $', 1, '8,9,10,11,12', 1),
(13, 'isadora', 'naturalizer', 'f-boots-2.jpg', '<p>Modèle ajusté avec dessus en cuir et bout rond. Fermeture éclair latérale\r\nBride à boucle latérale décorative,\r\ndécoupes élastiques intérieures pour un ajustement personnalisé,structure multicouches avec semelle intérieure durable, semelle intercalaire flexible, mousse confortable et feutre brossé.\r\nDoublure Ultra comprenant une matière synthétique douce et confortable avec une mousse isolante pour une meilleure protection contre le froid.\r\nSemelle extérieure en caoutchouc de grande qualité pour plus de stabilité et d\'isolation.\r\nTalon de 5,7cm; plateforme de 1,9cm\r\nHauteur totale de 7,6cm. </p>', '249,99 $', 0, '6,7,8,9,10', 1),
(14, 'dahlia', 'sofmoc', 'f-boots-1.jpg', '<p>Tige en suède synthétique,\r\nassise plantaire coussinée pour un plus grand confort,\r\ndoublure en matériaux synthétiques,\r\nmodèle lacé, semelle extérieure en composite pour un pas assuré.\r\nHauteur approx. du talon : 3,5 po </p>', '49,99 $', 0, '6,7,8,9,10', 1),
(15, 'ivana', 'k-studio', 'f-boots-4.jpg', '<p>Modèle d\'hiver ajusté à dessus en cuir et bout rond, fermeture éclair latérale, bride à la cheville à boucle décorative.\r\nStructure multicouches avec semelle intérieure durable, semelle intercalaire flexible, mousse confortable et feutre brossé.\r\nDoublure Ultra comprenant une matière synthétique douce et confortable avec une mousse isolante pour une meilleure protection contre le froid.\r\nSemelle extérieure en caoutchouc de grande qualité pour plus de stabilité et d\'isolation, talon de 7,6 cm. </p>', '149,99 $', 0, '6,7,8,9,10', 1),
(16, 'inspiration', 'geox', 'f-boots-3.jpg', '<p>Tige en suède magnifique,fermeture éclair latérale facilitant l\'enfilage,\r\nassise plantaire coussinée pour un plus grand confort, trous microscopiques dans la semelle extérieure flexible en caoutchouc évacuent la transpiration des pieds hors des souliers.\r\nHauteur approx. du talon : 3 po </p>', '159,99 $', 0, '7,8,9,10,11', 1),
(17, 'young', 'skechers', 'f-sandales-3.jpg', '<p>Tige en nubuck synthétique souple et lisse, sandale à sangles avec passe-orteil et talon compensé, sangles entrecroisées, sangle doublée de tissu doux, assise plantaire confortable rembourrée avec une mousse viscoélastique.\r\nMatelassage pour la voûte plantaire.\r\nSemelle extérieure adhérente et flexible\r\nHauteur approx. du talon compensé : 2 1/4 po. </p>', '59,99 $', 0, '5,6,7,8,9', 2),
(18, 'jemma', 'bzees', 'f-sandales-1.jpg', '<p>Modèle de fin de semaine à dessus en tissu extensible et bout ouvert,\r\nbride au talon et bride réglable à fermeture auto-agrippante à la cheville,\r\nbride avant décorée,\r\ncône en gel confort absorbant les chocs au talon et offrant un coussinage supplémentaire.\r\nAssise plantaire Free-Foam pour un coussinage supplémentaire et soutien de voûte plantaire avec mousse viscoélastique.\r\nDoublure lisse, semelle intérieure coussinée pour un confort tout au long de la journée.\r\nSemelle en EVA faible densité procurant une sensation de légèreté, lavables à la machine.\r\nTalon de 5,7 cm. </p>', '89,99 $', 0, '6,7,8,9,10', 2),
(19, 'adele', 'naturalizer', 'f-sandales-2.jpg', '<p>Sandales habillées à dessus en tissu et bout ouvert, bride à fermeture auto-agrippante sur le côté, brides entrecroisées.\r\nTechnologie N5 Comfort offrant une semelle flexible, des matières légères, un coussinage supplémentaire, un équilibre des orteils au talon et une doublure respirante.\r\nSemelle extérieure antidérapante assurant la stabilité, talon de 4,4cm. </p>', '99,99 $', 0, '7,8,9,10,11', 2),
(20, 'breeze', 'clarks', 'f-sandales-4.jpg', '<p>Tige en matière synthétique,fermeture ajustable à bande autoagrippante, \r\ndoublure en tissu doux,\r\nassise plantaire et semelle intercalaire coussinées en EVA.\r\nSemelle extérieure en caoutchouc thermoplastique. </p>', '59,99 $', 0, '6,7,8,9,10', 2),
(21, 'keegan', 'softmoc', 'h-sandales-1.jpg', '<p>Tige en nubuck et polyuréthane,\r\ntrois sangles ajustables à bande autoagrippante, assise plantaire coussinée avec matériau de tapis de yoga.\r\nSemelle extérieure durable en caoutchouc. </p>', '59,99 $', 1, '8,9,10,11,12', 2),
(22, 'arizona', 'birkenstock', 'h-sandales-2.jpg', '<p>Tige en cuir, assise plantaire recouverte de suède, semelle intercalaire en liège-latex.\r\nSupport de la voûte plantaire intégré\r\nPrise aux orteils pour plus de soutien et de confort.\r\nCoque talonnière profonde garde le pied correctement aligné, assise plantaire douce. Semelle extérieure légère en CAV/E aide à absorber l\'impact.\r\nDeux brides réglables pour un ajustement sur mesure.\r\nFabriqué en Allemagne</p>', '99,99 $', 1, '9,10,11,12,13', 2),
(23, 'fanning', 'reef', 'h-sandales-3.jpg', '<p>Tige en nubuck synthétique résistant à l\'eau, doublure en jersey coussinée\r\nAssise plantaire en EVA moulé par compression.Coussin d\'air 360 degrés sous le talon, semelle extérieure en caoutchouc avec motif à chevrons.\r\nDécapsuleur sous la semelle. </p>', '64,99 $', 1, '8,9,10,11,12', 2),
(24, 'breeze', 'clarks', 'h-sandales-4.jpg', '<p>Tige en matière synthétique, fermeture ajustable à bande autoagrippante.\r\nDoublure en tissu doux, assise plantaire et semelle intercalaire coussinées en EVA.\r\nSemelle extérieure en caoutchouc thermoplastique. </p>', '59,99 $', 1, '8,9,10,11,12', 2),
(25, 'appeal-flex', 'skechers', 'f-skechers-1.jpg', '<p>Tige en tissu et matériau synthétique doux, modèle à enfiler,languette et col légèrement rembourrés.\r\nDoublure respirante en tissu.\r\nSemelle intercalaire légère et flexible FlexSole 2.0 qui absorbe les chocs.\r\nSemelle extérieure flexible en caoutchouc. </p>', '98,99 $', 0, '6,7,8,9,10', 3),
(26, 'oxford', 'keds', 'f-keds-1.jpg', '<p>Empeigne en toile respirante, semelle intercalaire légère, assise plantaire coussinée en tissu éponge évacue l\'humidité.\r\nIncrustations en caoutchouc sur la semelle extérieure assure l\'adhérence tout en coussinant chaque pas. </p>', '53,99 $', 0, '5,6,7,8,9', 3),
(27, 'dainty', 'converse', 'f-converse-1.jpg', '<p>Empeigne en toile robuste, doublure en toile, assise plantaire coussinée\r\nFermeture à lacets; œillets métalliques.\r\nEmbout en caoutchouc emblématique Chuck Taylor.\r\nSemelle intermédiaire à profil bas, semelle extérieure en caoutchouc\r\nvulcanisé pour l\'adhérence. </p>', '68,99 $', 0, '6,7,8,9,10', 3),
(28, 'empire', 'skechers', 'f-skechers-2.jpg', '<p>Tige souple en tricot jersey,\r\nmodèle à enfiler,languette et col rembourrés,doublure en textile doux.\r\nSemelle intérieure en mousse viscoélastique pour confort toute la journée.\r\nSemelle extérieure en caoutchouc avec rainures pour adhérence. </p>', '66,99 $', 0, '6,7,8,9,10', 3),
(29, 'equilizer', 'skechers', 'h-skechers-1.jpg', '<p>Tige en maille Skech Knit, elastique de chaque côté pour un meilleur ajustement, doublure en tissu doux, assise plantaire en mousse viscoélastique refroidie par air.\r\nSemelle intercalaire double densit, dual-Lite absorbe l\'impact, semelle extérieure flexible en caoutchouc non marquant. </p>\r\n', '79,99 $', 1, '7,8,9,10,11', 3),
(30, 'vaugh', 'polo-ralph-lauren', 'h-polo-1.jpg', '<p>Tige en toile tissée-teinte, logo poney brodé sur le côté, doublure respirante en toile,fermeture à lacets sur le devant, œillets en métal.\r\nSemelle intérieure moulée assure confort et absorption des chocs.\r\nSemelle extérieure en caoutchouc rainuré. </p>', '78,99 $', 1, '7,8,9,10,11', 3),
(31, 'taylor', 'converse', 'h-converse-1.jpg', '<p>Tige en toile, doublure en toile,\r\nembout en caoutchouc blanc classique, fermeture à lacets pour un ajustement sûr.\r\nAssise plantaire coussinée pour le confort.\r\nSemelle extérieure en caoutchouc vulcanisé pour plus d\'adhérence et de flexibilité. </p>', '59,99 $', 1, '8,9,10,11,12', 3),
(32, 'asher', 'vans', 'h-vans-1.jpg', '<p>Tige en toile, bout à piqûre double.\r\nÉlastiques latéraux pour faciliter l\'enfilage, doublure en textile, assise plantaire coussinée, semelle extérieure durable en caoutchouc à motif gaufré. </p>', '58,99 $', 1, '8,9,10,11,12', 3);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `courriel` int(255) NOT NULL,
  `mot_de_passe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chaussures`
--
ALTER TABLE `chaussures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `chaussures`
--
ALTER TABLE `chaussures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
