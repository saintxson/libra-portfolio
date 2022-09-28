-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 28 2022 г., 08:42
-- Версия сервера: 5.7.36
-- Версия PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `authors_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `second_name`, `user_id`, `visible`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 1, 0, NULL, '2022-09-26 02:02:07', '2022-09-26 02:02:07'),
(2, 'Дмитрий', 'Глуховский', 2, 1, NULL, '2022-09-26 02:07:17', '2022-09-26 02:07:17'),
(3, 'Виктор', 'Пелевин', 3, 1, NULL, '2022-09-26 02:09:04', '2022-09-26 02:09:04'),
(4, 'Александр', 'Дюма', 4, 1, NULL, '2022-09-26 02:10:21', '2022-09-26 02:10:21'),
(5, 'Дмитрий', 'Быков', 5, 1, NULL, '2022-09-26 02:12:02', '2022-09-26 02:12:02'),
(6, 'Стивен', 'Кинг', 6, 1, NULL, '2022-09-26 02:12:39', '2022-09-26 02:12:39'),
(7, 'Александр', 'Солженицын', 7, 1, NULL, '2022-09-26 02:13:51', '2022-09-26 02:13:51');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text,
  `link` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_author_fk` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `author_id`, `description`, `link`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Текст', 2, '«Текст» — первый реалистический роман Дмитрия Глуховского, автора «Метро», «Будущего» и «Сумерек». Это книга на стыке триллера, романа-нуар и драмы, история о столкновении поколений, о невозможной любви и бесполезном возмездии. Действие разворачивается в сегодняшней Москве и её пригородах', 'https://link_to_book.html', 1, '2022-09-26 02:58:13', '2022-09-26 02:58:13', NULL),
(2, 'Метро 2035', 2, 'Третья мировая стёрла человечество с лица Земли. Планета опустела. Мегаполисы обращены в прах и пепел. Железные дороги ржавеют. Спутники одиноко болтаются на орбите. Радио молчит на всех частотах. Выжили только те, кто, услышав сирены тревоги, успел добежать до дверей московского метро.', 'https://link_to_metro2035.html', 1, '2022-09-26 02:59:15', '2022-09-26 02:59:15', NULL),
(3, 'Метро 2034', 2, '...2034 год. Весь мир разрушен ядерной войной. Крупные города стерты с лица Земли, о мелких ничего не известно. Остатки человечества коротают последние дни в бункерах и бомбоубежищах, самое большое из которых – Московский Метрополитен.', 'https://link_to_metro2034.html', 1, '2022-09-26 03:00:00', '2022-09-26 03:00:00', NULL),
(4, 'Метро 2033', 2, 'Дебютный роман Дмитрия Глуховского, описывающий жизнь людей в московском метро после ядерной войны на Земле, стал мировым бестселлером, переведённым на 38 языков. Продано более миллиона экземпляров, и ещё четыре миллиона читателей – в сети.', 'https://link_to_metro2033.html', 1, '2022-09-26 03:01:41', '2022-09-26 03:01:41', NULL),
(5, 'Будущее', 2, 'Уже при нашей жизни будут сделаны открытия, которые позволят людям оставаться вечно молодыми. Смерти больше нет. Наши дети не умрут никогда. Добро пожаловать в будущее. В мир, населенный вечно юными, совершенно здоровыми, счастливыми людьми.', 'https://link_to_budushee.html', 1, '2022-09-26 03:02:54', '2022-09-26 03:02:54', NULL),
(6, 'Чапаев и пустота', 3, 'Третий роман Виктора Пелевина, написанный в 1996 году. Сам автор характеризует свою работу как «первое произведение в мировой литературе, действие которого происходит в абсолютной пустоте». В 1997 году роман был включён в список претендентов на Малую Букеровскую премию. Лауреат премии «Странник-97» в номинации «Крупная форма».', 'https://link_to_chapaev_i_pustota.html', 1, '2022-09-26 03:06:06', '2022-09-26 03:06:06', NULL),
(7, 'Generation \"П\"', 3, 'Постмодернистский роман Виктора Пелевина о поколении россиян, которое взрослело и формировалось во времена политических и экономических реформ 1990-х годов. Действие романа разворачивается в Москве 1990-х годов. Главный герой романа - Вавилен Татарский, интеллигентный юноша, выпускник Литературного института, своё необычное имя он получил от отца - поклонника Василия Аксёнова и Владимира Ленина. Татарский - собирательный образ «поколения П» - поколения семидесятых.', 'https://link_to_generation_p.html', 1, '2022-09-26 03:07:04', '2022-09-26 03:07:04', NULL),
(8, 'Empire V', 3, 'Ампи́р «В». По́весть о настоя́щем сверхчелове́ке (2006) — восьмой роман Виктора Пелевина. Роман вышел 2 ноября 2006 года. Формально действие «Empire V» происходит в наше время, а главному герою, от имени которого ведётся повествование, около 20 лет. Особое место в пространстве «Empire V» занимают корпорации («Пятая империя») и корпоративная культура.', 'https://link_to_empire_v.html', 1, '2022-09-26 03:08:05', '2022-09-26 03:08:05', NULL),
(9, 'Побег', 2, '213', '123', 1, '2022-09-26 03:24:31', '2022-09-26 03:24:51', '2022-09-26 03:24:51'),
(10, 'Три мушкетера', 4, 'Историко-приключенческий роман Александра Дюма-отца, впервые опубликованный в парижской газете Le Siècle в 1844 году с 14 марта по 11 июля. Книга посвящена приключениям молодого дворянина по имени д’Артаньян, отправившегося в Париж, чтобы стать мушкетёром, и трёх его друзей-мушкетёров Атоса, Портоса и Арамиса в период между 1625 и 1628 годами.', 'https://link_to_mushkets.html', 1, '2022-09-26 03:27:07', '2022-09-26 03:27:07', NULL),
(11, 'Черный тюльпан', 4, 'Исторический роман Александра Дюма-отца, посвящённый драматическим событиям 1672 года, вошедшего в голландскую историю как «год бедствий». Одноимённый французский приключенческий фильм 1963 года сюжетно не связан с романом Дюма.', 'https://link_to_black_tulpan.html', 1, '2022-09-26 03:27:57', '2022-09-26 03:27:57', NULL),
(12, 'Королева Марго', 4, 'Исторический роман Александра Дюма-отца, опубликованный в 1845 году и образующий первую часть трилогии о гугенотских войнах, которую продолжают книги «Графиня де Монсоро» и «Сорок пять».', 'https://link_to_queen_Margo.html', 1, '2022-09-26 03:28:44', '2022-09-26 03:28:44', NULL),
(13, 'Июнь', 5, '\"Июнь\" Дмитрия Быкова — как всегда, яркий эксперимент. Три разные истории объединены временем и местом. Конец тридцатых и середина 1941-го. Студенты ИФЛИ, возвращение из эмиграции, безумный филолог, который решил, что нашел способ влиять текстом на главные решения в стране. В воздухе разлито предчувствие войны, которую и боятся, и торопят герои романа. Им кажется, она разрубит все узлы...', 'https://link_to_june.html', 1, '2022-09-26 03:30:12', '2022-09-26 03:30:12', NULL),
(14, 'ЖД', 5, 'России будущего, отгородившейся от всего мира, идет бесконечная война между завоевателями — хазарами и варягами. Хуже всего в этой войне приходится коренному населению. Ленивые, тихие и покорные, они, тем не менее, и есть носители сокровенной истины. История ходит по кругу: тоталитаризм, оттепель, застой, революция, тоталитаризм, оттепель… Спасение же, по преданию, принесет младенец — сын варяга и жрицы. Антиутопия. Сатира. Масштабная пародия. Энциклопедия русской жизни. Альтернативная история. Фантастическая сказка для взрослых. Самый неполиткорректный роман… Все это — \"ЖД\" Дмитрия Быкова.', 'https://link_to_zhde.html', 1, '2022-09-26 03:30:55', '2022-09-26 03:30:55', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `book_genre`
--

DROP TABLE IF EXISTS `book_genre`;
CREATE TABLE IF NOT EXISTS `book_genre` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `book_genre_book_fk` (`book_id`),
  KEY `book_genre_genre_fk` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(2, 3, NULL, NULL),
(2, 4, NULL, NULL),
(3, 3, NULL, NULL),
(3, 4, NULL, NULL),
(3, 5, NULL, NULL),
(4, 3, NULL, NULL),
(4, 4, NULL, NULL),
(4, 5, NULL, NULL),
(5, 3, NULL, NULL),
(5, 4, NULL, NULL),
(6, 4, NULL, NULL),
(7, 1, NULL, NULL),
(7, 4, NULL, NULL),
(8, 2, NULL, NULL),
(8, 4, NULL, NULL),
(9, 1, NULL, NULL),
(9, 2, NULL, NULL),
(9, 3, NULL, NULL),
(10, 2, NULL, NULL),
(10, 5, NULL, NULL),
(11, 2, NULL, NULL),
(11, 3, NULL, NULL),
(12, 1, NULL, NULL),
(12, 5, NULL, NULL),
(13, 2, NULL, NULL),
(13, 4, NULL, NULL),
(14, 2, NULL, NULL),
(14, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `name`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Комедия', 'Комедия (от греч. κωμῳδία, kōmōdía) - жанр художественной литературы, состоящий из дискурсов или произведений, предназначенных для того, чтобы быть юмористическими или забавными, вызывая смех, особенно в театре, кино, стендап-комедии, телевидении, радио, книгах или любом другом развлекательном средстве.', 1, '2022-09-26 02:53:30', '2022-09-26 02:53:30', NULL),
(2, 'Ужасы', 'Жанр современного искусства, который предназначен устрашить, напугать, шокировать или вызвать отвращение у своих читателей или зрителей, вызвав у них чувства ужаса и шока.', 1, '2022-09-26 02:54:05', '2022-09-26 02:54:05', NULL),
(3, 'Драма', 'Получил особое распространение в литературе XVIII-XXI веков, постепенно вытеснив другой жанр драматургии - трагедию, противопоставив ему преимущественно бытовой сюжет и более приближенный к обыденной реальности стиль.', 1, '2022-09-26 02:54:34', '2022-09-26 02:54:34', NULL),
(4, 'Фантастика', 'ФАНТАСТИКА (от греч. phantastike - искусство воображать) , форма отображения мира, при которой на основе реальных представлений создается логически несовместимая с ними (\"сверхъестественная\", \"чудесная\") картина Вселенной. Распространена в фольклоре, искусстве, социальной утопии.', 1, '2022-09-26 02:55:36', '2022-09-27 23:41:37', NULL),
(5, 'Детектив', 'етекти́вные произведения, также уголо́вный рассказ (от лат. detectio «раскрытие», англ. detect «открывать, обнаруживать»; detective «сыщик»), — преимущественно литературный и кинематографический жанр, произведения которого описывают процесс исследования загадочного происшествия с целью выяснения его обстоятельств и раскрытия загадки.', 1, '2022-09-26 02:56:00', '2022-09-26 02:56:00', NULL),
(6, 'Новый жанр123', 'Описание нового жанра123', 1, '2022-09-26 20:45:45', '2022-09-26 20:49:55', '2022-09-26 20:49:55');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_23_144332_create_books_table', 1),
(6, '2022_09_23_144743_create_genres_table', 1),
(7, '2022_09_23_150948_create_authors_table', 1),
(8, '2022_09_24_152209_create_book_genres_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin', 'admin', '$2y$10$FHp2k7xrhLT4Q68Q668baOW.4la8oYi2mjv8ooGzumuoIZyn2sgc6', NULL, '2022-09-26 02:02:07', '2022-09-26 02:02:07'),
(2, 'Glukhovsky', 'glukhovsky@gmail.com', 'user', '$2y$10$akbFMB2oCZEuCoCHXcjZAeFV7VmaIdK8azCTvaWL3eSysnPYM0W.S', NULL, '2022-09-26 02:07:17', '2022-09-26 02:07:17'),
(3, 'PelevinV', 'pelevinV@gmail.com', 'user', '$2y$10$opbP2wp2jz8Vms9PWW17MeYU9CqFddC3uoP4nYHqytIAH8D.rFKAO', NULL, '2022-09-26 02:09:04', '2022-09-26 02:09:04'),
(4, 'alDuma', 'alduma@france.org', 'user', '$2y$10$C9uIbeVp2FIDqqM.AcZGKO4q72LSq582fiTx8d28alMay95JHiz0G', NULL, '2022-09-26 02:10:21', '2022-09-26 02:10:21'),
(5, 'dmbulls', 'dmbulls@redbulls.ini', 'user', '$2y$10$8CN1Evl.3E1hJhUtUfCdtOBXZXAGjGAFw0m7LVF0hPwpzCsLn4hm6', NULL, '2022-09-26 02:12:02', '2022-09-26 02:12:02'),
(6, 'stKing', 'stKing@icloud.com', 'user', '$2y$10$FPu7AGd2fvUPxZuK0a7uuO17JFCI2I4YzmYp1Lcd8R//bMnty7oXy', NULL, '2022-09-26 02:12:39', '2022-09-26 02:12:39'),
(7, 'alsol', 'alsol@oldman.store', 'user', '$2y$10$NwXzKRi2yW4crq8TnCQ2kexjOq4l4FyS2qzVN1OhgC32A5KxLMWvS', NULL, '2022-09-26 02:13:51', '2022-09-26 02:13:51');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `book_author_fk` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_book_fk` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_genre_genre_fk` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
