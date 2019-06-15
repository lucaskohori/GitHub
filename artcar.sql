-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2019 às 21:05
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artcar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `cpf_cnpj` char(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `inscMuni` char(11) DEFAULT NULL,
  `inscEst` varchar(12) DEFAULT NULL,
  `cep` char(8) NOT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `complemento` varchar(40) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cpf_cnpj`, `nome`, `inscMuni`, `inscEst`, `cep`, `telefone`, `email`, `numero`, `complemento`, `dtregister`) VALUES
('00000000001', 'Lucas eduardo', '', '', '82630160', '06648646', 'lucas.kohori@gmail.com', '1633', '272', '2019-06-13 21:40:49'),
('00000000002', 'Rafael Gôuvea', '', '', '80610905', '856301458', 'Rafael@gmail', '', '4121', '2019-06-15 12:35:57'),
('00000000003', 'Bruna da Silva', '', '', '80060000', '985256727', 'bruna@email', '', 'de 0896/897 a 1598/1599', '2019-06-15 15:31:40'),
('00000000004', 'João Argentina', '', '', '80215901', '52465', 'joao@argentina', '1633', '1155', '2019-06-13 00:07:53'),
('00000000005', 'Angela maria', '', '', '82630160', '98456321', 'angela@email', '272', '545', '2019-06-13 00:16:03'),
('00000000006', 'Vinicius Araújo Souza', '', '', '82590100', '87945624', 'vinicius@gmail.com', '', 'até 4279/4280', '2019-06-15 16:36:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `cep` char(8) NOT NULL,
  `logradouro` varchar(40) NOT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`cep`, `logradouro`, `bairro`, `cidade`, `uf`) VALUES
('80060000', 'Rua XV de Novembro', 'Centro', 'Curitiba', 'PR'),
('80215901', 'Rua Imaculada Conceição', 'Prado Velho', 'Curitiba', 'PR'),
('80610905', 'Avenida Presidente Kennedy', 'Portão', 'Curitiba', 'PR'),
('81830285', 'Rua Francisco Derosso', 'Xaxim', 'Curitiba', 'PR'),
('82590100', 'Rodovia BR-116', 'Atuba', 'Curitiba', 'PR'),
('82630160', 'Estrada das Olarias', 'Atuba', 'Curitiba', 'PR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nfe`
--

CREATE TABLE `tb_nfe` (
  `cod_nf` char(11) NOT NULL,
  `cpf_cnpj` char(11) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ordemservico`
--

CREATE TABLE `tb_ordemservico` (
  `codOS` char(11) NOT NULL,
  `cpf_cnpj` char(11) NOT NULL,
  `modelo_veiculo` varchar(32) DEFAULT NULL,
  `marca_veiculo` varchar(32) DEFAULT NULL,
  `placa` varchar(16) DEFAULT NULL,
  `descricao` varchar(128) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_ordemservico`
--

INSERT INTO `tb_ordemservico` (`codOS`, `cpf_cnpj`, `modelo_veiculo`, `marca_veiculo`, `placa`, `descricao`, `dtregister`) VALUES
('00000000001', '00000000001', 'Fusca', 'Wolkswagen', 'abc1234', '', '2019-06-13 21:55:01'),
('00000000002', '00000000002', 'Kwid', 'Renaut', 'cda1235', '', '2019-06-15 13:06:56'),
('00000000003', '00000000002', '147', 'fiat', 'lkd2587', '', '2019-06-15 13:49:56'),
('00000000004', '00000000006', 'Civic', 'Honda', 'lkd5897', '', '2019-06-15 15:39:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicos`
--

CREATE TABLE `tb_servicos` (
  `codServico` char(8) NOT NULL,
  `vlServico` float(6,2) DEFAULT NULL,
  `descricao` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_servicos`
--

INSERT INTO `tb_servicos` (`codServico`, `vlServico`, `descricao`) VALUES
('00000000', 0.00, 'Selecione uma opção'),
('00000001', 99.99, 'Pintura da lataria'),
('00000002', 299.99, 'Martelinho de ouro'),
('00000003', 658.00, 'Restauração (porta)'),
('00000004', 159.99, 'Restauração (paralama)'),
('00000005', 1500.00, 'Troca (parabrisa)'),
('00000006', 169.30, 'Troca (Paralama)'),
('00000007', 159.99, 'Restauração (vidro traseiro)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicosrealizados`
--

CREATE TABLE `tb_servicosrealizados` (
  `codOS` char(11) NOT NULL,
  `codServico` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_servicosrealizados`
--

INSERT INTO `tb_servicosrealizados` (`codOS`, `codServico`) VALUES
('00000000001', '00000001'),
('00000000001', '00000003'),
('00000000002', '00000001'),
('00000000002', '00000002'),
('00000000002', '00000003'),
('00000000002', '00000004'),
('00000000002', '00000005'),
('00000000003', '00000005'),
('00000000004', '00000002'),
('00000000004', '00000001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`cpf_cnpj`),
  ADD KEY `cep` (`cep`);

--
-- Indexes for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`cep`);

--
-- Indexes for table `tb_nfe`
--
ALTER TABLE `tb_nfe`
  ADD PRIMARY KEY (`cod_nf`),
  ADD KEY `cpf_cnpj` (`cpf_cnpj`);

--
-- Indexes for table `tb_ordemservico`
--
ALTER TABLE `tb_ordemservico`
  ADD PRIMARY KEY (`codOS`),
  ADD KEY `cpf_cnpj` (`cpf_cnpj`);

--
-- Indexes for table `tb_servicos`
--
ALTER TABLE `tb_servicos`
  ADD PRIMARY KEY (`codServico`);

--
-- Indexes for table `tb_servicosrealizados`
--
ALTER TABLE `tb_servicosrealizados`
  ADD KEY `codOS` (`codOS`),
  ADD KEY `codServico` (`codServico`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD CONSTRAINT `tb_cliente_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `tb_endereco` (`cep`);

--
-- Limitadores para a tabela `tb_nfe`
--
ALTER TABLE `tb_nfe`
  ADD CONSTRAINT `tb_nfe_ibfk_1` FOREIGN KEY (`cpf_cnpj`) REFERENCES `tb_cliente` (`cpf_cnpj`);

--
-- Limitadores para a tabela `tb_ordemservico`
--
ALTER TABLE `tb_ordemservico`
  ADD CONSTRAINT `tb_ordemservico_ibfk_1` FOREIGN KEY (`cpf_cnpj`) REFERENCES `tb_cliente` (`cpf_cnpj`);

--
-- Limitadores para a tabela `tb_servicosrealizados`
--
ALTER TABLE `tb_servicosrealizados`
  ADD CONSTRAINT `tb_servicosrealizados_ibfk_1` FOREIGN KEY (`codOS`) REFERENCES `tb_ordemservico` (`codOS`),
  ADD CONSTRAINT `tb_servicosrealizados_ibfk_2` FOREIGN KEY (`codServico`) REFERENCES `tb_servicos` (`codServico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
