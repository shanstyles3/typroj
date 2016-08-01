-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2016 at 03:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawprints`
--

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `id` int(11) NOT NULL,
  `shelter_name` varchar(300) NOT NULL,
  `shelter_add` varchar(300) NOT NULL,
  `breeds_available` varchar(300) NOT NULL,
  `area` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `map_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`id`, `shelter_name`, `shelter_add`, `breeds_available`, `area`, `phone_number`, `map_link`) VALUES
(1, 'AIAWA - All India Animal Welfare Association', 'Dr. E Moses Road, Dhobi Ghat, Mahalaxmi (East), Mumbai 400011', 'Labrador, golden retriever, dalmatian, chihuahua, lhasa apso', 'south mumbai, mahalaxmi', 23094077, '<iframe src="https://www.google.com/maps/d/embed?mid=za2uiU1o7C6s.kbOxGBw2LE0E&hl=en_US" width="300" height="150"></iframe>'),
(2, 'ALAS - Animal Lovers Association Society ', 'Jaykar smurti, shop no. 55 \r\nAarey Road\r\nOpp rajasthan hall\r\nGoregaon [w]\r\nMumbai 400 062', 'Beagle, Bearded Collie, Chihuahua, Collie, Doberman, Labrador, Persian, Sphynx, Snowshoe', 'North Mumbai, Goregaon', 28763856, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.6501240547955!2d72.84641331456929!3d19.16678655409401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7bc56616e5f%3A0x3b3a4f8532888c25!2sRajasthan+Hall!5e0!3m2!1sen!2sin!4v1460906343309" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(3, 'Animal Welfare Association', '601 SAMANYA Society\r\nPLOT NO.13\r\nKHARGHAR\r\nNAVI MUMBAI 410 210', 'Munchkin, Himalayan, Havana Brown, Bombay, Parrots, Love Birds, Doves, Guinea Pigs, Labrador Retriever, Golden Retriever', 'Central Mumbai, Kharghar, Thane', 27562275, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60335.62074041078!2d73.02459299142278!3d19.06477977060316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c21a53e30b83%3A0xa766b29f687709d7!2sKharghar%2C+Navi+Mumbai%2C+Maharashtra+410210!5e0!3m2!1sen!2sin!4v1460906945969" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(4, 'PETA India', '127/16, SV Patel Nagar, Andheri West, Mumbai, Maharashtra 400061, India', 'Labrador, Pomeranian, Alsatian, German Shepherd, Siberian Husky, Guinea pigs, Rabbits', 'North Mumbai, Andheri', 40727382, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120617.71643812303!2d72.75043224383772!3d19.13818164055133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b611197f090f%3A0xbd9c0bc25ea6aba5!2s127%2F16%2C+SV+Patel+Nagar%2C+Andheri+West%2C+Mumbai%2C+Maharashtra+400061%2C+India!3m2!1d19.1381949!2d72.8204727!5e0!3m2!1sen!2s!4v1462898088320" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(5, 'YODA shelter', '3, Swami Vivekanand Road, Mahim Koliwada, Mahim West, Mahim, Mumbai, Maharashtra 400016, India', 'Beagle, Bulldog, Pug, Dalmatian, Balinese, Bengal, Bombay, Himalayan, Rabbits, Guinea pigs', 'South mumbai, Mahim', 46546742, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120685.3221686891!2d72.76844094232652!3d19.045424895027274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c9301587ccb5%3A0xd344abc67390ca73!2s3%2C+Swami+Vivekanand+Road%2C+Mahim+Koliwada%2C+Mahim+West%2C+Mahim%2C+Mumbai%2C+Maharashtra+400016%2C+India!3m2!1d19.0454381!2d72.83848139999999!5e0!3m2!1sen!2s!4v1462898534882" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(6, 'AMTM Rehab Centre', 'Bungalow no 14, Chikuwadi Road, Marve, Malad(W), Opp. Tulsi Bungalow, Opp Tab Cab Godown, Mumbai, Maharashtra 400095, India', 'Munchkin, Sphynx, Snowshoe, Labrador, German Shepherd, Pug, Lhasa Apso', 'North Mumbai, Malad', 237486487, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120578.52979387385!2d72.73512844471368!3d19.191749109154486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b69fe849cae3%3A0xad1e49f6e732cc!2sBungalow+no+14%2C+Chikuwadi+Road%2C+Marve%2C+Malad(W)%2C+Opp.+Tulsi+Bungalow%2C+Opp+Tab+Cab+Godown%2C+Mumbai%2C+Maharashtra+400095%2C+India!3m2!1d19.191762399999998!2d72.8051689!5e0!3m2!1sen!2s!4v1462899444094" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(7, 'Animal Angels', '501, Vijay Towers, Bhaskar Coloney, Thane West, Thane, Maharashtra, India', 'Somali, Sphynx, Rabbits, Guinea pigs, Collie, Boxer', 'Thane, North Mumbai, Thane west', 62374576, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120582.75832165462!2d72.89462754461914!3d19.185975712536152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b91e1f3e5269%3A0x6fa37c217216e33a!2s501%2C+Vijay+Towers%2C+Bhaskar+Coloney%2C%2C+Thane+West%2C+Thane%2C+Maharashtra%2C+India!3m2!1d19.185989!2d72.964668!5e0!3m2!1sen!2s!4v1462899751187" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(8, 'Bai Sakarbai Dinshaw Petit Hospital', 'Opposite M. D College, Behind Kem Hospital, Dr. S. S Rao Road, Parel, Mumbai, Maharashtra 400012, India', 'Rabbits, Guinea Pigs, Horses, Irish Terrier, Poodle Miniature, Poodle, American Bobtail', 'Central Mumbai, Parel', 24137518, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120720.38433802401!2d72.77018404154278!3d18.997147023435645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7cef795555555%3A0x3b13a478ac5cbaf6!2sOpposite+M.+D+College%2C+Behind+Kem+Hospital%2C+Dr.+S.+S+Rao+Road%2C+Parel%2C+Mumbai%2C+Maharashtra+400012%2C+India!3m2!1d18.9971602!2d72.84022449999999!5e0!3m2!1sen!2s!4v1462900191181" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(9, 'Leo Club Of Juhu', 'Ground floor, Mukesh Patel Engg. College, Opp Cooper Hospital,, Irla, Vile Parle West, Mumbai, Maharashtra 400056, India', 'Himalayan, Havana Brown, Munchkin, Labrador, Poodle, Doberman, Rabbits', 'North Mumbai, Vile Parle, Vile Parle west', 98334488, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120639.29183121827!2d72.7683195433555!3d19.108626757893816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c9c61561b189%3A0xad6144fa9147b6ae!2sGround+floor%2C+Mukesh+Patel+Engg.+College%2C+Opp+Cooper+Hospital%2C%2C+Irla%2C+Vile+Parle+West%2C+Mumbai%2C+Maharashtra+400056%2C+India!3m2!1d19.108639999999998!2d72.83836!5e0!3m2!1sen!2s!4v1462900400540" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(10, 'Mumbai Gau Rakshak Mandali Gaushala', 'Kandivali East, Mumbai, Maharashtra 400101, India', 'Persian, Ragdoll, German Shepherd, Pomeranian, Pug', 'North Mumbai, Kandivali east', 64546573, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120572.13604602206!2d72.78963074485658!3d19.200475604044133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b72247bd539d%3A0xe48f0c45380ce240!2sKandivali+East%2C+Mumbai%2C+Maharashtra+400101%2C+India!3m2!1d19.2004889!2d72.8596712!5e0!3m2!1sen!2s!4v1462900611253" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(11, 'Cat Café Studio', 'Bungalow No. 68, First Floor, Aram Nagar Part 1, Harminder Singh Road,, Versova, Mumbai, Maharashtra 400061, India', 'Munchkin, Snowshoe, Bombay, Himalayan, Persian cat, Sphynx ', 'North Mumbai, Andheri, Versova', 91670126, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120623.40845424487!2d72.74649954371053!3d19.130388745122755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b61cae6691db%3A0x9a77074afcf3490c!2sBungalow+No.+68%2C+First+Floor%2C+Aram+Nagar+Part+1%2C+Harminder+Singh+Road%2C%2C+Versova%2C+Mumbai%2C+Maharashtra+400061%2C+India!3m2!1d19.130402!2d72.81654!5e0!3m2!1sen!2s!4v1462900857717" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(12, 'TSPCA', ' N.K.T Compound, Beside Bhramand Complex, Kolshet Road, Azadnagar, Thane West, Thane, Maharashtra 400607, India', 'Labrador, Pug, Doberman, German Shepherd, Dalmatian, Rabbits, Guinea Pigs', 'Central Mumbai, Thane, Thane west', 93222719, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120543.7407275082!2d72.91557054549129!3d19.239184881390337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7bbfb8a161537%3A0x475346e35283b3a5!2sN.K.T+Compound%2C+Beside+Bhramand+Complex%2C+Kolshet+Road%2C+Azadnagar%2C+Thane+West%2C+Thane%2C+Maharashtra+400607%2C+India!3m2!1d19.2391982!2d72.98561099999999!5e0!3m2!1sen!2s!4v1462901060385" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(13, 'DRT Kennels', '16/A, Shed No.4a, Kashimira Industrial Estate, Behind Kashimira Police Station, Mira Road East, Mira Bhayandar, Maharashtra 401104, India', 'rabbits, guinea pigs, hamsters', 'North Mumbai, Mira Bhayandar, Mira road east', 64547564, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120519.61278539551!2d72.81322804603063!3d19.272017962194518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b0624e0bf3b3%3A0xb6e7f457b6bfc050!2s16%2FA%2C+Shed+No.4a%2C+Kashimira+Industrial+Estate%2C+Behind+Kashimira+Police+Station%2C+Mira+Road+East%2C+Mira+Bhayandar%2C+Maharashtra+401104%2C+India!3m2!1d19.2720313!2d72.8832685!5e0!3m2!1sen!2s!4v1462910995172" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(14, 'Apna Home Animal Shelter', 'Siddhi Karavale, Maharashtra 410208, India', 'Rottweiler, Portuguese water dog, Lhasa apso, Labrador, German Shepherds', 'Maharashtra', 4657465, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120642.44796674902!2d73.03985504328493!3d19.104299660434094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7ea6060793c9d%3A0xdd3d0222abc190fc!2sSiddhi+Karavale%2C+Maharashtra+410208%2C+India!3m2!1d19.1043129!2d73.1098955!5e0!3m2!1sen!2s!4v1462911247322" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(15, 'IDA', 'Near Deonar Colony, Bainganwadi, Deonar,, Mumbai, Maharashtra 400043, India', 'Rabbits', 'Central Mumbai, Deonar', 75678457, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120677.4755931478!2d72.85574654250195!3d19.056212888684367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c66d00ca830b%3A0xb56bbd85ed2f7aa5!2sNear+Deonar+Colony%2C+Bainganwadi%2C+Deonar%2C%2C+Mumbai%2C+Maharashtra+400043%2C+India!3m2!1d19.0562261!2d72.925787!5e0!3m2!1sen!2s!4v1462911433381" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(16, 'BAL ASHA TRUST', 'Dr E Moses Marg, Mahalakshmi, Mumbai, Maharashtra 400013, India', 'American Curl, Balinese, Rabbits, Munchkin', 'South Mumbai, Mahalaxmi', 87456765, '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120725.6395453818!2d72.75362854142527!3d18.989900827702783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7ce5dbaaaaaab%3A0x796cd658e7bf4b5e!2sDr+E+Moses+Marg%2C+Mahalakshmi%2C+Mumbai%2C+Maharashtra+400013%2C+India!3m2!1d18.989914!2d72.823669!5e0!3m2!1sen!2s!4v1462911615501" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'abcd', 'abcd@gmail.com', 'abcd'),
(2, 'qwerty', 'qwerty@gmail.com', 'qwerty'),
(3, 'hahaha', 'sarah@hotmail.com', 'abcd'),
(6, 'shania', 'shaniasantwan@gmail.com', 'abcde12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shelter`
--
ALTER TABLE `shelter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
