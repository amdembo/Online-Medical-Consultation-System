-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 12:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `D_id` int(11) NOT NULL,
  `symptions` varchar(600) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `causes` varchar(600) NOT NULL,
  `drugs` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`D_id`, `symptions`, `dname`, `causes`, `drugs`) VALUES
(1, 'Weakness,\r\nAppear pale,\r\nFatigue easily,\r\nHave decreased energy,\r\nFeel tired or lightheaded,\r\nExperience shortness of breath,\r\nDevelop palpitation or rapid heart rate.\r\n', 'anemia', 'Bleeding (hemorrhage),\r\nNot enough normal hemoglobin,\r\nUnderproduction of red blood cells,\r\nExcessive destruction of red blood cells.\r\n\r\n', ''),
(2, 'Fever and chills,\r\nClinical jaundice,\r\nMultiple convolutions,\r\nImpaired consciousness,\r\nprostration (adopting prayer position),\r\nAbnormal bleeding and signs of anemia,\r\nDeep breathing and respiratory distress.\r\n', 'malaria', 'microscopic parasite,\r\nThrough blood transfusions,\r\nFrom mother to unborn child\r\nsharing needles used to inject drugs.\r\n', '1)Mefloquine\r\n2)Chloroquine (Aralen)\r\n3)Quinine sulfate (Qualaquine)\r\n4)Hydroxychloroquine (Plaquenil)\r\n'),
(3, 'Pain,\r\nDiscomfort,\r\nurinary urgency,\r\nUrinating frequently,\r\nBurning when trying to urinate,\r\nPassing only a small amount of urine.\r\n', 'Bladder infection', 'Chlamydia,\r\nMycoplasma,\r\nEscherichia coli (E. coli)\r\n\r\n', '1)wear cotton underwear\r\n2)Phenazophyridine (Pyridium)\r\n\r\n3)Urinate as soon as you feel need\r\n'),
(4, 'Breast pain\r\nNipple pain\r\nBreast swelling\r\nNipple inversion\r\nBreast lump or mass\r\nBloody nipple discharge\r\nRedness of the breast skin\r\nChange in breast size or shape\r\nDimpling or puckering of the breast skin\r\n', 'Breast cancer', 'Breast cells begin growing abnormally,\r\nComplex combination of genetic makeup\r\n', '1)Radiation\r\n2)Mastectomy\r\n3)Lumpectomy\r\n4)Chemotherapy\r\n5)Hormone therapy\r\n6)Sentinel node biopsy\r\n7)Axillary lymph node dissection\r\n'),
(5, 'Chills,\r\nFever,\r\nCough,\r\nFatigue,\r\nSore throat,\r\nHeartburn,\r\nHoarsness,\r\nRegurgitation,\r\nEnlarged tonsils,\r\nDifficulty swallowing,\r\nMouth sores or ulcers,\r\nFeeling of a lump in the throat,\r\nRedness in the throat or mouth.\r\n', 'CHRONIC SORE THROAT\r\n\r\n\r\n\r\n', 'Allergies,\r\nSmocking,\r\nStrep throat,\r\nMononucleosis,\r\nInfluenza (the flu),\r\nInhaling air pollutants,\r\nInhaling through the mouth,\r\nTonsillitis (infection of the tonsils).\r\n', '1)Stay hydrated\r\n2)Moisten the throat\r\n'),
(6, 'Fever,\r\nA dry cough,\r\nMild headache,\r\nAbdominal pain,\r\nGeneral feeling of discomfort.\r\n', 'CHICKEN POX\r\n\r\n\r\n\r\n\r\n', 'Vericella-zoster virus\r\nContact with an infected person\r\n', '1)Oatmeal bath\r\n2)bath with Calamine lotion\r\n3)take diphenhydramine (benadryl)\r\n4)Acetaminophen (tylenol)\r\n'),
(7, 'Fever,\r\nDiarrhea,\r\nWeight loss,\r\nSwollen lymph nodes,\r\ncough and shortness of breath\r\n', 'HIV/AIDS', 'During sex,\r\nMother to child,\r\nBlood transfusion\r\n', '1)Non-nucleoside reverse transcriptase inhibitors (NNRTIs)\r\n2)Protease inhibitors (PIs)\r\n'),
(8, 'Fatigue,\r\nBlurred vision,\r\nExtreme hunger,\r\nFrequent urination,\r\nSlow-healing sores,\r\nMale sexual dysfunction,\r\nUnexplained weight loss,\r\nIncreased thirst and hunger,\r\nvaginal or bladder infections,\r\nCuts and bruises that do not heal,\r\nNumbness and tingling in hands and feet\r\n', 'DIABETES\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'obesity,\r\nBad diet,\r\nOverweight,\r\nPancreatitis,\r\nGlucagonoma,\r\nincreasing age,\r\nLiving a sedentary lifestyle,\r\nOver-abundance of cortisol,\r\nSuffer from polycystic ovary syndrome,\r\nHave had a large baby weighing over 9lb\r\nProlonged use of glucocorticoid therapy\r\n', '1)Take diabetic diet\r\n2)Exercise your body\r\n3)Control blood sugar (glucose)\r\n'),
(9, 'Chills,\r\nFever,\r\nFatigue,\r\nNight sweats,\r\nLoss of appetite,\r\nCoughing up blood,\r\nUnexplained weight loss,\r\nCoughing that lasts three or more weeks,\r\nChest pain or pain with breathing & coughing\r\n', 'TUBERCULOSIS\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Bacteria,\r\nMicroscopic droplets released through air\r\n', '1)Isoniazid\r\n2)Rifampicin\r\n3)Pyrazinamide\r\n4)Ethambutol\r\n5)Steptomycin\r\n'),
(10, 'Bloating,\r\nHeartburn,\r\nWeight loss,\r\nVomiting blood,\r\nNausea or vomiting,\r\nDark or black stool,\r\nSevere pain in the mid to upper abdomen\r\n', 'PEPTIC ULCER\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Serious illness,\r\nAspirin in powered form,\r\nExcessive drinking of alcohol,\r\nSmocking or chewing alcohol,\r\nRadiation treatment to the area,\r\nExcess acid production from gastronomes\r\n', '1)Paracetamol\r\n2)Eat frequently\r\n3)Magnessium trisilicate\r\n4)Loratadine tablet 10mg\r\n5)Cimetidine tablets 400mg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `un` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `un`, `pw`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `em` varchar(50) NOT NULL,
  `un` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `ph` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `fn`, `ln`, `em`, `un`, `pw`, `ph`) VALUES
(1, 'ddd', 'dffd', 'df@gmail.com', 'vcvc', 'ffg', '344343');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
