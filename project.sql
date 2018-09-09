-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 06:46 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `deid` int(11) NOT NULL,
  `post` varchar(10000) NOT NULL,
  `Heading` varchar(1222) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`deid`, `post`, `Heading`, `image`) VALUES
(1, 'A sore throat refers to pain, itchiness, or irritation of the throat. You may have difficulty swallowing food and liquids, and the pain may get worse when you try to swallow. Throat pain is the primary symptom of a sore throa.A sore throat can affect people of all ages, but the risk of a sore throat is higher in some people. Sharing a close space with others also increases the risk of upper respiratory infections that can initially present as a sore throat.The majority of sore throats are triggered by a viral infection. These are infections caused by a virus, such as the cold or flu.', 'Sore Throat', 'image/1/throat.jpg'),
(1, 'Have you ever wondered why your healthcare provider looks inside your nose during an exam? When a person has a runny nose or congestion, the healthcare provider needs a good look at the source of the problem.\r\n\r\nHealthcare providers will look inside your nose as part of a routine healthy full physical exam. They will also look inside your nose when they suspect other problems like an infection or allergy. Sometimes, they''re looking for other sources of your breathing problem like a deviated septum. This is a shifting of the wall that divides the nasal cavity into halves.\r\n\r\nThe healthcare provider will use a light source with an instrument called a nasal speculum to get a clear view of about 1½ to 2 inches inside your nose if there is no congestion.\r\n\r\nOne of the first things he or she will notice is color. The color of your nasal membranes should be pink, the same color as healthy gums.\r\n\r\nIf your nasal membranes are bluish or pale and appear swollen, the healthcare provider may suspect you have allergic rhinitis. This is an inflammation caused by a nasal allergy. If this is the case, you might have a clear-to-white nasal discharge, and he or she might prescribe antihistamines or a nasal steroid to reduce the swelling.\r\n\r\nIf your nasal membranes are more red than pale and the discharge is thick and yellow, the healthcare provider will suspect an infection. If your infection involves the nose, throat, and ears and you have no fever or only a slight one, the healthcare provider might suspect a cold virus. Viruses often move around in the body. Many people will ask for an antibiotic when they have a cold, and many healthcare providers will explain that antibiotics may work against bacteria, but are powerless against a virus. For a viral infection in the nose, healthcare providers can prescribe decongestants to treat the symptoms.\r\n\r\nIf you have a fever, with tenderness around the bridge of your nose and at the top of your cheeks, the healthcare provider will suspect an infection that has invaded your sinuses.\r\n\r\nMucus in the sinuses usually drains into the nasal passages. When you have a sinus infection, those passages are not able to drain properly because of inflammation. An antibiotic might be used to treat it.\r\n\r\nNot all nasal problems are caused by allergy and infection. You can be born with a deviated septum or develop one from a broken nose. In both cases, nasal breathing can be difficult. Sometimes surgery is necessary.\r\n\r\nWhen a healthcare provider looks inside your nose, he or she may notice a nasal polyp. This is a growth on the mucous membrane. Sometimes, these polyps must be removed. Some people with polyps have asthma. Some also have a sensitivity to aspirin and/or a nonsteroidal anti-inflammatory medicine. If you have all of these symptoms, it''s called Samter''s triad.', 'What the Inside of Your Nose Reveals', 'image/1/nose.jpeg'),
(1, 'Keeping your ears healthy can help protect your hearing. Learn about health conditions that can affect your ears, and how to maintain healthy hearing. It''s all here on the ear health channel.People who have tinnitus perceive to hear sounds such as ringing, buzzing, roaring, whistling, or hissing sounds when there is actually no sound present. Tinnitus itself is not a condition. Rather, it can be a symptom of a variety of underlying conditions such as hearing loss, head trauma, physical or emotional stress, circulation disorders, ear infections, or migraines.\r\n\r\nIt can also occur as a result of the medications you are taking. Although it may be frustrating - and in some cases impossible - to find the cause of your tinnitus, there are some things you can do to manage it.To help prevent an outer ear infection, also known as swimmer''s ear or, dry your ears well after swimming or showering. You can try using a hair dryer set on the lowest setting for a few minutes. Swimming caps will help prevent water getting into the ear while swimming. You can also use eardrops with acetic acid or alcohol after swimming to neutralize possible infections. If these measures don''t work, contact your doctor.', 'Better Ear health for all', 'image/1/listen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `uid` varchar(33) NOT NULL,
  `did` varchar(33) NOT NULL,
  `serial` int(12) NOT NULL,
  `userm` varchar(1200) NOT NULL,
  `docm` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`uid`, `did`, `serial`, `userm`, `docm`) VALUES
('alex0', 'hasib1', 1, 'ty', '0'),
('alex0', 'hasib1', 2, 'yu', '0'),
('alex0', 'khitish1', 1, 'Khitish', '0'),
('alex0', 'khitish1', 2, 'Are u ok?', 'yea i''m ok'),
('alex0', 'hasib1', 3, 'Hi', '0'),
('alex0', 'hasib1', 4, 'Hi', '0'),
('alex0', 'hasib1', 5, 'Hi i am tushar', '0'),
('alex0', 'hasib1', 6, 'Can u help me?', '0'),
('alex0', 'khitish1', 3, 'whats your problem?', 'Nothing.Just worried'),
('alex0', 'khitish1', 4, 'Can you help me?', '0'),
('alex0', 'khitish1', 5, 'I am facing some health problem', '0'),
('alex0', 'hasib1', 7, 'dsa', '0'),
('alex0', 'hasib1', 8, 'hgfhg', 'Yea talk'),
('rafel', 'hasib1', 1, 'Hello sir', 'Go Back.I am busy now'),
('rafel', 'hasib1', 2, 'I am so sick..Plz help me.', 'Ok Tell your problem'),
('rafel', 'hasib1', 3, 'I am feeling so sick', 'Ok take napa 2 times a day'),
('alex0', 'khitish1', 6, 'Cau u help me?', 'ok take cetizin 2 times a day'),
('alex0', 'hasib1', 9, 'YYYYYYYY', 'RRRRR');

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE IF NOT EXISTS `don` (
  `did` varchar(12) NOT NULL,
  `depid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `don`
--

INSERT INTO `don` (`did`, `depid`) VALUES
('fuad1', 1),
('hasib1', 1),
('shaju1', 1),
('sourav1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donline`
--

CREATE TABLE IF NOT EXISTS `donline` (
  `did` varchar(12) NOT NULL,
  `Name` varchar(33) NOT NULL,
  `Dept` varchar(33) NOT NULL,
  `ostat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donline`
--

INSERT INTO `donline` (`did`, `Name`, `Dept`, `ostat`) VALUES
('fuad1', 'Fuad', 'Respiradory', 0),
('hasib1', 'Hasib', 'ENT', 0),
('khitish1', 'Khitish', 'ENT', 0),
('sdfdfaa', 'asddsfafsdadf', 'sdafdsadsfdfsa', 0),
('Shaju1', 'Shaju', 'Medicine', 1),
('sourav1', 'Sourav', 'Surgery', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` varchar(9) NOT NULL,
  `pass` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `pass`) VALUES
('rafel', 'rafel'),
('saigol', 'saigol'),
('saigoll', 'saigol'),
('tansif', 'tansif');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `uid` int(5) NOT NULL,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `mail` varchar(122) NOT NULL,
  `uname` varchar(12) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `admin` varchar(1) NOT NULL,
  `dept` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `fname`, `lname`, `mail`, `uname`, `pass`, `admin`, `dept`) VALUES
(1, 'Alauddin', 'Ahmed', 'alex@gmail.com', 'alex0', 'alex', '0', ''),
(2, 'Rafel_A', 'Ahad', 'Rafel_ahad@gmail.com', 'rafel', 'rafek', '0', ''),
(3, 'sakib', 'tushar', 'sakib@gmail.com', 'sakib00', 'sakib', '0', ''),
(4, 'shishir', 'ove', 'shishir@gmail.com', 'shishir00', '0000', '0', ''),
(5, 'ss', 'dd', '', 'sfda', 'asfd', '0', ''),
(6, 'sd', 'asd', 'qre@gmail.com', 'dsasd', 'sadsadsadas', '0', ''),
(7, 'Towhid', 'Saigol', 'saigg@gnail.com', 'Saigol', 'Saigolison', '0', ''),
(11, 'vh', 'gfhhg', 'gqre@gmail.com', 'sdf', 'ghfghgfh', '1', ''),
(14, 'dsfdf', 'sdfdfsfd', 'qrsde@gmail.com', 'sdfd', 'sdfsdfsddsf', '1', 'nose'),
(15, 'atikur', 'rahaman', 'atik@gmail.com', 'atik', 'aaaaaa', '1', 'TNT'),
(16, 'Shaju', 'Khadem', 's@gmail.com', 'Shaju1', '11111111', '1', 'Medicine'),
(17, 'Sourav', 'Rahaman', 'sourav@gmail.com', 'sourav1', '11111111', '1', 'Surgery'),
(18, 'Hasibur', 'Rahaman', 'hasib@gmail.com', 'hasib1', '1111', '1', 'ENT'),
(19, 'Fuad', 'Hasan', 'fuad@gmail.com', 'fuad1', '1111', '1', 'Respiradory'),
(20, 'Khitish', 'Khalko', 'khitish@gmail.com', 'khitish1', '1111', '1', 'ENT'),
(21, 'Tansif', 'Anzar', 'tansif.ruet13@gmail.com', 'tansif01', '111111', '0', 'x'),
(22, 'asdf', 'sdfg', 'saa@gmail.com', 'Fais1', '11111111', '1', 'ENT'),
(23, 'sdsd', 'sdsad', 'ad@gmail.com', 'fff', 'ffffffff', '1', 'ENT'),
(24, 'asdasd', 'asdsda', 'sdsdd@gmail.com', 'asas', 'assddasdds', '1', 'asds'),
(25, 'asddsfafsdad', 'ddsfdasdfsa', 'sdfa@gmail.com', 'sdfdfaa', 'sdffasfdfsa', '1', 'sdafdsadsfdfsa');

-- --------------------------------------------------------

--
-- Table structure for table `user_prob`
--

CREATE TABLE IF NOT EXISTS `user_prob` (
  `uid` varchar(15) NOT NULL,
  `serial` int(5) NOT NULL,
  `prob` varchar(200) NOT NULL,
  `dept` varchar(12) NOT NULL,
  `solve` varchar(1000) NOT NULL,
  `cons_by` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_prob`
--

INSERT INTO `user_prob` (`uid`, `serial`, `prob`, `dept`, `solve`, `cons_by`) VALUES
('alex0', 1, 'Alergic Rienatis', '1', '', ''),
('alex0', 2, 'I am suffering from cold alergy for last few years.But it doesnt be better yet', 'dd', '0', ''),
('alex0', 3, 'I am suffering from bronchaites for last few years.it becoming worse now', 'abc', '0', ''),
('alex0', 4, 'I am suffering from bronchaites for last few years.But it doesnt be better yet', '1', 'Avoid alergic food.Test your CBC blood test and consult me again.', ''),
('alex0', 5, 'assasad', '1', 'aaa', ''),
('alex0', 6, 'I have alergy', '1', 'aaa', ''),
('rafel', 1, 'I have skin prob', '1', 'aaa', ''),
('rafel', 2, 'I have skin alergt', '1', 'aaa', ''),
('rafel', 3, 'I am sick', '1', 'aas', ''),
('rafel', 12, 'asd', '1', 'Good.you have to stay away from cold things.', ''),
('rafel', 19, 'dfdaa', '4', '0', ''),
('rafel', 20, '', '4', '0', ''),
('rafel', 7, 'I am suffering from HSV', '3', '0', ''),
('rafel', 8, 'aaa', '', '0', ''),
('rafel', 9, 'aaa', '', '0', ''),
('rafel', 10, 'aaaaaaaaaaaaaaaaaaa', '', '0', ''),
('rafel', 11, 'ccccccccccccccc', '', '0', ''),
('rafel', 12, 'dddddddd', '', '0', ''),
('rafel', 13, 'aaaaaaaaaa', '', '0', ''),
('rafel', 14, 'kkkkkkk', '', '0', ''),
('rafel', 15, 'vvvvvvvv', '', '0', ''),
('rafel', 16, 'dddddddddddd', '', '0', ''),
('rafel', 17, 'Asma', '3', 'Use inhaler', ''),
('alex0', 7, 'I am suffering from HSV', '1', 'Good . you have to be safe.', ''),
('alex0', 8, 'I am sick', '1', '0', ''),
('alex0', 9, 'I have cold alergy.', '1', '0', ''),
('alex0', 10, 'I have some problem', '1', '0', ''),
('alex0', 11, 'I have some problem', '1', '0', ''),
('alex0', 12, 'I have some problem', '1', '0', ''),
('alex0', 13, 'I have some problem', '1', '0', ''),
('alex0', 14, 'I have some problem', '1', '0', ''),
('alex0', 15, 'I have some problem', '1', '0', ''),
('alex0', 16, 'I have some problem', '1', '0', ''),
('alex0', 17, 'I am suffering from faver', '1', '0', ''),
('alex0', 18, 'I have a problem', '1', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `donline`
--
ALTER TABLE `donline`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
