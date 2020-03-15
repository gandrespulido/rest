-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 04:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slimapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`codigo`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `ciudad`, `departamento`) VALUES
(2, 'German', 'Pulido', '1234567', 'gpulido@hotmail.com', 'cll 76 # 107 33', 'Bogota', 'Sistemas'),
(3, 'Karen', 'Gonzalez', '4567890', 'kgonzalez@hotmail.com', 'cll 6 # 10 37', 'Mosquera', 'Sistemas'),
(4, 'Tatiana', 'Muñoz', '7891234', 'tmuñoz@hotmail.com', 'cll 176 # 17 33', 'Bogota', 'Diseño grafico'),
(5, 'Sara', 'muñoz', '7412589', 'smuñoz@hotmail.com', 'cll 176 # 17 33', 'Bogota', 'Diseño grafico'),
(6, 'Ryu', 'Pulido', '9637415', 'rpulido@hotmail.com', 'cll 76 # 107 33', 'Bogota', 'Sistemas'),
(7, 'Camila', 'Alvarado', '9517532', 'calvarado@hotmail.com', 'cll 106 # 7 23', 'Bogota', 'Medicina'),
(8, 'jhonatan', 'villanueva', '8754265', 'jvillanueva@hotmail.com', 'cll 96 # 77 13', 'Bogota', 'Medicina'),
(9, 'Angie', 'trujillo', '8954127', 'atrujillo@hotmail.com', 'cll 111 # 57 03', 'Bogota', 'Arquitectura'),
(10, 'Edilma', 'trujillo', '5489545', 'etrujillo@hotmail.com', 'cll 111 # 57 03', 'Bogota', 'Arquitectura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
