-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: soen341
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_info` varchar(8000) DEFAULT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_onsale` int DEFAULT NULL,
  `product_saleprice` float DEFAULT '0',
  `product_img` varchar(255) DEFAULT NULL,
  `product_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_name` (`product_name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Under Armour Bottle','18oz bottle to stay hydrated and healthy','Fitness',14.99,1,12.99,'Bottle1.jpg|Bottle2.jpg|Bottle3.jpg','Bottle.php'),(2,'Dumbbell','Weight varies between 20 to 50 lb','Fitness',74.99,1,64.99,'Dumbbell1.jpg|Dumbbell2.jpg|Dumbbell3.jpg','Dumbbell.php'),(3,'Nike Sports Bag','Light weight sport bag','Fitness',34.99,1,30.99,'SportsBag1.jpg|SportsBag2.jpg|SportsBag3.jpg','SportsBag.php'),(4,'Lipstick','The most attractive lipstick|Made with shea butter. Best for lips hydration','Makeup products',12.99,1,9.99,'Lipstick1.jpg|Lipstick2.jpg|Lipstick3.jpg','Lipstick.php'),(5,'Eyeshadow Palette','The multicolor palette. Pigmented and a versatile color selection','Makeup products',9.99,1,6.49,'Eyeshadow1.jpg|Eyeshadow2.jpg|Eyeshadow3.jpg','Eyeshadow.php'),(6,'Eyeliner','The limited edition La Casa de Papel|Pigmented and waterproof formula.','Makeup products',14.99,1,12.99,'Eyeliner1.jpg|Eyeliner2.jpg|Eyeliner3.jpg|Eyeliner4.jpg','Eyeliner.php'),(7,'AirPods','3rd Generation|Longer battery life and spatial audio','Electronics',229.99,1,210.99,'Airpods1.jpg|Airpods2.jpg|Airpods3.jpg','Airpods.php'),(8,'Samsung Crystal TV','4k Ultra HD Smart TV|82 inch','Electronics',1678.99,1,1499.99,'TV1.jpg|TV2.jpg|TV3.jpg','TV.php'),(9,'HP Printer','All in one printer|Wireless and simple setup with the HP app','Electronics',124.99,1,116.99,'Printer1.jpg|Printer2.jpg|Printer3.jpg','Printer.php'),(10,'Fashion Doll','For Ages 6+|Colour: Blue','Toys',4.99,1,2.99,'Doll1.jpg|Doll2.jpg|Doll3.jpg','Doll.php'),(11,'The Fisher-Price Stack','For Ages 6+|The stack toy','Toys',9.99,1,5.99,'Stack1.jpg|Stack2.jpg|Stack3.jpg','Fisher-price.php'),(12,'Lego','For Ages 8+|Lego MINECRAFT 74 pieces','Toys',34.99,1,25.99,'Lego1.jpeg|Lego2.jpeg|Lego3.jpeg','Lego.php'),(13,'Soft Blanket','Available  size: Queen & King|Washable with machine|100% polyester','Home Goods',24.99,1,20.99,'Blanket1.jpeg|Blanket2.jpeg|Blanket3.jpeg','Blanket.php'),(14,'Wall Decor','Size: 24 x 18','Home Goods',34.99,1,20.99,'Walldecor1.jpeg|Walldecor2.jpeg','WallDecor.php'),(15,'Candle','Light up bright|Scent limoncello|100% cotton wick','Home Goods',34.99,1,20.99,'Candle1.jpeg|Candle2.jpeg|Candle3.jpeg','Candles.php'),(16,'Harry Potter Collection','Books (1-7)|Language: English','Books',107.99,1,89.99,'HP1.jpeg|HP2.jpeg|HP3.jpeg','HarryPotter.php'),(17,'Ivy + Beans Books Set','Books (4-6)|Language: English','Books',107.99,1,89.99,'Ivy1.jpeg|Ivy2.jpeg|Ivy3.jpeg','IvyBean.php'),(18,'The Maze Runner Series','Pages: 422 pages|Language: English|A thriller story','Books',87.99,1,62.99,'Book1.jpg|Book2.jpg','TheMazeRunner.php');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-15 22:22:09
