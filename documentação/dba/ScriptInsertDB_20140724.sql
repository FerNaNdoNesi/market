SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `u388869315_dbmc` ;
CREATE SCHEMA IF NOT EXISTS `u388869315_dbmc` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `u388869315_dbmc` ;

-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`statusUsuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`statusUsuario` (
  `idStatusUsuario` INT NOT NULL AUTO_INCREMENT ,
  `descricaoStatusUsuario` VARCHAR(45) NULL ,
  PRIMARY KEY (`idStatusUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`nivelUsuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`nivelUsuario` (
  `idNivelUsuario` INT NOT NULL AUTO_INCREMENT ,
  `descricaoNivelUsuario` VARCHAR(45) NULL ,
  PRIMARY KEY (`idNivelUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `telefone` VARCHAR(45) NULL ,
  `usuarioDesde` DATE NULL ,
  `senha` VARCHAR(45) NULL ,
  `idStatusUsuario` INT NOT NULL ,
  `idNivelUsuario` INT NOT NULL ,
  PRIMARY KEY (`idUsuario`) ,
  INDEX `fk_usuario_statusUsuario1_idx` (`idStatusUsuario` ASC) ,
  INDEX `fk_usuario_nivelUsuario1_idx` (`idNivelUsuario` ASC) ,
  CONSTRAINT `fk_usuario_statusUsuario1`
    FOREIGN KEY (`idStatusUsuario` )
    REFERENCES `u388869315_dbmc`.`statusUsuario` (`idStatusUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_nivelUsuario1`
    FOREIGN KEY (`idNivelUsuario` )
    REFERENCES `u388869315_dbmc`.`nivelUsuario` (`idNivelUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`nivelAnuncio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`nivelAnuncio` (
  `idNivelAnuncio` INT NOT NULL AUTO_INCREMENT ,
  `descricaoNivelAnuncio` VARCHAR(45) NULL ,
  PRIMARY KEY (`idNivelAnuncio`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`statusAnuncio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`statusAnuncio` (
  `idStatusAnuncio` INT NOT NULL AUTO_INCREMENT ,
  `descricaoStatusAnuncio` VARCHAR(45) NULL ,
  PRIMARY KEY (`idStatusAnuncio`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT ,
  `tituloCategoria` VARCHAR(45) NULL ,
  `nomeCategoria` VARCHAR(45) NULL ,
  PRIMARY KEY (`idCategoria`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`subCategoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`subCategoria` (
  `idSubCategoria` INT NOT NULL AUTO_INCREMENT ,
  `idCategoria` INT NOT NULL ,
  `tituloSubCategoria` VARCHAR(45) NULL ,
  PRIMARY KEY (`idSubCategoria`, `idCategoria`) ,
  INDEX `fk_subCategoria_categoria1_idx` (`idCategoria` ASC) ,
  CONSTRAINT `fk_subCategoria_categoria1`
    FOREIGN KEY (`idCategoria` )
    REFERENCES `u388869315_dbmc`.`categoria` (`idCategoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`tipoProduto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`tipoProduto` (
  `idTipoProduto` INT NOT NULL ,
  `descricaoTipoProduto` VARCHAR(45) NULL ,
  PRIMARY KEY (`idTipoProduto`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`anuncio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`anuncio` (
  `idAnuncio` INT NOT NULL AUTO_INCREMENT ,
  `idUsuario` INT NOT NULL ,
  `tituloAnuncio` VARCHAR(45) NULL ,
  `descricaoAnuncio` VARCHAR(999) NULL ,
  `valorAnuncio` VARCHAR(45) NULL ,
  `dtInicioAnuncio` DATE NULL ,
  `diasAnunciado` INT NULL ,
  `idStatusAnuncio` INT NOT NULL ,
  `idNivelAnuncio` INT NOT NULL ,
  `idSubCategoria` INT NOT NULL ,
  `idTipoProduto` INT NOT NULL ,
  `countVisitas` INT NULL ,
  PRIMARY KEY (`idAnuncio`, `idUsuario`) ,
  INDEX `fk_anuncio_usuario1_idx` (`idUsuario` ASC) ,
  INDEX `fk_anuncio_nivelAnuncio1_idx` (`idNivelAnuncio` ASC) ,
  INDEX `fk_anuncio_statusAnuncio1_idx` (`idStatusAnuncio` ASC) ,
  INDEX `fk_anuncio_subCategoria1_idx` (`idSubCategoria` ASC) ,
  INDEX `fk_anuncio_tipoProduto1_idx` (`idTipoProduto` ASC) ,
  CONSTRAINT `fk_anuncio_usuario1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `u388869315_dbmc`.`usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_nivelAnuncio1`
    FOREIGN KEY (`idNivelAnuncio` )
    REFERENCES `u388869315_dbmc`.`nivelAnuncio` (`idNivelAnuncio` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_statusAnuncio1`
    FOREIGN KEY (`idStatusAnuncio` )
    REFERENCES `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_subCategoria1`
    FOREIGN KEY (`idSubCategoria` )
    REFERENCES `u388869315_dbmc`.`subCategoria` (`idSubCategoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_tipoProduto1`
    FOREIGN KEY (`idTipoProduto` )
    REFERENCES `u388869315_dbmc`.`tipoProduto` (`idTipoProduto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
PACK_KEYS = Default;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`statusContato`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`statusContato` (
  `idStatusContato` INT NOT NULL AUTO_INCREMENT ,
  `descricaoStatusContato` VARCHAR(45) NULL ,
  PRIMARY KEY (`idStatusContato`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`contato`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`contato` (
  `idContato` INT NOT NULL AUTO_INCREMENT ,
  `pergunta` VARCHAR(45) NULL ,
  `resposta` VARCHAR(45) NULL ,
  `anuncio_idAnuncio` INT NOT NULL ,
  `anuncio_idUsuario` INT NOT NULL ,
  `pergunta_idUsuario` INT NOT NULL ,
  `idStatusContato` INT NOT NULL ,
  PRIMARY KEY (`idContato`) ,
  INDEX `fk_contato_anuncio1_idx` (`anuncio_idAnuncio` ASC, `anuncio_idUsuario` ASC) ,
  INDEX `fk_contato_statusContato1_idx` (`idStatusContato` ASC) ,
  INDEX `fk_contato_usuario1_idx` (`pergunta_idUsuario` ASC) ,
  CONSTRAINT `fk_contato_anuncio1`
    FOREIGN KEY (`anuncio_idAnuncio` , `anuncio_idUsuario` )
    REFERENCES `u388869315_dbmc`.`anuncio` (`idAnuncio` , `idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contato_statusContato1`
    FOREIGN KEY (`idStatusContato` )
    REFERENCES `u388869315_dbmc`.`statusContato` (`idStatusContato` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contato_usuario1`
    FOREIGN KEY (`pergunta_idUsuario` )
    REFERENCES `u388869315_dbmc`.`usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u388869315_dbmc`.`onClick`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `u388869315_dbmc`.`onClick` (
  `tipoObjetoOnclick` VARCHAR(45) NOT NULL ,
  `nomeObjetoOnClick` VARCHAR(45) NOT NULL ,
  `mesAnoOnClick` DATE NOT NULL ,
  `countOnClick` INT NULL ,
  PRIMARY KEY (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`statusUsuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`statusUsuario` (`idStatusUsuario`, `descricaoStatusUsuario`) VALUES (1, 'Ativo - Anúnciando');
INSERT INTO `u388869315_dbmc`.`statusUsuario` (`idStatusUsuario`, `descricaoStatusUsuario`) VALUES (2, 'Ativo - Sem anúncio');
INSERT INTO `u388869315_dbmc`.`statusUsuario` (`idStatusUsuario`, `descricaoStatusUsuario`) VALUES (3, 'Pendente ativação');
INSERT INTO `u388869315_dbmc`.`statusUsuario` (`idStatusUsuario`, `descricaoStatusUsuario`) VALUES (4, 'Bloqueado');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`nivelUsuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`nivelUsuario` (`idNivelUsuario`, `descricaoNivelUsuario`) VALUES (0, 'Administrador');
INSERT INTO `u388869315_dbmc`.`nivelUsuario` (`idNivelUsuario`, `descricaoNivelUsuario`) VALUES (1, 'Anúnciante ouro');
INSERT INTO `u388869315_dbmc`.`nivelUsuario` (`idNivelUsuario`, `descricaoNivelUsuario`) VALUES (2, 'Anúnciante prata');
INSERT INTO `u388869315_dbmc`.`nivelUsuario` (`idNivelUsuario`, `descricaoNivelUsuario`) VALUES (3, 'Anúnciante bronze');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`usuario` (`idUsuario`, `nome`, `email`, `telefone`, `usuarioDesde`, `senha`, `idStatusUsuario`, `idNivelUsuario`) VALUES (1, 'Fernando Nesi', 'fernandonesi@gmail.com', '(49) 8859-2012', '2014-06-19', 't3051696', 1, 0);
INSERT INTO `u388869315_dbmc`.`usuario` (`idUsuario`, `nome`, `email`, `telefone`, `usuarioDesde`, `senha`, `idStatusUsuario`, `idNivelUsuario`) VALUES (2, 'Suzy Costa', 'suzy.costa@hotmail.com', '(45) 9959-2000', '2014-06-19', 'suzy', 1, 3);
INSERT INTO `u388869315_dbmc`.`usuario` (`idUsuario`, `nome`, `email`, `telefone`, `usuarioDesde`, `senha`, `idStatusUsuario`, `idNivelUsuario`) VALUES (3, 'Maicon Souza', 'maicon.souza22@hotmail.com', '(49) 8409-6017', '2014-06-19', 'maicon', 1, 3);
INSERT INTO `u388869315_dbmc`.`usuario` (`idUsuario`, `nome`, `email`, `telefone`, `usuarioDesde`, `senha`, `idStatusUsuario`, `idNivelUsuario`) VALUES (4, 'Douglas Camargo', 'doug_camargo@yahoo.com.br', '(49) 9117-0666', '2014-06-19', 'douglas', 1, 3);

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`nivelAnuncio`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`nivelAnuncio` (`idNivelAnuncio`, `descricaoNivelAnuncio`) VALUES (1, 'Altissímo');
INSERT INTO `u388869315_dbmc`.`nivelAnuncio` (`idNivelAnuncio`, `descricaoNivelAnuncio`) VALUES (2, 'Alto');
INSERT INTO `u388869315_dbmc`.`nivelAnuncio` (`idNivelAnuncio`, `descricaoNivelAnuncio`) VALUES (3, 'Médio');
INSERT INTO `u388869315_dbmc`.`nivelAnuncio` (`idNivelAnuncio`, `descricaoNivelAnuncio`) VALUES (4, 'Baixo');
INSERT INTO `u388869315_dbmc`.`nivelAnuncio` (`idNivelAnuncio`, `descricaoNivelAnuncio`) VALUES (5, 'Baixíssimo');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`statusAnuncio`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio`, `descricaoStatusAnuncio`) VALUES (1, 'Ativo');
INSERT INTO `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio`, `descricaoStatusAnuncio`) VALUES (2, 'Pausado');
INSERT INTO `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio`, `descricaoStatusAnuncio`) VALUES (3, 'Excluído');
INSERT INTO `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio`, `descricaoStatusAnuncio`) VALUES (4, 'Vendido');
INSERT INTO `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio`, `descricaoStatusAnuncio`) VALUES (5, 'Pendente ativação');
INSERT INTO `u388869315_dbmc`.`statusAnuncio` (`idStatusAnuncio`, `descricaoStatusAnuncio`) VALUES (6, 'Pendente ajuste');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`categoria`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (1, 'Imóveis', 'imoveis');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (2, 'Informática', 'informatica');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (3, 'Eletrônicos', 'eletronicos');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (4, 'Móveis', 'moveis');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (5, 'Games', 'games');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (6, 'Telefonia', 'telefonia');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (7, 'Esportes', 'esporte');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (8, 'Veículos', 'veiculos');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (9, 'Joias', 'joias');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (10, 'Fotografia', 'fotografia');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (11, 'Restaurantes', 'restaurantes');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (12, 'Nautica', 'nautica');
INSERT INTO `u388869315_dbmc`.`categoria` (`idCategoria`, `tituloCategoria`, `nomeCategoria`) VALUES (13, 'Igreja', 'igreja');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`subCategoria`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (1, 8, 'Carros');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (2, 8, 'Motos');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (3, 8, 'Caminhões');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (4, 8, 'Barcos / Jetski');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (5, 8, 'Peças / Acessórios');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (6, 8, 'Som automotivo');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (7, 1, 'Venda apartamento');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (8, 1, 'Venda casa');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (9, 1, 'Aluguel apartamento');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (10, 1, 'Aluguel casa');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (11, 1, 'Dividir aluguel / quarto');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (12, 1, 'Venda imóveis diversos');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (13, 1, 'Aluguel imóveis diversos');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (14, 5, 'Jogos video game');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (15, 5, 'Jogos computador');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (16, 5, 'Consoles video game');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (17, 3, 'TV');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (18, 3, 'Som');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (19, 3, 'DVD');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (20, 4, 'Quarto');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (21, 4, 'Cozinha');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (22, 4, 'Sala');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (23, 4, 'Garagem');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (24, 4, 'Jardim / Pscina');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (25, 4, 'Banheiro');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (26, 4, 'Escritório');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (27, 7, 'Uniforme');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (28, 7, 'Bolas');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (29, 2, 'Notebooks');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (30, 2, 'Desktop');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (31, 6, 'Celulares');
INSERT INTO `u388869315_dbmc`.`subCategoria` (`idSubCategoria`, `idCategoria`, `tituloSubCategoria`) VALUES (32, 6, 'Telefone fixo');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`tipoProduto`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`tipoProduto` (`idTipoProduto`, `descricaoTipoProduto`) VALUES (1, 'Novo');
INSERT INTO `u388869315_dbmc`.`tipoProduto` (`idTipoProduto`, `descricaoTipoProduto`) VALUES (2, 'Semi-Novo');
INSERT INTO `u388869315_dbmc`.`tipoProduto` (`idTipoProduto`, `descricaoTipoProduto`) VALUES (3, 'Usado');

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`anuncio`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`anuncio` (`idAnuncio`, `idUsuario`, `tituloAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `dtInicioAnuncio`, `diasAnunciado`, `idStatusAnuncio`, `idNivelAnuncio`, `idSubCategoria`, `idTipoProduto`, `countVisitas`) VALUES (1, 1, 'Iphone 4 16GB', 'Vendo produto no titulo & papapa...', 'R$ 700,00', '2014-06-19', 30, 1, 3, 31, 2, 0);
INSERT INTO `u388869315_dbmc`.`anuncio` (`idAnuncio`, `idUsuario`, `tituloAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `dtInicioAnuncio`, `diasAnunciado`, `idStatusAnuncio`, `idNivelAnuncio`, `idSubCategoria`, `idTipoProduto`, `countVisitas`) VALUES (2, 1, 'Macbook white unibody', 'Vendo produto no titulo & papapa...', 'R$ 1.800,00', '2014-06-19', 30, 1, 3, 29, 3, 0);
INSERT INTO `u388869315_dbmc`.`anuncio` (`idAnuncio`, `idUsuario`, `tituloAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `dtInicioAnuncio`, `diasAnunciado`, `idStatusAnuncio`, `idNivelAnuncio`, `idSubCategoria`, `idTipoProduto`, `countVisitas`) VALUES (3, 4, 'Apartamento 3 quartos', 'Vendo produto no titulo & papapa...', 'Aguardo contato..', '2014-06-19', 60, 1, 3, 7, 1, 0);
INSERT INTO `u388869315_dbmc`.`anuncio` (`idAnuncio`, `idUsuario`, `tituloAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `dtInicioAnuncio`, `diasAnunciado`, `idStatusAnuncio`, `idNivelAnuncio`, `idSubCategoria`, `idTipoProduto`, `countVisitas`) VALUES (4, 4, 'Moto Fazer 250Cc', 'Vendo produto no titulo & papapa...', 'No anúncio', '2014-06-19', 90, 1, 3, 2, 2, 0);
INSERT INTO `u388869315_dbmc`.`anuncio` (`idAnuncio`, `idUsuario`, `tituloAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `dtInicioAnuncio`, `diasAnunciado`, `idStatusAnuncio`, `idNivelAnuncio`, `idSubCategoria`, `idTipoProduto`, `countVisitas`) VALUES (5, 3, 'Moto YBR 125Cc', 'Vendo produto no titulo & papapa...', '2700,00', '2014-06-19', 30, 1, 3, 2, 2, 0);
INSERT INTO `u388869315_dbmc`.`anuncio` (`idAnuncio`, `idUsuario`, `tituloAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `dtInicioAnuncio`, `diasAnunciado`, `idStatusAnuncio`, `idNivelAnuncio`, `idSubCategoria`, `idTipoProduto`, `countVisitas`) VALUES (6, 4, 'Apartamento Centro 3 quartos', '<h3 style=\"text-align: center;\">Aluga-se apartamento centro da cidade</h3> 			<p>Temos disponível um apartamento para locação direto com proprietário.</p> 			<p>Localizado no centro da cidade.</p> 			<p>Rua XV de novembro, próximo a igreja.</p> 			<p><strong>Contendo:</strong></p> 			<ul> 			<li>1 Quarto <span style=\"text-decoration: underline;\">com suite</span></li> 			<li>2 Quartos</li> 			<li>Banheiro social</li> 			<li>Sala / Cozinha conjugados</li> 			<li>Lavanderia</li> 			<li>Saca com churrasqueira (de frente para rua)</li> 			</ul> 			<p><strong>Valor:</strong> R$ 750,00 + condomínio</p> 			<hr/> 			<p><strong>Contato:</strong></p> 			<p><strong>Telefone:</strong> (42) 9999-0000 ou (42) 3322-0000 <span style=\"text-decoration: underline;\">falar com José</span></p> 			<p><strong>Email:</strong> mercadolaranjeiras@gmail.com</p>', 'R$ 750,00 + condomínio', '2014-06-26', 90, 1, 3, 9, 3, 0);

COMMIT;

-- -----------------------------------------------------
-- Data for table `u388869315_dbmc`.`onClick`
-- -----------------------------------------------------
START TRANSACTION;
USE `u388869315_dbmc`;
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('Inicio', 'Inicio', '2014-07-01', 4);
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('Inicio', 'Classificados', '2014-07-01', 1);
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('Inicio', 'Anúncio', '2014-07-01', 2);
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('subCategoria', 'Aluguel apartamento', '2014-07-01', 3);
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('Categoria', 'Veículos', '2014-07-01', 2);
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('Promoção', 'Alfa Cell', '2014-07-01', 3);
INSERT INTO `u388869315_dbmc`.`onClick` (`tipoObjetoOnclick`, `nomeObjetoOnClick`, `mesAnoOnClick`, `countOnClick`) VALUES ('Evento', 'Tomorrowland', '2014-07-01', 4);

COMMIT;
