-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skin_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'test@123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `sub_title` varchar(100) NOT NULL DEFAULT '',
  `thumb_nail` varchar(100) NOT NULL DEFAULT '',
  `cou_image` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta` mediumtext DEFAULT NULL,
  `meta_desc` longtext DEFAULT NULL,
  `meta_link` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `uploaded_on` datetime DEFAULT current_timestamp(),
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `sub_title`, `thumb_nail`, `cou_image`, `description`, `meta_title`, `meta`, `meta_desc`, `meta_link`, `status`, `view_count`, `uploaded_on`, `date_time`) VALUES
(1, 'Blog testing', '', '', 'WhatsApp_Image_2024-04-25_at_11.30.17_AM-removebg-preview.png', 'In the quickly changing field of information technology, being proficient in Salesforce has become essential for prospective workers to stand out from the competition. Understanding the significance of utilising this revolutionary technology, JOJO Academy in Madurai has created a Salesforce Internship Programme specifically designed for novices. This piece dives into the specifics of the programme, examining how it meets the needs of people looking for Salesforce training online and in Madurai.\r\n<br><br>\r\n<h5>I. What Beginners in Salesforce Training Must Know:</h5>\r\nSalesforce has become an essential platform as companies depend more and more on customer relationship management (CRM) systems to improve client engagement and operational efficiency. The process of learning Salesforce might be intimidating for new users. This problem is addressed by JOJO Academy\'s Salesforce Training for Beginners, which offers an organised curriculum that conveys fundamental information and practical abilities. The course makes sure that beginners enter the field of Salesforce development with ease.\r\n<br><br>\r\n<h5>II. Master Salesforce Online: An Adaptable Method for Learning:</h5>\r\nAcknowledging the modern demand for flexible learning, JOJO Academy provides prospective Salesforce professionals with the option to \"Learn Salesforce Online.\" The online learning platform is accessible to students, working professionals, and those wishing to change careers because it is made to fit a variety of schedules. This flexibility allows people to learn at their own pace and creates an environment that is conducive to learning.\r\n<br><br>\r\n<h5>III. Adapting Education to Local Needs: Customising Education for Salesforce in Madurai</h5>\r\nThe culturally rich city of Madurai is becoming a centre for technological innovation. JOJO Academy is proud to have played a part in this expansion by providing a special Salesforce course in Madurai. The programme is carefully designed to match the unique needs of the regional labour market, guaranteeing graduates are equipped to handle the technical demands of Madurai\'s changing corporate environment.\r\n<br><br>\r\n<h5>IV. Madurai\'s Top Sales Force Academy: A Dedication to Excellence</h5>\r\nThanks to its constant dedication to educational excellence, JOJO Academy has been acclaimed as the \"Best Sales Force Academy in Madurai\". The staff at the school is made up of seasoned experts with a wealth of Salesforce development knowledge, so students are guaranteed to receive excellent teaching. The academy\'s reputation as a leader in high-quality education is also bolstered by its cutting-edge facilities and creative teaching strategies.\r\n<br><br>\r\n<h5>V. Salesforce Academy in Madurai: Promoting a Community of Learning:</h5>\r\nJOJO\'s opening of a special Salesforce Academy in Madurai is evidence of the academy\'s dedication to creating a learning community. Students can participate in cooperative projects, networking events, and mentorship programmes outside of the classroom. In addition to fostering a sense of camaraderie among students, this collaborative setting creates a forum for information sharing as well as acquisition.\r\n<br><br>\r\n<h5>VI. Madurai\'s Salesforce Institution: A Centre of Technological Excellence</h5>\r\nAs a Salesforce school in Madurai, JOJO Academy sees itself as a centre of technological innovation. The organisation is making a major contribution to the growth of a competent workforce in Madurai by concentrating on Salesforce. This increases the city\'s attractiveness as a growing location for IT specialists and companies looking to hire Salesforce developers.\r\n<br><br>\r\n<h5>VII. Take Advantage of Our Online Salesforce Development Course for Novices to Learn Salesforce:</h5>\r\nJOJO Academy\'s distinctive approach to Salesforce Development Training for Beginners is a testament to its dedication to providing high-quality instruction. This programme places a strong emphasis on actual, hands-on experience rather than theoretical notions. Students have a deep grasp of how Salesforce development translates into practical solutions through real-world scenarios and simulated work environments.\r\n<br><br>\r\n<h5>VIII. JOJO Academy Internship Programme: Uniting Theory and Practice</h5>\r\nThe inclusion of an internship programme is the cornerstone of JOJO Academy\'s educational philosophy. By bridging the knowledge gap between theory and practice, this programme gives students hands-on experience. Interns can work on real projects and apply their Salesforce skills in a professional situation thanks to partnerships with industry partners.\r\n<br><br>\r\nIX. Salesforce Internship Programme: Advancing Careers:</h5>\r\nThe JOJO Academy\'s Salesforce Internship Programme is a life-changing opportunity that introduces people to the world of Salesforce development. In addition to learning about industry procedures, participants develop a professional network that may help to influence their future employment. The programme gives participants a competitive edge in the employment market by serving as a launchpad.\r\n<br><br>\r\n<h5>X. Fostering Future Leaders: The Mission of REDOT Academy</h5>\r\nREDOT Academy\'s mission goes beyond simply teaching technical skills; it also aims to shape the future of Salesforce professionals. The academy wants to develop future leaders who can make significant contributions to the rapidly changing ICT sector. Through the cultivation of a passion for innovation, problem-solving, and ongoing education, JOJO  Academy prepares its alumni for success in navigating the ever-changing world of Salesforce development.\r\n<br><br>\r\n<h5>In summary:</h5>\r\nFinally, the Salesforce Internship Programme at JOJO Academy is evidence of the school\'s commitment to providing top-notch Salesforce instruction. The academy is a leader in Salesforce training, offering courses that are customised to local needs, accepting students from the beginning, and offering online learning choices. Starting this journey with JOJO Academy opens doors to a world of possibilities, where learning is not only a means to an end but a transformative experience impacting the future of Salesforce professionals, regardless of whether you are in Madurai or accessing the programme online.\r\n<br><br>\r\n', 'TopSalesforce Training Institute with Placement-JOJO Academy', 'Best sales force course in Madurai, Best salesforce course near me, Best salesforce training institute in Madurai, Best sales force training institute in Madurai with placement, Top 10 sales force training institute in Madurai, Sales force training institute in Madurai, Sales force institute in Madurai, Best salesforce training institute near me, Salesforce course training with internship', 'Join the best Salesforce course in Madurai at JOJO Academy – the top training institute providing Salesforce training with placement and internship opportunities', '', 'Active', 121, '2024-06-08 13:45:27', '2023-10-05 17:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL DEFAULT '',
  `sku` varchar(255) NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL,
  `session_id` varchar(200) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `payment_type` int(11) NOT NULL DEFAULT 0,
  `currency` varchar(255) DEFAULT '$',
  `remark` varchar(500) NOT NULL DEFAULT '',
  `primary_color` varchar(255) NOT NULL DEFAULT '',
  `product_type` varchar(255) NOT NULL DEFAULT '',
  `size` varchar(255) NOT NULL DEFAULT '',
  `beardo` varchar(255) NOT NULL DEFAULT '',
  `dimension` varchar(255) NOT NULL DEFAULT '',
  `finish_product` varchar(255) NOT NULL DEFAULT '',
  `offer` varchar(255) NOT NULL DEFAULT '',
  `courier_name` varchar(255) NOT NULL DEFAULT '',
  `courier_url` varchar(500) NOT NULL DEFAULT '',
  `delivery_id` varchar(255) NOT NULL DEFAULT '',
  `delivery_date` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(500) NOT NULL DEFAULT '',
  `status` varchar(155) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `name`, `url`, `status`) VALUES
(1, 'Testing', 'test.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `sub_title` varchar(100) NOT NULL DEFAULT '',
  `instructor` varchar(255) NOT NULL DEFAULT '',
  `thumb_nail` varchar(100) NOT NULL DEFAULT '',
  `cou_image` varchar(100) NOT NULL DEFAULT '',
  `short_description` mediumtext NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `meta_title` varchar(500) NOT NULL DEFAULT '',
  `meta_desc` longtext NOT NULL,
  `meta_link` varchar(500) NOT NULL DEFAULT '',
  `meta` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `uploaded_on` datetime DEFAULT current_timestamp(),
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_name`, `title`, `sub_title`, `instructor`, `thumb_nail`, `cou_image`, `short_description`, `description`, `meta_title`, `meta_desc`, `meta_link`, `meta`, `status`, `view_count`, `uploaded_on`, `date_time`) VALUES
(1, 'Others', 'Cyber Security', 'cyber-security-internship-and-training-courses', '', '', 'cyber-security.jpg', '', '<h1>Courses for Cyber Security internships at JOJO Academy</h1>\r\nBoost Digital Defenses with the Madurai Cyber Security Internship at JOJO Academy\r\n<br>\r\nAre you prepared to fend off online attacks and captivated by the world of Cyber Security? Take advantage of an immersive Cyber Security internship with JOJO Academy in the vibrant city of Madurai. Develop your knowledge in the ever-evolving field of Cyber Security and rise to the position of digital sentinel.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nWe at REDOT Academy understand how important Cyber Security is to protecting digital assets and privacy. Our goal is to equip people with the information and abilities necessary to succeed in Cyber Security and make a positive impact on the development of safe digital environments.\r\n<br><br>\r\n<b>Why Select the Cyber Security Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Cyber Security Education:</b>\r\n<br>\r\nEngage in real-world, interactive Cyber Security exercises that cover both basic and complex concepts.\r\n<br>\r\nBecome knowledgeable about Cyber Security methods, strategies, and best practices.\r\n<br>\r\n<b>2. Security of Networks:</b>\r\n<br>\r\nRecognize the fundamentals of network security and learn how to protect digital communication routes.\r\n<br>\r\nExamine various technologies, such as intrusion detection systems and firewalls.\r\n<br>\r\n<b>3. Penetration testing and ethical hacking:</b>\r\n<br>\r\nAcquire knowledge of penetration testing and ethical hacking methodologies.\r\n<br>\r\nBe aware of the methods for locating and fixing system vulnerabilities.\r\n<br>\r\n<b>4. Security Guidelines and Adherence:</b>\r\n<br>\r\nExamine the creation and application of security guidelines.\r\n<br>\r\nRecognize how crucial regulatory compliance is to Cyber Security.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your Cyber Security expertise on practical projects that mimic the difficulties encountered in a workplace setting.\r\nCreate a portfolio that highlights your achievements and projects related to Cyber Security.\r\n<br><br>\r\n<b>Program for Cyber Security Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: To obtain real-world experience, take part in live Cyber Security projects.\r\n<br>\r\nMentorship: Get advice from seasoned Cyber Security specialists and business leaders.\r\n<br>\r\nPortfolio Building: Assemble a collection of projects that showcase your expertise in Cyber Security and highlight your accomplishments.\r\n<br>\r\nCollaborative Learning: Take part in role-playing Cyber Security exercises, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nWith JOJO Academy, you can become a digital security guardian. Enroll in our Cyber Security internship program, and together, let\'s strengthen the digital frontier!\r\n<br>', 'JOJO Academy: Best Cyber Security Training Institute in Madurai', 'Enhance your skills with JOJO Academy, the top Cyber Security training institute in Madurai. Explore our online courses, training, and certification programs ', 'https://redotacademy.com/course-details.php?sub_title=cyber-security-internship-and-training-courses', 'Cyber security institute courses, Cyber security online course, best Cyber security training online, Cyber security institute in Madurai, Cyber security training near me, Cyber security course internship in Madurai,Cyber security training course in Madurai,Cyber security training institute in Madurai,Cyber security testing course details ,best Cyber security institute center in Madurai,best Cyber security course method for beginners, best Cyber security training with placement in Madurai', 'Active', 32, '2024-04-18 15:37:17', '2023-10-05 16:21:28'),
(2, 'Others', 'Angular', 'angular-internship-and-training-courses', '', '', 'angular.jpg', '', '<h1>Angular internship programs available at JOJO Academy</h1>\r\nImprove Your Front-End Skills with the Angular Internship at JOJO Academy in Madurai\r\n<br>\r\nDo you have a strong desire to create reliable and dynamic online applications? With the Angular Internship offered by JOJO Academy in the vibrant city of Madurai, you may fully immerse yourself in the potent world of Angular. Come along for a life-changing learning experience that will improve your knowledge of front-end development and put you on the fast track to becoming a skilled Angular developer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt REDOT Academy, we understand how important Angular is to contemporary web development. Our goal is to provide people with the information and abilities necessary to become proficient Angular programmers and make a positive impact on the constantly changing web application landscape.\r\n<br><br>\r\n<b>Why Select the Angular Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Angular Education:</b>\r\n<br>\r\nEngage in real-world, hands-on Angular coding assignments covering both basic and complex ideas.\r\n<br>\r\nBecome an expert in Angular architecture and Single-Page Application (SPA) development.\r\n<br>\r\n<b>2. Development Using Components:</b>\r\n<br>\r\nExamine the Angular component-based architecture ideas.\r\n<br>\r\nDiscover how to make components that are manageable and reusable.\r\n<br>\r\n<b>3. Recursive Functions with Dependency Injection</b>\r\n<br>\r\nRecognize the ideas behind dependency injection and services in Angular.\r\n<br>\r\nExamine the management of application state and the application of business logic.\r\n<br>\r\n<b>4. Navigation and Routing:</b>\r\n<br>\r\nLearn how to include navigation and routing in Angular apps.\r\n<br>\r\nDiscover how to use effective navigation to build seamless user experiences.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your Angular expertise on practical projects that replicate the difficulties encountered in a setting for web development professionals.\r\n<br>\r\nCreate a portfolio to highlight your achievements and projects with Angular.\r\n<br><br>\r\n<b>Program for Angular Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: To obtain real-world experience, take part in live Angular projects.\r\n<br>\r\nMentoring: Get advice from seasoned Angular developers and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a portfolio that showcases your Angular projects and shows off your skills.\r\n<br>\r\nCollaborative Learning: Take part in coding competitions, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nWith JOJO Academy, master Angular development. Join us as we define the future of web development by enrolling in our Angular internship!\r\n<br>', 'JOJO Academy: Top Angular Training Institute in Madurai', 'Discover excellence at JOJO Academy, the best Angular training institute in Madurai. We Offer Angular courses training, certification and Placements.', 'https://redotacademy.com/course-details.php?sub_title=angular-internship-and-training-courses', 'Angular training institute in Madurai, best Angular training institute in tamilnadu, top Angular  training institute in Madurai, Angular training online, Angular academy institute, Angular training institute, Angular course training institute, Angular certification training institutes in Madurai, Angular training and placement in Madurai, best Angular academy institute, top Angular academy institute in Madurai', 'Active', 30, '2024-04-18 15:38:02', '2023-10-17 12:19:35'),
(3, 'Others', 'React Js', 'react-js-internship-and-training-courses', '', '', 'react-js.jpg', '', '<h1>Courses for React JS internships available at JOJO Academy</h1>\r\nImprove Your Front-End Skills with the Madurai React.js Internship at JOJO Academy\r\n<br>\r\nDo you have a strong enthusiasm for creating responsive and dynamic user interfaces? With the React.js Internship offered by JOJO Academy in the vibrant city of Madurai, you may fully immerse yourself in the world of React.js. Come along for an interactive learning experience that will help you become a professional React.js developer and improve your front-end development skills.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nWe at JOJO Academy understand how important React.js is to front-end development nowadays. Our goal is to equip people with the know-how and abilities required to succeed in React.js programming and have a positive impact on the dynamic field of web development.\r\n<br><br>\r\n<b>Why Select the React.js Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical React.js Education:</b>\r\n<br>\r\nTake on real-world, interactive React.js coding challenges covering both basic and complex ideas.\r\n<br>\r\nDevelop your skills in creating dynamic, interactive user interfaces.\r\n<br>\r\n<b>2. Development of Single-Page Applications:</b>\r\n<br>\r\nDiscover the fundamentals of utilizing React.js to create Single-Page Applications (SPAs).\r\n<br>\r\nRecognize the principles of architecture based on components.\r\n<br>\r\n<b>3. Redux State Management:</b>\r\n<br>\r\nDiscover how to use Redux, a well-liked state management tool for React.js, to efficiently manage application state.\r\n<br>\r\nExamine the best approaches for maintaining and scaling React.js projects.\r\n<br>\r\n<b>4. Navigation and Routing:</b>\r\n<br>\r\nLearn how to use navigation and routing in React.js applications.\r\n<br>\r\nRecognize how to employ effective navigation to build seamless user experiences.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your React.js expertise on practical projects that replicate the difficulties encountered in a setting for professional development.\r\n<br>\r\nCreate a portfolio to display your achievements and React.js projects.\r\n<br><br>\r\n<b>Program for React.js Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Work on real-time React.js projects to obtain exposure to and experience with the actual world.\r\n<br>\r\nMentoring: Get advice from seasoned React.js developers and business experts.\r\n<br>\r\nPortfolio Building: Put together a portfolio that showcases your React.js projects and shows off your skills.\r\n<br>\r\nCollaborative Learning: Take part in coding competitions, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nLearn React.js development skills with JOJO Academy. Join us as we define the future of web development by enrolling in our React.js internship!\r\n<br>', 'JOJO Academy: Best React JS Online Courses & Certification Madurai', 'Elevate your skills with JOJO Academy\'s React JS training institute in Madurai. Our online React JS course with certification and placement Services. Join Now!', 'https://redotacademy.com/course-details.php?sub_title=react-js-internship-and-training-courses', 'React js training institute in Madurai, React jsinstitute in maduraitamilnadu, React js training and placement in Madurai, Best  Reactjs training in Madurai, React js online course with certification, React js courses near me, React js certificate course classes in Madurai, React js  online course, Best React js classes online,best React js course near me,React js training fees structure in Madurai', 'Active', 39, '2024-04-18 15:39:16', '2023-10-20 09:53:31'),
(4, 'others', 'Full Stack', 'full-stack-internship-and-training-courses', '', '', 'full-stack.jpg', '', '<h1>Courses for full-stack internships available at JOJO Academy</h1>\r\nDiscover Full-Stack Expertise with the Full Stack Internship at JOJO Academy in Madurai.\r\n<br>\r\nAre you prepared to go deeply into the vast realm of full-stack development? Come experience a life-changing Full Stack Internship in the lively city of Madurai by joining us at JOJO Academy. Take a trip around the whole web development spectrum, from front-end to back-end, and experience everything that will mold you into a flexible Full Stack developer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we are aware of how important full-stack development is to building scalable, dynamic websites. Our goal is to equip people with the know-how and abilities required to succeed in full-stack programming and have a positive impact on the dynamic field of web development.\r\n<br><br>\r\n<b>Why Select the Full Stack Internship with JOJO?</b>\r\n<br>\r\n<b>1. All-encompassing Full Stack Education:</b>\r\n<br>\r\nParticipate in real-world, interactive coding challenges that encompass front-end and back-end development.\r\n<br>\r\nLearn how to use technologies like JavaScript, HTML, CSS, Node.js, Express, and more.\r\n<br>\r\n<b>2. Front-End Programming:</b>\r\n<br>\r\nLearn about responsive web design concepts with HTML, CSS, and JavaScript.\r\n<br>\r\nLearn to design user interfaces that are interesting and easy to use.\r\n<br>\r\n<b>3. Back-end programming:</b>\r\n<br>\r\nLearn about server-side programming using Express and Node.js.\r\n<br>\r\nExamine database administration and how MongoDB and other technologies can be integrated.\r\n<br>\r\n<b>4. Integration and Management of Databases:</b>\r\n<br>\r\nLearn how to manage databases and incorporate them into your Full Stack apps through practical practice.\r\n<br>\r\nStudy the fundamentals of data modeling and storing.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your Full-stack expertise on real-world tasks that replicate the difficulties encountered in a setting for web development professionals.\r\n<br>\r\nCreate a portfolio that highlights your successes and full-stack projects.\r\n<br><br>\r\n<b>Program for Full Stack Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: To obtain real-world experience, work on live Full Stack projects.\r\n<br>\r\nMentoring: Get advice from seasoned Full Stack developers and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a portfolio that showcases your work on full-stack projects and shows off your expertise.\r\n<br>\r\nCollaborative Learning: Take part in coding competitions, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nJoin JOJO Academy as they take you on a full-stack mastery journey. Join us for our Full Stack Internship and together, let\'s influence web development in the future!\r\n<br>', 'JOJO Academy: Best Full Stack Online Courses & Certification', 'Unlock your potential with JOJO Academy\'s Full Stack course training in Madurai. Our online Full Stack learning program offers certification & placement.', 'https://redotacademy.com/course-details.php?sub_title=full-stack-internship-and-training-courses', 'Full stack course training institute, Full stack course training in Madurai, online full stack learning course, online full stack course with certificate, Full stack course online with placement, Full stack institutes in Madurai, Best full stack course for beginners, Full stack course information, Full stack certification training institutes in Madurai, best full stack training institute', 'Active', 38, '2024-04-18 15:40:07', '2023-10-20 09:54:24'),
(5, 'Others', 'SalesForce', 'sales-force-internship-and-training-courses', '', '', 'salesforce.jpg', '', '<h1>Salesforce internship courses at JOJO Academy</h1>\r\nElevate Your Career with JOJO Academy\'s SalesForce Internship in Madurai\r\n<br>\r\nAre you ready to delve into the world of cloud-based customer relationship management (CRM)? Join JOJO Academy for an immersive SalesForce Internship in the culturally vibrant city of Madurai. Explore the power of SalesForce, enhance your skills, and become a proficient SalesForce professional ready to transform business processes.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we recognize the transformative impact of SalesForce in streamlining customer interactions and driving business success. Our mission is to empower individuals with the knowledge and skills needed to excel in SalesForce and contribute to the future of customer relationship management.\r\n<br><br>\r\n<b>Why Choose the JOJO SalesForce Internship?</b>\r\n<br>\r\n<b>1. Comprehensive SalesForce Learning:</b>\r\n<br>\r\nDive into practical, hands-on SalesForce exercises covering the fundamentals and advanced features.\r\n<br>\r\nGain proficiency in SalesForce administration, customization, and development.\r\n<br>\r\n<b>2. SalesForce Administration:</b>\r\n<br>\r\nLearn to configure and customize SalesForce to meet business requirements.\r\n<br>\r\nExplore user management, security settings, and data management.\r\n<br>\r\n<b>3. SalesForce Development:</b>\r\n<br>\r\nUnderstand SalesForce development using Apex and Visualforce.\r\n<br>\r\nExplore the creation of custom applications and enhancements.\r\n<br>\r\n<b>4. SalesForce Integration:</b>\r\n<br>\r\nGain insights into integrating SalesForce with other business applications.\r\n<br>\r\nExplore best practices for data migration and system integration.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nApply your SalesForce skills to real-world projects that simulate the challenges faced in a professional CRM environment.\r\n<br>\r\nBuild a portfolio showcasing your SalesForce projects and accomplishments.\r\n<br><br>\r\n<b>SalesForce Internship Program:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Engage in live SalesForce projects to gain practical experience.\r\n<br>\r\nMentorship: Receive guidance from experienced SalesForce professionals and industry experts.\r\n<br>\r\nPortfolio Building: Create a portfolio highlighting your SalesForce projects and demonstrating your proficiency.\r\n<br>\r\nCollaborative Learning: Participate in SalesForce simulations, collaborate with fellow interns, and foster a supportive learning environment.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nBecome a SalesForce expert with REDOT Academy. Enroll in our SalesForce Internship and let\'s shape the future of CRM together!\r\n<br>', 'JOJO Academy: Best Salesforce Online Courses & Certification', 'Elevate your skills with Sales force training at JOJO Academy. Weoffer placement opportunities and certification. Join now and become a Salesforce expert.', 'https://redotacademy.com/course-details.php?sub_title=sales-force-internship-and-training-courses', 'Sales force online course with placement, Sales force online course with certification, best sales force training institute,Sales force training & internship, Sales force training course in Madurai, best sales force training with placement in Madurai, top sales force training with placement, Sales force academy courses in maduraitamilnadu, Sales force academy courses online, Sales force training institute in Madurai, best sales force institute center in Madurai, best sales force course method for beginners', 'Active', 36, '2024-04-18 15:41:09', '2023-10-20 09:55:27'),
(6, 'Others', 'VueJs', 'vue-js-internship-and-training-courses', '', '', 'vuejs.jpg', '', '<h1>Empower Your Web Development Journey : Vue.js Training and Internship at JOJO Academy</h1>\r\n Dive into the world of modern web development with JOJO Academy\'s Vue.js training and internship programs. Vue.js, a progressive JavaScript framework, is revolutionizing how developers create interactive and user-friendly web applications. \r\n<br><br> \r\nOur expert-led courses cover the fundamentals of Vue.js, including component-based architecture, state management, and integration with other technologies. Whether you\'re a novice or an experienced developer, our tailored learning paths accommodate diverse skill levels. \r\n<br><br> \r\nAt JOJO Academy, we believe in learning by doing. Internship opportunities provide participants with hands-on experience, allowing them to apply Vue.js skills to real-world projects under the mentorship of industry professionals. <br><br>\r\n Join JOJO Academy to become a proficient Vue.js developer, ready to build dynamic and responsive web applications. Contact us today to explore our Vue.js training programs and internship opportunities, and take the first step toward a successful career in modern web development. <br><br>', 'JOJO Academy: Best Vue.js Online Courses & Certifications', 'JOJO Academy to start your Vue.js journey. Our online certification and training programs are designed, providing excellent courses along with placement.', 'https://redotacademy.com/course-details.php?sub_title=vue-js-internship-and-training-courses', 'vue.js course for beginners, vue.js online training and certification, vue.js online training and placement, vue.js online training academy, vue.js online training and development, Top vue.js Courses & Tutorials Online, vue.js Online Training Courses, The 10 Best Online vue.js Classes, vue.js Courses and Certifications, Best  vue.js Courses for Beginners, Online vue.js Certification Course ', 'Active', 28, '2024-04-18 15:43:35', '2023-10-20 09:56:28'),
(7, 'Others', 'Java', 'java-internship-and-training-courses', '', '', 'java.jpg', '', '<h1>Internship programs in Java for JOJO Academy</h1>\r\nThe Java internship offered by JOJO Academy in Madurai will ignite your programming journey.\r\n<br>\r\nAre you excited to start a software development career and passionate about Java programming? Experience Java firsthand with the JOJO Academy\'s Java Internship in Madurai, a center of culture. Come learn with us in a stimulating environment that will improve your Java programming abilities and open doors to a lucrative software development career.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we understand how important Java is to creating dependable and expandable applications. Our goal is to equip people with the knowledge and abilities necessary to become proficient Java programmers and make a positive impact on the dynamic field of software engineering.\r\n<br><br>\r\n<b>Why Select the Java Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Java Education:</b>\r\n<br>\r\nTake part in real-world, interactive Java coding tasks that cover both basic and sophisticated aspects.\r\n<br>\r\nBecome an expert in object-oriented programming, data structures, and Java syntax.\r\n<br>\r\n<b>2. Web-based and Business Development:</b>\r\n<br>\r\nExamine web development Java frameworks like Spring and Hibernate.\r\n<br>\r\nLearn the fundamentals of developing Java corporate applications.\r\n<br>\r\n<b>3. Integration of Databases:</b>\r\n<br>\r\nFor effective data management, become knowledgeable about Java application-database integration.\r\n<br>\r\nUse JDBC (Java Database Connectivity) to obtain real-world experience with database connectivity.\r\n<br>\r\n<b>4. Continuity and Multithreading:</b>\r\n<br>\r\nLearn how to write Java apps using concurrency and multithreading.\r\n<br>\r\nRecognize how to create and run parallel and concurrent processes.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your Java expertise on practical projects that replicate the difficulties encountered in a workplace setting for software development.\r\n<br>\r\nCreate a portfolio to highlight your accomplishments and Java projects.\r\n<br><br>\r\n<b>Program for Java Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Work on real-world Java projects to obtain exposure to the real world and practical experience.\r\n<br>\r\nMentorship: Get advice from seasoned Java developers and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a collection of works that highlight your skills with Java programming.\r\n<br>\r\nCollaborative Learning: Take part in coding competitions, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nUse JOJO Academy to develop your Java development skills. Join us as we create the future of software development by enrolling in our Java internship!\r\n<br>', 'JOJO Academy: Best Java Training & Certificates Online', 'Top-notch Java training courses at JOJO Academy.The instructors are knowledgeable, the curriculum is comprehensive & the learning environment is top-notch.', 'https://redotacademy.com/course-details.php?sub_title=java-internship-and-training-courses', 'java training course online, Java Certification Training Course, Best Java Courses & Certificates Online, Java Course Online for Beginners, Learn Java with online courses and programs, Java Online Course for Beginners Free with Certificate, Java Free Online Course with Certification, Java Developer Certification Training Courses, Java Training Course Online with Placement, Java Online Training and Certification Course, Online Java Courses & Certifications, Java Online Course for Beginners', 'Active', 31, '2024-04-18 16:00:19', '2023-11-15 15:22:45'),
(8, 'Others', 'Python', 'python-internship-and-training-courses', '', '', 'python.jpg', '', '<h1>JOJO Academy Internship Programs in Python</h1>\r\nWith the Python Internship at JOJO Academy in Madurai, Unleash Your Coding Potential.\r\n<br>\r\nAre you excited to explore the rich world of Python and have a passion for programming? Experience the language of innovation firsthand with the Python internship program offered by JOJO Academy in the energetic city of Madurai. Come learn with us in a stimulating environment that will improve your Python programming abilities and put you on the path to being a skilled developer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we are aware of how Python may spur creativity and influence how software development is developed in the future. Our goal is to provide people with the information and abilities necessary to become proficient Python programmers and make a positive impact on the rapidly changing technology industry.\r\n<br><br>\r\n<b>Why Select the Python Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Python Education:</b>\r\n<br>\r\nEngage in real-world, interactive Python coding challenges covering both basic and complex ideas.\r\n<br>\r\nAcquire a thorough understanding of object-oriented programming, data structures, and Python syntax.\r\n<br>\r\n<b>2. Django Web Development:</b>\r\n<br>\r\nUse the Django framework, one of the most potent and popular frameworks in the Python community, to learn web programming.\r\n<br>\r\nRecognize the fundamentals of developing scalable and reliable online apps.\r\n<br>\r\n<b>3. Data Mining and Artificial Intelligence:</b>\r\n<br>\r\nDiscover the uses of Python for machine learning and data analysis.\r\n<br>\r\nExamine well-known libraries like Scikit-Learn, Pandas, and NumPy.\r\n<br>\r\n<b>4. Scripting and automation:</b>\r\n<br>\r\nLearn how to use Python for automation and scripting.\r\n<br>\r\nGain experience writing scripts to automate monotonous activities.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your Python expertise on practical projects that replicate the difficulties encountered in a setting for professional development.\r\n<br>\r\nCreate a portfolio to display your Python endeavors and successes.\r\n<br><br>\r\n<b>Program for Python Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Take part in live Python projects to obtain exposure to the real world and practical experience.\r\n<br>\r\nMentoring: Get advice from seasoned Python developers and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a portfolio that showcases your Python projects and shows off your skills.\r\n<br>\r\nCollaborative Learning: Take part in coding competitions, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nUse JOJO Academy to strengthen your Python programming skills. Join us as we create the future of software development by enrolling in our Python internship!\r\n<br>', 'JOJO Academy: Learn DevOps with Python Online Courses in Madurai', 'Discover Python with placement and certification with JOJO Academy\'s online courses Madurai. For top-notch instruction, training, internships, and placement.', 'https://redotacademy.com/course-details.php?sub_title=python-internship-and-training-courses', 'python online course with placement, python online course with certification, best python  training institute, python training & internship, python training course in Madurai, best python training with placement in Madurai, top python training with placement, python academy courses in maduraitamilnadu, python training institute in Madurai, best python institute center in Madurai, best python course method for beginners', 'Active', 29, '2024-04-18 15:59:16', '2023-11-15 15:23:23'),
(9, 'Others', 'Devops', 'deveops-internship-and-training-courses', '', '', 'devops.jpg', '', '<h1>Courses for DevOps internshipsavailable at JOJO Academy</h1>\r\nSimplify Software Development with the Madurai DevOps Internship at JOJO Academy\r\n<br>\r\nAre you prepared to close the knowledge gap between IT operations and software development? Come work as a DevOps intern for a significant amount of time at JOJO Academy in the vibrant city of Madurai. Take a deep dive into the concepts of DevOps, learn how to automate processes, and integrate yourself into the current software development lifecycle.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt REDOT Academy, we are aware of how DevOps can revolutionize software delivery and improve teamwork between development and operations. Our goal is to equip people with the know-how and abilities required to succeed in DevOps and support scalable and effective software development.\r\n<br><br>\r\n<b>Why Select the DevOps Internship with REDOT?</b>\r\n<br>\r\n<b>1. Thorough DevOps Education:</b>\r\n<br>\r\nParticipate in real-world, interactive DevOps exercises that cover deployment, automation, and continuous integration.\r\n<br>\r\nLearn how to use well-known DevOps tools like Kubernetes, Jenkins, Docker, and more.\r\n<br>\r\n<b>2. Orchestration and Automation:</b>\r\n<br>\r\nDiscover how to efficiently automate monotonous tasks and manage intricate software delivery pipelines.\r\n<br>\r\nFor scalable infrastructure management, comprehend the tenets of Infrastructure as Code (IaC).\r\n<br>\r\n<b>3. Constant Deployment and Integration:</b>\r\n<br>\r\nExamine the ideas behind continuous deployment and integration (CI/CD).\r\n<br>\r\nTo expedite the software delivery process, implement CI/CD pipelines.\r\n<br>\r\n<b>4. Using Microservices and Containerization:</b>\r\n<br>\r\nLearn the principles of container orchestration with Kubernetes and containerization with Docker.\r\n<br>\r\nExamine the advantages of microservices architecture in the creation of contemporary applications.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your DevOps expertise on practical projects that mimic the difficulties encountered in a setting dedicated to professional software development.\r\n<br>\r\nCreate a portfolio that highlights your DevOps achievements and projects.\r\n<br><br>\r\n<b>Program for DevOps Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Participate in ongoing DevOps initiatives to obtain real-world experience.\r\n<br>\r\nMentorship: Receive guidance from experienced DevOps professionals and industry experts.\r\n<br>\r\nPortfolio Building: Create a portfolio highlighting your DevOps projects and demonstrating your proficiency.\r\n<br>\r\nCollaborative Learning: Take part in simulations related to DevOps, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nTransform your approach to software development with JOJO ademy. Enroll in our DevOps Internship and let\'s shape the future of efficient and collaborative software delivery together!\r\n<br>', 'JOJO Academy |Learn DevOps with Top Online Courses training', 'Discover in-depth DevOps instruction and classes at JOJO. Receive skilled training to launch a lucrative DevOps career.Join Now and get placement assistance.', 'https://redotacademy.com/course-details.php?sub_title=deveops-internship-and-training-courses', 'Top DevOps Courses Online, Best DevOps Courses & Certificates Online, DevOps Course & Certification With Comprehensive Training, DevOps Certification Training Course, Learn DevOps with online courses and programs, DevOps Certification Program, DevOps Courses and Certification Training, Learn DevOps- The Certification Class, DevOps training courses and certificationDevOps Course Online with Certificate, Top DevOps Professional Certification Courses Online', 'Active', 17, '2024-04-18 15:54:24', '2023-11-15 15:23:58'),
(10, 'Others', 'PHP', 'php-internship-and-training-courses', '', '', 'php.jpg', '', '<h1>PHP internships JOJO Academy - Madurai</h1>\r\nImprove Your Web Development Career with the Madurai PHP Internship at JOJO Academy\r\n<br>\r\nDo you have a strong interest in creating dynamic websites and server-side scripting? With the PHP Internship offered by JOJO Academy in the vibrant city of Madurai, you may fully immerse yourself in the PHP world. Come experience a life-changing learning opportunity with us that will improve your PHP programming abilities and put you on the way to being a skilled web developer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we understand how important PHP is to the operation of dynamic websites. Our goal is to provide people with the information and abilities they need to succeed in PHP programming and have a positive impact on the rapidly changing web technology landscape.\r\n<br><br>\r\n<b>Why Select the PHP Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical PHP Education:</b>\r\n<br>\r\nEngage in real-world, interactive PHP coding exercises covering both basic and complex ideas.\r\n<br>\r\nAcquire a thorough understanding of object-oriented programming, functions, and PHP syntax.\r\n<br>\r\n<b>2. Integration of Databases:</b>\r\n<br>\r\nLearn how to use MySQL and PHP together to create dynamic, data-driven websites.\r\n<br>\r\nRecognize how to use PHP and SQL to carry out CRUD (Create, Read, Update, Delete) procedures.\r\n<br>\r\n<b>3. Web Development for Applications:</b>\r\n<br>\r\nExamine PHP frameworks and development tools for web applications.\r\n<br>\r\nEngage in practical projects that replicate the difficulties encountered in a professional PHP development setting.\r\n<br>\r\n<b>4. Top Security Techniques:</b>\r\n<br>\r\nLearn the best practices for PHP security to create reliable and safe online apps.\r\n<br>\r\nDiscover how to defend against online dangers and avoid common weaknesses.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your PHP expertise on practical projects that replicate the demands of the web development sector.\r\n<br>\r\nCreate a portfolio to display your PHP achievements and projects.\r\n<br><br>\r\n<b>Internship Program for PHP:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nReal-World Projects: Work on real-world PHP projects that adhere to industry standards to obtain real-world experience.\r\n<br>\r\nMentorship: Get advice from seasoned PHP developers and business experts.\r\n<br>\r\nPortfolio Development: Put together a portfolio that showcases your PHP work and demonstrates your expertise.\r\nCollaborative Learning: Participate in coding competitions, network with other interns, and create a collaborative learning atmosphere.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nUse JOJO Academy to develop your PHP development skills. Join us as we define the future of web development by enrolling in our PHP internship!\r\n<br>', 'JOJO Academy | Expert PHP Training & Certification Courses', 'Excel in PHP with our comprehensive certification course at JOJO Academy Madurai. Join our PHP training internship program with placement opportunities.', 'https://redotacademy.com/course-details.php?sub_title=php-internship-and-training-courses', 'php certification course, php developer certification, php course for beginnersphp training with placement, online php course with certificate,php training course with placement, php internship training in Madurai, php programs for beginners, php training online Madurai,php course training and placement, php course academy in Madurai, php training fees structure in Madurai', 'Active', 15, '2024-04-18 15:52:06', '2023-11-15 15:26:45'),
(11, 'Others', 'Dot Net', 'dot-net-internship-and-training-courses', '', '', 'dot-net.jpg', '', '<h1>Dot Net internship available at JOJO Academy</h1>\r\nEmbark on a Journey of Innovation with JOJO Academy\'s .NET Internship in Madurai\r\n<br>\r\nAre you ready to immerse yourself in the dynamic world of .NET development? You\'ve found it! JOJO Academy invites passionate individuals to join our exclusive .NET Internship program in the culturally rich city of Madurai. Discover the power of .NET, hone your coding skills, and become a proficient .NET developer poised for success in the evolving landscape of software development.\r\n<br><br>\r\n<b>About the Academy REDOT:</b>\r\n<br>\r\nAt JOJO Academy, we recognize the pivotal role of .NET in shaping modern applications. Our mission is to empower individuals with the knowledge and skills needed to excel in .NET development, fostering a community of innovators and problem-solvers.\r\n<br><br>\r\n<b>Why Choose the JOJO .NET Internship?</b>\r\n<br>\r\n<b>1. Comprehensive .NET Learning:</b>\r\n<br>\r\nImmerse yourself in hands-on exercises covering both the fundamentals and advanced features. NET.\r\n<br>\r\nGain proficiency in .NET development using C# and leverage the robust capabilities of Visual Studio.\r\n<br>\r\n<b>2. Web and Desktop Development Mastery:</b>\r\n<br>\r\nExplore the principles of web development using ASP.NET, creating dynamic and responsive web applications.\r\n<br>\r\nDive into desktop application development with Windows Presentation Foundation (WPF) for intuitive user interfaces.\r\n<br>\r\n<b>3. Database Integration Expertise:</b>\r\n<br>\r\nUnderstand seamless integration with databases using .NET technologies.\r\n<br>\r\nExplore database management with SQL Server and master Entity Framework for efficient data handling.\r\n<br>\r\n<b>4. Mobile App Development Prowess:</b>\r\n<br>\r\nGain insights into cross-platform mobile app development using Xamarin.\r\n<br>\r\nExplore native app development for iOS and Android platforms, opening avenues for versatile application creation.\r\n<br>\r\n<b>5. Real-world Projects for Practical Proficiency:</b>\r\n<br>\r\nApply your .NET abilities to real-world projects, mimicking the problems faced in a professional software development setting.\r\n<br>\r\nBuild a portfolio that showcases your .NET projects, demonstrating your prowess to prospective employers.\r\n<br><br>\r\n<b>.NET Internship Program Highlights:</b>\r\n<br>\r\nLive Projects: Engage in real-world .NET projects to obtain practical experience.\r\n<br>\r\nMentorship: Receive help from seasoned .NET developers and industry specialists.\r\n<br>\r\nPortfolio Building: Showcase your achievements through a personalized .NET project portfolio.\r\n<br>\r\nCollaborative Learning: Collaborate with fellow interns, participate in coding challenges, and foster a supportive learning environment.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nEmbark on a journey of creation with JOJO Academy\'s .NET Internship. Secure your position today and let\'s influence the future of software development together!\r\n<br>', 'JOJO Academy: Online Dot Net Courses with Certification', 'JOJO Academy\'s online Dot Net training classes. Obtain useful Dot Net credentials & help finding employment by using our extensive online training courses.', 'https://redotacademy.com/course-details.php?sub_title=dot-net-internship-and-training-courses', 'dot net training online with certification, dot net training online with placement, dot net certification course online, dot net course with placement,dot net course online, dot net course online  with certificate, dot net certification online training, dot net internship program, dot net internship program and certification, dot net internship program and courses', 'Active', 14, '2024-04-18 15:51:05', '2023-11-15 15:28:27'),
(12, 'Others', 'Oracle', 'oracle-internship-and-training-courses', '', '', 'oracle.jpg', '', '<h1>Oracle internships in JOJO Academy</h1>\r\nUnlock the power of Oracle with JOJO Academy\'s Oracle Training and Internship programs. As a leading IT training provider, we are committed to shaping the next generation of Oracle professionals by offering comprehensive courses that cover the entire Oracle ecosystem.\r\n<br><br>\r\nOur expert-led training encompasses key areas such as Oracle Database Administration (DBA), Oracle Cloud Solutions, and SQL/PLSQL Development. Whether you are a beginner or an experienced IT professional, our customized learning paths cater to diverse skill levels.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our hands-on approach. Through internship opportunities, participants can apply their Oracle skills to real-world projects, gaining invaluable practical experience under the guidance of seasoned professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a proficient Oracle expert, equipped with the skills demanded by the evolving IT industry. Contact us today to explore our Oracle training programs and internship opportunities and take the first step toward a successful career in Oracle technologies.\r\n<br><br>', 'JOJO Academy: Best Oracle Training and Certificates Online', 'JOJO Academy offers thorough Oracle software training and certification programs. Join our renowned Oracle training center in Madurai for online courses.', 'https://redotacademy.com/course-details.php?sub_title=oracle-internship-and-training-courses', 'Oracle Software Training and Certification, Oracle Training and Certification, Best Oracle Courses & Certificates Online, Oracle Training in Madurai, Oracle Courses with Certificates Online, Best Oracle Training Institute in Madurai', 'Active', 20, '2024-04-18 15:49:45', '2023-11-15 15:29:17'),
(13, 'Others', 'Data Science', 'data-science-internship-and-training-courses', '', '', 'data-science.jpg', '', '<h1>Data analysis internships available at JOJOAcademy</h1>\r\nTake a look at the world of data science with the Madurai internship offered by JOJO Academy.\r\n<br>\r\nAre you keen to discover the insights hidden within data and captivated by its power? With the JOJO Academy\'s data science internship in the center of Madurai, you may fully immerse yourself in the exciting field of data science. Come learn with us in an immersive setting that will give you the information and abilities you need to succeed in the data-driven age.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nWe at JOJO Academy are aware of how Data Science is revolutionizing several businesses and decision-making processes. Our goal is to provide people with the knowledge and skills necessary to succeed in data science and contribute to creative solutions.\r\n<br><br>\r\n<b>Why Select the Data Science Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Instruction in Data Science:</b>\r\n<br>\r\nTake on real-world, interactive data science tasks that involve statistical modeling, machine learning, and data analysis.\r\n<br>\r\nBecome proficient with well-known programs and libraries, including Scikit-Learn, Pandas, NumPy, and Python.\r\n<br>\r\n<b>2. Analyzing exploratory data (EDA):</b>\r\n<br>\r\nDevelop your skills in data exploration and visualization to draw insightful conclusions.\r\n<br>\r\nRecognize the significance of cleaning and preparing data.\r\n<br>\r\n<b>3. Uses of Machine Learning:</b>\r\n<br>\r\nExamine machine learning techniques for clustering, regression, and classification.\r\n<br>\r\nUtilize machine learning methods to resolve practical issues.\r\n<br>\r\n<b>4. Quantitative Analysis:</b>\r\n<br>\r\nLearn statistical modeling fundamentals to make informed decisions based on facts.\r\n<br>\r\nRecognize regression analysis, hypothesis testing, and other concepts.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your data science expertise on practical projects that reflect the difficulties encountered in the workplace.\r\n<br>\r\nCreate a portfolio to highlight your accomplishments and initiatives in data science.\r\n<br><br>\r\n<b>Program for Data Science Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: To obtain real-world experience, take part in live Data Science projects.\r\n<br>\r\nMentorship: Get advice from seasoned data scientists and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a collection of projects that showcase your work in Data Science and show off your skills.\r\n<br>\r\nCollaborative Learning: Take part in group projects, talk with peers about new perspectives, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nGet trained as a Data Scientist at JOJO Academy. Enroll in our internship program in data science, and together, let\'s help define the direction of data-driven innovation!\r\n<br>', 'JOJO Academy: Best Data Science Courses Online with Placement', 'Enroll in JOJO Academyto take advantage of the best online courses in data science.Learn more about our extensive data science training program.', 'https://redotacademy.com/course-details.php?sub_title=data-science-internship-and-training-courses', 'data science online course with certificate, data science online course with placement, data science training program, data science course training, Best Data Science Courses Online, Data Science Training Course, Best Online Data Science Course with Training, Data Science Courses Online & Training, Data Science Training Program, Best Online Data Science Courses and Programs, Data Science institute near me', 'Active', 16, '2024-04-18 15:48:52', '2023-11-15 15:30:07'),
(14, 'Others', 'Photoshop', 'photoshop-internship-and-training-courses', '', '', 'photoshop.jpg', '', '<h1>Master the Art of Digital Creativity with JOJO Academy | Photoshop Training and Certification</h1>\r\nExplore the endless possibilities of digital design at JOJO Academy through our comprehensive Photoshop Training and Internship programs. Whether you\'re a budding artist or a seasoned designer, our expert-led courses are designed to elevate your skills and empower you to create visually stunning masterpieces.\r\n<br><br>\r\nOur unique training approach goes beyond traditional methods, offering hands-on projects, real-world applications, and personalized mentorship. Dive into the world of Photoshop and learn the intricacies of photo editing, graphic design, and digital illustration under the guidance of industry professionals.\r\n<br><br>\r\nWhat sets REDOT Academy apart is our commitment to bridging the gap between theory and practice. Through internship opportunities, you\'ll have the chance to apply your newfound skills in real-world projects, building a robust portfolio that showcases your creative prowess.\r\n<br><br>\r\nJoin JOJO Academy to transform your passion for design into a rewarding career. Contact us today to learn more about our Photoshop training.\r\n<br><br>', 'JOJO Academy: Top Online Photoshop Courses with Placement', 'At JOJO Academy, find the top online Photoshop courses with placement. Enroll now in the top ten beginner-friendly online Photoshop course classes. ', 'https://redotacademy.com/course-details.php?sub_title=photoshop-internship-and-training-courses', 'Photoshop Courses with placement, Best Photoshop Courses & Certificates Online ,Top Photoshop Courses & Tutorials Online, Photoshop Online Training Courses,Photoshop Training Classes, The 10 Best Online Photoshop Classes, Photoshop Courses and Certifications, Best  Photoshop Courses for Beginners, Online Photoshop Certification Course, Photoshop institute near me', 'Active', 21, '2024-04-18 15:47:18', '2023-11-15 15:32:01');
INSERT INTO `courses` (`id`, `category_name`, `title`, `sub_title`, `instructor`, `thumb_nail`, `cou_image`, `short_description`, `description`, `meta_title`, `meta_desc`, `meta_link`, `meta`, `status`, `view_count`, `uploaded_on`, `date_time`) VALUES
(15, 'Others', 'Graphic Designing', 'graphic-designing-internship-and-training-courses', '', '', 'graphic-designing.jpg', '', '<h1>Graphic Design internships at JOJO Academy</h1>\r\nWith the graphic design internship offered by JOJO Academy in Madurai, you may unleash your creativity.\r\n<br>\r\nDo you have a strong enthusiasm for graphic design and visual storytelling? Experience the fascinating field of graphic design in the bustling city of Madurai by participating in the Graphic Designing Internship program offered by JOJO Academy. Come learn with us in a stimulating environment that will develop your design abilities and put you on the path to being a skilled graphic designer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we are aware of how important graphic design is to branding and communication. Our goal is to equip people with the knowledge and abilities necessary to succeed in graphic design and make a positive impact on the dynamic field of visual arts.\r\n<br><br>\r\n<b>Why Select the Graphic Designing Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Design Education:</b>\r\n<br>\r\nEngage in real-world, hands-on design projects that address layout, visual communication, and graphic design principles.\r\n<br>\r\nLearn how to use design software that is used by professionals, such as Adobe Creative Suite.\r\n<br>\r\n<b>2. Designing an identity and branding:</b>\r\n<br>\r\nDiscover the craft of producing powerful identity and branding concepts.\r\n<br>\r\nDiscover the significance of using visual components to communicate a brand\'s message.\r\n<br>\r\n<b>3. User Experience and Digital Design:</b>\r\n<br>\r\nRecognize the fundamentals of digital design for mobile apps, social media, and websites.\r\n<br>\r\nExamine user experience (UX) design ideas to develop logical and captivating user interfaces.\r\n<br>\r\n<b>4. Print Design and Promotional Materials:</b>\r\n<br>\r\nGain expertise in print design, including creating flyers, brochures, and other marketing materials.\r\n<br>\r\nRecognize how to modify designs for different print sizes.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your graphic design abilities on practical projects that replicate the difficulties encountered in a workplace setting for designers.\r\n<br>\r\nCreate a portfolio to display your achievements and graphic design work.\r\n<br><br>\r\n<b>Program for Graphic Design Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: To obtain real-world experience, take part in live graphic design projects.\r\n<br>\r\nMentorship: Get advice from seasoned graphic designers and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a collection of your best graphic design work that showcases your abilities.\r\n<br>\r\nCollaborative Learning: Take part in design reviews, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nLearn how to design graphics effectively with JOJO Academy. Enroll in our internship program for graphic design, and together, let\'s influence the direction of visual communication!\r\n<br>', 'JOJO Academy | Leading Graphic Designing Courses with Placement', 'Explore our graphic design courses with placement & certificates, both online and in-person. Join for top-notch training and an exciting internship experience', 'https://redotacademy.com/course-details.php?sub_title=graphic-designing-internship-and-training-courses', 'graphic designing institute near me, graphic designing course near me, graphic designing course with placement, graphic designing course with certificate, graphic design courses with certificates online, graphic design academy courses online, graphic design course in Madurai, graphic design course training in Madurai, best graphic design training institute, graphic design training & internship', 'Active', 17, '2024-04-18 15:44:53', '2023-11-15 15:33:27'),
(16, 'Others', 'AWS Devops', 'aws-devops-internship-and-training-courses', '', '', 'aws.jpg', '', '<h1>The Cloud Heights with JOJO Academy: AWS DevOps Training & Certification</h1>\r\nEmbrace the future of cloud computing and DevOps with JOJO Academy\'s cutting-edge AWS DevOps Training and Internship programs. As industries rapidly adopt cloud solutions, there\'s a growing demand for skilled professionals who can seamlessly integrate development and operations using Amazon Web Services (AWS).\r\n<br><br>\r\nOur expert-led courses provide hands-on experience in deploying and managing applications on AWS, automating infrastructure, and implementing continuous integration/continuous delivery (CI/CD) pipelines. JOJO Academy\'s commitment to practical learning extends to internship opportunities where you can apply your skills to real-world projects, gaining invaluable experience in the ever-evolving DevOps landscape.\r\n<br><br>\r\nWhether you\'re a novice or an experienced professional, our customized training paths cater to diverse skill levels. Join JOJO Academy to become a proficient AWS DevOps engineer, ready to navigate the complexities of modern software development.\r\n<br><br>\r\nContact us today to explore our AWS DevOps training programs and internship opportunities and take the first step towards a successful career in cloud computing.\r\n<br><br>', 'JOJO Academy- Master AWS DevOps with Comprehensive Training', 'Learn about AWS DevOps in JOJO Academy located in Madurai.It provides thorough instruction & career placement services. Enroll in the top AWS DevOps course!', 'https://redotacademy.com/course-details.php?sub_title=aws-devops-internship-and-training-courses', 'awsdevops internship certification, awsdevops institute courses, best awsdevops training online, awsdevops training near me, awsdevops course internship in Madurai, awsdevops training course in Madurai, awsdevops training institute in Madurai, awsdevops testing course details, best awsdevops institute center in Madurai, best awsdevops course method for beginners, best awsdevops training with placement in Madurai', 'Active', 19, '2024-04-18 15:32:34', '2023-11-15 15:36:10'),
(17, 'Others', 'Business Analyst', 'business-analyst-internship-and-training-courses', '', '', 'business-analyst.jpg', '', '<h1>Business AnalystTraining & Certification</h1>\r\nUnlock the doors to success in the dynamic field of business development with JOJO Academy\'s specialized training and internship programs. Our comprehensive courses are meticulously designed to equip you with the skills and knowledge needed to thrive in the competitive world of corporate growth and strategy.\r\n<br><br>\r\nLed by experienced industry professionals, our training programs cover a wide spectrum of business development essentials, including market analysis, strategic planning, client acquisition, and relationship management. What sets JOJO Academy apart is our commitment to bridging theory and practice, ensuring that you not only understand business development concepts but also know how to apply them effectively in real-world scenarios.\r\n<br><br>\r\nComplement your training with our internship opportunities, offering hands-on experience and mentorship from seasoned professionals. Whether you\'re a recent graduate or a professional looking to enhance your skill set, JOJO Academy provides tailored learning paths to suit your career aspirations.\r\n<br><br>\r\nTake the first step towards a successful career in business development. Contact JOJO Academy today to explore our training programs and internship opportunities and unlock your potential in the world of corporate growth.\r\n<br><br>', 'JOJO Academy | Your Career with Business Analyst Courses', 'Take advantage of new opportunities by enrolling in business analyst courses at JOJO Academy. For fulfilling job, enroll in the top business analyst institute', 'https://redotacademy.com/course-details.php?sub_title=business-analyst-internship-and-training-courses', 'business analyst course with placement, business analyst course online  with certificate, business analyst institute near me, business analyst course institute, business analyst online certification course, business analyst certification online training, business analyst internship program, business analyst internship program and certification, business analyst internship program and courses', 'Active', 31, '2024-04-18 15:31:35', '2023-11-15 15:37:55'),
(18, 'Others', 'Digital Marketing & Seo', 'digital-marketing-and-seo-internship-and-training-courses', '', '', 'seo.jpg', '', '<h1>SEO and digital marketing internship program in JOJO Academy</h1>\r\nAdvance Your Career with the Madurai Digital Marketing & SEO Internship at JOJO Academy\r\n<br>\r\nAre you keen to learn about the subtleties of SEO and have a strong interest in the ever-evolving field of digital marketing? Take advantage of the Digital Marketing & SEO Internship offered by JOJO Academy in the vibrant city of Madurai to immerse yourself in the world of online visibility and strategic marketing. Come study with us in a fascinating way that will help you improve your search engine optimization and digital marketing abilities.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>	\r\n<br>\r\nAt JOJO Academy, we are aware of how important SEO and digital marketing are to building a solid online presence. Our goal is to equip people with the know-how and abilities necessary to succeed in the rapidly changing field of digital marketing.\r\n<br><br>\r\n<b>Why Select the SEO & Digital Marketing Internship with JOJO?</b>\r\n<br>\r\n<b>1. All-inclusive Instruction in Digital Marketing:</b>\r\n<br>\r\nIndulge in a thorough education that covers a range of digital marketing topics, such as email, content, and social media marketing.\r\n<br>\r\nGet practical experience with the equipment and methods that the industry uses.\r\n<br>\r\n<b>2. SEO Techniques & Strategies:</b>\r\n<br>\r\nDiscover the art of search engine optimization for websites.\r\n<br>\r\nRecognize keyword research, on-page and off-page optimization techniques, analytics, and SEO methods.\r\n<br>\r\n<b>3. Management of Social Media:</b>\r\n<br>\r\nExamine social media marketing strategies for engagement and brand promotion.\r\n<br>\r\nDiscover how to design and carry out successful social media marketing.\r\n<br>\r\n<b>4. Excellent Content Marketing:</b>\r\n<br>\r\nRecognize the fundamentals of content marketing to increase organic visitors.\r\n<br>\r\nTo improve your online presence, write interesting and search-engine-optimized content.\r\n<br>\r\n<b>5. Reporting and Analytics:</b>\r\n<br>\r\nLearn how to assess and evaluate the effectiveness of digital marketing efforts using analytics tools.\r\n<br>\r\nGain expertise in producing intelligent reports for data-driven decision-making.\r\n<br><br>\r\n<b>Program for Digital Marketing and SEO Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive initiatives: To obtain real-world experience, take part in live digital marketing initiatives.\r\n<br>\r\nMentorship: Get advice from seasoned SEO specialists and digital marketers.\r\n<br>\r\nBuilding a Portfolio: Put together a portfolio that highlights your work and achievements.\r\n<br>\r\nCollaborative Learning: Take part in real-world initiatives, cooperate with other interns, and cultivate a collaborative learning atmosphere.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nWith JOJO Academy, you may become an expert SEO strategist and digital marketer. Join our internship program, and together, let\'s mold the direction of internet marketing!\r\n<br>', 'JOJO Academy: Digital Marketing and SEO Training Centre in Madurai', 'The SEO and digital marketing courses from JOJO Academy can help you reach your full potential. Acquire practical experience, certification& Job Assistance', 'https://redotacademy.com/course-details.php?sub_title=digital-marketing-and-seo-internship-and-training-courses', 'digital-marketing-and-seo course with placement, digital-marketing-and-seo course online with placement, best digital-marketing-and-seo institutes in Madurai, best digital-marketing-and-seo course for beginners, digital-marketing-and-seo course information, digital-marketing-and-seo certification training institutes in Madurai, digital-marketing-and-seo course duration month, digital marketing and seo training course, best digital marketing and seo training institute, digital marketing and seo training & internship, digital marketing and seo online course with Placement', 'Active', 15, '2024-04-18 15:30:37', '2023-11-15 15:39:24'),
(19, 'Others', 'C and C++', 'c-and-c++-internship-and-training-courses', '', '', 'c++.jpg', '', '<h1>C and C++</h1>\r\nLearn to program in C and C++ with courses and an internship at JOJO Academy in Madurai.\r\n<br>\r\nWith the thorough C and C++ training offered by JOJO Academy, together with fantastic internship possibilities located right in the center of Madurai, you can unleash the power of programming languages. Our courses are designed to accommodate students of all ability levels, whether you\'re a novice trying to get started with programming or an enthusiast looking to hone your skills.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nWe at JOJO Academy are committed to promoting quality in programming. Our courses and internship programs are designed to provide people with the information and abilities required for success in the fast-paced area of software development, with an emphasis on practical learning and real-world application.\r\n<br><br>\r\n<b>Highlights of the C and C++ Courses:</b>\r\n<br>\r\n<b>1. Programming Foundations:</b>\r\n<br>\r\nLearn the syntax and underlying ideas of C and C++ by diving into the basics.\r\nLearn the fundamentals of algorithmic reasoning and problem-solving strategies.\r\n<br>\r\n<b>2. Algorithms and Data Structures:</b>\r\n<br>\r\nLearn how to use and modify fundamental C and C++ data structures.\r\nRecognize the fundamentals of algorithmic design and optimize code for effectiveness.\r\n<br>\r\n<b>3. Application Creation:</b>\r\n<br>\r\nGet practical experience writing C and C++ programs.\r\nEngage in real-world projects that will improve your ability to code practically.\r\n<br>\r\n<b>4. Tools for Code Optimization:</b>\r\n<br>\r\nLearn how to write performance-optimized, streamlined code. Examine methods for debugging and solving typical programming problems.\r\n<br><br>\r\n<b>Program for C and C++ Internships:</b>\r\n<br>\r\nWith our internship program, which is intended to provide you exposure to the real world and allow you to put your programming abilities to use, you can extend your study beyond the classroom.\r\n<br><br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive initiatives: Engage in initiatives that are relevant to the industry and model real-world programming difficulties.\r\nMentoring: Get advice from seasoned mentors and business experts.\r\n<br>\r\nCollaborative Setting: Assist in group projects, interact with colleagues, and cultivate a collaborative learning community.\r\n<br>\r\nBuilding Your Portfolio: Throughout the internship, compile a portfolio that highlights your abilities, accomplishments, and projects.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\nEnter a world of creativity, problem-solving, and coding. Your road to becoming a C and C++ master is REDOT Academy. Enroll today, and together, let\'s mold the direction of software development!\r\n<br>', 'Expert C and C++ Training Courses Online in JOJO Academy Madurai', 'Improve your programming abilities with the online C and C++ courses offered by JOJO Academy. C and C++ internship courses to obtain real-world experience.', 'https://redotacademy.com/course-details.php?sub_title=c-and-c++-internship-and-training-courses', 'C and C++ courses online, C and C++ online course with certificate, C and C++ online course training in Madurai, C and C++ Training Program, C and C++ online course with internship, C and C++ course duration, C and C++ internship courses, C and C++ internship and placement in Madurai', 'Active', 21, '2024-04-18 15:29:21', '2023-11-15 15:39:56'),
(20, 'Others', 'Spring', 'spring-internship-and-training-courses', '', '', 'spring.jpg', '', '<h1>SpringTraining & Certification Program in JOJO Academy</h1>\r\nEmbark on a transformative journey into Java development with JOJO Academy\'s Spring Training and Internship programs. As businesses increasingly adopt the versatile Spring Framework, there\'s a growing demand for skilled developers who can design robust and scalable Java applications.\r\n<br><br>\r\nOur expert-led courses delve into the intricacies of the Spring Framework, covering aspects such as dependency injection, aspect-oriented programming, and data access. Whether you\'re a novice or an experienced developer, REDOT Academy\'s customized training paths cater to diverse skill levels, ensuring a tailored learning experience.\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities allow you to apply your newfound skills to real-world projects, gaining hands-on experience under the mentorship of seasoned professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a proficient Spring Framework developer, ready to navigate the evolving landscape of Java development. Contact us today to explore our Spring training programs, and internship opportunities, and take the first step towards a successful career in Java development.\r\n<br><br>', 'Expert Spring Training & Certification Courses in JOJO Academy', 'Improve your abilities with the best online Spring Boot courses and certifications. With JOJO Academy, you may improve your career and learn from the finest.', 'https://redotacademy.com/course-details.php?sub_title=spring-internship-and-training-courses', 'SpringSource Certification Program, Spring Courses and Certification Training, Learn Spring - The Certification Class, spring boot training courses and certification, Spring Boot Course Online with Certificate, Top Spring Professional Certification Courses Online, Best Spring Boot Courses & Certificates Online, Top Spring Framework Courses Online', 'Active', 27, '2024-04-18 15:26:03', '2023-11-15 15:40:41'),
(21, 'Others', 'Hardware & Networking', 'hardware-networking-internship-and-training-courses', '', '', 'hardware.jpg', '', '<h1>Unleash Your Potential in Networking Excellence with JOJO Academy | Hardware & Networking Training and Internship Programs</h1>\r\nEquip yourself with the essential skills for a thriving career in IT infrastructure with JOJO Academy\'s hardware and networking training and internship programs. As the backbone of every organization, the demand for proficient hardware and networking professionals continues to soar.\r\n<br><br>\r\nOur expert-led courses cover a wide spectrum of topics, including network design, configuration, troubleshooting, and hardware maintenance. Whether you\'re an aspiring IT professional or looking to enhance your skills, JOJO Academy offers tailored learning paths to suit your career aspirations.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to hands-on learning. Our internship opportunities provide real-world experiences, allowing you to apply your knowledge in practical scenarios under the guidance of seasoned professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a skilled hardware and networking professional, ready to tackle the challenges of the ever-evolving IT landscape. Contact us today to explore our training programs and internship opportunities, and take the first step towards a successful career in hardware and networking.\r\n<br><br>', 'Hardware and Network training and Internship Courses at JOJO Academy ', 'Our organization provides thorough instruction, help finding employment and certification. Enroll today to receive excellent training in networking and hardware', 'https://redotacademy.com/course-details.php?sub_title=hardware-networking-internship-and-training-courses', 'hardware and networking course, hardware and networking course training in Madurai, hardware and networking course training and placement, hardware and networking course training and certification, hardware and networking course training institute, best hardware and networking course training institute in Madurai, hardware and networking course training institute near me, hardware and networking academy courses, hardware and networking course with placement, best hardware and networking course for beginners', 'Active', 24, '2024-04-18 15:25:20', '2023-11-15 15:42:21'),
(22, 'Others', 'DCA', 'dca-internship-and-training-courses', '', '', 'dca.jpg', '', '<h1>Dive into Digital Competence with JOJO Academy: DCA Training and Internship Programs for Future IT Leaders</h1>\r\n\r\nUnlock the power of data with JOJO Academy\'s comprehensive Data Center Administration (DCA) Training and Internship programs. In today\'s data-driven world, the demand for skilled professionals who can effectively manage and secure data centers is higher than ever.\r\n<br><br>\r\nOur expert-led courses delve into the core principles of data center administration, covering aspects such as server management, virtualization, and data security. Whether you\'re a novice looking to enter the IT field or an experienced professional seeking to enhance your skill set, JOJO Academy provides tailored learning paths to suit your career goals.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities allow you to apply your knowledge in real-world data center scenarios, gaining hands-on experience under the guidance of seasoned professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a proficient Data Center Administrator, ready to navigate the complexities of modern data management. Contact us today to explore our DCA training programs, and internship opportunities, and take the first step towards a successful career in data administration.\r\n<br><br>', 'Elevate Your Skills DCA Training Institute in JOJO Academy Madurai', 'Discover the best DCA course training available at Madurai\'s JOJO Academy.For in-depth instruction, our DCA training centre is the best option.', 'https://redotacademy.com/course-details.php?sub_title=dca-internship-and-training-courses', 'dca course training in Madurai, dca course institute, dca course institute near me, dca course duration and fees, dca course training and placement, dca course training and placement in Madurai, dca course training and certification, dca training academy in Madurai, dca course center near me', 'Active', 15, '2024-04-18 15:24:42', '2023-11-15 15:42:57'),
(23, 'Others', 'Tally', 'tally-internship-and-training-courses', '', '', 'tally.jpg', '', '<h1>Tally internship at JOJO Academy in madurai</h1>\r\nMaster Financial Management with the Madurai Tally Internship at JOJO Academy\r\n<br>\r\nAre you excited to learn more about Tally and have a strong interest in financial management? With the Tally Internship program offered by JOJO Academy in the vibrant city of Madurai, you may fully immerse yourself in the subtleties of accounting software. Come learn with us in a way that will improve your accounting knowledge and put you on the path to being a skilled Tally expert.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt REDOT Academy, we understand how important Tally is to effective money management. Our goal is to equip people with the information and abilities necessary to succeed in Tally and make a positive impact on more efficient accounting procedures.\r\n<br><br>\r\n<b>Why Select the Tally Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical Tally Education:</b>\r\n<br>\r\nParticipate in real-world, interactive Tally activities that address taxation, financial reporting, and accounting principles.\r\n<br>\r\nLearn how to use Tally software to manage your finances effectively.\r\n<br>\r\n<b>2. Principles and Practices of Accounting:</b>\r\n<br>\r\nRecognize accounting\'s best practices and guiding principles.\r\n<br>\r\nExamine the ways that Tally makes maintaining accurate and effective financial records easier.\r\n<br>\r\n<b>3. Analysis and Reporting of Financial Data:</b>\r\n<br>\r\nDiscover how to use Tally to create and evaluate financial reports.\r\n<br>\r\nLearn how to analyze financial information to make smart decisions.\r\n<br>\r\n<b>4. GST Invoicing and Observance:</b>\r\n<br>\r\nDiscover how Tally makes it easier to comply with the Goods and Services Tax (GST).\r\n<br>\r\nRecognize how Tally handles different components of taxation.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your Tally expertise on practical assignments that replicate the difficulties encountered in settings for professional accounting.\r\n<br>\r\nCreate a portfolio to display the tasks and achievements you\'ve completed with Tally.\r\n<br><br>\r\n<b>Program for Tally Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Work on real-time Tally projects to get useful knowledge.\r\n<br>\r\nMentorship: Get advice from seasoned accountants and business experts.\r\n<br>\r\nBuilding Your Portfolio: Put together a portfolio that showcases your Tally work and shows off your skills.\r\n<br>\r\nCollaborative Learning: Take part in role-playing accounting exercises, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nWith JOJO Academy, become a professional Tally specialist. Join us as we develop the future of financial management by enrolling in our Tally internship!\r\n<br>', 'Tally online Training courses and placement in JOJO Academy Madurai', 'Online courses with placement & certification at JOJO Academy. Learn about our best Tally training courses & your career with the top Tally organization.', 'https://redotacademy.com/course-details.php?sub_title=tally-internship-and-training-courses', 'best Tally training institute, Tally training & internship, Tally online course with placement, Tally online course with certification, Tally training course in Madurai ,Tally training institute in Madurai, best Tally institute center in Madurai, best Tally course method for beginners, best Tally training with placement in Madurai, top Tally training with placement, Tally academy courses in maduraitamilnadu, Tally academy courses online', 'Active', 24, '2024-04-18 15:23:53', '2023-11-15 15:44:53'),
(24, 'Others', 'DTP', 'dtp-internship-and-training-courses', '', '', 'dtp.jpg', '', '<h1>Design Tomorrow with JOJO Academy| DTP Training and Internship Programs for Creative Minds</h1>\r\n\r\nTypography, image editing, and publication production. Whether you\'re a design enthusiast or seeking to launch a career in graphic design, JOJO Academy provides customized learning paths to suit your creative aspirations.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to hands-on learning. Internship opportunities offer real-world design experiences, allowing you to apply your skills in practical scenarios under the guidance of experienced professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a skilled DTP professional, equipped to create visually stunning designs. Contact us today to explore our DTP training programs and internship opportunities, and take the first step towards a successful career in desktop publishing.\r\n<br><br>', 'DTP Training, Placement & Internships at JOJO Academy Madurai', 'JOJO Academy in Madurai offers the best DTP training. We offer a structured fee plan and placement aid for both our online and offline DTP courses. ', 'https://redotacademy.com/course-details.php?sub_title=dtp-internship-and-training-courses', 'DTP course training in Madurai, DTP training online Madurai,DTP course training and placement, DTP course academy in Madurai, best DTP course in Madurai, DTP training fees structure in Madurai, DTP course with placement, DTP course online with placement, best DTP institutes in Madurai, best DTP course for beginners, DTP certification training institutes in Madurai', 'Active', 15, '2024-04-18 15:22:37', '2023-11-15 15:45:22'),
(25, 'Others', 'HTML', 'html-internship-and-training-courses', '', '', 'html.jpg', '', '<h1>Internship programs in HTML at JOJOAcademy</h1>\r\nDevelop the Fundamentals of Web Development with the Madurai HTML Internship Program at JOJO Academy\r\n<br>\r\nAre you excited to dive right in and learn about the field of web development? Take advantage of JOJO Academy\'s HTML internship program to fully immerse yourself in the fundamental language of the internet in the dynamic city of Madurai. Come study with us in an insightful program that will help you build the groundwork for your web development abilities and move you closer to becoming a skilled HTML developer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nWe at JOJO Academy understand how important HTML is to the creation and design of websites. Our goal is to provide people with the information and abilities necessary to become proficient HTML programmers and have a positive impact on the constantly changing online environment.\r\n<br><br>\r\n<b>Why Select the HTML Internship with JOJO?</b>\r\n<br>\r\n<b>1. Practical HTML Education:</b>\r\n<br>\r\nEngage in real-world, interactive HTML coding exercises covering both basic and complex ideas.\r\n<br>\r\nBecome proficient in comprehending HTML syntax and building web page structures.\r\n<br>\r\n<b>2. Adaptive Website Design:</b>\r\n<br>\r\nLearn about responsive web design concepts with HTML and CSS.\r\n<br>\r\nDiscover how to design websites that adjust to different device sizes and screen sizes.\r\n<br>\r\n<b>3. Features and APIs of HTML5:</b>\r\n<br>\r\nKeep abreast of the most recent HTML5 features and APIs.\r\n<br>\r\nRecognize how HTML5 makes web construction more capable.\r\n<br>\r\n<b>4. Relevance and Usability:</b>\r\n<br>\r\nLearn how to write semantic HTML for improved search engine optimization and accessibility.\r\n<br>\r\nRecognize the significance of producing well-structured, useful web content.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your HTML expertise on practical projects that replicate the difficulties encountered in a workplace setting for web development.\r\n<br>\r\nCreate a portfolio to highlight your achievements and HTML creations.\r\n<br><br>\r\n<b>Program for HTML Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: To obtain real-world experience, work on live HTML projects.\r\n<br>\r\nMentorship: Get advice from seasoned web developers and business experts.\r\n<br>\r\nBuilding a Portfolio: Put together a portfolio that showcases your HTML projects and shows off your skills.\r\n<br>\r\nCollaborative Learning: Take part in coding competitions, work together with other interns, and create a welcoming environment for learning.\r\n<br><br>\r\nCome to JOJO Academy with Us:\r\n<br>\r\nUse JOJO Academy to strengthen your skills as an HTML developer. Join us as we define the future of web development by enrolling in our HTML internship!\r\n<br>', 'Premier HTML Training & Internship Institute in Madurai JOJO Academy', 'Discover JOJO Academy, top HTML training centre in Madurai. Our exceptional HTML courses include placement, online and offline instruction, and certification.', 'https://redotacademy.com/course-details.php?sub_title=html-internship-and-training-courses', 'HTML training institute in Madurai, HTML institute in Madurai tamilnadu, HTML training and placement in Madurai, Best  HTML training in Madurai, HTML online course with certification, HTML courses near me, HTML certificate course classes in Madurai, HTML  online course, HTML online classes near me, Best HTML classes online, best HTML course near me, HTML training fees structure in Madurai, HTML training', 'Active', 17, '2024-04-18 15:46:34', '2023-11-15 15:45:54'),
(26, 'Others', 'Css', 'css-internship-and-training-courses', '', '', 'css.jpg', '', '<h1>CSS internship at JOJO Academy</h1>\r\nDevelop Your Web Design Skills with the Madurai CSS Internship at JOJO Academy\r\n<br>\r\nDo you have a strong enthusiasm for building responsive, aesthetically beautiful websites? Take advantage of the CSS Internship offered by JOJO Academy to explore the world of web design in the charming city of Madurai. Come along for a life-changing educational experience that will improve your CSS knowledge and put you on the fast track to being a skilled web designer.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt REDOT Academy, we are aware of how crucial CSS (Cascading Style Sheets) is in determining how websites look and feel to the user. Our goal is to provide people with the information and abilities needed to create engaging and intuitive web interfaces.\r\n<br><br>\r\n<b>Why Select the Internship with JOJO CSS?</b>\r\n<br>\r\n<b>1. Practical CSS Education:</b>\r\n<br>\r\nEngage in real-world, interactive CSS activities covering the newest methods and recommended practices.\r\nLearn CSS layout, styling, and animation inside and out.\r\n<br>\r\n<b>2. Adaptive Website Design:</b>\r\n<br>\r\nDiscover the fundamentals of responsive web design to build websites that adjust fluidly to various screen sizes and devices.\r\n<br>\r\nExamine CSS frameworks and tools to improve your designs\' responsiveness.\r\n<br>\r\n<b>3. UI/UX Foundations:</b>\r\n<br>\r\nRecognize the foundations of user experience (UX) and user interface (UI) design.\r\n<br>\r\nDiscover how to design user interfaces that are both visually beautiful and intuitive.\r\n<br>\r\n<b>4. Cross-Browser Integrated:</b>\r\n<br>\r\nLearn how to make sure your CSS styles work on different browsers.\r\n<br>\r\nExamine methods for addressing typical disparities in browser rendering.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nUse your CSS expertise on practical projects that replicate the difficulties encountered in a workplace setting for web design.\r\n<br>\r\nCreate a portfolio that highlights your achievements and CSS work.\r\n<br><br>\r\n<b>Program for CSS Internships:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nReal-World Projects: Engage in real-world web design tasks to put your CSS skills to use and obtain real-world experience.\r\n<br>\r\nMentorship: Get advice from UI/UX specialists and seasoned web designers.\r\n<br>\r\nPortfolio Creation: Put together a portfolio that showcases your development and level of CSS expertise.\r\n<br>\r\nCollaborative Learning: Participate in design critiques, interact with other interns, and create a supportive environment for collaborative learning.\r\n<br><br>\r\n<b>Come to REDOT Academy with Us:</b>\r\n<br>\r\nCreate aesthetically pleasing and easily navigable websites with REDOT Academy. Join us as we build the future of web design by enrolling in our CSS internship!\r\n<br>', 'JOJO Academy - Premier CSS Training Institute in Madurai', 'JOJO Academy is the greatest CSS training internship Centre in Madurai. With the help of our great offline and online CSS classes, you can become knowledgeable', 'https://redotacademy.com/course-details.php?sub_title=css-internship-and-training-courses', 'css training institute in Madurai, best csstraining institute in tamilnadu, top css  training institute in Madurai, css training online, css academy institute, css training institute, css course training institute, css certification training institutes in Madurai, css training and placement in Madurai, best css academy institute, top css academy institute in Madurai', 'Active', 19, '2024-04-18 15:19:59', '2023-11-15 15:46:10'),
(27, 'Others', 'Web Designing', 'web-designing--internship-and-training-courses', '', '', 'web-designing.jpg', '', '<h1>Web designing internship courses at JOJO Academy in madurai</h1>\r\nUnleash Your Creativity with JOJO Academy\'s Web Designing Internship in Madurai\r\n<br>\r\nAre you interested in designing visually appealing and user-friendly websites? JOJO Academy invites budding web designers to join our intensive Web design internship program in the culturally fascinating city of Madurai. Explore the art and science of web design, increase your talents, and go on a journey to become a professional web designer impacting the digital world.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we recognize the critical significance of site design in capturing online audiences. Our objective is to empower individuals with the information and abilities needed to excel in web designing, fostering creativity and innovation.\r\n<br><br>\r\n<b>Why Choose the JOJO Web Designing Internship?</b>\r\n<br>\r\n<b>1. Comprehensive Design Learning:</b>\r\n<br>\r\nImmerse yourself in hands-on exercises covering the principles of design, color theory, and layout.\r\n<br>\r\nMaster industry-standard design programs including Adobe Photoshop, Illustrator, and XD.\r\n<br>\r\n<b>2. Adaptive Website Design:</b>\r\n<br>\r\nExplore the foundations of responsive web design for seamless user experiences across devices.\r\n<br>\r\nUnderstand the concepts of mobile-first design for the new digital landscape.\r\n<br>\r\n<b>3. User Interface (UI) and User Experience (UX) Design:</b>\r\n<br>\r\nDive into UI/UX design principles to develop visually appealing and intuitive interfaces.\r\n<br>\r\nLearn to undertake user research, wire framing, and prototyping for effective UX design.\r\n<br>\r\n<b>4. HTML/CSS Integration:</b>\r\n<br>\r\nUnderstand the integration of design concepts into web development using HTML and CSS.\r\n<br>\r\nExplore the synergy between design and programming for a seamless website.\r\n<br>\r\n<b>5. Real-world Projects for Practical Proficiency:</b>\r\n<br>\r\nApply your web designing talents to real-world projects, imitating the problems experienced in a professional design environment.\r\n<br>\r\nBuild a portfolio that exhibits your web design projects, exhibiting your originality to future employers.\r\n<br><br>\r\n<b>Web Designing Internship Program Highlights:</b>\r\n<br>\r\nLive Design Projects: Engage in real-world design projects to obtain practical experience.\r\n<br>\r\nMentorship: Receive help from seasoned designers and industry experts.\r\n<br>\r\nPortfolio Building: Showcase your ideas through a bespoke web design portfolio.\r\n<br>\r\nCollaborative Learning: Collaborate with fellow interns, participate in design challenges, and establish a supportive learning environment.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nElevate your web designing talents with JOJO Academy\'s Web Designing Internship. Secure your position today and let\'s develop visually captivating digital experiences together!\r\n<br>', 'Web Designing Training and Internship courses in JOJO Academy Madurai', 'Discover how to start the best web designing course in Madurai with JOJO Academy. Our web designing academy provides top-notch training, and placement.', 'https://redotacademy.com/course-details.php?sub_title=web-designing--internship-and-training-courses', 'web designing training academy, how to start web designing course, best web designing course in Madurai, web designing academy in Madurai, website design course in Madurai, web designing course near me, web designing classes near me, web designing course training & placement, web designing easy to learn center in Madurai', 'Active', 22, '2024-04-18 15:18:47', '2023-11-15 15:46:45'),
(28, 'Others', 'React Native', 'react-native-internship-and-training-courses', '', '', 'react-native.jpg', '', '<h1>Crafting Mobile Excellence| JOJO Academy\'s React Native Training and Internship Programs for Tomorrow\'s App Developers</h1>\r\n<br><br>\r\nStep into the dynamic world of mobile app development with JOJO Academy\'s React Native Training and Internship programs. React Native, a powerful cross-platform framework is revolutionizing how developers create compelling mobile experiences.\r\n<br><br>\r\nOur expert-led courses delve into the core principles of React Native, covering everything from UI components and navigation to state management and deployment. Whether you\'re a beginner or a seasoned developer, REDOT Academy provides tailored learning paths to suit your proficiency level and career goals.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities allow you to apply your React Native skills in real-world projects, gaining hands-on experience under the mentorship of industry professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a proficient React Native developer, ready to shape the future of mobile applications. Contact us today to explore our React Native training programs, and internship opportunities, and take the first step towards a successful career in mobile app development.\r\n<br><br>', 'React Native Training and Internship program in JOJO Academy', 'Explore the best React JS coursetraining in Madurai with certification. Join JOJO Academy for top-notch React Native training, internships&online courses.', 'https://redotacademy.com/course-details.php?sub_title=react-native-internship-and-training-courses', 'react native academy courses online, react js course in Madurai, react js course training in Madurai, best react native training institute, react native training & internship, react native online course with certification, react js online course with certification, react js course duration month', 'Active', 32, '2024-04-18 15:17:37', '2023-11-15 15:47:47'),
(29, 'Others', 'Selenium', 'selenium-internship-and-training-courses', '', '', 'selenium.jpg', '', '<h1>Driving Quality Assurance Excellence: JOJO Academy\'s Selenium Training and Internship Programs for Future Test Automation Experts</h1>\r\nElevate your software testing skills with JOJO Academy\'s Selenium Training and Internship programs. Selenium, a widely used open-source framework, is at the forefront of automated testing, empowering professionals to ensure the quality and reliability of web applications.\r\n<br><br>\r\nOur expert-led courses delve into the core principles of Selenium, covering everything from test scripting and debugging to framework development. Whether you\'re a testing enthusiast or a seasoned QA professional, JOJO Academy provides customized learning paths to suit your proficiency level and career goals.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities allow you to apply your Selenium skills in real-world testing scenarios, gaining hands-on experience under the mentorship of industry professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a proficient Selenium tester, ready to navigate the complexities of modern software testing. Contact us today to explore our Selenium training programs and internship opportunities, and take the first step towards a successful career in automated testing.\r\n<br><br>', 'Selenium Training Course & Internship Program in JOJO Academy', 'Unlock the details of Selenium Testing Courses in Madurai. JOJO Academy offers the top Selenium training methods for beginners with placement support.', 'https://redotacademy.com/course-details.php?sub_title=selenium-internship-and-training-courses', 'selenium training course in Madurai, selenium training institute in Madurai, selenium testing course details, best selenium institute center in Madurai, best selenium course method for beginners, best selenium training with placement in Madurai, top selenium training with placement, selenium academy in maduraitamilnadu', 'Active', 20, '2024-04-18 15:16:50', '2023-11-15 15:48:37'),
(30, 'Others', 'Software Testing', 'software-internship-and-training-courses', '', '', 'software-testing.jpg', '', '<h1>Testing internship courses at JOJO Academy</h1>\r\nEnhance Quality Assurance Skills with JOJO Academy\'s Testing Internship in Madurai\r\n<br>\r\nAre you passionate about ensuring the quality of software applications? Join JOJO Academy for an enriching Testing Internship in the culturally vibrant city of Madurai. Dive into the world of software testing, acquire essential skills, and become a proficient quality assurance professional ready to contribute to the delivery of high-quality software.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt REDOT Academy, we understand the critical role of testing in the software development lifecycle. Our mission is to empower individuals with the knowledge and skills needed to excel in software testing and contribute to creating reliable and bug-free applications.\r\n<br><br>\r\n<b>Why Choose the REDOT Testing Internship?</b>\r\n<br>\r\n<b>1. Hands-On Testing Learning:</b>\r\n<br>\r\nDive into practical, hands-on testing exercises covering manual and automated testing.\r\n<br>\r\nGain proficiency in popular testing tools and frameworks.\r\n<br>\r\n<b>2. Manual Testing Techniques:</b>\r\n<br>\r\nLearn the fundamentals of manual testing, test case design, and execution.\r\n<br>\r\nUnderstand the importance of test planning and defect tracking.\r\n<br>\r\n<b>3. Automated Testing Tools:</b>\r\n<br>\r\nExplore the world of automated testing using industry-standard tools like Selenium and JUnit.\r\n<br>\r\nGain insights into creating robust automated test scripts.\r\n<br>\r\n<b>4. Performance Testing:</b>\r\n<br>\r\nUnderstand the principles of performance testing and how to evaluate application performance.\r\n<br>\r\nLearn to identify and address performance bottlenecks.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nApply your testing skills to real-world projects that simulate the challenges faced in a professional software testing environment.\r\n<br>\r\nBuild a portfolio showcasing your testing projects and accomplishments.\r\n<br><br>\r\n<b>Testing Internship Program:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Engage in live testing projects to gain practical experience.\r\n<br>\r\nMentorship: Receive guidance from experienced testing professionals and industry experts.\r\n<br>\r\nPortfolio Building: Create a portfolio highlighting your testing projects and demonstrating your proficiency.\r\n<br>\r\nCollaborative Learning: Participate in testing simulations, collaborate with fellow interns, and foster a supportive learning environment.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nElevate your testing expertise with JOJO Academy. Enroll in our Testing Internship and let\'s shape the future of software quality together!\r\n<br>', 'Software Testing Course with Placement in JOJO Academy Madurai', 'Explore the best software testing course online with placement in Madurai. JOJO Academy offers top-notch training for beginners with certification. Join Now!', 'https://redotacademy.com/course-details.php?sub_title=software-internship-and-training-courses', 'software testing course with placement, software testing course online with placement, best software testing institutes in Madurai, best software testing course for beginners, software testing course information, software testing certification training institutes in Madurai, software testing course duration month', 'Active', 22, '2024-04-18 15:15:53', '2023-11-15 15:49:07'),
(31, 'Others', 'Protractor', 'protractor-internship-and-training-courses', '', '', 'protractor.jpg', '', '<h1>Precision in Web Application Testing | JOJO Academy\'s Protractor Training and Internship Programs for Tomorrow\'s Automation Leaders</h1>\r\nEmbark on a journey to master web application testing with JOJO Academy\'s Protractor Training and Internship programs. Protractor, a leading end-to-end testing framework, is revolutionizing how developers and QA professionals ensure the seamless functionality of web applications.\r\n<br><br>\r\nOur expert-led courses cover the intricacies of Protractor, from test automation scripting and debugging to handling asynchronous operations. Whether you\'re a testing enthusiast or an experienced QA professional, JOJO Academy provides tailored learning paths to suit your proficiency level and career goals.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities allow you to apply your Protractor skills in real-world testing scenarios, gaining hands-on experience under the mentorship of industry professionals.\r\n<br><br>\r\nJoin JOJO Academy to become a proficient prototype tester, equipped to tackle the challenges of modern web application testing. Contact us today to explore our Protractor training programs and internship opportunities and take the first step towards a successful career in automated testing.\r\n<br><br>', 'Protractor Courses and Training classes in JOJO Academy Madurai ', 'Elevate your skills with Protractor software today. Join the best Protractor course in Madurai at JOJO Academy. Explore online training & placement assistance', 'https://redotacademy.com/course-details.php?sub_title=protractor-internship-and-training-courses', 'protractor course training in Madurai, protractor software training online Madurai, protractor course training & placement, how to protractor course join online, protractor course academy in Madurai, best protractor course in Madurai, protractor training fees structure in madurai', 'Active', 18, '2024-04-18 13:07:29', '2023-11-15 15:50:01');
INSERT INTO `courses` (`id`, `category_name`, `title`, `sub_title`, `instructor`, `thumb_nail`, `cou_image`, `short_description`, `description`, `meta_title`, `meta_desc`, `meta_link`, `meta`, `status`, `view_count`, `uploaded_on`, `date_time`) VALUES
(32, 'Others', 'Personality Development', 'personality-development-internship-and-training-courses', '', '', 'personality.jpg', '', '<h1>Personality Development Training & Internship Program in JOJO Academy</h1>\r\nEmbark on a transformative journey towards personal and professional excellence with JOJO Academy\'s personality development training and internship programs. In an era where soft skills play a crucial role in career success, our expert-led courses are meticulously designed to empower individuals with the tools they need to excel in every aspect of life.\r\n<br><br>\r\nOur training programs cover a wide spectrum of essential skills, including effective communication, interpersonal skills, time management, and emotional intelligence. Whether you\'re a student preparing for the workforce or a professional seeking to enhance your abilities, JOJO Academy provides tailored learning paths to suit your personal and career aspirations.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities offer real-world experiences, allowing you to apply and reinforce your newly acquired skills in a professional setting, guided by experienced mentors.\r\n<br><br>\r\nJoin JOJO Academy to cultivate confidence and charisma, unlocking your full potential for success in personal and professional endeavors. Contact us today to explore our personality development training programs and internship opportunities and take the first step towards a more empowered you.\r\n<br><br>', 'Best Personality Development Classes in JOJO Academy Madurai ', 'Unlock your potential with our online personality development courses in Madurai. Discover the best training, near you, with structured fees.', 'https://redotacademy.com/course-details.php?sub_title=personality-development-internship-and-training-courses', 'personality development classes in Madurai, personality development online course, personality development online classes near me, best personality development classes online, best personality development training in Madurai, best personality development course near me, personality development training fees structure in Madurai, individual development plan training', 'Active', 27, '2024-04-18 13:06:11', '2023-11-15 15:51:56'),
(33, 'Others', 'Spoken English', 'spoken-english-internship-and-training-courses', '', '', 'english.jpg', '', '<h1>Unlock Your Verbal Fluency: JOJO Academy\'s Spoken English Training and Internship Programs for Confident Communicators</h1>\r\nMaster the art of eloquent expression and confident communication with JOJO Academy\'s Spoken English Development Training and Internship programs. In today\'s globalized world, effective spoken English is a valuable asset that opens doors to countless opportunities.\r\n<br><br>\r\nOur expert-led courses cover a range of language skills, including pronunciation refinement, vocabulary enhancement, conversational techniques, and public speaking. Whether you\'re a student preparing for the professional world or a professional looking to polish your communication skills, JOJO Academy provides personalized learning paths to suit your needs.\r\n<br><br>\r\nWhat sets JOJO Academy apart is our commitment to practical learning. Internship opportunities allow you to apply and reinforce your newfound language skills in real-world settings, guided by experienced mentors.\r\n<br><br>\r\nJoin JOJO Academy to unleash fluent communication and build confidence in your spoken English. Contact us today to explore our spoken English development training programs and internship opportunities and take the first step towards becoming a confident and articulate communicator.\r\n<br><br>', 'Spoken English Class and Training in JOJO Academy Madurai', 'Explore easy spoken English classes and training in Madurai. Join JOJO Academy for a one-month English speaking course. Improve your Communication skill now.', 'https://redotacademy.com/course-details.php?sub_title=spoken-english-internship-and-training-courses', 'spokenenglish classes Madurai, spoken english classes for kids near me, spoken english classes for adults online, spoken english classes for adults near me, easy learning spoken english classes in Madurai, 1 month english speaking course, one month spoken english course, easy spoken english academy Madurai', 'Active', 16, '2024-04-18 13:01:57', '2023-11-15 15:52:23'),
(34, 'Others', 'Web development', 'web-development-internship-and-training-courses', '', '', 'web-development.jpg', '', '<h1>Web development internships in JOJO Academy</h1>\r\nBecome a Transformative Web Development Intern at JOJO Academy in Madurai.\r\n<br>\r\nAre you excited to launch your career in a fast-paced, dynamic learning environment and have a strong love for web development? You\'ve found it! Our Web Development Internship program in the bustling city of Madurai offers ambitious web developers an interesting experience.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt JOJO Academy, we value developing talent and giving aspiring developers real-world exposure. As a premier center for technological education, we are excited to extend an invitation to enthusiastic people to apply for our Web Development Internship and start a journey of development, creativity, and skill improvement.\r\n<br><br>\r\n<b>Why Select the Web Development Internship with JOJO?</b>\r\n<br>\r\n<b>1. Real-world Initiatives:</b>\r\n<br>\r\nGain real-world experience by working on projects that replicate real-world situations in the industry. Gain a broad range of skills by practicing problem-solving, debugging, and coding.\r\n<br>\r\n<b>2. Advice from Professionals:</b>\r\n<br>\r\nGain knowledge from seasoned web development experts. Our seasoned mentors are committed to offering individualized advice and disseminating industry knowledge.\r\n<br>\r\n<b>3. All-inclusive Curriculum:</b>\r\n<br>\r\nTake a course that covers the newest frameworks and technologies for web development. Our internship guarantees that you are proficient in the tools of the trade, from HTML, CSS, and JavaScript to React, Node.js, and beyond.\r\n<br>\r\n<b>4. Industrial-Grade Instruments:</b>\r\n<br>\r\nDevelop your proficiency with version control systems, industry-standard development tools, and teamwork platforms. Gain immediately useful abilities in a setting dedicated to professional growth.\r\n<br>\r\n<b>5. Partnership Possibilities:</b>\r\n<br>\r\nDuring our internship program, make connections with industry professionals and like-minded individuals. Create a network that may lead to future professional opportunities and joint ventures.\r\n<br>\r\n\r\n<b>6. Portfolio Construction:</b>\r\n<br>\r\nCreate a portfolio that highlights the tasks you worked on and the practical skills you learned throughout the internship. As you enter the field of professional web development, this portfolio will be a great help.\r\n<br>\r\n<b>7. Attestation of Finalization:</b>\r\n<br>\r\nAfter completing the internship successfully, you will receive a certification that attests to your dedication to lifelong learning and your willingness to participate in real-world initiatives.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nTake advantage of the chance to expand your abilities, obtain practical experience, and set the groundwork for a lucrative web development career. Join us for an unforgettable learning experience by submitting your application for the JOJO Web Development Internship right now!\r\n<br>\r\n', 'Web Development Training and Internship at JOJO Academy Madurai', 'Elevate your skills with our web development training and internship programs in Madurai. Join JOJO Academy, the best web development training institute', 'https://redotacademy.com/course-details.php?sub_title=web-development-internship-and-training-courses', 'web development training and internship, web development training and placement in Madurai, web development courses list for beginners, web development online training course, web development course duration and fees, web development training institute, best web development training institute in Madurai, top web development project ideas for freshers', 'Active', 16, '2024-04-18 13:00:59', '2023-11-16 11:05:25'),
(35, 'Others', 'Big Data', 'big-data-internship-and-training-courses', '', '', 'big-data.jpg', '', '<h1>Big data internship courses available at JOJO Academy</h1>\r\nDive into the World of Big Data with JOJO Academy\'s Internship Program in Madurai\r\n<br>\r\nAre you ready to unravel the vast possibilities of Big Data? Join JOJO Academy for an immersive Big Data Internship in the culturally vibrant city of Madurai. Explore the realms of data analytics, processing, and visualization, and become a proficient Big Data professional ready to harness the power of data.\r\n<br><br>\r\n<b>About the Academy JOJO:</b>\r\n<br>\r\nAt REDOT Academy, we understand the transformative impact of Big Data in shaping decision-making and driving innovation. Our mission is to empower individuals with the knowledge and skills needed to excel in Big Data technologies and contribute to the future of data-driven insights.\r\n<br><br>\r\n<b>Why Choose the JOJO Big Data Internship?</b>\r\n<br>\r\n<b>1. Comprehensive Big Data Learning:</b>\r\n<br>\r\nDive into practical, hands-on exercises covering the fundamentals of Big Data technologies.\r\n<br>\r\nGain proficiency in popular Big Data tools and frameworks such as Hadoop, Spark, and more.\r\n<br>\r\n<b>2. Data Analytics and Processing:</b>\r\n<br>\r\nExplore the principles of data analytics and processing at scale.\r\n<br>\r\nLearn to handle large datasets and extract valuable insights.\r\n<br>\r\n<b>3. Big Data Visualization:</b>\r\n<br>\r\nUnderstand the importance of data visualization in conveying meaningful insights.\r\n<br>\r\nExplore tools and techniques for creating compelling visualizations.\r\n<br>\r\n<b>4. Real-Time Data Processing:</b>\r\n<br>\r\nGain insights into real-time data processing and streaming analytics.\r\n<br>\r\nExplore technologies like Apache Kafka for handling streaming data.\r\n<br>\r\n<b>5. Projects Relevant to Industry:</b>\r\n<br>\r\nApply your Big Data skills to real-world projects that simulate the challenges faced in a professional data analytics environment.\r\n<br>\r\nBuild a portfolio showcasing your Big Data projects and accomplishments.\r\n<br><br>\r\n<b>Big Data Internship Program:</b>\r\n<br>\r\n<b>Highlights of the internship:</b>\r\n<br>\r\nLive Projects: Engage in live Big Data projects to gain practical experience.\r\n<br>\r\nMentorship: Receive guidance from experienced Big Data professionals and industry experts.\r\n<br>\r\nPortfolio Building: Create a portfolio highlighting your Big Data projects and demonstrating your proficiency.\r\n<br>\r\nCollaborative Learning: Participate in Big Data simulations, collaborate with fellow interns, and foster a supportive learning environment.\r\n<br><br>\r\n<b>Come to JOJO Academy with Us:</b>\r\n<br>\r\nBecome a proficient Big Data professional with REDOT Academy. Enroll in our Big Data Internship and let\'s shape the future of data analytics together!\r\n<br>', 'Big Data and Data AnalyticsTraining at JOJO Academy Madurai', 'Elevate your career with Big Data training in Madurai. JOJO Academy is the leading SAP training institute, offering comprehensive courses in Big Data', 'https://redotacademy.com/course-details.php?sub_title=big-data-internship-and-training-courses', 'big data training institute in Madurai, big data institute in maduraitamilnadu, big data training and placement in Madurai, best big data training in Madurai, big data course duration month, big data online course with certification, big data courses near me, big data training institute companies', 'Active', 41, '2024-04-18 12:59:26', '2023-11-16 13:03:58'),
(36, 'Others', 'SAP', 'sap-internship-and-training-courses', '', '', 'sap.jpg', '', '<h1>SAP internship classes at JOJO Academy in madurai</h1>\r\nElevate Your Career with JOJO Academy\'s SAP Internship in Madurai\r\n<br>\r\nAre you ready to venture into the realm of SAP and enterprise solutions? JOJO Academy welcomes aspiring professionals to join our SAP Internship program in the culturally vibrant city of Madurai. Uncover the intricacies of SAP, increase your skills, and become a professional SAP consultant, ready to traverse the complicated environment of enterprise resource planning.\r\n<br><br>\r\n<b>About the Academy REDOT:</b>\r\n<br>\r\nAt JOJO Academy, we acknowledge the revolutionary power of SAP in transforming corporate operations. Our objective is to empower individuals with the knowledge and skills needed to flourish in SAP technologies, opening the road for innovation and efficiency.\r\n<br><br>\r\n<b>Why Choose the JOJO SAP Internship?</b>\r\n<br>\r\n<b>1. Comprehensive SAP Learning:</b>\r\n<br>\r\nImmerse yourself in hands-on exercises covering the whole SAP suite, from SAP ERP to SAP S/4HANA.\r\n<br>\r\nGain skills in using SAP technologies for business process optimization.\r\n<br>\r\n<b>2. SAP Functional and Technical Expertise:</b>\r\n<br>\r\nExplore both functional and technical elements of SAP, catering to numerous career pathways within the SAP ecosystem.\r\n<br>\r\nUnderstand the integration of SAP modules including Finance, Supply Chain, and Human Resources.\r\n<br>\r\n<b>3. SAP Implementation Best Practices:</b>\r\n<br>\r\nLearn the best practices for SAP implementation, customization, and system integration.\r\n<br>\r\nExplore strategies for easy migration to SAP S/4HANA.\r\n<br>\r\n<b>4. Real-world Projects for Practical Proficiency:</b>\r\n<br>\r\nApply your SAP abilities to real-world projects, matching the problems faced in a professional SAP consulting setting.\r\n<br>\r\nBuild a portfolio exhibiting your SAP projects, demonstrating your capability to drive company transformation.\r\n<br><br>\r\n<b>SAP Internship Program Highlights:</b>\r\n<br>\r\nLive SAP Projects: Engage in real-world SAP projects to obtain practical experience.\r\n<br>\r\nMentorship: Receive help from seasoned SAP consultants and industry professionals.\r\n<br>\r\nPortfolio Building: Showcase your SAP skills through a personalized project portfolio.\r\n<br>\r\nCollaborative Learning: Collaborate with fellow interns, participate in SAP simulations, and establish a supportive learning\r\n<br>', 'SAP Training and Internship program in JOJO Academy Madurai', 'Discover the top SAP training institute in Madurai offering online and certification courses. Elevate your career with expert SAP training and placement services in Madurai', 'https://redotacademy.com/course-details.php?sub_title=sap-internship-and-training-courses', 'sap training institute in Madurai, best sap training institute in tamilnadu, top sap training institute in Madurai, sap training online, sap training institute, sap course training institute, sap certification training institutes in Madurai,sap training and placement in Madurai,Sap training and placement in Madurai,best Sap academy institute,top Sap academy institute in Madurai', 'Active', 34, '2024-04-18 12:58:05', '2023-11-16 14:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `course_category_id` int(11) NOT NULL,
  `main` varchar(255) NOT NULL DEFAULT '',
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(150) NOT NULL DEFAULT 'Active',
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`course_category_id`, `main`, `category_name`, `status`, `uploaded_on`) VALUES
(1, '', 'Web Development', 'Active', '2023-10-17 15:47:15'),
(2, '', 'Java', 'Active', '2023-10-20 10:04:44'),
(3, '', 'Graphic Designing', 'Active', '2023-10-20 10:07:04'),
(4, '', 'Dot Net', 'Active', '2023-10-20 10:08:20'),
(5, '', 'AWS Devops', 'Active', '2023-10-20 10:38:07'),
(6, '', 'Others', 'Active', '2023-11-30 04:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `forename` varchar(50) NOT NULL DEFAULT '',
  `surname` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(255) NOT NULL DEFAULT '',
  `dob` varchar(500) NOT NULL DEFAULT '',
  `add1` varchar(50) NOT NULL DEFAULT '',
  `add2` varchar(50) NOT NULL DEFAULT '',
  `add3` varchar(50) NOT NULL DEFAULT '',
  `district` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `country` varchar(150) NOT NULL DEFAULT '',
  `postcode` varchar(10) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(150) NOT NULL DEFAULT '',
  `update_by` varchar(500) NOT NULL DEFAULT 'customer',
  `registered` tinyint(4) NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `forename`, `surname`, `gender`, `dob`, `add1`, `add2`, `add3`, `district`, `state`, `country`, `postcode`, `phone`, `email`, `update_by`, `registered`, `status`) VALUES
(1, 'm', 'k', '', '', 'd', 'd', 'testing', 'mdu', 'Tamil Nadu', 'India', '625018', '9597493030', 'mk@gmail.com', 'customer', 1, 'Active'),
(2, 'g', 'K', '', '', 'yt', '', '', '', '', '', '', '9765434212', 'gk@gmail.com', 'customer', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` int(11) NOT NULL,
  `forename` varchar(50) NOT NULL DEFAULT '',
  `surname` varchar(50) NOT NULL DEFAULT '',
  `add1` varchar(50) NOT NULL DEFAULT '',
  `add2` varchar(50) NOT NULL DEFAULT '',
  `add3` varchar(50) NOT NULL DEFAULT '',
  `district` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `postcode` varchar(10) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(150) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `delivery_addresses`
--

INSERT INTO `delivery_addresses` (`id`, `forename`, `surname`, `add1`, `add2`, `add3`, `district`, `state`, `country`, `postcode`, `phone`, `email`) VALUES
(1, 'k', 'd', 'test 1', 'test sd', 'opp test', 'Mdu', 'Tamil Nadu', 'India', '625017', '5678905433', 'kd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `sub_title` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `event_date` varchar(255) NOT NULL DEFAULT '',
  `timing` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(255) NOT NULL DEFAULT '',
  `thumb_nail` varchar(100) NOT NULL DEFAULT '',
  `event_image` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `uploaded_on` datetime DEFAULT current_timestamp(),
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `sub_title`, `address`, `event_date`, `timing`, `contact`, `thumb_nail`, `event_image`, `description`, `status`, `view_count`, `uploaded_on`, `date_time`) VALUES
(1, 'Event Test', 'Event Sub Testing', '#45, Madurai', '2023-10-21', '10 am to 12 pm', '8777432110', '', 'course_1_11.png', 'Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing Event Testing ', 'Active', 39, '2023-10-06 13:04:08', '2023-10-06 13:04:08'),
(2, 'Event Test2', 'Event Sub Testing2', '#45, Madurai', '2023-10-23', '10 am to 12 pm', '8777432110', '', 'course_1_2.png', 'Event Testing2 Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2Event Testing2', 'Active', 34, '2023-10-17 11:58:00', '2023-10-17 11:58:00'),
(3, 'Event Test 3', 'Event Sub Testing 3 ', '#43,Mdu', '2023-10-25', '10 am to 12 pm', '90456642233', '', 'event_img-2.png', 'Event Testing 3  Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 Event Testing 3 ', 'Active', 49, '2023-10-20 13:06:22', '2023-10-18 14:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `lead_list`
--

CREATE TABLE `lead_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `mobile_no` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` longtext NOT NULL DEFAULT '',
  `remark` mediumtext NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '1',
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead_list`
--

INSERT INTO `lead_list` (`id`, `name`, `email`, `mobile_no`, `subject`, `message`, `remark`, `status`, `upload_on`) VALUES
(12, 'mk', 'mk@gmail.com', '980766543223', 'Business Analyst', 'Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing ', '', '1', '2024-04-26'),
(13, 'mkfg', 'mk@gmail.com', '980766543223', 'Business Analyst', 'Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing ', '', '1', '2024-04-26'),
(14, 'ss', 'ss@gmail.com', '98064333322', 'Cyber Security', 'Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing ', '', '1', '2024-04-26'),
(15, 'shm', 'shm@gmail.com', '90876543212', 'Digital Marketing & Seo', 'fgvsbwsfsfvwswfvv', '', '1', '2024-04-26'),
(16, 'shmcd', 'shm@gmail.com', '90876543212', 'Digital Marketing & Seo', 'fgvsbwsfsfvwswfvv', '', '1', '2024-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `verification_code` varchar(500) NOT NULL DEFAULT '',
  `customer_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `verification_code`, `customer_id`, `username`, `password`) VALUES
(1, '4800', 1, 'mk@gmail.com', 'mk@123'),
(2, '3886', 2, 'gk@gmail.com', 'gk@123');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL DEFAULT '',
  `sku` varchar(255) NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL,
  `session_id` varchar(200) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `payment_type` int(11) NOT NULL DEFAULT 0,
  `currency` varchar(255) DEFAULT '$',
  `remark` varchar(500) NOT NULL DEFAULT '',
  `primary_color` varchar(255) NOT NULL DEFAULT '',
  `product_type` varchar(255) NOT NULL DEFAULT '',
  `size` varchar(255) NOT NULL DEFAULT '',
  `beardo` varchar(255) NOT NULL DEFAULT '',
  `dimension` varchar(255) NOT NULL DEFAULT '',
  `finish_product` varchar(255) NOT NULL DEFAULT '',
  `offer` varchar(255) NOT NULL DEFAULT '',
  `courier_name` varchar(255) NOT NULL DEFAULT '',
  `courier_url` varchar(500) NOT NULL DEFAULT '',
  `delivery_id` varchar(255) NOT NULL DEFAULT '',
  `delivery_date` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `product_id`, `sku`, `quantity`, `session_id`, `customer_id`, `payment_type`, `currency`, `remark`, `primary_color`, `product_type`, `size`, `beardo`, `dimension`, `finish_product`, `offer`, `courier_name`, `courier_url`, `delivery_id`, `delivery_date`) VALUES
(1, 1, '2', '102', 1, 'manlol07tbociu34ntdidmdkof', 1, 1, '  ', '', '  ', '', '', '', '', '', '', '', '', '', ''),
(5, 2, '2', '102', 1, 'manlol07tbociu34ntdidmdkof', 2, 1, '  ', '', '  ', '', '', '', '', '', '', '', '', '', ''),
(6, 3, '2', '102', 1, 'qhdf0ee02h1ff6se2neavdtkk5', 1, 1, '  ', '', '  ', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `registered` int(11) NOT NULL DEFAULT 0,
  `delivery_add_id` int(11) NOT NULL DEFAULT 0,
  `payment_type` int(11) NOT NULL DEFAULT 0,
  `payment_id` varchar(255) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `cancel_status` varchar(50) NOT NULL DEFAULT '',
  `session` varchar(100) NOT NULL DEFAULT '',
  `coupon_id` varchar(500) NOT NULL DEFAULT '',
  `total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `address_json` text DEFAULT NULL,
  `request_json` text DEFAULT NULL,
  `order_json` text DEFAULT NULL,
  `redirect_json` text DEFAULT NULL,
  `response_json` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `registered`, `delivery_add_id`, `payment_type`, `payment_id`, `date`, `status`, `cancel_status`, `session`, `coupon_id`, `total`, `address_json`, `request_json`, `order_json`, `redirect_json`, `response_json`) VALUES
(1, 1, 3, 0, 2, '', '2024-06-13 10:06:35', 10, 'Confirm the order', 'manlol07tbociu34ntdidmdkof', '', 1500.00, NULL, NULL, NULL, NULL, NULL),
(2, 2, 3, 1, 2, '', '2024-06-13 14:58:32', 2, 'S1', 'manlol07tbociu34ntdidmdkof', '', 1500.00, NULL, NULL, NULL, NULL, NULL),
(3, 1, 3, 0, 2, '', '2024-06-14 11:26:30', 2, 'S1', 'qhdf0ee02h1ff6se2neavdtkk5', '', 1500.00, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_billing`
--

CREATE TABLE `order_billing` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL DEFAULT '',
  `order_id` varchar(255) NOT NULL DEFAULT '',
  `customer_id` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_billing`
--

INSERT INTO `order_billing` (`id`, `bill_no`, `order_id`, `customer_id`) VALUES
(1, '1', '1', '1'),
(2, '2', '2', '2'),
(7, '3', '3', '1'),
(8, '4', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku_id` varchar(50) NOT NULL,
  `category_id` varchar(10) NOT NULL DEFAULT '',
  `category_name` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL DEFAULT '',
  `product_name` varchar(300) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(255) NOT NULL DEFAULT '',
  `image3` varchar(255) NOT NULL DEFAULT '',
  `image4` varchar(255) NOT NULL DEFAULT '',
  `price` decimal(10,2) DEFAULT NULL,
  `brand` varchar(100) NOT NULL DEFAULT '',
  `material` varchar(100) NOT NULL DEFAULT '',
  `size` varchar(20) NOT NULL DEFAULT '',
  `Video_Link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(1000) NOT NULL,
  `Tags` varchar(50) NOT NULL DEFAULT '',
  `Meta_title` varchar(50) NOT NULL DEFAULT '',
  `Specification` varchar(1000) NOT NULL DEFAULT '',
  `Stock` int(11) DEFAULT NULL,
  `Product_Status` varchar(20) NOT NULL DEFAULT 'Active',
  `View_count` varchar(50) NOT NULL DEFAULT '',
  `Sell_count` varchar(50) NOT NULL DEFAULT '',
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku_id`, `category_id`, `category_name`, `sub_category`, `product_name`, `image1`, `image2`, `image3`, `image4`, `price`, `brand`, `material`, `size`, `Video_Link`, `description`, `Tags`, `Meta_title`, `Specification`, `Stock`, `Product_Status`, `View_count`, `Sell_count`, `uploaded_on`, `created_date`, `updated_date`) VALUES
(1, '101', '', 'Test-Category11', '', 'Testing11', 'acne-1.jpg', 'Acne-2.jpeg', '', '', 2000.00, '', '', '', '', 'Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing ', '', '', '', -3, 'Active', '27', '5', '2024-06-11 14:27:26', '2024-06-11 11:56:37', '2024-06-14 09:54:42'),
(2, '102', '', 'Test-Category22', '', 'Testing2', 'services-01.jpg', 'glowing-skin-1.jpg', '', '', 1500.00, '', '', '', '', 'Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 Testing2 ', '', '', '', 10, 'Active', '20', '8', '2024-06-11 14:51:51', '2024-06-11 14:51:51', '2024-06-14 09:54:42'),
(3, '103', '', 'Test-Category11', '', 'Tester', 'scar-treatment-th.jpg', 'scar-augmentation1.jpg', '', '', 1000.00, '', '', '', '', 'Testing ', '', '', '', 10, 'Active', '', '', '2024-06-14 11:35:17', '2024-06-14 11:35:17', '2024-06-14 06:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(150) NOT NULL DEFAULT '',
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `status`, `uploaded_on`) VALUES
(1, 'Test-Category11', 'Active', '2024-06-08 11:17:43'),
(2, 'Test-Category22', 'Active', '2024-06-11 14:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `sub_title` varchar(100) NOT NULL DEFAULT '',
  `thumb_nail` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta` mediumtext DEFAULT NULL,
  `meta_desc` longtext DEFAULT NULL,
  `meta_link` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `uploaded_on` datetime DEFAULT current_timestamp(),
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sub_title`, `thumb_nail`, `image`, `description`, `meta_title`, `meta`, `meta_desc`, `meta_link`, `status`, `view_count`, `uploaded_on`, `date_time`) VALUES
(2, 'Glowing Skin', '', 'services-01.jpg', 'glowing-skin-1.jpg', 'We specialize in enhancing your natural beauty through personalized skincare treatments. Our comprehensive services, including hydrating facials, chemical peels, and laser skin rejuvenation, are designed to give you a radiant, luminous complexion. Our expert team uses the latest technology and advanced skincare products to ensure safe, effective results. Whether you\'re dealing with dryness, uneven tone, or signs of aging, we tailor our treatments to meet your unique needs. Experience the confidence that comes with glowing, healthy skin. Contact us today to schedule your consultation and start your journey to radiant skin.', NULL, NULL, NULL, '', 'Active', 30, '2024-06-13 17:54:21', '2024-06-10 12:40:05'),
(3, 'Hair Fall and PRP', '', 'hair-fall.jpg', 'prp-hair-therapy-featured-image.jpg', 'We offer advanced solutions for hairfall, including Platelet-Rich Plasma (PRP) therapy. PRP is a revolutionary treatment that uses your body’s own platelets to stimulate hair growth and strengthen hair follicles. Our expert trichologists tailor each treatment to address the root causes of hair loss, ensuring optimal results. PRP therapy is minimally invasive and promotes natural hair growth, making it an effective solution for thinning hair and baldness. Reclaim your confidence with fuller, healthier hair. Contact us today to schedule your consultation and start your journey to revitalized hair.', NULL, NULL, NULL, '', 'Active', 13, '2024-06-13 18:35:40', '2024-06-10 15:33:02'),
(4, 'Acne Treatment', '', 'acne-1.jpg', 'Acne-2.jpeg', 'We offer comprehensive acne treatment solutions tailored to your unique skin needs. Our expert dermatologists utilize the latest techniques, including advanced laser therapy, chemical peels, and customized skincare regimens, to effectively treat and prevent acne. We address the root causes of acne, reducing inflammation, unclogging pores, and promoting clear, healthy skin. Whether you\'re dealing with occasional breakouts or severe acne, our personalized approach ensures optimal results. Say goodbye to acne and hello to confidence.', NULL, NULL, NULL, '', 'Active', 8, '2024-06-13 17:55:38', '2024-06-10 15:35:37'),
(5, 'Hyper Pigmentation', '', 'hyper-1.jpg', 'Hyperpigmentation-on-Face.jpg', 'We specialize in treating hyperpigmentation to help you achieve a more even and radiant complexion. Our expert dermatologists use advanced treatments like laser therapy, chemical peels, and customized skincare regimens to effectively reduce dark spots and discoloration. We target the underlying causes of hyperpigmentation, such as sun damage and hormonal changes, to provide long-lasting results. Whether you’re dealing with age spots, melasma, or post-inflammatory hyperpigmentation, our personalized approach ensures optimal outcomes.', NULL, NULL, NULL, '', 'Active', 1, '2024-06-13 18:06:25', '2024-06-13 17:59:10'),
(6, 'Anti Aging', '', 'anti-aging-th.jpg', 'AdobeStock_507723774_resized-for-hero.jpg', 'We offer advanced anti-aging treatments to help you look and feel your best. Our expert dermatologists use cutting-edge techniques such as Botox, dermal fillers, laser therapy, and chemical peels to reduce fine lines, wrinkles, and other signs of aging. We focus on enhancing your natural beauty by improving skin texture, elasticity, and tone. Our personalized treatment plans are tailored to your unique needs, ensuring optimal and natural-looking results. Rejuvenate your skin and restore your youthful glow with our effective anti-aging solutions', NULL, NULL, NULL, '', 'Active', 3, '2024-06-13 18:09:21', '2024-06-13 17:59:45'),
(7, 'Scar Treatment', '', 'scar-treatment-th.jpg', 'scar-augmentation1.jpg', 'We specialize in advanced scar treatment solutions to help you achieve smooth, clear skin. Our expert dermatologists use cutting-edge techniques such as laser therapy, microneedling, chemical peels, and customized skincare regimens to effectively reduce the appearance of scars from acne, surgery, or injuries. By targeting the deeper layers of skin, we promote collagen production and skin regeneration, ensuring long-lasting results. Our personalized approach ensures that each treatment plan is tailored to your specific needs and skin type.', NULL, NULL, NULL, '', 'Active', 3, '2024-06-13 18:12:55', '2024-06-13 18:00:26'),
(8, 'Mole & Wart Treatment', '', 'wart-th.jpg', 'mole-removal-in-Noida.jpg', 'We offer specialized treatments for the safe and effective removal of moles and warts. Our expert dermatologists use advanced methods such as laser therapy, cryotherapy, and surgical excision to address these skin concerns with precision and care. Whether for cosmetic reasons or medical necessity, we tailor our approach to ensure minimal discomfort and optimal results. Each treatment plan is customized to your specific needs, ensuring the best possible outcome. Regain your clear, healthy skin and boost your confidence.', NULL, NULL, NULL, '', 'Active', 3, '2024-06-13 18:19:08', '2024-06-13 18:02:06'),
(9, 'Testing service', '', 'anti-aging-th.jpg', 'AdobeStock_507723774_resized-for-hero.jpg', 'Tsting', NULL, NULL, NULL, '', 'Active', 1, '2024-06-14 11:36:24', '2024-06-14 11:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `profile` varchar(50) NOT NULL DEFAULT '',
  `feedback` varchar(1000) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `username`, `profile`, `feedback`, `image`, `status`, `uploaded_on`) VALUES
(1, 'Aadhithyan', 'Front-end developer', 'My journey as a Front-End Intern at JOJO Academy has been nothing short of extraordinary. From day one, the immersive learning environment and hands-on projects have accelerated my growth in web development. The mentorship provided by industry experts is unparalleled, offering insights that transcend textbooks.        ', 'test3.jpg', 'Active', '2024-04-18 18:11:58'),
(2, 'Harish', 'Front-end developer', 'The academy\'s comprehensive curriculum and real-world projects have been instrumental in refining my skills, enabling me to seamlessly navigate the complexities of full-stack development. The mentorship from seasoned professionals has been invaluable, fostering an environment where questions are encouraged, challenges are embraced.', 'test1.jpg', 'Active', '2023-12-05 05:17:02'),
(3, 'Subithra', 'Digital Marketing', 'My tenure as an SEO and Digital Marketing Intern at JOJO Academy has been a revelation in the world of online visibility and strategic outreach. The curriculum seamlessly blends  theory with hands-on projects, providing a holistic understanding of SEO, SEM, and digital marketing strategies. Grateful for the opportunity to contribute.', 'test2.jpg', 'Active', '2024-04-18 18:12:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`course_category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_list`
--
ALTER TABLE `lead_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_billing`
--
ALTER TABLE `order_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `course_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lead_list`
--
ALTER TABLE `lead_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_billing`
--
ALTER TABLE `order_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
