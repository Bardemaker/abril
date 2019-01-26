-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2019 at 11:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abril`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `telefone`) VALUES
(1, 'Demetrius Diaz', 'varius.orci.in@odio.net', '92355606750'),
(2, 'Wyoming Carver', 'Nunc@orci.edu', '22527225407'),
(3, 'Ciaran Jackson', 'Vestibulum@Inscelerisquescelerisque.org', '29736383918'),
(4, 'Alvin Gallegos', 'urna.Nullam.lobortis@justoProin.co.uk', '62234167962'),
(5, 'Heather Hoffman', 'mollis@ultricies.ca', '52756727150'),
(6, 'Lani Abbott', 'lectus@Aenean.ca', '69431046217'),
(7, 'Reagan Leonard', 'sed.dui@necimperdietnec.org', '33492380648'),
(8, 'Ferdinand Jacobson', 'vehicula@sociosqu.co.uk', '62611852565'),
(9, 'Eagan Foley', 'malesuada@sedtortor.ca', '48273630486'),
(10, 'Lawrence Hart', 'sagittis.semper.Nam@senectusetnetus.net', '83115883722'),
(11, 'Nero Parrish', 'Pellentesque.tincidunt@Phasellusfermentum.com', '29267008305'),
(12, 'Aurora Hill', 'tellus@velit.org', '85426171228'),
(13, 'Alma Massey', 'vel@Curabitur.org', '61657945238'),
(14, 'Daquan Knox', 'orci.luctus@Curabiturconsequatlectus.ca', '89590263481'),
(15, 'Clinton Ortega', 'id.mollis.nec@Quisque.net', '66643531425'),
(16, 'Madonna Rogers', 'pharetra@velarcueu.net', '66728905534'),
(17, 'Adele Mcknight', 'adipiscing@loremut.com', '57238548406'),
(18, 'Avram Jones', 'ornare.facilisis@tinciduntadipiscing.net', '11234474402'),
(19, 'Erich Hayes', 'elit.Etiam@parturientmontesnascetur.net', '19584865188'),
(20, 'Steel Humphrey', 'ornare.sagittis.felis@elit.ca', '18915759851'),
(21, 'Ainsley Barton', 'pharetra.Nam@arcueuodio.edu', '13954956471'),
(22, 'Kaden Mccray', 'posuere.vulputate@euismodindolor.ca', '21588819726'),
(23, 'Hunter Doyle', 'arcu@magnaSuspendisse.ca', '75243984156'),
(24, 'Demetrius Moore', 'Aliquam@pretiumaliquetmetus.ca', '45225490155'),
(25, 'Rhonda Weber', 'Phasellus.elit@famesac.net', '11273596671'),
(26, 'Octavia Byrd', 'in.aliquet@Maecenasornare.org', '28480680808'),
(27, 'Wade James', 'rhoncus.id.mollis@rhoncus.org', '76134037320'),
(28, 'Noel Walter', 'egestas.rhoncus.Proin@cursusvestibulum.net', '52414912138'),
(29, 'Yoshi Payne', 'Ut.semper@duinec.edu', '94033859677'),
(30, 'Shelly Foster', 'nec.ligula.consectetuer@libero.co.uk', '44828385979'),
(31, 'Herrod Mercado', 'malesuada.ut@nullaIntincidunt.ca', '18720958023'),
(32, 'Garrett Hamilton', 'gravida.Aliquam.tincidunt@sapienimperdiet.ca', '79638286608'),
(33, 'Carla Acosta', 'faucibus@commodoipsumSuspendisse.com', '27690537770'),
(34, 'Allistair Chambers', 'In.scelerisque@Etiamimperdiet.edu', '82556647464'),
(35, 'Zephr Moss', 'Nunc@rutrummagnaCras.edu', '57313236527'),
(36, 'Hiroko Camacho', 'pellentesque.eget@iaculisneceleifend.edu', '78779058989'),
(37, 'Kane Morin', 'dolor.Quisque.tincidunt@diamPellentesquehabitant.com', '74479543009'),
(38, 'Hu Boyd', 'sem.egestas@Curabiturut.net', '81893340206'),
(39, 'Kim Wallace', 'Nullam.feugiat.placerat@tellusjustosit.org', '28783907886'),
(40, 'Ashely Patterson', 'non.luctus.sit@Aenean.co.uk', '36862163672'),
(41, 'Regina Boone', 'sem.elit.pharetra@pharetrafelis.com', '13241347135'),
(42, 'Elmo Alford', 'eget.volutpat.ornare@mauris.org', '91308308133'),
(43, 'Malcolm Hodges', 'lacus.varius.et@ascelerisque.co.uk', '51569661705'),
(44, 'Cole Molina', 'Suspendisse.ac@nequesedsem.com', '89742263071'),
(45, 'Winter Merrill', 'auctor.quis@Morbinonsapien.ca', '25366854550'),
(46, 'Plato Kent', 'lacus.Aliquam@ut.edu', '19631853070'),
(47, 'Xenos Pickett', 'Maecenas.malesuada@Aliquam.co.uk', '81831284341'),
(48, 'Maxwell Herman', 'sit.amet@commodohendrerit.ca', '1138862111'),
(49, 'Leonard Guy', 'hendrerit.a@nibhDonec.ca', '81242556480'),
(50, 'Whilemina Jennings', 'orci.luctus.et@nec.co.uk', '98296613178');

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id_produto`, `id_cliente`) VALUES
(1, 48),
(2, 13),
(2, 18),
(2, 25),
(3, 12),
(3, 22),
(3, 43),
(3, 45),
(4, 12),
(4, 46),
(5, 2),
(5, 14),
(5, 20),
(6, 44),
(7, 49),
(8, 33),
(9, 11),
(9, 21),
(9, 38),
(9, 44),
(9, 48),
(11, 13),
(11, 20),
(11, 30),
(11, 31),
(11, 50),
(12, 40),
(12, 43),
(14, 29),
(14, 34),
(15, 2),
(15, 20),
(15, 23),
(16, 4),
(16, 7),
(16, 10),
(16, 20),
(16, 34),
(16, 42),
(16, 44),
(17, 42),
(17, 43),
(18, 50),
(19, 7),
(19, 47),
(21, 27),
(23, 19),
(23, 45),
(24, 26),
(25, 7);

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `descricao`, `preco`) VALUES
(1, 'Caderno', 'Caderno 48 fls.', '1.50'),
(2, 'Caderno', 'Caderno Caligrafia - 40 fls.', '1.70'),
(3, 'Caderno', 'Caderno de Desenho - 48 fls.', '1.60'),
(4, 'Caderno', 'Caderno UniversitÃ¡rio - 10 matÃ©rias', '6.40'),
(5, 'Caneta', 'Caneta', '0.90'),
(6, 'Caneta', 'Canetas Hidrocores - 12 cores', '4.80'),
(7, 'Cartolina', 'Cartolina Branca', '1.00'),
(8, 'Cola', 'Cola 40 gr', '0.89'),
(9, 'Compasso', 'Compasso', '5.90'),
(10, 'Corretivo', 'Corretivo', '2.10'),
(11, 'Esquadro', 'Esquadro 45Âº', '1.40'),
(12, 'Esquadro', 'Esquadro 60Âº', '1.40'),
(13, 'LÃ¡pis de cor', 'LÃ¡pis de cor - 24 cores', '14.90'),
(14, 'LÃ¡pis', 'LÃ¡pis preto - unidade', '0.50'),
(15, 'Marcador', 'Marcador - quadro branco', '5.90'),
(16, 'Monobloco', 'Monobloco - 96 fls', '4.90'),
(17, 'Papel', 'Papel AlmaÃ§o Quadriculado pct c/ 10 unidades', '1.70'),
(18, 'Papel', 'Papel OfÃ­cio A4 - 100 fls. (branco)', '3.90'),
(19, 'Pincel', 'Pincel (nÂº 4)', '2.10'),
(20, 'RÃ©gua', 'RÃ©gua 30 cm', '0.50'),
(21, 'Tesoura', 'Tesoura ( sem ponta)', '3.00'),
(22, 'Tinta', 'Tinta Guache (6 cores)', '2.40'),
(23, 'Transferidor', 'Transferidor 180Âº', '1.30'),
(24, 'Apontador Capacete', 'Apontador de lÃ¡pis em formato de capacete', '1.50'),
(25, 'Borracha', 'Borracha Branca', '0.80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_produto`,`id_cliente`),
  ADD KEY `fk_cliente_idx` (`id_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
