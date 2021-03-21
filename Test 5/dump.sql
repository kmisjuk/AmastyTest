-- --------------------------------------------------------
-- Хост:                         f0518280.xsph.ru
-- Версия сервера:               5.7.31-34 - Percona Server (GPL), Release 34, Revision 2e68637
-- Операционная система:         Linux
-- HeidiSQL Версия:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы f0518280_barsik.cities: ~8 rows (приблизительно)
DELETE FROM `cities`;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `name`) VALUES
	(1, 'Minsk'),
	(2, 'Gomel'),
	(3, 'Hrodna'),
	(4, 'Baranovichi'),
	(5, 'Brest'),
	(6, 'Zhlobin'),
	(7, 'Vitebsk'),
	(8, 'Krugloe');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Дамп данных таблицы f0518280_barsik.persons: ~7 rows (приблизительно)
DELETE FROM `persons`;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` (`id`, `city_id`, `fullname`) VALUES
	(1, 5, 'Ivan Petrov'),
	(2, 3, 'Sebastian Haponenka'),
	(3, 3, 'Vasil Lutsevich'),
	(4, 2, 'Leo Klimovich'),
	(5, 7, 'Matea Kezhman'),
	(6, 8, 'Alex Marshall'),
	(7, 3, 'Bilbo Beggins');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;

-- Дамп данных таблицы f0518280_barsik.transactions: ~7 rows (приблизительно)
DELETE FROM `transactions`;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`transaction_id`, `from_person_id`, `to_person_id`, `amount`) VALUES
	(1, 4, 2, 10),
	(2, 2, 3, 7),
	(3, 5, 2, 12.54),
	(4, 4, 7, 13),
	(5, 3, 1, 8.23),
	(6, 1, 3, 12.3),
	(7, 2, 5, 3.12);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
