



CREATE TABLE `cashier` (
  `id_cashier` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `cashier` (`id_cashier`, `name`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana');

-- --------------------------------------------------------

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Food'),
(2, 'Drink');

-- --------------------------------------------------------

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_cashier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `product` (`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES
(1, 'Latte', 10000, 2, 1),
(2, 'Cake', 20000, 1, 2);


ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id_cashier`);


ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);


ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);


SELECT cas.name, p.name, c.name, p.price FROM product p JOIN category c ON p.id_category = c.id_category JOIN cashier cas ON p.id_cashier = cas.id_cashier
