

CREATE TABLE `product_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `product_users` (`id`, `username`, `password`, `avatar`) VALUES
(1, 'Alpha', '123', 'user1.jpg'),
(2, 'Beta', '123', 'user2.jpg'),
(3, 'Gama', '123', 'user3.jpg');
