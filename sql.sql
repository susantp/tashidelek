-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table tashidelek.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table tashidelek.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `row_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=1538 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.items: ~119 rows (approximately)
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `menu_id`, `name`, `slug`, `description`, `price_offer`, `price`, `row_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(679, 49, 'samosas', 'samosas', ' Potatoes & peas turnover served with mint & Tamarind sauce', '1pc – 3.5, 2 pcs – 6.00', 600, 1, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(680, 49, 'samosa chaat', 'samosa-chaat', 'Crushed samosa , chickpeas, onion, tamarind chutney, raita', NULL, 750, 2, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(681, 49, 'pakora', 'pakora', 'Deep-fried mixed vegetable fritters optional Vegan', NULL, 799, 3, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(682, 49, 'shogo khasta', 'shogo-khasta', '(Aalu Dam) Sauteed spiced potato chili sauce garnished with cilantro Optional Vegan', NULL, 900, 4, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(683, 49, 'chicken sha bhaley', 'chicken-sha-bhaley', '(3 pcs)-Nepali-style bread filled with minced chicken, cilantro, & garlic served with homemade hot sauce', '1 pcs- 4.00, 3pcs- 10.99 ', 1099, 5, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(684, 49, 'beef sha bhaley', 'beef-sha-bhaley', '( 3pcs) Tibetan -style bread filled with minced beef, cilantro & garlic served with homemade hot sauce', '1 Pcs- 4.00, 3 pcs- 11.50', 100, 6, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(685, 49, 'pork chilli', 'pork-chilli', 'Sauteed sliced premium pork belly green onion, green chilies (Dry or Gravy)', NULL, 1150, 7, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(686, 49, 'chicken chilli', 'chicken-chilli', 'Sauteed chicken, green chili, garlic, onion, bell peppers, cilantro', NULL, 1099, 8, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(687, 49, 'gobi manchurian', 'gobi-manchurian', 'Flavorful cauliflower dipped in batter and deep-fried Vegan', NULL, 1099, 9, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(688, 49, 'chips chilli', 'chips-chilli', 'Fries Sautéed with homemade sauce onion, spring onions', NULL, 950, 10, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(689, 49, 'shapta (beef chilli)', 'shapta-beef-chilli', 'Sauteed sliced beef, green onion, green chilies & Tomatoes ', NULL, 1150, 11, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(690, 49, 'shrimp chilli', 'shrimp-chilli', 'Shrimp sautéed with homemade sauce, green chilli, garlic, onion, bell peppers, cilantro', NULL, 1599, 12, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(691, 49, 'tofu fried', 'tofu-fried', 'Baked tofu sautéed in extra Virgin olive oil garlic, ginger, green bell peppers, onion, cilantro broccoli and sesame seed', NULL, 1099, 13, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(692, 49, 'chicken wrap', 'chicken-wrap', NULL, NULL, 999, 14, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(693, 49, 'chiura', 'chiura', 'Beaten rice', NULL, 250, 15, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(694, 50, 'aloo baigan', 'aloo-baigan', 'Eggplant & potatoes in a light curry optional vegan', NULL, 1150, 1, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(695, 50, 'baigan bharta', 'baigan-bharta', 'American eggplant baked in a clay oven & cooked with Onion, tomatoes ,spices optional vegan', NULL, 1199, 2, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(696, 50, 'chana masala', 'chana-masala', 'Chick peas sautéed with garlic & ginger optional Vegan', NULL, 1050, 3, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(697, 50, 'aloo cauli', 'aloo-cauli', 'Cauliflower & potatoes, cooked in aromatic spices optional Vegan', NULL, 1050, 4, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(698, 50, 'green bean dasti', 'green-bean-dasti', '(Bhutanese dish) green beans cooked with American cheese, blue cheese & green chilli', NULL, 1350, 5, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(699, 50, 'shamu dasti', 'shamu-dasti', '(Bhutanese dish) Mushroom cooked with American cheese, blue cheese & green chill', NULL, 1350, 6, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(700, 50, 'saag paneer', 'saag-paneer', 'Cooked spinach studded with cubes of fried homemade cheese thickened with Cream, it’s a hearty and filling optional Vegan', NULL, 1400, 7, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(701, 50, 'chana saag', 'chana-saag', 'Sauteed chickpeas curry with garlic, ginger & spinach optional Vegan', NULL, 1300, 8, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(702, 50, 'aloo saag', 'aloo-saag', 'Cooked spinach studded with cubes of fried potato thickened with cream, It’s a hearty and filling optional Vegan', NULL, 1300, 9, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(703, 50, 'tofu saag', 'tofu-saag', 'Cooked spinach studded with cubes of fried TOFU thickened with cream, It’s a hearty and filling optional Vegan', NULL, 1300, 10, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(704, 50, 'vegetable korma', 'vegetable-korma', 'Mixed vegetables cooked in tomato cream sauce and coconut milk (Cashew Powder on the Top optional Vegan)', NULL, 1400, 11, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(705, 50, 'veg wrap', 'veg-wrap', NULL, NULL, 999, 12, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(706, 50, 'veg tikka masala', 'veg-tikka-masala', 'Mixed vegetables cooked in tomato cream sauce (Broccoli, carrots, green peas, potatoes, cauliflower)', NULL, 1499, 13, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(707, 50, 'mattar paneer', 'mattar-paneer', 'Green peas cooked lightly with fresh homemade cheese and Tomato cream sauce', NULL, 1399, 14, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(708, 50, 'paneer tikka masala', 'paneer-tikka-masala', 'Homemade cheese cooked lightly with fresh tomato cream sauce', NULL, 1499, 15, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(709, 50, 'mismas', 'mismas', 'Tofu broccoli, carrots, green peas, potatoes, cauliflower with mixed Aromatic vegetable curry sauce optional Vegan', NULL, 1099, 16, '2021-10-22 18:07:59', '2021-10-22 19:06:07', NULL),
	(764, 51, 'chicken tikka masala', 'chicken-tikka-masala', 'Overnight Marinated chicken breast cooked with tomato cream sauce', NULL, 1450, 1, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(765, 51, 'chicken vindaloo', 'chicken-vindaloo', 'Seasoned with onion, garlic, ginger, cooked with potatoes & aromatic spices', NULL, 1200, 2, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(766, 51, 'chicken curry', 'chicken-curry', 'Chicken seasoned with onions, garlic, ginger, tomatoes and spices', NULL, 1350, 3, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(767, 51, 'chicken phing', 'chicken-phing', 'Chicken cooked with potato, wood ear & bean thread noodles', NULL, 1250, 4, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(768, 51, 'chicken saag', 'chicken-saag', 'Cooked spinach sautéed with chicken thickened with cream, (it’s a hearty and filling)', NULL, 1350, 5, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(769, 51, 'chicken korma', 'chicken-korma', 'Chicken cooked in tomato cream sauce & coconut milk', NULL, 1500, 6, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(770, 51, 'lamb vindaloo', 'lamb-vindaloo', 'Slow cooked leg of lamb curry with potatoes & aromatic spices', NULL, 1400, 7, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(771, 51, 'lamb saag', 'lamb-saag', 'Cooked spinach studded with lamb thickened with cream (it’s a hearty and filling)', NULL, 1450, 8, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(773, 51, 'lamb curry', 'lamb-curry', 'Slow-cooked leg of lamb curry with tomato and cilantros on top', NULL, 1550, 10, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(774, 51, 'lamb korma', 'lamb-korma', 'Lamb cooked in tomato cream sauce and coconut milk', NULL, 1550, 11, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(775, 51, 'fish curry', 'fish-curry', 'Salmon fish cooked in garlic, ginger, fresh tomatoes and aromatic spices', NULL, 1699, 12, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(776, 51, 'fish tikka masala', 'fish-tikka-masala', 'Shrimp cooked with tomato cream sauce', NULL, 1550, 13, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(777, 51, 'fish korma', 'fish-korma', 'Salmon fish cooked in tomato cream sauce and coconut milk', NULL, 1550, 14, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(778, 51, 'shrimp vindaloo', 'shrimp-vindaloo', 'Shrimp cooked with potatoes & aromatic spices', NULL, 1399, 15, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(779, 51, 'shrimp curry', 'shrimp-curry', 'Shrimp cooked with aromatic spices', NULL, 1650, 16, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(780, 51, 'shrimp saag', 'shrimp-saag', 'Spinach cooked with shrimp ( it’s hearty and filling)', NULL, 1400, 17, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(781, 51, 'shrimp korma', 'shrimp-korma', 'Shrimp cooked in tomato cream sauce and coconut milk', NULL, 1550, 18, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(782, 51, 'shrimp tikka masala', 'shrimp-tikka-masala', 'Shrimp cooked with tomato cream sauce', NULL, 1550, 19, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(783, 51, 'phing sha', 'phing-sha', 'Diced beef cooked with potato, wood ear,& bean thread noodles', NULL, 1299, 20, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(784, 51, 'lamb tikka masala', 'lamb-tikka-masala', 'Lamb cooked with tomato cream sauce', NULL, 1550, 21, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(785, 51, 'goat curry', 'goat-curry', 'Bone-in goat cooked in authentic nepali style', NULL, 1499, 22, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(786, 51, 'butter chicken', 'butter-chicken', NULL, NULL, 1399, 23, '2021-10-22 18:08:15', '2021-10-22 19:06:07', NULL),
	(841, 54, 'veggie momo', 'veggie-momo', 'Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 1400, 1, '2021-10-22 18:17:42', '2021-10-22 19:06:07', NULL),
	(842, 54, 'buff momo', 'buff-momo', 'Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 2000, 2, '2021-10-22 18:17:42', '2021-10-22 19:06:07', NULL),
	(843, 54, 'chicken momo', 'chicken-momo', 'Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 1400, 3, '2021-10-22 18:17:42', '2021-10-22 19:06:07', NULL),
	(844, 54, 'beef momo', 'beef-momo', 'Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 1550, 4, '2021-10-22 18:17:42', '2021-10-22 19:06:07', NULL),
	(845, 54, 'lamb momo', 'lamb-momo', 'Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 1600, 5, '2021-10-22 18:17:42', '2021-10-22 19:06:07', NULL),
	(966, 53, 'chicken momo (mini 10 pcs)', 'chicken-momo-mini-10-pcs', 'Remember Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 1150, 3, '2021-10-22 18:41:35', '2021-10-22 19:06:07', NULL),
	(974, 55, 'veg mok thuk', 'veg-mok-thuk', 'Momo served in broth with fresh vegetables', NULL, 1099, 1, '2021-10-22 18:41:35', '2021-10-22 19:06:07', NULL),
	(975, 55, 'buff mok thuk ', 'buff-mok-thuk', 'Water Buffalo is Real Buffalo. American Bison is not Buffalo, it is Bovine – Cattle – Cow.', NULL, 1500, 2, '2021-10-22 18:41:35', '2021-10-22 19:06:07', NULL),
	(976, 55, 'chicken mok thuk', 'chicken-mok-thuk', 'Momo served in broth with fresh vegetables', NULL, 1199, 3, '2021-10-22 18:41:35', '2021-10-22 19:06:07', NULL),
	(977, 55, 'beef mok thuk', 'beef-mok-thuk', 'Momo served in broth with fresh vegetables', NULL, 1299, 4, '2021-10-22 18:41:35', '2021-10-22 19:06:07', NULL),
	(1050, 56, 'veg flat noodles', 'veg-flat-noodles', 'Fresh hand-pulled flat noodles in hearty broth topped with Veggies Vegan ( Broccoli, Carrot, Baby Spinach)', NULL, 1099, 1, '2021-10-22 18:46:21', '2021-10-22 19:06:07', NULL),
	(1051, 56, 'buff flat noodles', 'buff-flat-noodles', '100% Great Plain Grass-Fed buffalo raised without antibiotics/Soup bone Served with Veggies (broccoli, Carrot, Baby Spinach)', NULL, 1500, 2, '2021-10-22 18:46:21', '2021-10-22 19:06:07', NULL),
	(1052, 56, 'chicken flat noodles', 'chicken-flat-noodles', 'Fresh hand-pulled flat noodles in hearty broth topped with Vegetables(broccoli, Carrot, Baby Spinach)', NULL, 1199, 3, '2021-10-22 18:46:21', '2021-10-22 19:06:07', NULL),
	(1053, 56, ' beef flat noodles', 'beef-flat-noodles', 'Fresh hand-pulled flat noodles in hearty broth topped with Vegetables (broccoli, Carrot, Baby Spinach)', NULL, 1299, 4, '2021-10-22 18:46:21', '2021-10-22 19:06:07', NULL),
	(1130, 57, 'vegetable gya thuk (thukpa)', 'vegetable-gya-thuk-thukpa', 'Homemade skinny noodles in broth, veggies, tomatoes,Onion, carrot, & cabbage Vegan', NULL, 1050, 1, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1131, 57, 'egg gya thuk (thukpa)', 'egg-gya-thuk-thukpa', 'Homemade egg noodles in broth, , tomatoes, onion, Carrot & cabbage, sliced fried eggs on top', NULL, 1099, 2, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1132, 57, 'buff thukpa', 'buff-thukpa', 'Homemade egg skinny noodles in buff broth, veggies, tomatoes, onion, Carrot & cabbage (Sliced Buff)', NULL, 1499, 3, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1133, 57, 'chicken gya thuk', 'chicken-gya-thuk', 'Homemade egg noodles in broth ,veggies, tomatoes, onion, Vegetables(broccoli, Carrot,Baby Spinach)', NULL, 1150, 4, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1134, 57, 'beef (sha) gya thuk (thukpa)', 'beef-sha-gya-thuk-thukpa', 'Homemade egg skinny noodles in broth, veggies, tomatoes, onion, Carrot & cabbage (Sliced Beef)', NULL, 1299, 5, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1135, 58, 'vegetable chowmein', 'vegetable-chowmein', 'Noodles fried with onion, carrot and cabbage (Vegan)', NULL, 1050, 1, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1136, 58, 'egg chowmein', 'egg-chowmein', 'Homemade egg noodles fried with egg, onion, carrot and cabbage', NULL, 1099, 2, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1137, 58, 'buff chowmein', 'buff-chowmein', 'Noodles fried with onion, carrot and cabbage', NULL, 1499, 3, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1138, 58, 'chicken chowmein', 'chicken-chowmein', 'Noodles fried with onion, carrot and cabbage', NULL, 1100, 4, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1139, 58, 'beef chowmein', 'beef-chowmein', 'Noodles fried with onion, carrot and cabbage', NULL, 1200, 5, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1140, 58, 'shrimp chowmein', 'shrimp-chowmein', 'Noodles fried with onion, carrot and cabbage', NULL, 1499, 6, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1141, 58, 'pork chowmein', 'pork-chowmein', 'Noodles fried with onion, carrot, and cabbage', NULL, 1150, 7, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1142, 58, 'mix chowmein', 'mix-chowmein', 'Noodles fried with onion, carrot and cabbage (mix with Egg, buff, chicken beef, shrimp and pork)', NULL, 1700, 8, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1143, 59, 'vegetable fried rice', 'vegetable-fried-rice', 'Fragrant pan- fried basmati rice with Veggies optional vegan', NULL, 1050, 1, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1144, 59, 'egg fried rice', 'egg-fried-rice', 'Homemade egg noodles fried with egg, onion, carrot and cabbage', NULL, 1099, 2, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1145, 59, 'buff fried rice', 'buff-fried-rice', 'Fragrant pan- fried basmati rice with Buff', NULL, 1499, 3, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1146, 59, 'chicken fried rice', 'chicken-fried-rice', 'Chicken Fragrant pan- fried basmati rice with Chicken', NULL, 1100, 4, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1147, 59, 'beef fried rice', 'beef-fried-rice', 'Beef Fragrant pan-fried basmati rice with Beef', NULL, 1200, 5, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1148, 59, 'shrimp fried rice', 'shrimp-fried-rice', 'Shrimp Fragrant pan-fried basmati rice with Shrimp', NULL, 1499, 6, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1149, 59, 'pork fried rice', 'pork-fried-rice', 'Pork Fragrant pan fried basmati rice with Pork', NULL, 1150, 7, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1150, 59, 'mix fried rice', 'mix-fried-rice', 'Fragrant pan- fried basmati rice with egg, buff, chicken, beef, shrimp, pork', NULL, 1700, 8, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1151, 60, 'vegetable tandoori', 'vegetable-tandoori', 'Roasted seasonable vegetable in light cream sauce', NULL, 1399, 1, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1152, 60, 'tandoori chicken leg quarters', 'tandoori-chicken-leg-quarters', 'Overnight – marinated BBQ chicken leg quarters (in sizzling platter)', NULL, 1499, 2, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1153, 60, 'chicken tandoori (bone- in)', 'chicken-tandoori-bone-in', 'Marinated half chicken overnight broiled in tandoori oven (In sizzling platter)', NULL, 1499, 3, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1154, 60, 'tandoori tikka (boneless)', 'tandoori-tikka-boneless', 'Marinated boneless chicken breast broiled in tandoori oven (In sizzling platter)', NULL, 1399, 4, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1155, 60, 'lamb tandoori', 'lamb-tandoori', 'Marinated leg of lamb broiled in tandoori oven (In sizzling platter)', NULL, 1599, 5, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1156, 60, 'fish tandoori', 'fish-tandoori', 'Marinated Atlantic Salmon raised without Antibiotics broiled in tandoori oven (In sizzling platter)', NULL, 1799, 6, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1157, 67, 'yellow wai wai jhol laphing', 'yellow-wai-wai-jhol-laphing', 'Served with cold soup', NULL, 550, 1, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1158, 67, 'yellow wai wai dry laphing', 'yellow-wai-wai-dry-laphing', 'Served dry', NULL, 500, 2, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1159, 62, 'brown basmati rice', 'brown-basmati-rice', '(Long grained)', NULL, 350, 1, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1160, 62, 'white basmati rice', 'white-basmati-rice', '(Long grained)', NULL, 300, 2, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1161, 62, 'ting mo (2 pcs)', 'ting-mo-2-pcs', 'Tibetan steamed bun', NULL, 550, 3, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1162, 62, 'plain naan', 'plain-naan', 'Warm buttered Indian flatbread', NULL, 250, 4, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1163, 62, 'garlic naan', 'garlic-naan', NULL, NULL, 350, 5, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1164, 62, 'garlic cliantro naan', 'garlic-cliantro-naan', NULL, NULL, 350, 6, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1165, 62, 'garlic rosemarry naan', 'garlic-rosemarry-naan', NULL, NULL, 350, 7, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1166, 62, 'goat cheese naan', 'goat-cheese-naan', NULL, NULL, 600, 8, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1167, 62, 'sasami sweet naan', 'sasami-sweet-naan', NULL, NULL, 500, 9, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1168, 62, 'chilli naan', 'chilli-naan', NULL, NULL, 500, 10, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1169, 62, 'raita', 'raita', 'Yogurt condiment w/cucumbers & tomatoes/ onion (8oz)', NULL, 250, 11, '2021-10-22 19:03:26', '2021-10-22 19:06:07', NULL),
	(1286, 63, 'bhakcha markhu', 'bhakcha-markhu', 'Steamed cheese dumpling with butters scotch sauce', NULL, 500, 1, '2021-10-22 19:04:57', '2021-10-22 19:06:07', NULL),
	(1287, 63, 'tsampa dessert', 'tsampa-dessert', 'Traditional Tibetan original home made roasted ground barley Fluffed with yogurt & honey, sprinkled with dried cranberries', NULL, 500, 2, '2021-10-22 19:04:57', '2021-10-22 19:06:07', NULL),
	(1288, 63, 'kulfi', 'kulfi', 'Milky Popsicle made with mango puree and pistachios', NULL, 500, 3, '2021-10-22 19:04:57', '2021-10-22 19:06:07', NULL),
	(1289, 63, 'carrot pudding', 'carrot-pudding', 'Made with grated carrot', NULL, 500, 4, '2021-10-22 19:04:57', '2021-10-22 19:06:07', NULL),
	(1530, 64, 'chai', 'chai', 'Unsweetened Indian spiced milk tea', NULL, 250, 1, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1531, 64, 'iced chai', 'iced-chai', 'Sweetened Indian special milk tea', NULL, 300, 2, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1532, 64, 'sweet lassi', 'sweet-lassi', 'Yogurt- based', NULL, 300, 3, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1533, 64, 'mango lassi', 'mango-lassi', 'Yogurt- based', NULL, 350, 4, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1534, 64, 'spicied iced tea', 'spicied-iced-tea', NULL, NULL, 250, 5, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1535, 64, 'boecha', 'boecha', 'Traditional Tibetan salt butter tea', NULL, 350, 6, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1536, 64, 'sprite/coke/dietcoke/fanta', 'spritecokedietcokefanta', 'CAN', NULL, 200, 7, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL),
	(1537, 64, 'sprite/coke /fanta', 'spritecoke-fanta', 'BOTTLES', NULL, 300, 8, '2021-10-22 19:06:07', '2021-10-22 19:06:07', NULL);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Dumping structure for table tashidelek.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `row_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.menus: ~19 rows (approximately)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `title`, `description`, `slug`, `thumbnail`, `bg_image`, `status`, `row_order`, `created_at`, `updated_at`) VALUES
	(49, 'Starters', 'starters', 'starters', 'Chilli.jpg', 'chilli.jpg', 1, 1, '2021-04-28 15:49:57', '2021-05-04 23:39:15'),
	(50, 'Entrees Vegeterian', '', 'entrees-vegeterian', 'Paneers.jpg', 'Paneers.jpg', 1, 2, '2021-04-28 15:49:57', '2021-05-04 23:39:15'),
	(51, 'Entrees Non-Vegeterian', '', 'entrees-non-vegeterian', 'Tandoori Dishes.jpg', 'Tandoori Dishes.jpg', 1, 3, '2021-04-28 15:49:58', '2021-05-04 23:39:15'),
	(52, 'Steamed Momo', '8 pcs cooking time 15 min', 'steamed-momo', 'Chicken-Momo.jpg', 'Chicken-Momo.jpg', 1, 11, '2021-04-28 15:49:59', '2021-05-04 23:39:15'),
	(53, 'Jhol Momo', 'Cooking time 15 mins', 'jhol-momo', 'IMG_3402.JPG', 'IMG_3402.JPG', 1, 12, '2021-04-28 15:50:00', '2021-05-04 23:39:15'),
	(54, 'C Momo', 'Chilli Momo', 'c-momo', 'online-food-delivery-in-butwal-paneer-chilli-momo.png', 'online-food-delivery-in-butwal-paneer-chilli-momo.png', 1, 13, '2021-04-28 15:50:00', '2021-05-04 23:39:15'),
	(55, 'Soup Momo', '', 'soup-momo', 'IMG_3359.JPG', 'IMG_3359.JPG', 1, 8, '2021-04-28 15:50:00', '2021-05-04 23:39:15'),
	(56, 'Hand Pulled Flat noodles', '', 'hand-pulled-flat-noodles', 'IMG_3400.jpg', 'IMG_3400.jpg', 1, 9, '2021-04-28 15:50:01', '2021-05-04 23:39:15'),
	(57, 'Thukpa', '', 'thukpa', 'IMG_3359-1.jpg', 'IMG_3359-1.jpg', 1, 10, '2021-04-28 15:50:01', '2021-05-04 23:39:15'),
	(58, 'Chowmin', '', 'chowmin', 'Chow-Chow.jpg', 'Chow-Chow.jpg', 1, 6, '2021-04-28 15:50:02', '2021-05-04 23:39:15'),
	(59, 'Fried Rice', '', 'fried-rice', 'Rice-copy.jpg', 'Rice-copy.jpg', 1, 7, '2021-04-28 15:50:02', '2021-05-04 23:39:15'),
	(60, 'Tandoori', 'Served in a sizzler platter', 'tandoori', 'Tandoori-Dishes.jpg', 'Tandoori-Dishes.jpg', 1, 4, '2021-04-28 15:50:03', '2021-05-04 23:39:15'),
	(61, 'Salad', '', 'salad', 'avocado-salad-1524672116.png', 'avocado-salad-1524672116.png', 1, 5, '2021-04-28 15:50:03', '2021-05-04 23:39:15'),
	(62, 'Side Orders', '', 'side-orders', '3523f41a8a66b91d580553d29e176ca6.jpg', '3523f41a8a66b91d580553d29e176ca6.jpg', 1, 15, '2021-04-28 15:50:04', '2021-05-04 23:39:15'),
	(63, 'Desserts', '', 'desserts', 'kulfi.jpg', 'kulfi.jpg', 1, 16, '2021-04-28 15:50:04', '2021-05-04 23:39:15'),
	(64, 'Beverages', '', 'beverages', 'Sweet-Lassi-min.jpg', 'Sweet-Lassi-min.jpg', 1, 17, '2021-04-28 15:50:05', '2021-05-04 23:39:15'),
	(65, 'Beverages Beer', NULL, 'beverages-beer', '', '', 1, 18, '2021-05-12 04:03:41', '2021-05-12 04:08:35'),
	(66, 'Fried Momo', NULL, 'fried-momo', '', '', 1, 14, '2021-05-12 04:34:04', '2021-05-12 04:34:05'),
	(67, 'Laphing', NULL, 'laphing', '', NULL, NULL, 19, '2021-10-23 00:37:40', '2021-10-23 00:37:40');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table tashidelek.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.migrations: ~15 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_04_28_080822_create_menus_table', 1),
	(5, '2021_04_28_080950_create_items_table', 1),
	(6, '2021_04_28_093012_add_description_on_menu_table', 1),
	(7, '2021_05_04_230335_add_menu_id_on_items_table', 1),
	(8, '2021_05_05_010112_create_pages_table', 1),
	(9, '2021_05_11_222456_add_row_order_menu_table', 1),
	(10, '2021_10_21_190914_create_settings_table', 1),
	(11, '2021_10_21_192506_site_settings', 1),
	(12, '2021_10_22_131408_add_price_offer_column_to_items_table', 2),
	(13, '2021_10_22_174111_add_slug_column_to_items_table', 3),
	(14, '2021_10_22_180908_add_delete_at_column_to_items_table', 4),
	(25, '2021_10_22_194419_create_reservations_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tashidelek.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.pages: ~0 rows (approximately)
DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table tashidelek.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tashidelek.reservations
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `guest_count` int(10) unsigned NOT NULL,
  `date_time` datetime NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.reservations: ~1 rows (approximately)
DELETE FROM `reservations`;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `phone`, `guest_count`, `date_time`, `type`, `meta`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Maia', 'Herring', 'jizu@mailinator.com', 88, 1, '1993-03-26 05:26:00', 'dinner', '{"specialRequest": "Proident cupidatat"}', '2021-10-22 22:36:27', '2021-10-22 22:36:27', NULL),
	(2, 'McKenzie', 'Acosta', 'pilokevexe@mailinator.com', 31, 58, '1975-12-22 15:07:00', 'breakfast', '{"specialRequest": "Tempora quibusdam as"}', '2021-10-22 23:04:10', '2021-10-22 23:04:10', NULL),
	(3, 'McKenzie', 'Acosta', 'pilokevexe@mailinator.com', 31, 58, '1975-12-22 15:07:00', 'breakfast', '{"specialRequest": "Tempora quibusdam as"}', '2021-10-22 23:04:15', '2021-10-22 23:04:15', NULL),
	(4, 'Jonas', 'King', 'buxu@mailinator.com', 84, 53, '1988-06-10 09:49:00', 'lunch', '{"specialRequest": "Ea adipisicing volup"}', '2021-10-22 23:09:03', '2021-10-22 23:09:03', NULL),
	(5, 'Maggy', 'Spencer', 'pyhobyk@mailinator.com', 73, 30, '2002-06-02 15:21:00', 'lunch', '{"specialRequest": "Nulla sit aliqua Om"}', '2021-10-22 23:12:31', '2021-10-22 23:12:31', NULL),
	(6, 'Maggy', 'Spencer', 'pyhobyk@mailinator.com', 73, 30, '2002-06-02 15:21:00', 'lunch', '{"specialRequest": "Nulla sit aliqua Om"}', '2021-10-22 23:12:38', '2021-10-22 23:12:38', NULL),
	(7, 'Gary', 'Gregory', 'holyqe@mailinator.com', 80, 16, '1991-03-07 12:12:00', 'lunch', '{"specialRequest": "Tenetur rerum harum"}', '2021-10-22 23:15:12', '2021-10-22 23:15:12', NULL),
	(8, 'Iliana', 'Barron', 'hibywimow@mailinator.com', 44, 44, '2003-12-26 06:38:00', 'lunch', '{"specialRequest": "Tenetur anim est qui"}', '2021-10-22 23:15:24', '2021-10-22 23:15:24', NULL);
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;

-- Dumping structure for table tashidelek.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locked` tinyint(1) NOT NULL,
  `payload` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `settings_group_index` (`group`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.settings: ~10 rows (approximately)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `group`, `name`, `locked`, `payload`, `created_at`, `updated_at`) VALUES
	(1, 'site', 'forOrder', 0, '"(510) 232-9316"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(2, 'site', 'address', 0, '"11224 San Pablo Ave El Cerrito, CA 94530"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(3, 'site', 'fax', 0, '"(510) 778-1639"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(4, 'site', 'openingHours', 0, '"Mon – Sat: 11:00AM–09:00PM"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(5, 'site', 'email', 0, '"tashidelekcuisine@gmail.com"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(6, 'site', 'siteName', 0, '"Tashi Delek Restaurant"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(7, 'site', 'facebookUrl', 0, '"https://www.facebook.com/tashidelek.2013"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(8, 'site', 'yelpUrl', 0, '"https://www.yelp.com/biz/tashi-delek-el-cerrito"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(9, 'site', 'instagramUrl', 0, '"https://www.instagram.com/tashidelekcuisine"', '2021-10-21 19:38:16', '2021-10-21 19:38:16'),
	(10, 'site', 'toastabUrl', 0, '"https://www.toasttab.com/tashi-delek/v3"', '2021-10-21 19:38:16', '2021-10-21 19:38:16');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table tashidelek.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tashidelek.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$GiDJ6c9xxQxNZokh6cRU4OMj/QGAgUDQ8OGl75jsU60MXy4utaIZm', NULL, '2021-10-22 19:12:56', '2021-10-22 19:13:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
