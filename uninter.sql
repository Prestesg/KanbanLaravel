/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 80013
Source Host           : localhost:3306
Source Database       : uninter

Target Server Type    : MYSQL
Target Server Version : 80013
File Encoding         : 65001

Date: 2019-02-04 18:30:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for card_kanban
-- ----------------------------
DROP TABLE IF EXISTS `card_kanban`;
CREATE TABLE `card_kanban` (
  `id_card` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT NULL,
  `id_disciplina` int(11) DEFAULT NULL,
  `link_pdf` varchar(255) DEFAULT NULL,
  `link_video` varchar(255) DEFAULT NULL,
  `ano` varchar(255) DEFAULT NULL,
  `processo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_card`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of card_kanban
-- ----------------------------
INSERT INTO `card_kanban` VALUES ('9', '1', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('10', '0', '3', 'teste.mp4', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('11', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('12', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('13', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('14', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('15', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('16', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('17', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('18', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('19', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('20', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('21', '2', '2', '', '', '2019', '1');
INSERT INTO `card_kanban` VALUES ('22', '1', '2', 'teste.mp4', '', '2019', '1');

-- ----------------------------
-- Table structure for card_professores
-- ----------------------------
DROP TABLE IF EXISTS `card_professores`;
CREATE TABLE `card_professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_card` int(11) DEFAULT NULL,
  `id_professor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of card_professores
-- ----------------------------
INSERT INTO `card_professores` VALUES ('1', '22', '4');
INSERT INTO `card_professores` VALUES ('2', '22', '11');
INSERT INTO `card_professores` VALUES ('3', '22', '6');

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of cursos
-- ----------------------------
INSERT INTO `cursos` VALUES ('1', 'SOCIOLOGIA - LICENCIATURA');
INSERT INTO `cursos` VALUES ('2', 'ADMINISTRAÇÃO');
INSERT INTO `cursos` VALUES ('3', 'GLOBAL TRADING - NEGÓCIOS, LOGÍSTICA E FINANÇAS GLOBAIS');
INSERT INTO `cursos` VALUES ('4', 'RELACÕES INTERNACIONAIS');
INSERT INTO `cursos` VALUES ('5', 'LOGÍSTICA E SUPPLY CHAIN');
INSERT INTO `cursos` VALUES ('6', 'DIREITO FEDERAL NA PRÁTICA');
INSERT INTO `cursos` VALUES ('7', 'NEUROCIÊNCIA E ESPIRITUALIDADE - NEUROTEOLOGIA');
INSERT INTO `cursos` VALUES ('8', 'FÍSICA - LICENCIATURA');
INSERT INTO `cursos` VALUES ('9', 'SANEAMENTO AMBIENTAL');
INSERT INTO `cursos` VALUES ('10', 'EXTENSÃO NEGÓCIOS');
INSERT INTO `cursos` VALUES ('11', 'GESTÃO EM TECNOLOGIA SOCIAL');
INSERT INTO `cursos` VALUES ('12', 'NUTRIÇÃO CEREBRAL');
INSERT INTO `cursos` VALUES ('13', 'ADMINISTRAÇÃO E GESTÃO DE VAREJO');
INSERT INTO `cursos` VALUES ('14', 'GESTÃO DA MANUTENÇÃO INDUSTRIAL');
INSERT INTO `cursos` VALUES ('15', 'GESTÃO DE TURISMO');
INSERT INTO `cursos` VALUES ('16', 'SUSTENTABILIDADE E POLÍTICAS PÚBLICAS');

-- ----------------------------
-- Table structure for disciplinas
-- ----------------------------
DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of disciplinas
-- ----------------------------
INSERT INTO `disciplinas` VALUES ('1', 'PLANEJAMENTO ESTRATÉGICO');
INSERT INTO `disciplinas` VALUES ('2', 'PSICOMOTRICIDADE');
INSERT INTO `disciplinas` VALUES ('3', 'FUNDAMENTOS DA PSICOPEDAGOGIA');
INSERT INTO `disciplinas` VALUES ('4', 'SERVIÇOS DESPORTIVOS E DE ENTRETENIMENTO');
INSERT INTO `disciplinas` VALUES ('5', 'MEDITAÇÃO E CÉREBRO');
INSERT INTO `disciplinas` VALUES ('6', 'PADRÕES DE PROJETO E FRAMEWORK');
INSERT INTO `disciplinas` VALUES ('7', 'ANÁLISE COMBINATÓRIA');
INSERT INTO `disciplinas` VALUES ('8', 'EDUCAÇÃO INCLUSIVA');
INSERT INTO `disciplinas` VALUES ('9', 'MOTIVAÇÃO E SATISFAÇÃO NO TRABALHO');
INSERT INTO `disciplinas` VALUES ('10', 'NEUROCOMUNICAÇÃO E COMUNICAÇÃO NÃO VERBAL APLICADA Á GESTÃO DE PESSOAS');
INSERT INTO `disciplinas` VALUES ('11', 'SISTEMAS DE CIRCUITOS COM CARGAS ESPECIAIS');
INSERT INTO `disciplinas` VALUES ('12', 'IDENTIDADE E COMUNIDADE AFRICANA NO BRASIL');
INSERT INTO `disciplinas` VALUES ('13', 'BUSINESS MODEL YOU - BMY');
INSERT INTO `disciplinas` VALUES ('14', 'COMUNICAÇÃO EMPRESARIAL');
INSERT INTO `disciplinas` VALUES ('15', 'PLANEJAMENTO TRIBUTÁRIO');
INSERT INTO `disciplinas` VALUES ('16', 'GESTÃO DE MEIOS DE HOSPEDAGEM');
INSERT INTO `disciplinas` VALUES ('17', 'ORGANIZAÇÃO DO TRABALHO PEDAGÓGICO NA EDUCAÇÃO INFANTIL');
INSERT INTO `disciplinas` VALUES ('18', 'TÓPICOS ESPECIAIS DE EXISTENCIALISMO');
INSERT INTO `disciplinas` VALUES ('19', 'PLANEJAMENTO DE COMUNICAÇÃO');
INSERT INTO `disciplinas` VALUES ('20', 'INTEGRAÇÃO DE SISTEMAS DE GERAÇÃO');

-- ----------------------------
-- Table structure for professores
-- ----------------------------
DROP TABLE IF EXISTS `professores`;
CREATE TABLE `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of professores
-- ----------------------------
INSERT INTO `professores` VALUES ('1', 'SANDRO ALVES PERES');
INSERT INTO `professores` VALUES ('2', 'EDUARDO DE SOUZA');
INSERT INTO `professores` VALUES ('3', 'VINAISE BRESSAN');
INSERT INTO `professores` VALUES ('4', 'ROGER DO CHAPÉU');
INSERT INTO `professores` VALUES ('5', 'KARINA DE ANDRADE');
INSERT INTO `professores` VALUES ('6', 'JOAO FIGUEIREDO');
INSERT INTO `professores` VALUES ('7', 'MARCOS PEREIRA');
INSERT INTO `professores` VALUES ('8', 'ARTHUR SILVA');
INSERT INTO `professores` VALUES ('9', 'HELENA DUTRA');
INSERT INTO `professores` VALUES ('10', 'ERNESTO SILVA');
INSERT INTO `professores` VALUES ('11', 'HUMBERTO ALENCAR');
INSERT INTO `professores` VALUES ('12', 'GETÚLIO VARGAS');
INSERT INTO `professores` VALUES ('13', 'RANIELA FINATTO');
INSERT INTO `professores` VALUES ('14', 'GISELE CRISTINA');
INSERT INTO `professores` VALUES ('15', 'CARLA LYRIO');
INSERT INTO `professores` VALUES ('16', 'LUANA DOS SANTOS');
INSERT INTO `professores` VALUES ('17', 'MARIA QUITÉRIA');
