CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(256) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(1, 'Black dress Libas', 2199, 'product1.jpg'),
(2, 'Floral Harpa',  1699, 'product2.jpg'),
(3, 'Lavender Indus', 1848, 'product3.jpg'),
(4, 'Peach Dressberry', 848, 'product4.jpg');
