-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-07-2022 a las 03:19:57
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medical`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id_Booking` int NOT NULL AUTO_INCREMENT,
  `id_Doctor` int NOT NULL,
  `id_Patient` int NOT NULL,
  `id_Doctor_Service` int NOT NULL,
  `Date_Booking` date NOT NULL,
  `Hour` int NOT NULL,
  `id_Stream_Tool` int NOT NULL,
  `Link_Stream` varchar(500) NOT NULL,
  `Started` time DEFAULT NULL,
  `End` time DEFAULT NULL,
  `Rate_Calification` int DEFAULT NULL,
  `id_Status_Meeting` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_Booking`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `booking`
--

INSERT INTO `booking` (`id_Booking`, `id_Doctor`, `id_Patient`, `id_Doctor_Service`, `Date_Booking`, `Hour`, `id_Stream_Tool`, `Link_Stream`, `Started`, `End`, `Rate_Calification`, `id_Status_Meeting`) VALUES
(2, 12, 1, 1, '2022-07-26', 0, 1, 'https://ghghkke.com', NULL, NULL, 4, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credentials`
--

DROP TABLE IF EXISTS `credentials`;
CREATE TABLE IF NOT EXISTS `credentials` (
  `id_Credentials` int NOT NULL AUTO_INCREMENT,
  `id_Doctor` int NOT NULL,
  `id_Document` int NOT NULL,
  `Document` varchar(200) NOT NULL,
  `Note` varchar(500) NOT NULL,
  `Approve` tinyint(1) NOT NULL DEFAULT '0',
  `Upload_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Credentials`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `credentials`
--

INSERT INTO `credentials` (`id_Credentials`, `id_Doctor`, `id_Document`, `Document`, `Note`, `Approve`, `Upload_Date`, `Status`) VALUES
(7, 12, 1, 'DR_Nutri_Principal_2014.pdf', 'En pdf', 0, '2022-06-05 04:20:19', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id_Doctor` int NOT NULL AUTO_INCREMENT,
  `id_User` int NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) CHARACTER SET utf8mb4   DEFAULT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `id_Marital_Status` int NOT NULL,
  `id_Nationality` int NOT NULL,
  `Date_Birth` date NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `id_Specialist` varchar(100) CHARACTER SET utf8mb4   DEFAULT NULL,
  `Experience_Years` int NOT NULL,
  `id_Language` varchar(100) CHARACTER SET utf8mb4   DEFAULT NULL,
  `id_Stream_Tool` int DEFAULT NULL,
  `Resum` varchar(1000) CHARACTER SET utf8mb4   NOT NULL COMMENT 'About Myself',
  `picture` varchar(200) CHARACTER SET utf8mb4   DEFAULT 'img_avatar1.png' COMMENT 'Path picture locate',
  `Doctor_Approved` tinyint(1) NOT NULL DEFAULT '0',
  `Date_Register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=not delete 1=delete',
  PRIMARY KEY (`id_Doctor`),
  KEY `fx_id_user` (`id_User`),
  KEY `fx_id_Marital_Status` (`id_Marital_Status`) USING BTREE,
  KEY `fx_id_Nationality` (`id_Nationality`) USING BTREE,
  KEY `id_Stream_Tool` (`id_Stream_Tool`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id_Doctor`, `id_User`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `id_Marital_Status`, `id_Nationality`, `Date_Birth`, `Phone_Number`, `id_Specialist`, `Experience_Years`, `id_Language`, `id_Stream_Tool`, `Resum`, `picture`, `Doctor_Approved`, `Date_Register`, `Status`) VALUES
(12, 16, 'Jose', 'Gregorio', 'Lopez', 'Men', 1, 187, '2022-06-08', '+584241675', '1|3|2', 6, '1|2', 0, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'DR-12-JGLS.jpg', 0, '2022-06-02 00:29:25', 0),
(13, 22, 'Jesus', 'Maria', 'Perez', 'Men', 1, 187, '2022-06-08', '+584241675', '1|3|2', 6, '1|2', 0, 'Nothing About ok Me \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img_avatar1.png', 0, '2022-06-02 00:29:25', 0),
(14, 24, 'Carmen ', 'Josefina', 'Santana', 'Woman', 1, 187, '2022-06-08', '+584241675', '1|3|2', 6, '1|2', 0, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img_avatar1.png', 0, '2022-06-02 00:29:25', 0),
(15, 23, 'Diana', 'Carolina', 'Uzcategui', 'Woman', 1, 187, '2022-06-08', '+584241675', '1|3|2', 6, '1|2', 2, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img_avatar1.png', 0, '2022-06-02 00:29:25', 0),
(16, 25, 'Carmen ', 'Bastidas', 'Corona', 'Woman', 1, 187, '2022-06-08', '+584241675', '1|3|2', 6, '1|2', 0, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img_avatar1.png', 0, '2022-06-02 00:29:25', 0),
(17, 26, 'Jose', 'R', 'Smith', 'Men', 1, 11, '1966-07-23', '+584241678', '2|6', 15, '17|31', 1, 'A brief description about you', 'img_avatar1.png', 0, '2022-06-30 01:22:44', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_service`
--

DROP TABLE IF EXISTS `doctor_service`;
CREATE TABLE IF NOT EXISTS `doctor_service` (
  `id_Doctor_Service` int NOT NULL AUTO_INCREMENT,
  `id_Doctor` int NOT NULL,
  `Day_Week` int NOT NULL,
  `initial_Hour` varchar(10) NOT NULL,
  `GMT` varchar(10) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Doctor_Service`),
  KEY `fx_id_Doctor` (`id_Doctor`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `doctor_service`
--

INSERT INTO `doctor_service` (`id_Doctor_Service`, `id_Doctor`, `Day_Week`, `initial_Hour`, `GMT`, `Status`) VALUES
(1, 12, 3, '11:00am', 'UTC', 0),
(14, 12, 3, '2:00pm', 'UTC', 1),
(15, 12, 3, '4:00pm', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id_Document` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Mandatory` tinyint(1) NOT NULL DEFAULT '1',
  `Note` varchar(500) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Document`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `document`
--

INSERT INTO `document` (`id_Document`, `Name`, `Mandatory`, `Note`, `Status`) VALUES
(1, 'Graduation Certificate', 1, '', 0),
(2, 'Fellowship certificates', 1, '', 0),
(3, 'Recommendations from other doctors if available', 1, '', 0),
(4, 'Employment certificate', 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id_Invoice` int NOT NULL AUTO_INCREMENT,
  `id_Booking` int NOT NULL,
  `Date_Issue` date NOT NULL,
  `Date_Paid` date NOT NULL,
  `Reference` varchar(30) CHARACTER SET utf8mb4   NOT NULL,
  `id_Method_Payment` int NOT NULL,
  `Invoice_Amount` decimal(10,2) NOT NULL,
  `Note` varchar(500) NOT NULL,
  `Paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Invoice`),
  KEY `fx_id_Booking` (`id_Booking`) USING BTREE,
  KEY `fx_id_Method_Payment` (`id_Method_Payment`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `invoice`
--

INSERT INTO `invoice` (`id_Invoice`, `id_Booking`, `Date_Issue`, `Date_Paid`, `Reference`, `id_Method_Payment`, `Invoice_Amount`, `Note`, `Paid`) VALUES
(1, 2, '2022-07-20', '2022-07-20', '589745621', 1, '15.00', 'This is a test ', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id_Language` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Language`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `language`
--

INSERT INTO `language` (`id_Language`, `name`) VALUES
(1, 'Afrikaans'),
(2, 'Albanian - shqip'),
(3, 'Amharic - አማርኛ'),
(4, 'Arabic - العربية'),
(5, 'Aragonese - aragonés'),
(6, 'Armenian - հայերեն'),
(7, 'Asturian - asturianu'),
(8, 'Azerbaijani - azərbaycan dili'),
(9, 'Basque - euskara'),
(10, 'Belarusian - беларуская'),
(11, 'Bengali - বাংলা'),
(12, 'Bosnian - bosanski'),
(13, 'Breton - brezhoneg'),
(14, 'Bulgarian - български'),
(15, 'Catalan - català'),
(16, 'Central Kurdish - کوردی (دەستنوسی عەرەبی)'),
(17, 'Chinese - 中文'),
(18, 'Chinese (Hong Kong) - 中文（香港）'),
(19, 'Chinese (Simplified) - 中文（简体）'),
(20, 'Chinese (Traditional) - 中文（繁體）'),
(21, 'Corsican'),
(22, 'Croatian - hrvatski'),
(23, 'Czech - čeština'),
(24, 'Danish - dansk'),
(25, 'Dutch - Nederlands'),
(26, 'English'),
(27, 'English (Australia)'),
(28, 'English (Canada)'),
(29, 'English (India)'),
(30, 'English (New Zealand)'),
(31, 'English (South Africa)'),
(32, 'English (United Kingdom)'),
(33, 'English (United States)'),
(34, 'Esperanto - esperanto'),
(35, 'Estonian - eesti'),
(36, 'Faroese - føroyskt'),
(37, 'Filipino'),
(38, 'Finnish - suomi'),
(39, 'French - français'),
(40, 'French (Canada) - français (Canada)'),
(41, 'French (France) - français (France)'),
(42, 'French (Switzerland) - français (Suisse)'),
(43, 'Galician - galego'),
(44, 'Georgian - ქართული'),
(45, 'German - Deutsch'),
(46, 'German (Austria) - Deutsch (Österreich)'),
(47, 'German (Germany) - Deutsch (Deutschland)'),
(48, 'German (Liechtenstein) - Deutsch (Liechtenstein)'),
(49, 'German (Switzerland) - Deutsch (Schweiz)'),
(50, 'Greek - Ελληνικά'),
(51, 'Guarani'),
(52, 'Gujarati - ગુજરાતી'),
(53, 'Hausa'),
(54, 'Hawaiian - ʻŌlelo Hawaiʻi'),
(55, 'Hebrew - עברית'),
(56, 'Hindi - हिन्दी'),
(57, 'Hungarian - magyar'),
(58, 'Icelandic - íslenska'),
(59, 'Indonesian - Indonesia'),
(60, 'Interlingua'),
(61, 'Irish - Gaeilge'),
(62, 'Italian - italiano'),
(63, 'Italian (Italy) - italiano (Italia)'),
(64, 'Italian (Switzerland) - italiano (Svizzera)'),
(65, 'Japanese - 日本語'),
(66, 'Kannada - ಕನ್ನಡ'),
(67, 'Kazakh - қазақ тілі'),
(68, 'Khmer - ខ្មែរ'),
(69, 'Korean - 한국어'),
(70, 'Kurdish - Kurdî'),
(71, 'Kyrgyz - кыргызча'),
(72, 'Lao - ລາວ'),
(73, 'Latin'),
(74, 'Latvian - latviešu'),
(75, 'Lingala - lingála'),
(76, 'Lithuanian - lietuvių'),
(77, 'Macedonian - македонски'),
(78, 'Malay - Bahasa Melayu'),
(79, 'Malayalam - മലയാളം'),
(80, 'Maltese - Malti'),
(81, 'Marathi - मराठी'),
(82, 'Mongolian - монгол'),
(83, 'Nepali - नेपाली'),
(84, 'Norwegian - norsk'),
(85, 'Norwegian Bokmål - norsk bokmål'),
(86, 'Norwegian Nynorsk - nynorsk'),
(87, 'Occitan'),
(88, 'Oriya - ଓଡ଼ିଆ'),
(89, 'Oromo - Oromoo'),
(90, 'Pashto - پښتو'),
(91, 'Persian - فارسی'),
(92, 'Polish - polski'),
(93, 'Portuguese - português'),
(94, 'Portuguese (Brazil) - português (Brasil)'),
(95, 'Portuguese (Portugal) - português (Portugal)'),
(96, 'Punjabi - ਪੰਜਾਬੀ'),
(97, 'Quechua'),
(98, 'Romanian - română'),
(99, 'Romanian (Moldova) - română (Moldova)'),
(100, 'Romansh - rumantsch'),
(101, 'Russian - русский'),
(102, 'Scottish Gaelic'),
(103, 'Serbian - српски'),
(104, 'Serbo-Croatian - Srpskohrvatski'),
(105, 'Shona - chiShona'),
(106, 'Sindhi'),
(107, 'Sinhala - සිංහල'),
(108, 'Slovak - slovenčina'),
(109, 'Slovenian - slovenščina'),
(110, 'Somali - Soomaali'),
(111, 'Southern Sotho'),
(112, 'Spanish - español'),
(113, 'Spanish (Argentina) - español (Argentina)'),
(114, 'Spanish (Latin America) - español (Latinoamérica)'),
(115, 'Spanish (Mexico) - español (México)'),
(116, 'Spanish (Spain) - español (España)'),
(117, 'Spanish (United States) - español (Estados Unidos)'),
(118, 'Sundanese'),
(119, 'Swahili - Kiswahili'),
(120, 'Swedish - svenska'),
(121, 'Tajik - тоҷикӣ'),
(122, 'Tamil - தமிழ்'),
(123, 'Tatar'),
(124, 'Telugu - తెలుగు'),
(125, 'Thai - ไทย'),
(126, 'Tigrinya - ትግርኛ'),
(127, 'Tongan - lea fakatonga'),
(128, 'Turkish - Türkçe'),
(129, 'Turkmen'),
(130, 'Twi'),
(131, 'Ukrainian - українська'),
(132, 'Urdu - اردو'),
(133, 'Uyghur'),
(134, 'Uzbek - o‘zbek'),
(135, 'Vietnamese - Tiếng Việt'),
(136, 'Walloon - wa'),
(137, 'Welsh - Cymraeg'),
(138, 'Western Frisian'),
(139, 'Xhosa'),
(140, 'Yiddish'),
(141, 'Yoruba - Èdè Yorùbá'),
(142, 'Zulu - isiZulu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marital_status`
--

DROP TABLE IF EXISTS `marital_status`;
CREATE TABLE IF NOT EXISTS `marital_status` (
  `id_Marital_Status` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Marital_Status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4   COMMENT='Marital Status';

--
-- Volcado de datos para la tabla `marital_status`
--

INSERT INTO `marital_status` (`id_Marital_Status`, `Name`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Widowed'),
(4, 'Separate'),
(5, 'Divorced');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `method_payment`
--

DROP TABLE IF EXISTS `method_payment`;
CREATE TABLE IF NOT EXISTS `method_payment` (
  `id_Method_Payment` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Method_Payment`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `method_payment`
--

INSERT INTO `method_payment` (`id_Method_Payment`, `name`) VALUES
(1, 'PayPal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nationality`
--

DROP TABLE IF EXISTS `nationality`;
CREATE TABLE IF NOT EXISTS `nationality` (
  `id_Nationality` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Nationality`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `nationality`
--

INSERT INTO `nationality` (`id_Nationality`, `name`) VALUES
(1, 'Afghan'),
(2, 'Albanian'),
(3, 'Algerian'),
(4, 'American'),
(5, 'Andorran'),
(6, 'Angolan'),
(7, 'Antiguans'),
(8, 'Argentinean'),
(9, 'Armenian'),
(10, 'Australian'),
(11, 'Austrian'),
(12, 'Azerbaijani'),
(13, 'Bahamian'),
(14, 'Bahraini'),
(15, 'Bangladeshi'),
(16, 'Barbadian'),
(17, 'Barbudans'),
(18, 'Batswana'),
(19, 'Belarusian'),
(20, 'Belgian'),
(21, 'Belizean'),
(22, 'Beninese'),
(23, 'Bhutanese'),
(24, 'Bolivian'),
(25, 'Bosnian'),
(26, 'Brazilian'),
(27, 'British'),
(28, 'Bruneian'),
(29, 'Bulgarian'),
(30, 'Burkinabe'),
(31, 'Burmese'),
(32, 'Burundian'),
(33, 'ambodian'),
(34, 'Cameroonian'),
(35, 'Canadian'),
(36, 'Cape Verdean'),
(37, 'Central African'),
(38, 'Chadian'),
(39, 'Chilean'),
(40, 'Chinese'),
(41, 'Colombian'),
(42, 'Comoran'),
(43, 'Congolese'),
(44, 'Costa Rican'),
(45, 'Croatian'),
(46, 'Cuban'),
(47, 'Cypriot'),
(48, 'Czech'),
(49, 'Danish'),
(50, 'Djibouti'),
(51, 'Dominican'),
(52, 'Dutch'),
(53, 'East Timorese'),
(54, 'Ecuadorean'),
(55, 'Egyptian'),
(56, 'Emirian'),
(57, 'Equatorial Guinean'),
(58, 'Eritrean'),
(59, 'Estonian'),
(60, 'Ethiopian'),
(61, 'Fijian'),
(62, 'Filipino'),
(63, 'Finnish'),
(64, 'French'),
(65, 'Gabonese'),
(66, 'Gambian'),
(67, 'Georgian'),
(68, 'German'),
(69, 'Ghanaian'),
(70, 'Greek'),
(71, 'Grenadian'),
(72, 'Guatemalan'),
(73, 'Guinea-Bissauan'),
(74, 'Guinean'),
(75, 'Guyanese'),
(76, 'Haitian'),
(77, 'Herzegovinian'),
(78, 'Honduran'),
(79, 'Hungarian'),
(80, 'Icelander'),
(81, 'Indian'),
(82, 'Indonesian'),
(83, 'Iranian'),
(84, 'Iraqi'),
(85, 'Irish'),
(86, 'Israeli'),
(87, 'Italian'),
(88, 'Ivorian'),
(89, 'Jamaican'),
(90, 'Japanese'),
(91, 'Jordanian'),
(92, 'Kazakhstani'),
(93, 'Kenyan'),
(94, 'Kittian and Nevisian'),
(95, 'Kuwaiti'),
(96, 'Kyrgyz'),
(97, 'Laotian'),
(98, 'Latvian'),
(99, 'Lebanese'),
(100, 'Liberian'),
(101, 'Libyan'),
(102, 'Liechtensteiner'),
(103, 'Lithuanian'),
(104, 'Luxembourger'),
(105, 'Macedonian'),
(106, 'Malagasy'),
(107, 'Malawian'),
(108, 'Malaysian'),
(109, 'Maldivan'),
(110, 'Malian'),
(111, 'Maltese'),
(112, 'Marshallese'),
(113, 'Mauritanian'),
(114, 'Mauritian'),
(115, 'Mexican'),
(116, 'Micronesian'),
(117, 'Moldovan'),
(118, 'Monacan'),
(119, 'Mongolian'),
(120, 'Moroccan'),
(121, 'Mosotho'),
(122, 'Motswana'),
(123, 'Mozambican'),
(124, 'Namibian'),
(125, 'Nauruan'),
(126, 'Nepalese'),
(127, 'New Zealander'),
(128, 'Ni-Vanuatu'),
(129, 'Nicaraguan'),
(130, 'Nigerien'),
(131, 'North Korean'),
(132, 'Northern Irish'),
(133, 'Norwegian'),
(134, 'Omani'),
(135, 'Pakistani'),
(136, 'Palauan'),
(137, 'Panamanian'),
(138, 'Papua New Guinean'),
(139, 'Paraguayan'),
(140, 'Peruvian'),
(141, 'Polish'),
(142, 'Portuguese'),
(143, 'Qatari'),
(144, 'Romanian'),
(145, 'Russian'),
(146, 'Rwandan'),
(147, 'Saint Lucian'),
(148, 'Salvadoran'),
(149, 'Samoan'),
(150, 'San Marinese'),
(151, 'Sao Tomean'),
(152, 'Saudi'),
(153, 'Scottish'),
(154, 'Senegalese'),
(155, 'Serbian'),
(156, 'Seychellois'),
(157, 'Sierra Leonean'),
(158, 'Singaporean'),
(159, 'Slovakian'),
(160, 'Slovenian'),
(161, 'Solomon Islander'),
(162, 'Somali'),
(163, 'South African'),
(164, 'South Korean'),
(165, 'Spanish'),
(166, 'Sri Lankan'),
(167, 'Sudanese'),
(168, 'Surinamer'),
(169, 'Swazi'),
(170, 'Swedish'),
(171, 'Swiss'),
(172, 'Syrian'),
(173, 'Taiwanese'),
(174, 'Tajik'),
(175, 'Tanzanian'),
(176, 'Thai'),
(177, 'Togolese'),
(178, 'Tongan'),
(179, 'Trinidadian or Tobagonian'),
(180, 'Tunisian'),
(181, 'Turkish'),
(182, 'Tuvaluan'),
(183, 'Ugandan'),
(184, 'Ukrainian'),
(185, 'Uruguayan'),
(186, 'Uzbekistani'),
(187, 'Venezuelan'),
(188, 'Vietnamese'),
(189, 'Welsh'),
(190, 'Yemenite'),
(191, 'Zambian'),
(192, 'Zimbabwean');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id_Notification` int NOT NULL AUTO_INCREMENT,
  `id_User` int NOT NULL,
  `note` varchar(500) NOT NULL,
  `datenot` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Notification`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `notification`
--

INSERT INTO `notification` (`id_Notification`, `id_User`, `note`, `datenot`, `status`) VALUES
(1, 21, 'You have a new appoint wit Dr Jose Lopez. please Check your account form more details', '2022-07-10 00:15:41', 0),
(2, 21, 'You paid successfully your appointment', '2022-07-20 17:52:44', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id_Patient` int NOT NULL AUTO_INCREMENT,
  `id_User` int NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `Date_Birth` date NOT NULL,
  `id_Nationality` int NOT NULL,
  `id_Language` int NOT NULL,
  `id_Marital_Status` int NOT NULL,
  `Smoker` tinyint(1) NOT NULL DEFAULT '0',
  `Phone_Number` varchar(10) NOT NULL,
  `Height` decimal(5,2) NOT NULL,
  `Weight` decimal(5,2) NOT NULL,
  `Chronic_Desease` tinyint(1) NOT NULL DEFAULT '0',
  `Note_Chronic_Desease` varchar(1000) NOT NULL,
  `Family_Desease_History` varchar(1000) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `picture` varchar(200) CHARACTER SET utf8mb4   DEFAULT NULL,
  `Date_Register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int NOT NULL DEFAULT '0' COMMENT '0=not delete  1= deleted',
  PRIMARY KEY (`id_Patient`),
  KEY `fx_id_user` (`id_User`),
  KEY `fx_marital_status` (`id_Marital_Status`),
  KEY `fx_id_Language` (`id_Language`) USING BTREE,
  KEY `id_Nationality` (`id_Nationality`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `patient`
--

INSERT INTO `patient` (`id_Patient`, `id_User`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Date_Birth`, `id_Nationality`, `id_Language`, `id_Marital_Status`, `Smoker`, `Phone_Number`, `Height`, `Weight`, `Chronic_Desease`, `Note_Chronic_Desease`, `Family_Desease_History`, `Email`, `picture`, `Date_Register`, `Status`) VALUES
(1, 21, 'Jose', 'M', 'Lopez', 'Men', '1966-04-21', 187, 114, 3, 1, '+584241675', '1.71', '62.50', 0, 'A brief description of your disease', 'A brief description of your disease history', 'elexitoesmio@yahoo.com', 'PA-1-IMG_20210627_143008_508.jpg', '2022-06-25 19:01:07', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialist`
--

DROP TABLE IF EXISTS `specialist`;
CREATE TABLE IF NOT EXISTS `specialist` (
  `id_Specialist` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Specialist`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `specialist`
--

INSERT INTO `specialist` (`id_Specialist`, `name`) VALUES
(1, 'Abdominal Imaging Radiology, Diagnostic Radiology'),
(2, 'Addiction Medicine'),
(3, 'Addiction Psychiatry, Psychiatry'),
(4, 'Adolescent Medicine, Family Medicine/Family Practice'),
(5, 'Adolescent Medicine, Pediatrics'),
(6, 'Adolescent Medicine, Internal Medicine'),
(7, 'Adult Cardiac Anesthesiology, Anesthesiology'),
(8, 'Adult Congenital Heart Disease, Internal Medicine'),
(9, 'Adult Reconstructive Orthopaedic Surgery, Orthopaedic Surgery'),
(10, 'Advanced Heart Failure and Transplant Cardiology, Internal Medicine'),
(11, 'Aerospace Medicine, Preventive Medicine'),
(12, 'Allergy and Immunology'),
(13, 'Anesthesiology'),
(14, 'Anesthesiology Critical Care Medicine, Emergency Medicine'),
(15, 'Blood Banking-Transfusion Medicine, Pathology'),
(16, 'Brain Injury Medicine, Psychiatry'),
(17, 'Brain Injury Medicine, Physical Medicine and Rehabilitation'),
(18, 'Brain Injury Medicine, Neurology'),
(19, 'Cardiothoracic Radiology, Diagnostic Radiology'),
(20, 'Cardiovascular Disease, Internal Medicine'),
(21, 'Chemical Pathology, Pathology'),
(22, 'Child Abuse Pediatrics, Pediatrics'),
(23, 'Child and Adolescent Psychiatry, Psychiatry'),
(24, 'Child Neurology/Pediatric Neurology, Neurology'),
(25, 'Clinical Biochemical Genetics, Medical Genetics and Genomics'),
(26, 'Clinical Cardiac Electrophysiology, Internal Medicine'),
(27, 'Clinical Genetics and Genomics, Medical Genetics and Genomics'),
(28, 'Clinical Informatics, Preventive Medicine'),
(29, 'Clinical Informatics, Pathology'),
(30, 'Clinical Informatics, Diagnostic Radiology'),
(31, 'Clinical Informatics, Anesthesiology'),
(32, 'Clinical Neurophysiology, Neurology'),
(33, 'Colon and Rectal Surgery'),
(34, 'Complex Family Planning, Obstetrics and Gynecology'),
(35, 'Complex General Surgical Oncology, General Surgery'),
(36, 'Complex Pediatric Otolaryngology, Otolaryngology-Head and Neck Surgery'),
(37, 'Congenital Cardiac Surgery, Thoracic Surgery/Thoracic and Cardiac Surgery'),
(38, 'Consultation-Liaison Psychiatry/Psychosomatic Medicine, Psychiatry'),
(39, 'Craniofacial Surgery, Plastic Surgery'),
(40, 'Critical Care Medicine, Obstetrics and Gynecology'),
(41, 'Critical Care Medicine, Anesthesiology'),
(42, 'Critical Care Medicine, Internal Medicine'),
(43, 'Cytopathology, Pathology'),
(44, 'Dermatology'),
(45, 'Dermatopathology, Pathology'),
(46, 'Dermatopathology, Dermatology'),
(47, 'Developmental and Behavioral Pediatrics, Pediatrics'),
(48, 'Diagnostic Medical Physics, Medical Physics'),
(49, 'Diagnostic Radiology'),
(50, 'Emergency Medical Services, Emergency Medicine'),
(51, 'Emergency Medicine'),
(52, 'Endocrinology, Diabetes, and Metabolism, Internal Medicine'),
(53, 'Endovascular Surgical Neuroradiology, Neurological Surgery'),
(54, 'Endovascular Surgical Neuroradiology, Diagnostic Radiology'),
(55, 'Epilepsy, Neurology'),
(56, 'Family Medicine/Family Practice'),
(57, 'Female Pelvic Medicine and Reconstructive Surgery, Obstetrics and Gynecology'),
(58, 'Female Pelvic Medicine and Reconstructive Surgery, Urology'),
(59, 'Foot and Ankle Orthopaedic Surgery, Orthopaedic Surgery'),
(60, 'orensic Pathology, Pathology'),
(61, 'Forensic Psychiatry, Psychiatry'),
(62, 'Gastroenterology, Internal Medicine'),
(63, 'General Surgery'),
(64, 'Geriatric Medicine, Family Medicine/Family Practice'),
(65, 'Geriatric Medicine, Internal Medicine'),
(66, 'Geriatric Psychiatry, Psychiatry'),
(67, 'Gynecologic Oncology, Obstetrics and Gynecology'),
(68, 'Hand Surgery, Orthopaedic Surgery'),
(69, 'Hand Surgery, Plastic Surgery'),
(70, 'Hand Surgery, General Surgery'),
(71, 'Hematology, Internal Medicine'),
(72, 'Hematology and Medical Oncology, Internal Medicine'),
(73, 'Hematopathology, Pathology'),
(74, 'Hospice and Palliative Medicine'),
(75, 'Infectious Disease, Internal Medicine'),
(76, 'Integrated Plastic Surgery'),
(77, 'Integrated Thoracic Surgery'),
(78, 'Integrated Vascular Surgery'),
(79, 'Internal Medicine'),
(80, 'nternal Medicine-Critical Care Medicine, Emergency Medicine'),
(81, 'Internal Medicine-Emergency Medicine'),
(82, 'Internal Medicine-Pediatrics'),
(83, 'Interventional Cardiology, Internal Medicine'),
(84, 'Interventional Radiology, Diagnostic Radiology'),
(85, 'Laboratory Genetics and Genomics, Medical Genetics and Genomics'),
(86, 'Maternal-Fetal Medicine, Obstetrics and Gynecology'),
(87, 'Medical Biochemical Genetics, Medical Genetics and Genomics'),
(88, 'Medical Genetics and Genomics'),
(89, 'Medical Microbiology Pathology, Pathology'),
(90, 'Medical Oncology, Internal Medicine'),
(91, 'Medical Physics, Diagnostic Radiology'),
(92, 'Medical Toxicology, Preventive Medicine'),
(93, 'Medical Toxicology, Pediatrics'),
(94, 'Medical Toxicology, Emergency Medicine'),
(95, 'Micrographic Dermatologic Surgery, Dermatology'),
(96, 'olecular Genetic Pathology, Pathology'),
(97, 'Molecular Genetic Pathology, Medical Genetics and Genomics'),
(98, 'Musculoskeletal Imaging Radiology, Diagnostic Radiology'),
(99, 'Musculoskeletal Oncology, Orthopaedic Surgery'),
(100, 'Musculoskeletal Oncology'),
(101, 'Neonatal-Perinatal Medicine, Pediatrics'),
(102, 'Nephrology, Internal Medicine'),
(103, 'Neuro-Ophthalmology, Ophthalmology'),
(104, 'Neurocritcial Care , Anesthesiology'),
(105, 'Neurocritical Care, Internal Medicine'),
(106, 'Neurocritical Care, Neurological Surgery'),
(107, 'Neurocritical Care, Neurology'),
(108, 'Neurodevelopmental Disabilities, Neurology'),
(109, 'Neurological Surgery'),
(110, 'Neurology'),
(111, 'Neuromuscular Medicine, Neurology'),
(112, 'Neuromuscular Medicine, Physical Medicine and Rehabilitation'),
(113, 'Neuropathology, Pathology'),
(114, 'Neuroradiology, Diagnostic Radiology'),
(115, 'Neurotology, Otolaryngology-Head and Neck Surgery'),
(116, 'Nuclear Medical Physics, Medical Physics'),
(117, 'Nuclear Medicine'),
(118, 'Nuclear Radiology, Diagnostic Radiology'),
(119, 'Obstetric Anesthesiology, Anesthesiology'),
(120, 'Obstetrics and Gynecology'),
(121, 'Occupational Medicine, Preventive Medicine'),
(122, 'Ophthalmic Pathology, Ophthalmology'),
(123, 'Ophthalmic Plastic and Reconstructive Surgery, Ophthalmology'),
(124, 'Ophthalmology'),
(125, 'Orthopaedic Sports Medicine, Orthopaedic Surgery'),
(126, 'Orthopaedic Surgery'),
(127, 'Orthopaedic Surgery of the Spine, Orthopaedic Surgery'),
(128, 'Orthopaedic Trauma, Orthopaedic Surgery'),
(129, 'Osteopathic Neuromusculoskeletal Medicine'),
(130, 'Otolaryngology-Head and Neck Surgery'),
(131, 'Pain Medicine, Neurology'),
(132, 'Pain Medicine, Physical Medicine and Rehabilitation'),
(133, 'Pain Medicine, Emergency Medicine'),
(134, 'Pain Medicine, Diagnostic Radiology'),
(135, 'Pain Medicine, Family Medicine/Family Practice'),
(136, 'Pain Medicine, Anesthesiology'),
(137, 'Pathology'),
(138, 'Pediatric Anesthesiology, Anesthesiology'),
(139, 'Pediatric Cardiac Anesthesiology, Anesthesiology'),
(140, 'Pediatric Cardiology, Pediatrics'),
(141, 'ediatric Critical Care Medicine, Pediatrics'),
(142, 'Pediatric Dermatology, Dermatology'),
(143, 'Pediatric Emergency Medicine, Emergency Medicine'),
(144, 'Pediatric Emergency Medicine, Pediatrics'),
(145, 'Pediatric Endocrinology, Pediatrics'),
(146, 'Pediatric Gastroenterology, Pediatrics'),
(147, 'Pediatric Hematology-Oncology, Pediatrics'),
(148, 'Pediatric Hospital Medicine, Pediatrics'),
(149, 'Pediatric Infectious Disease, Pediatrics'),
(150, 'Pediatric Nephrology, Pediatrics'),
(151, 'Pediatric Ophthalmology, Ophthalmology'),
(152, 'Pediatric Orthopaedic Surgery, Orthopaedic Surgery'),
(153, 'Pediatric Pathology, Pathology'),
(154, 'Pediatric Pulmonology, Pediatrics'),
(155, 'Pediatric Radiology, Diagnostic Radiology'),
(156, 'Pediatric Rehabilitation Medicine, Physical Medicine and Rehabilitation'),
(157, 'Pediatric Rheumatology, Pediatrics'),
(158, 'Pediatric Sports Medicine, Pediatrics'),
(159, 'Pediatric Surgery, General Surgery'),
(160, 'Pediatric Transplant Hepatology, Pediatrics'),
(161, 'Pediatric Urology, Urology'),
(162, 'Pediatrics'),
(163, 'Physical Medicine and Rehabilitation'),
(164, 'Plastic Surgery'),
(165, 'Plastic Surgery within the Head and Neck, Plastic Surgery'),
(166, 'Plastic Surgery within the Head and Neck, Otolaryngology-Head and Neck Surgery'),
(167, 'Preventive Medicine'),
(168, 'Psychiatry'),
(169, 'Public Health and General Preventive Medicine, Preventive Medicine'),
(170, 'Pulmonary Disease, Internal Medicine'),
(171, 'Pulmonary Disease and Critical Care Medicine, Internal Medicine'),
(172, 'Radiation Oncology, Diagnostic Radiology'),
(173, 'Regional Anesthesiology and Acute Pain Medicine, Anesthesiology'),
(174, 'Reproductive Endocrinology and Infertility, Obstetrics and Gynecology'),
(175, 'Rheumatology, Internal Medicine'),
(176, 'Selective Pathology, Pathology'),
(177, 'Sleep Medicine'),
(178, 'Spinal Cord Injury Medicine, Physical Medicine and Rehabilitation'),
(179, 'Sports Medicine, Emergency Medicine'),
(180, 'Sports Medicine, Family Medicine/Family Practice'),
(181, 'Sports Medicine, Internal Medicine'),
(182, 'Sports Medicine, Physical Medicine and Rehabilitation'),
(183, 'Surgical Critical Care, General Surgery'),
(184, 'Therapeutic Medical Physics, Medical Physics'),
(185, 'Thoracic Surgery/Thoracic and Cardiac Surgery'),
(186, 'Transplant Hepatology, Internal Medicine'),
(187, 'Undersea and Hyperbaric Medicine, Preventive Medicine'),
(188, 'Undersea and Hyperbaric Medicine, Emergency Medicine'),
(189, 'Urology'),
(190, 'Uveitis and Ocular Immunology, Ophthalmology'),
(191, 'Vascular Neurology, Neurology'),
(192, 'Vascular Surgery, General Surgery');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_meeting`
--

DROP TABLE IF EXISTS `status_meeting`;
CREATE TABLE IF NOT EXISTS `status_meeting` (
  `id_Status_Meeting` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  PRIMARY KEY (`id_Status_Meeting`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `status_meeting`
--

INSERT INTO `status_meeting` (`id_Status_Meeting`, `Name`) VALUES
(1, 'No Start'),
(2, 'Confirmed'),
(3, 'Paid'),
(4, 'Start'),
(5, 'Re Start'),
(6, 'Interrupted'),
(7, 'Canceled'),
(8, 'Complete'),
(9, 'Terminate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stream_tool`
--

DROP TABLE IF EXISTS `stream_tool`;
CREATE TABLE IF NOT EXISTS `stream_tool` (
  `id_Stream_Tool` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Stream_Tool`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `stream_tool`
--

INSERT INTO `stream_tool` (`id_Stream_Tool`, `Name`, `Status`) VALUES
(0, 'No Defined Yet', 0),
(1, 'Zoom', 0),
(2, 'Google Meeting', 0),
(3, 'FaceBook', 0),
(4, 'Instagram', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_User` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Register_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Type_User` text CHARACTER SET utf8mb4   NOT NULL COMMENT 'D=Doctor  P=Patient',
  `Password` varchar(500) CHARACTER SET utf8mb4   NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4  ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_User`, `Name`, `Email`, `Register_Date`, `Type_User`, `Password`, `Active`) VALUES
(16, 'Jose Gregorio Lopez', 'creandoingresoresidual@gmail.com', '2022-06-02 00:29:24', 'D', '$2y$05$CxBotlAzldJNhsHVfFAYCuTjw6M0GpxgLZl0jRO/cuyCDyoEIUcWS', 1),
(21, 'Jose M Lopez', 'elexitoesmio@yahoo.com', '2022-06-25 19:01:07', 'P', '$2y$05$CxBotlAzldJNhsHVfFAYCuTjw6M0GpxgLZl0jRO/cuyCDyoEIUcWS', 0),
(22, 'Jesus Maria Perez', 'felicidadtriangular@gmail.com', '2022-06-25 19:01:07', 'D', '$2y$05$CxBotlAzldJNhsHVfFAYCuTjw6M0GpxgLZl0jRO/cuyCDyoEIUcWS', 0),
(23, 'Diana Carolina ', 'miteletrabajo@hotmail.com', '2022-06-25 19:01:07', 'D', '$2y$05$CxBotlAzldJNhsHVfFAYCuTjw6M0GpxgLZl0jRO/cuyCDyoEIUcWS', 0),
(24, 'Carmen Santana', 'carmensalanas@gmail.com', '2022-06-25 19:01:07', 'D', '$2y$05$CxBotlAzldJNhsHVfFAYCuTjw6M0GpxgLZl0jRO/cuyCDyoEIUcWS', 0),
(25, 'Carmen B Santana ', 'carmensalanas6@gmail.com', '2022-06-25 19:01:07', 'D', '$2y$05$CxBotlAzldJNhsHVfFAYCuTjw6M0GpxgLZl0jRO/cuyCDyoEIUcWS', 0),
(26, 'Jose R Smith', 'trustinvesting.caracas@gmail.com', '2022-06-30 01:22:43', 'D', '$2y$05$06wELJ/NOnAr.RM.az8Md.cH6Y9ZKGqqGDhei9xkzIBlrtN.lgFVm', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `user` (`id_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_Method_Payment`) REFERENCES `method_payment` (`id_Method_Payment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `user` (`id_User`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`id_Language`) REFERENCES `language` (`id_Language`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`id_Marital_Status`) REFERENCES `marital_status` (`id_Marital_Status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_4` FOREIGN KEY (`id_Nationality`) REFERENCES `nationality` (`id_Nationality`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
