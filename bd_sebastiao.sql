-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2023 às 00:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_sebastiao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `foto`, `texto`) VALUES
(1, 'http://localhost/sebastiao_alves/public/JPG/conteudo.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit!</p><p>&nbsp;Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit.&nbsp;<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit.&nbsp;<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit.&nbsp;<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit.&nbsp;<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit harum.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `data_ultimo_acesso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `login`, `senha`, `data_ultimo_acesso`) VALUES
(1, 'hugo', 'hugo', '123', '14:56:11 - 04/03/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cabecalho`
--

CREATE TABLE `cabecalho` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `imagem_mobile` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` longtext NOT NULL,
  `tag` varchar(100) NOT NULL,
  `saber_mais` varchar(300) NOT NULL,
  `data_actualizacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cabecalho`
--

INSERT INTO `cabecalho` (`id`, `imagem`, `imagem_mobile`, `titulo`, `texto`, `tag`, `saber_mais`, `data_actualizacao`) VALUES
(2, 'http://localhost/sebastiao_alves/public/JPG/cabecalho1.jpg', 'http://localhost/sebastiao_alves/public/JPG/cabecalho1_mobile.jpg', 'Senhora do amor e da guerra', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \n                                Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \n                                amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \n                                iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \n                                suscipit dolores quisquam iste modi porro deleniti.', 'NOVIDADE', 'http://localhost/codemaster/trabalhoFinal/trabalhoFinalMvc/livros/1', ''),
(3, 'http://localhost/sebastiao_alves/public/JPG/cabecalho3.jpg', 'http://localhost/sebastiao_alves/public/JPG/cabecalho3_mobile.jpg', 'O colecionador de amnesias', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. \n                                Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \n                                amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \n                                iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \n                                suscipit dolores quisquam iste modi porro deleniti.', '', 'http://localhost/codemaster/trabalhoFinal/trabalhoFinalMvc/livros/2', ''),
(5, 'http://localhost/sebastiao_alves/public/JPG/cabecalho4.jpg', 'http://localhost/sebastiao_alves/public/JPG/cabecalho4_mobile.jpg', 'O velho que pensava que fugia\r\n', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \n                                Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \n                                amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \n                                iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \n                                suscipit dolores quisquam iste modi porro deleniti.', '', 'http://localhost/codemaster/trabalhoFinal/trabalhoFinalMvc/livros/4', ''),
(8, 'http://localhost/sebastiao_alves/public/JPG/cabecalho2.jpg', 'http://localhost/sebastiao_alves/public/JPG/cabecalho2_mobile.jpg', 'O caracol estrabico', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \n                                Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \n                                amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \n                                iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \n                                suscipit dolores quisquam iste modi porro deleniti.', '', 'http://localhost/codemaster/trabalhoFinal/trabalhoFinalMvc/livros/3', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `email`, `horario`) VALUES
(1, '+351 123 456 777', 'Lorem ipsum dolor sit amet, 12 1234-543 Lorem', 'lorem@lorem.pt', 'Segunda a Sexta das 09:00 As 20:00 horas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `texto` longtext NOT NULL,
  `destaque_1` varchar(100) NOT NULL,
  `destaque_2` varchar(100) NOT NULL,
  `destaque_3` varchar(100) NOT NULL,
  `observacao_1` varchar(100) NOT NULL,
  `observacao_2` varchar(100) NOT NULL,
  `observacao_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem`, `texto`, `destaque_1`, `destaque_2`, `destaque_3`, `observacao_1`, `observacao_2`, `observacao_3`) VALUES
(1, 'http://localhost/sebastiao_alves/public/JPG/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit.&nbsp;<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat. Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis, ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. Sint quam voluptatum odit harum.</p>', '1', '2', '3', 'Novidade', 'Promoção', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `data_publicacao` varchar(200) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `data_publicacao`, `imagem`, `texto`) VALUES
(1, 'Lançamento | Senhora do amor e da guerra', 'Publicado a 17 junho 2020', 'http://localhost/sebastiao_alves/public/JPG/imprensa1.jpg', ''),
(2, 'Lançamento do livro \"O velho que pensava que fugia\"', 'Publicado a 6 dezembro 2017', 'http://localhost/sebastiao_alves/public/JPG/imprensa2.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \r\n                    amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \r\n                    iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \r\n                    suscipit dolores quisquam iste modi porro deleniti.\r\n                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \r\n                    amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \r\n                    iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \r\n                    suscipit dolores quisquam iste modi porro deleniti. <br><br>\r\n                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, id? Saepe natus ex nostrum \r\n                    fugit ea quaerat maxime id architecto explicabo neque dicta, veniam autem est odio tempore \r\n                    exercitationem dolorum.'),
(3, 'Lançamento | Senhora do amor e da guerra', 'Publicado a 17 junho 2020', 'http://localhost/sebastiao_alves/public/JPG/imprensa1.jpg', ''),
(4, 'Lançamento do livro \"O velho que pensava que fugia\"', 'Publicado a 6 dezembro 2017', 'http://localhost/sebastiao_alves/public/JPG/imprensa2.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \r\n                    amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \r\n                    iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \r\n                    suscipit dolores quisquam iste modi porro deleniti.\r\n                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \r\n                    amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \r\n                    iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \r\n                    suscipit dolores quisquam iste modi porro deleniti. <br><br>\r\n                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, id? Saepe natus ex nostrum \r\n                    fugit ea quaerat maxime id architecto explicabo neque dicta, veniam autem est odio tempore \r\n                    exercitationem dolorum.'),
(5, 'Lançamento do livro \"O velho que pensava que fugia\"', 'Publicado a 6 dezembro 2017', 'http://localhost/sebastiao_alves/public/JPG/imprensa2.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \r\n                    amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \r\n                    iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \r\n                    suscipit dolores quisquam iste modi porro deleniti.\r\n                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n                    Voluptatibus qui, quod tempora in facere libero. Nulla tempora, \r\n                    amet praesentium perspiciatis eius omnis cupiditate? Quam sapiente, \r\n                    iusto hic ratione possimus et itaque odit explicabo distinctio adipisci \r\n                    suscipit dolores quisquam iste modi porro deleniti. <br><br>\r\n                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, id? Saepe natus ex nostrum \r\n                    fugit ea quaerat maxime id architecto explicabo neque dicta, veniam autem est odio tempore \r\n                    exercitationem dolorum.'),
(6, 'Lançamento | Senhora do amor e da guerra', 'Publicado a 17 junho 2020', 'http://localhost/sebastiao_alves/public/JPG/imprensa1.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` longtext NOT NULL,
  `data_actualizacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `foto`, `titulo`, `texto`, `data_actualizacao`) VALUES
(1, 'http://localhost/sebastiao_alves/public/JPG/livro-conteudo.jpg', 'Senhora do amor e da guerra', 'ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic. <br><br> consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit. <br><br>\r\n                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? <br><br> Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? <br><br> Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus.  nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit harum. <br>', ''),
(2, 'http://localhost/sebastiao_alves/public/JPG/livro-conteudo2.jpg', 'O colecionador de amnesias', 'ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic. <br><br> consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit. <br><br>\r\n                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? <br><br> Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? <br><br> Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus.  nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit harum. <br>', ''),
(3, 'http://localhost/sebastiao_alves/public/JPG/livro-conteudo3.jpg', 'O caracol estrábico', 'ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic. <br><br> consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit. <br><br>\r\n                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? <br><br> Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? <br><br> Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus.  nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit harum. <br>', ''),
(4, 'http://localhost/sebastiao_alves/public/JPG/livro-conteudo4.jpg', 'O velho que pensava que fugia', 'ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? Delectus alias aliquid culpa cum obcaecati hic. <br><br> consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus, ut nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit. <br><br>\r\n                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis voluptatum quaerat esse repellat.\r\n                 Nam, velit obcaecati qui placeat libero doloremque. Deleniti ad magni aperiam corporis odit, dolorem minus \r\n                 ipsa iure quisquam reprehenderit! Cum impedit eius suscipit expedita quasi facilis possimus, magnam, numquam \r\n                 consequuntur est laboriosam? <br><br> Delectus alias aliquid culpa cum obcaecati hic, consequatur dolorum reiciendis,\r\n                 ratione aperiam repellendus corrupti officia voluptatibus molestiae illo officiis est nisi? <br><br> Deleniti sed, voluptate \r\n                 aperiam aliquam rem distinctio error eligendi doloribus, possimus.  nesciunt suscipit maiores illo eum et. \r\n                 Sint quam voluptatum odit harum. <br>', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `imagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redes_sociais`
--

INSERT INTO `redes_sociais` (`id`, `nome`, `link`, `imagem`) VALUES
(1, 'instagram', 'https://www.instagram.com/', 'public/SVG/instagram1.svg'),
(2, 'facebook', 'https://www.facebook.com', 'public/SVG/facebook1.svg'),
(3, 'linkedin', 'https://www.linkedin.com', 'public/SVG/linkedin1.svg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cabecalho`
--
ALTER TABLE `cabecalho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cabecalho`
--
ALTER TABLE `cabecalho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `redes_sociais`
--
ALTER TABLE `redes_sociais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
