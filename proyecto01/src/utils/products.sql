SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `products` (
  `id` int NOT NULL,
  `pais` varchar(200) NOT NULL,
  `producto` varchar(200) NOT NULL,
  `cantidad` int NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `products` (`id`, `pais`, `producto`, `cantidad`, `tipo`) VALUES
(1, 'peru', 'carro toyota', 130, 'exportado'),
(2, 'peru', 'bicicletas', 30, 'importado');

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

