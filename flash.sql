-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2021 г., 12:40
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `flash`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `basket_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`basket_id`, `dish_id`, `user_id`) VALUES
(34, 2, 5),
(35, 7, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `typeOfDish_id` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `dish`
--

INSERT INTO `dish` (`dish_id`, `name`, `description`, `price`, `typeOfDish_id`, `picture`) VALUES
(1, 'Challah French Toast', 'One Egg Any Style $2; 100% Pure Maple Syrup $4; Toppings add $2 each (Strawberries, Bananas, Chocolate Chips, Pecans, Blueberry Compote)', 15, 1, 'https://img.sndimg.com/food/image/upload/v1/img/recipes/83/89/1/IZJUQe9vTA6Mw3kvcNIq_Tipsy%20Overnight%20Belgian%20Waffles_final%204.jpg'),
(2, 'Belgian Waffle', 'One Egg Any Style $2; 100% Pure Maple Syrup $4; Toppings add $2 each (Strawberries, Bananas, Chocolate Chips, Pecans, Blueberry Compote)', 15, 1, 'https://res.cloudinary.com/mealthy1/image/upload/ar_16:11,c_fill,f_auto,h_760,q_auto:best,w_1140/v1512598305/Breakfast/Buttermilk-Waffles.png '),
(3, 'Gluten Free Organic Cinnamon Flapjacks or Gluten Free French Toast or Waffle', 'One Egg Any Style $2; 100% Pure Maple Syrup $4; Toppings add $2 each (Strawberries, Bananas, Chocolate Chips, Pecans, Blueberry Compote)', 14, 1, 'https://im0-tub-kz.yandex.net/i?id=8781dc6853ec345ba379b6f4920918ae&n=13'),
(4, 'EJs Famous Crunchy French Toast', 'Thick slices of egg dipped challah bread coated with crunchy corn flakes & toasted almonds', 16, 1, 'https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656480/32b6ea67c2ac46a94c10da63079ea54a-1400.jpg '),
(5, 'Two eggs any style with ham, Applewood smoked bacon or sausage', 'One Egg Any Style $2; 100% Pure Maple Syrup $4; Toppings add $2 each (Strawberries, Bananas, Chocolate Chips, Pecans, Blueberry Compote)', 14, 2, 'https://mybayutcdn.bayut.com/mybayut/wp-content/uploads/Best-Breakfast-spots-in-Dubai-Marina-B-07-04.jpg '),
(6, 'Two eggs any style with ham, Applewood smoked bacon and sausage', 'One Egg Any Style $2; 100% Pure Maple Syrup $4; Toppings add $2 each (Strawberries, Bananas, Chocolate Chips, Pecans, Blueberry Compote)', 16, 2, 'https://www.telegraph.co.uk/content/dam/food-and-drink/2020/07/13/TELEMMGLPICT000231191493_trans_NvBQzQNjv4Bq3LWUGqiHWvaGajKvH-vRlG3sEGELvn2FKOZ493OXNj0.jpeg?imwidth=1280'),
(7, 'Scrambled eggs in a whole wheat tortilla, stuffed with cheddar, onions, peppers, home fries & salsa', 'One Egg Any Style $2; 100% Pure Maple Syrup $4; Toppings add $2 each (Strawberries, Bananas, Chocolate Chips, Pecans, Blueberry Compote)', 15, 2, 'https://www.eggs.ca/assets/RecipePhotos/BreakfastBurrito.jpg'),
(8, 'Smoked Nova salmon & sauteed onions', 'Thick slices of egg dipped challah bread coated with crunchy corn flakes & toasted almonds', 17, 2, 'https://im0-tub-kz.yandex.net/i?id=991b1fd1bf1134a497143f9a6fa49f8e-l&n=13 '),
(9, 'Smoked Salmon Platter', 'Smoked salmon, red onion, capers, tomato, cream cheese and a NY bagel', 21, 3, 'https://im0-tub-kz.yandex.net/i?id=b07c5d809473e2a7aeec8d410a02a624-l&n=13'),
(10, 'Steel Cut Oatmeal', 'With honey, cinnamon, brown sugar or syrup', 21, 3, 'https://i.ytimg.com/vi/MXS_vDL0DwA/maxresdefault.jpg '),
(11, 'Breakfast Breads', 'NY Bagel, 7-grain wheat, challah, baguette, English muffin or rye', 3, 3, 'https://media4.s-nbcnews.com/i/newscms/2016_24/1125971/whole-grains-bread-stock-today-160614-tease_e69d4936fab1229aba10cf0009d282a7.jpg'),
(12, 'Organic Maple Granola (Non-GMO)', 'Served with milk', 8, 3, 'https://www.irishtimes.com/polopoly_fs/1.3979453.1565175378!/image/image.jpg'),
(13, 'Turkey Bacon ', 'Smoked salmon, red onion, capers, tomato, cream cheese and a NY bagel', 7, 4, 'https://i.pinimg.com/originals/21/13/a1/2113a1b02a42508c42677980f1ffaa1f.jpg '),
(14, 'Country Sausage', 'With honey, cinnamon, brown sugar or syrup', 7, 4, 'https://st4.depositphotos.com/23847926/26668/i/1600/depositphotos_266688130-stock-photo-grilled-sausages-with-vegetables-and.jpg '),
(15, 'Applewood Smoked Bacon', 'NY Bagel, 7-grain wheat, challah, baguette, English muffin or rye', 7, 4, 'https://i.pinimg.com/originals/04/ef/2c/04ef2c9695ba81c036beae25d46a9fd6.jpg'),
(16, 'Black Forest Ham', 'Thick Cut ', 7, 4, 'https://www.hotel-latoscana.de/sites/default/files/images/hotel-restaurant-schwarzwald-black-forest-m-33.jpg '),
(17, 'Golden Baked Mac N Cheese', 'Smoked salmon, red onion, capers, tomato, cream cheese and a NY bagel', 11, 5, 'https://i.pinimg.com/originals/c8/5e/4e/c85e4e84fbcbaf5ed983cf0288e642de.jpg'),
(18, 'Three Cheese Quesadilla', 'Whole wheat tortilla with cheddar, monterey jack and mozzarella with guacamole & salsa', 14, 5, 'https://res.cloudinary.com/hellofresh/image/upload/f_auto,fl_lossy,q_auto/v1/hellofresh_s3/image/554a3d0df8b25ed7288b456d.jpg'),
(19, 'EJs Buffalo Chicken Wings', 'With blue cheese dressing', 17, 5, 'https://img.cdn4dd.com/cdn-cgi/image/fit=contain,width=1200,height=672,format=auto,quality=50/https://doordash-static.s3.amazonaws.com/media/photos/aeea586d-0d03-4924-b43f-69a3ea8bfabf-retina-large.jpg '),
(20, 'Chicken Fingers', 'Choice of Buffalo, BBQ, Ranch or Honey Mustard dipping sauces', 11, 5, 'https://im0-tub-ru.yandex.net/i?id=23e922c8bdaef83950f82e1978b11d96&ref=rim&n=33&w=225&h=150'),
(21, 'Kale Turkey Caesar Salad', 'Fresh kale, crisp romaine, roasted turkey breast, craisins & grated parmesan cheese tossed with Caesar dressing', 18, 6, 'https://static01.nyt.com/images/2016/03/21/multimedia/recipe-lab-kale-caesar/recipe-lab-kale-caesar-superJumbo.jpg'),
(22, 'Cobb Sala', 'Grilled chicken, avocado, blue cheese, Applewood smoked bacon, hard boiled egg, tomato, cucumber, red onion & mixed greens', 18, 6, 'https://cravingshappen.com/wp-content/uploads/2018/08/COBB-SALAD-1.jpg '),
(23, 'BBQ Chicken Salad', 'BBQ chicken breast, black beans, corn, cheddar cheese, cucumbers, tomatoes, tortilla strips & romaine lettuce', 18, 6, 'https://scontent-hel2-1.cdninstagram.com/v/t51.2885-15/e35/116704745_161495262242295_4074926211372162965_n.jpg?_nc_ht=scontent-hel2-1.cdninstagram.com&_nc_cat=103&_nc_ohc=9an0b8KMUWEAX_yybt-&oh=92a478ade7f9af1343cf1e9ace70cf47&oe=5F6FD412 '),
(24, 'Greek Chicken Salad', 'Grilled chicken, feta cheese, stuffed grape leaf, olives, cucumber, tomato, red onion & romaine lettuce', 18, 6, 'http://bzgrill.com/wp-content/uploads/2016/10/Greek-Salad.jpg'),
(25, 'Fresh Squeezed Orange Juice', '(chiefly in commercial use) a drink other than water', 5, 7, 'https://www.stefanoversacegelato.com/assets/images/items/homemade-orange-juice.jpg'),
(26, 'Fresh Squeezed Grapefruit Juice', '(chiefly in commercial use) a drink other than water', 5, 7, 'https://bilim-all.kz/uploads/images/2018/02/05/original/c59215810fc7f9e37d2a4c6167b20731.jpg'),
(27, 'Apple Juice', '(chiefly in commercial use) a drink other than water', 6, 7, 'https://www.factinate.com/wp-content/uploads/2019/05/apple-3933632_1920.jpg'),
(28, 'Low Fat Fruit Smoothie', '(chiefly in commercial use) a drink other than water', 9, 7, 'https://content-service.sodexomyway.com/media/JAMBA-JUICE_Pomegranate_Paradise_1920x976_tcm787-16950_w1024_h796_n.jpg?url=https://dineslu.sodexomyway.com/');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `dish_id`, `user_id`, `status`) VALUES
(26, 21, 6, 'Ordered'),
(27, 24, 6, 'Cooking');

-- --------------------------------------------------------

--
-- Структура таблицы `typeofdish`
--

CREATE TABLE `typeofdish` (
  `typeOfDish_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `typeofdish`
--

INSERT INTO `typeofdish` (`typeOfDish_id`, `name`, `description`, `picture`) VALUES
(1, 'JUMBO FLAPJACKS, CHALLAH FRENCH TOAST & BUTTERMILK WAFFLES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://i.ytimg.com/vi/6d4rfHBDyAk/hqdefault.jpg'),
(2, 'EGGS & OMELETTES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://www.livetopnotch.com/wp-content/uploads/2018/02/omelette.jpg'),
(3, 'BREAKFAST FAVORITES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://img2.goodfon.ru/wallpaper/nbig/3/27/zavtrak-frukty-oladi-yaichnica.jpg'),
(4, 'BREAKFAST SIDES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://media.timeout.com/images/103968301/image.jpg'),
(5, 'STARTERS & HOMESTYLE SOUPS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://img.taste.com.au/LVGWVOZQ/w1200-h630-cfill/taste/2016/11/spicy-lamb-tomato-and-chickpea-broth-79887-1.jpeg'),
(6, 'FRESH CRISP SALADS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://www.jesselanewellness.com/wp-content/uploads/2014/04/Kale-Salad-with-Crispy-Chickpeas-by-@JesseLWellness-kale.jpg'),
(7, 'BEVERAGES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur est massa, auctor vel turpis ultrices, sollicitudin fringilla ex. Cras sed.', 'https://cosmo.kz/wp-content/uploads/2017/08/shutterstock_361921463.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `telephone`, `adress`, `email`, `password`) VALUES
(5, 'Sherkhan', 'Iskender', '+7 (775) 261-94-79', 'Samal-2, B.Ermeakbaeva, D.22', 'sherkhandeus@gmail.com', 'fb1e15a24fd47f0e166c5303ec6fcbef'),
(6, 'Sherkhan', 'Iskender', '+7 (775) 261-94-79', 'Samal-2, B.Ermeakbaeva, D.22', 'ptendec@gmail.com', '63a9f0ea7bb98050796b649e85481845');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basket_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dish_id` (`dish_id`);

--
-- Индексы таблицы `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`),
  ADD KEY `typeOfDish_id` (`typeOfDish_id`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dish_id` (`dish_id`);

--
-- Индексы таблицы `typeofdish`
--
ALTER TABLE `typeofdish`
  ADD PRIMARY KEY (`typeOfDish_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `basket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `typeofdish`
--
ALTER TABLE `typeofdish`
  MODIFY `typeOfDish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`dish_id`);

--
-- Ограничения внешнего ключа таблицы `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `dish_ibfk_1` FOREIGN KEY (`typeOfDish_id`) REFERENCES `typeofdish` (`typeOfDish_id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`dish_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
