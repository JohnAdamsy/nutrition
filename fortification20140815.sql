
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 68.178.143.73
-- Generation Time: Aug 14, 2014 at 11:13 PM
-- Server version: 5.5.37
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


USE `fortification_current`;

-- --------------------------------------------------------

--
-- Table structure for table ` brands`
--

CREATE TABLE ` brands` (
  `brand_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `brand_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accesslog`
--

CREATE TABLE `accesslog` (
  `accessLogID` bigint(20) NOT NULL AUTO_INCREMENT,
  `usersID` bigint(20) NOT NULL,
  `logOnstamp` timestamp NULL DEFAULT NULL,
  `logOffstamp` timestamp NULL DEFAULT NULL,
  `remoteIP` varchar(45) NOT NULL,
  PRIMARY KEY (`accessLogID`),
  KEY `users_accessLog` (`usersID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `brand_name` varchar(45) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `comp_vehicles`
--
CREATE TABLE `comp_vehicles` (
`company_id` int(11)
,`company_name` varchar(45)
,`vehicle` varchar(100)
);
-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(45) NOT NULL,
  `company_code` varchar(45) NOT NULL,
  `other_info` varchar(3000) NOT NULL,
  `company_type_id` int(11) NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`company_id`),
  KEY `company_type_id` (`company_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_type`
--

CREATE TABLE `company_type` (
  `company_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`company_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_vehicles`
--

CREATE TABLE `company_vehicles` (
  `vehicle_company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`vehicle_company_id`),
  KEY `company_id` (`company_id`),
  KEY `vehicle_id` (`vehicle_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

-- --------------------------------------------------------

--
-- Table structure for table `companybrands`
--

CREATE TABLE `companybrands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(250) NOT NULL,
  `company_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`brand_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `deviceSerialNumber` varchar(50) NOT NULL,
  `deviceType` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`deviceSerialNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb1`
--

CREATE TABLE `externalfortifiedb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `signature` varchar(15) NOT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb2`
--

CREATE TABLE `externalfortifiedb2` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packageArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `protectiveGear` varchar(45) DEFAULT NULL,
  `trainingInTasks` varchar(45) DEFAULT NULL,
  `receiptStoragePremix` varchar(45) DEFAULT NULL,
  `premixDilution` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `QCSaltSampling` varchar(45) DEFAULT NULL,
  `iodineTest` varchar(45) DEFAULT NULL,
  `iodineCompoundUptoDate` varchar(45) DEFAULT NULL,
  `COAPerLot` varchar(45) DEFAULT NULL,
  `iodineStorageAdequate` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `iodineCompoundHandling` varchar(45) DEFAULT NULL,
  `premixPreparation` varchar(10) NOT NULL,
  `premixStorageHandling` varchar(45) DEFAULT NULL,
  `feederSprayerRecord` varchar(45) DEFAULT NULL,
  `feederLevelAdequate` varchar(45) DEFAULT NULL,
  `saltProductionPremixRecords` varchar(45) DEFAULT NULL,
  `saltSamplingEachShift` varchar(45) DEFAULT NULL,
  `saltProductionPremixRight` varchar(45) DEFAULT NULL,
  `iodineResultLess40MgPerKg` varchar(45) DEFAULT NULL,
  `internalTest` varchar(45) DEFAULT NULL,
  `externalTest` varchar(45) DEFAULT NULL,
  `dailyCompositeSamples` varchar(45) DEFAULT NULL,
  `last30SamplesAvailable` varchar(45) DEFAULT NULL,
  `labelingSpecifications` varchar(45) NOT NULL,
  `fortifiedSaltStoredAdequate` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `assessmentOfCorrectiveAction` tinyint(4) DEFAULT NULL COMMENT '1-adequtuate, 0-inadequate',
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `premixType` varchar(45) DEFAULT NULL COMMENT 'iodate/iodine',
  `idComposite` varchar(45) DEFAULT NULL,
  `iodineMgPerKg0` varchar(45) DEFAULT NULL,
  `refIodine` varchar(45) DEFAULT NULL,
  `iodineMgPerKg1` varchar(45) DEFAULT NULL,
  `idOther` varchar(45) DEFAULT NULL,
  `iodineMgPerKg2` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb3`
--

CREATE TABLE `externalfortifiedb3` (
  `transcationNumber` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(25) NOT NULL,
  `dateOfInspection` date NOT NULL,
  `factoryName` varchar(45) NOT NULL,
  `factoryRepresentative` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) NOT NULL COMMENT 'a comma separated list',
  `nonCompliances` text NOT NULL,
  `suggestionsForImprovement` text NOT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(25) NOT NULL,
  `inspectorDate` date NOT NULL,
  `receivedDate` date NOT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transcationNumber`),
  KEY `manufacturerCompName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `externaliodizationb1`
--

CREATE TABLE `externaliodizationb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `inspector` varchar(45) DEFAULT NULL,
  `inventoryUpToDate` varchar(45) DEFAULT NULL,
  `sufficientIodine3Months` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `potassiumIodateAmounts` varchar(45) DEFAULT NULL,
  `premixRecords` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `saltVsPremix` varchar(45) DEFAULT NULL,
  `iodizedSaltUpToDate` varchar(45) DEFAULT NULL,
  `saltPerKgAdequate` varchar(45) DEFAULT NULL,
  `sampleNumber` varchar(45) DEFAULT NULL,
  `iodineContent0` varchar(45) DEFAULT NULL,
  `sampleReprocessed` varchar(45) DEFAULT NULL,
  `iodineContent1` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(255) NOT NULL DEFAULT 'none',
  `suggestionsForImprovement` varchar(255) NOT NULL DEFAULT 'none',
  `receivedBy` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `factoryNumber` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `manufacturerFortName` varchar(45) NOT NULL,
  PRIMARY KEY (`factoryNumber`,`manufacturerFortName`),
  UNIQUE KEY `Manufacturer_FCentre_Name_UNIQUE` (`factoryName`),
  KEY `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` (`manufacturerFortName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `food_types`
--

CREATE TABLE `food_types` (
  `foodtype_Id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`foodtype_Id`),
  KEY `vehicleName` (`food_type_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `foods_markettable`
--

CREATE TABLE `foods_markettable` (
  `productMarketID` int(11) NOT NULL AUTO_INCREMENT,
  `sample_no` varchar(100) NOT NULL,
  `date_collected` varchar(50) NOT NULL,
  `time_collected` varchar(50) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `collection_method` text NOT NULL,
  `collection_reason` text NOT NULL,
  `collector` varchar(250) NOT NULL,
  `dealer` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `sample_size` double NOT NULL,
  `date_dispatched` varchar(50) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `vehicle_type` varchar(250) NOT NULL,
  `specimen_seal` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  PRIMARY KEY (`productMarketID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `foodtype`
--

CREATE TABLE `foodtype` (
  `vehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleName` varchar(100) NOT NULL,
  PRIMARY KEY (`vehicleId`),
  KEY `vehicleName` (`vehicleName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifieda1`
--

CREATE TABLE `internalfortifieda1` (
  `receiptNumber` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(10) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `purchaseOrderNumber` varchar(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `integrityObservation` varchar(45) NOT NULL,
  `lotNumber` varchar(11) DEFAULT NULL,
  `lotObservation` varchar(45) NOT NULL,
  `productionDate` varchar(11) DEFAULT NULL,
  `productObservation` varchar(45) NOT NULL,
  `expiryDate` varchar(11) DEFAULT NULL,
  `expirationObservation` varchar(45) NOT NULL,
  `contentClaimedLabel` varchar(45) DEFAULT NULL,
  `contentObservation` varchar(45) NOT NULL,
  `certificateOfAnalysis` varchar(45) DEFAULT NULL,
  `certificateObservation` varchar(45) NOT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) NOT NULL,
  `accepted` tinyint(1) DEFAULT '1' COMMENT '1-accepted, 0-rejected',
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) NOT NULL,
  PRIMARY KEY (`receiptNumber`),
  KEY `fk_TableA2(23)_PremixType` (`productType`),
  KEY `fk_TableA2(23)_Manufacturer_Compound1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifieda2`
--

CREATE TABLE `internalfortifieda2` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `supplierCOA` varchar(45) DEFAULT NULL,
  `noOfDrums` int(11) DEFAULT NULL,
  `lotId` varchar(45) DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT 'n/a',
  `transactedBy` varchar(40) NOT NULL,
  `dateOfReporting` date DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`),
  KEY `supplierCOA` (`supplierCOA`),
  KEY `lotId` (`lotId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifieda2dispatched`
--

CREATE TABLE `internalfortifieda2dispatched` (
  `dispatchedNumberA2` int(11) NOT NULL AUTO_INCREMENT,
  `transactedBy` varchar(45) NOT NULL,
  `dateOfReporting` varchar(10) NOT NULL,
  `internalFortifiedA2ID` int(11) NOT NULL,
  `lotID` int(11) NOT NULL,
  `receiptAndQCReview` varchar(40) NOT NULL,
  PRIMARY KEY (`dispatchedNumberA2`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedb1`
--

CREATE TABLE `internalfortifiedb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `fillerWeight` double DEFAULT NULL,
  `iodineWeight` double DEFAULT NULL,
  `finalPremixWeight1` double DEFAULT NULL,
  `startTime` varchar(8) DEFAULT NULL,
  `endTime` varchar(8) DEFAULT NULL,
  `finalPremixWeight` double DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedb2`
--

CREATE TABLE `internalfortifiedb2` (
  `checkNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `deviceCondition` tinyint(1) NOT NULL DEFAULT '1',
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`checkNumber`),
  KEY `deviceCompNumber` (`deviceCompNumber`,`manufacturerCompName`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedc1`
--

CREATE TABLE `internalfortifiedc1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(8) DEFAULT NULL,
  `saltProducedMT` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `saltFortVsPremixUsed` double DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_externalfortb1`
--

CREATE TABLE `maize_externalfortb1` (
  `maize_externalfortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortB1ID`),
  KEY `maize_externalfortB1_manufacturerfortified` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_externalfortb2`
--

CREATE TABLE `maize_externalfortb2` (
  `maize_externalfortb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packagingArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) NOT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `protectiveClothing` varchar(45) DEFAULT NULL,
  `trainnedInTasks` varchar(45) DEFAULT NULL,
  `receiptAndStorage` varchar(45) DEFAULT NULL,
  `premixDilution` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `samplingOfMaize` varchar(45) DEFAULT NULL,
  `ironSpotTest` varchar(45) DEFAULT NULL,
  `premixInventory` varchar(45) DEFAULT NULL,
  `COAReceived` varchar(45) DEFAULT NULL,
  `premixStored` varchar(45) DEFAULT NULL,
  `premixHandledWell` varchar(45) DEFAULT NULL,
  `premixDilutionApplicable` varchar(45) DEFAULT NULL,
  `homogeneityAssessed` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `recordsOfFeeder` varchar(45) DEFAULT NULL,
  `premixLevel` varchar(45) DEFAULT NULL,
  `recordsOfFlour` varchar(45) DEFAULT NULL,
  `flourSamplesTaken` varchar(45) DEFAULT NULL,
  `ratioMaizeProduced` varchar(45) DEFAULT NULL,
  `ironContent` varchar(45) DEFAULT NULL,
  `spotTest` varchar(45) DEFAULT NULL,
  `quantitativeMethodIron` varchar(45) DEFAULT NULL,
  `quantitativeMethodVitamin` varchar(45) DEFAULT NULL,
  `dailyCompositeSamples` varchar(45) DEFAULT NULL,
  `last30Samples` varchar(45) DEFAULT NULL,
  `labelingMeetsSpecifications` varchar(45) DEFAULT NULL,
  `fortifiedMaizeFlour` varchar(45) DEFAULT NULL,
  `FIFOSystemFlour` varchar(45) DEFAULT NULL,
  `FIFOSystemPremix` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `assessmentOfCorrectiveAction` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `premixType` varchar(45) DEFAULT NULL,
  `compositeID` varchar(45) DEFAULT NULL,
  `factoryEstimatesIronMgPerKg` decimal(10,0) DEFAULT NULL,
  `labResultsIronMgPerKg` decimal(10,0) DEFAULT NULL,
  `inspectionVitaminMgPerKg0` decimal(10,0) DEFAULT NULL,
  `IDOther` varchar(45) DEFAULT NULL,
  `ironMgPerKg2` decimal(10,0) DEFAULT NULL,
  `vitaminAMgPerKg1` decimal(10,0) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortb2ID`),
  KEY `maize_externalfortb2_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_externalfortb3`
--

CREATE TABLE `maize_externalfortb3` (
  `maize_externalfortb3ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) NOT NULL,
  `dateOfInspection` varchar(45) NOT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `factoryRepresentative` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `inspectorDate` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortb3ID`),
  KEY `maize_externalfortb3_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalforta1`
--

CREATE TABLE `maize_internalforta1` (
  `maize_internalforta1ID` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `integrityObservation` varchar(45) DEFAULT NULL,
  `lotNumber` varchar(10) DEFAULT NULL,
  `lotObservation` varchar(45) DEFAULT NULL,
  `productionDate` varchar(10) DEFAULT NULL,
  `productionObservation` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(10) DEFAULT NULL,
  `expiryObservation` varchar(45) DEFAULT NULL,
  `micronutrientLevels` varchar(10) DEFAULT NULL,
  `micronutrientObservation` varchar(45) DEFAULT NULL,
  `certificateOfAnalysis` varchar(10) DEFAULT NULL,
  `certificateOfAnalysisObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalforta1ID`),
  KEY `maize_internalforta1_premixtype` (`productType`),
  KEY `maize_internalforta1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalforta2`
--

CREATE TABLE `maize_internalforta2` (
  `maize_internalforta2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `quantityReceived` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(45) DEFAULT NULL,
  `dispatchedQuantity` double DEFAULT NULL,
  `reportingDate` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalforta2ID`),
  KEY `maize_internalforta2_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalfortb1`
--

CREATE TABLE `maize_internalfortb1` (
  `maize_internalfortb1ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `productionRate` double DEFAULT NULL,
  `theoreticFeederFlow` double DEFAULT NULL,
  `feederFlow1` double DEFAULT NULL,
  `feederFlow2` double DEFAULT NULL,
  `feederFlow3` double DEFAULT NULL,
  `CV` varchar(45) DEFAULT NULL,
  `adjusted` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalfortb1ID`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalfortb2`
--

CREATE TABLE `maize_internalfortb2` (
  `maize_internalfortb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `flourProducedMT` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalfortb2ID`),
  KEY `maize_internalfortb2_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalfortc1`
--

CREATE TABLE `maize_internalfortc1` (
  `maize_internalfortc1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `maizeFlourProduced` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `maizeFlourVSPremix` double DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `compositeSample` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalfortc1ID`),
  KEY `maize_internalfortc1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_markettable`
--

CREATE TABLE `maize_markettable` (
  `MaizeMarketID` int(11) NOT NULL AUTO_INCREMENT,
  `sample_no` varchar(100) NOT NULL,
  `date_collected` varchar(50) NOT NULL,
  `time_collected` varchar(50) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `collection_method` text NOT NULL,
  `collection_reason` text NOT NULL,
  `collector` varchar(250) NOT NULL,
  `dealer` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `sample_size` double NOT NULL,
  `date_dispatched` varchar(50) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `specimen_seal` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  PRIMARY KEY (`MaizeMarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maize_productiontable`
--

CREATE TABLE `maize_productiontable` (
  `MaizeProductionID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_month` varchar(20) NOT NULL,
  `opening_balance` double NOT NULL,
  `qty_delivered` double NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `qty_rejected` double NOT NULL,
  `qty_issued` double NOT NULL,
  `closing_balance` double NOT NULL,
  `dosage_rate` double NOT NULL,
  `theoretical_prod` double NOT NULL,
  `actual_prod` double NOT NULL,
  `production_unfort` double NOT NULL,
  `exp_fort` double NOT NULL,
  `exp_unfort` double NOT NULL,
  `fort_brands` text NOT NULL,
  `unfort_brands` text NOT NULL,
  `company_id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `edited_by` varchar(250) NOT NULL DEFAULT 'N/A',
  `time_edited` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `fort_sales` double NOT NULL,
  PRIMARY KEY (`MaizeProductionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

-- --------------------------------------------------------

--
-- Table structure for table `manucdevices`
--

CREATE TABLE `manucdevices` (
  `manufacturerCompName` varchar(45) NOT NULL,
  `deviceCompNumber` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerCompName`,`deviceCompNumber`),
  KEY `deviceCompNumber` (`deviceCompNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturercompound`
--

CREATE TABLE `manufacturercompound` (
  `manufacturerId` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerId`),
  UNIQUE KEY `Manufacturer_Name_UNIQUE` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturerfortified`
--

CREATE TABLE `manufacturerfortified` (
  `manufacturerFortId` int(11) NOT NULL AUTO_INCREMENT,
  `manufactuerFortName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `vehicleName` varchar(100) NOT NULL,
  PRIMARY KEY (`manufacturerFortId`),
  UNIQUE KEY `Manufactuer_FName_UNIQUE` (`manufactuerFortName`),
  KEY `vehicleName` (`vehicleName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(45) NOT NULL,
  `manufacturer_email` varchar(45) NOT NULL,
  `manufacturer_location` varchar(45) NOT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `market_samples_table`
--

CREATE TABLE `market_samples_table` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `company_type` varchar(250) DEFAULT NULL,
  `producer_name` varchar(250) DEFAULT NULL,
  `type_of_poduct` varchar(250) DEFAULT NULL,
  `brand_name` varchar(250) DEFAULT NULL,
  `production` varchar(250) DEFAULT NULL,
  `date_of_sample_collection` varchar(50) DEFAULT NULL,
  `sample_collection_location` varchar(250) DEFAULT NULL,
  `store_type` varchar(250) DEFAULT NULL,
  `date_received_lab` varchar(50) DEFAULT NULL,
  `expiry_date` varchar(50) DEFAULT NULL,
  `labelled_as_fortified` varchar(250) DEFAULT NULL,
  `sample_amount_taken` double DEFAULT NULL,
  `date_of_analysis` varchar(50) DEFAULT NULL,
  `result_a` varchar(250) DEFAULT NULL,
  `result_b` varchar(250) DEFAULT NULL,
  `result_c` varchar(250) DEFAULT NULL,
  `added_by` varchar(250) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `edited_by` varchar(250) DEFAULT NULL,
  `date_edited` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_markettable`
--

CREATE TABLE `oil_markettable` (
  `OilMarketID` int(11) NOT NULL AUTO_INCREMENT,
  `sample_no` varchar(100) NOT NULL,
  `date_collected` varchar(50) NOT NULL,
  `time_collected` varchar(50) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `collection_method` text NOT NULL,
  `collection_reason` text NOT NULL,
  `collector` varchar(250) NOT NULL,
  `dealer` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `sample_size` double NOT NULL,
  `date_dispatched` varchar(50) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `specimen_seal` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  PRIMARY KEY (`OilMarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_productiontable`
--

CREATE TABLE `oil_productiontable` (
  `OilProductionID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_month` varchar(20) NOT NULL,
  `opening_balance` double NOT NULL DEFAULT '0',
  `qty_delivered` double NOT NULL DEFAULT '0',
  `supplier` varchar(250) NOT NULL DEFAULT '0',
  `qty_rejected` double NOT NULL DEFAULT '0',
  `qty_issued_o_f` double NOT NULL DEFAULT '0',
  `qty_issued_m` double NOT NULL DEFAULT '0',
  `closing_balance` double NOT NULL DEFAULT '0',
  `dosage_rate_o_f` double NOT NULL DEFAULT '0',
  `theoretical_prod` double NOT NULL DEFAULT '0',
  `actual_prod_oil` double NOT NULL DEFAULT '0',
  `actual_prod_fats` double NOT NULL DEFAULT '0',
  `dosage_rate_m` double NOT NULL DEFAULT '0',
  `theoretical_prod_m` double NOT NULL DEFAULT '0',
  `actual_prod_m` double NOT NULL DEFAULT '0',
  `production_unfort` double NOT NULL DEFAULT '0',
  `exp_fats` double NOT NULL DEFAULT '0',
  `exp_oil` double NOT NULL DEFAULT '0',
  `fort_brands` text NOT NULL,
  `unfort_brands` text NOT NULL,
  `company_id` int(250) NOT NULL,
  `year` varchar(4) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  `sales` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`OilProductionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_productiontable1`
--

CREATE TABLE `oil_productiontable1` (
  `OilProductionID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_month` varchar(20) NOT NULL,
  `opening_balance` double NOT NULL,
  `qty_delivered` double NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `qty_rejected` double NOT NULL,
  `qty_issued` double NOT NULL,
  `closing_balance` double NOT NULL,
  `dosage_rate` double NOT NULL,
  `theoretical_prod` double NOT NULL,
  `actual_prod` double NOT NULL,
  `production_unfort` double NOT NULL,
  `exp_fort` double NOT NULL,
  `exp_unfort` double NOT NULL,
  `fort_brands` text NOT NULL,
  `unfort_brands` text NOT NULL,
  `company_id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `edited_by` varchar(250) NOT NULL DEFAULT 'N/A',
  `time_edited` varchar(20) NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`OilProductionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_tablea1`
--

CREATE TABLE `oil_tablea1` (
  `fortifiedOilA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `supplierCOANumber` varchar(45) DEFAULT NULL,
  `numberOfCans` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `expirationDate` varchar(45) DEFAULT NULL,
  `dispatchedLotID` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedOilA1ID`),
  KEY `fortifiedOilA1_manufacturerfortified` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_tableb1`
--

CREATE TABLE `oil_tableb1` (
  `fortifiedoilb1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `batchNumber` varchar(45) DEFAULT NULL,
  `batchSize` double DEFAULT NULL,
  `vitaminAAmount` double DEFAULT NULL,
  `premixStart` varchar(8) DEFAULT NULL,
  `premixEnd` varchar(8) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedoilb1ID`),
  KEY `fortifiedoilb1_manufacturerfortified` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_tableb2`
--

CREATE TABLE `oil_tableb2` (
  `fortifiedoilb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) NOT NULL,
  `deviceCondition` tinyint(1) NOT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedoilb2ID`),
  KEY `deviceCompNumber` (`deviceCompNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oil_tablec1`
--

CREATE TABLE `oil_tablec1` (
  `fortifiedOilC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `shiftTime` varchar(8) DEFAULT NULL,
  `oilProduced` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `oilFortified` double DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedOilC1ID`),
  KEY `fortifiedOilC1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oversight_types`
--

CREATE TABLE `oversight_types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `premixtype`
--

CREATE TABLE `premixtype` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  UNIQUE KEY `ProdName_UNIQUE` (`productName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(45) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salt_markettable`
--

CREATE TABLE `salt_markettable` (
  `SaltMarketID` int(11) NOT NULL AUTO_INCREMENT,
  `sample_no` varchar(100) NOT NULL,
  `date_collected` varchar(50) NOT NULL,
  `time_collected` varchar(50) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `collection_method` text NOT NULL,
  `collection_reason` text NOT NULL,
  `collector` varchar(250) NOT NULL,
  `dealer` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `sample_size` double NOT NULL,
  `date_dispatched` varchar(50) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `specimen_seal` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  PRIMARY KEY (`SaltMarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smallscalea1`
--

CREATE TABLE `smallscalea1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `harvestYear` int(11) NOT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentOfIodine` int(11) NOT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smallscalea1dispatched`
--

CREATE TABLE `smallscalea1dispatched` (
  `smallScaleA1DispatchedID` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` double NOT NULL,
  `amountUsed` double NOT NULL,
  `smallScaleA1ID` int(11) NOT NULL,
  `amountOfPremixProduced` double NOT NULL,
  PRIMARY KEY (`smallScaleA1DispatchedID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smallscalea2`
--

CREATE TABLE `smallscalea2` (
  `transcationNumber` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` double NOT NULL,
  `dates` date DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentIodine` double NOT NULL,
  PRIMARY KEY (`transcationNumber`),
  KEY `manufacturerCompound_smallScaleA2` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smallscalea2dispatched`
--

CREATE TABLE `smallscalea2dispatched` (
  `dispatchedNumber` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` int(11) NOT NULL,
  `contentOfIodine` double NOT NULL,
  `amountUsed` double NOT NULL,
  `amountOfSaltProduced` double NOT NULL,
  `smallScaleA2ID` int(11) NOT NULL,
  PRIMARY KEY (`dispatchedNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_externalfortb1`
--

CREATE TABLE `sugar_externalfortb1` (
  `sugar_externalfortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_externalfortB1ID`),
  KEY `sugar_externalfortB1_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_externalfortb2`
--

CREATE TABLE `sugar_externalfortb2` (
  `sugar_externalfortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packagingArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `protectiveClothing` varchar(45) DEFAULT NULL,
  `trainedInTasks` varchar(45) DEFAULT NULL,
  `receiptAndStorage` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `sugarSampling` varchar(45) DEFAULT NULL,
  `vitaminAAssay` varchar(45) DEFAULT NULL,
  `premixInventory` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `deliveredAdequately` varchar(45) DEFAULT NULL,
  `retinolLevels` varchar(45) DEFAULT NULL,
  `feederFlow` varchar(45) DEFAULT NULL,
  `feederRecords` varchar(45) DEFAULT NULL,
  `feederAdjusted` varchar(45) DEFAULT NULL,
  `premixLevelAdequate` varchar(45) DEFAULT NULL,
  `maintenanceEvidence` varchar(45) DEFAULT NULL,
  `sugarRecords` varchar(45) DEFAULT NULL,
  `sugarSamples` varchar(45) DEFAULT NULL,
  `sugarRatio` varchar(45) DEFAULT NULL,
  `retinolResults` varchar(45) DEFAULT NULL,
  `semiQuantitativeMethod` varchar(45) DEFAULT NULL,
  `internalLab` varchar(45) DEFAULT NULL,
  `externalLab` varchar(45) DEFAULT NULL,
  `dailySamples` varchar(45) DEFAULT NULL,
  `last30Samples` varchar(45) DEFAULT NULL,
  `labelingSpecifications` varchar(45) DEFAULT NULL,
  `fortifiedSugar` varchar(45) DEFAULT NULL,
  `FIFOSystemDispatch` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `assessment` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestions` varchar(45) DEFAULT NULL,
  `premixType` varchar(45) DEFAULT NULL,
  `IDSamples` varchar(45) DEFAULT NULL,
  `estimatedAverage0` varchar(45) DEFAULT NULL,
  `inspectionResults0` varchar(45) DEFAULT NULL,
  `IDOtherSamples` varchar(45) DEFAULT NULL,
  `estimatedAverage1` varchar(45) DEFAULT NULL,
  `inspectionResults1` varchar(45) DEFAULT NULL,
  `officerName` varchar(45) DEFAULT NULL,
  `officerSignature` varchar(45) DEFAULT NULL,
  `officerDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorSignature` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_externalfortB2ID`),
  KEY `sugar_externalfortB2_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_externalfortb3`
--

CREATE TABLE `sugar_externalfortb3` (
  `sugar_externalfortB3ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `inspectorDate` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_externalfortB3ID`),
  KEY `sugar_externalfortB3_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalforta1`
--

CREATE TABLE `sugar_internalforta1` (
  `sugar_internalfortA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `clean` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `reportingDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortA1ID`),
  KEY `sugar_internalfortA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalforta2`
--

CREATE TABLE `sugar_internalforta2` (
  `sugar_internalfortA2ID` int(11) NOT NULL AUTO_INCREMENT,
  `generalCleanUp` varchar(45) DEFAULT NULL,
  `generalCleanUpCondition` varchar(45) DEFAULT NULL,
  `generalCleanUpObservation` varchar(45) DEFAULT NULL,
  `lubrication` varchar(45) DEFAULT NULL,
  `lubricationCondition` varchar(45) DEFAULT NULL,
  `lubricationObservation` varchar(45) DEFAULT NULL,
  `oilAspertion` varchar(45) DEFAULT NULL,
  `oilAspertionCondition` varchar(45) DEFAULT NULL,
  `oilAspertionObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherCondition` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `scalesCleanUp` varchar(45) DEFAULT NULL,
  `scalesCleanUpCondition` varchar(45) DEFAULT NULL,
  `scalesCleanUpObservation` varchar(45) DEFAULT NULL,
  `scalesCalibrated` varchar(45) DEFAULT NULL,
  `scalesCalibratedCondition` varchar(45) DEFAULT NULL,
  `scalesCalibratedObservation` varchar(45) DEFAULT NULL,
  `bathCleanUp` varchar(45) DEFAULT NULL,
  `bathCleanUpCondition` varchar(45) DEFAULT NULL,
  `bathCleanUpObservation` varchar(45) DEFAULT NULL,
  `bathTemperature` varchar(45) DEFAULT NULL,
  `bathTemperatureCondition` varchar(45) DEFAULT NULL,
  `bathTemperatureObservation` varchar(45) DEFAULT NULL,
  `stirrerPerformance` varchar(45) DEFAULT NULL,
  `stirrerPerformanceCondition` varchar(45) DEFAULT NULL,
  `stirrerPerformaneObservation` varchar(45) DEFAULT NULL,
  `nitrogenPerformance` varchar(45) DEFAULT NULL,
  `nitrogenPerformanceCondition` varchar(45) DEFAULT NULL,
  `nitrogenPerformanceObservation` varchar(45) DEFAULT NULL,
  `cartsCleanUp` varchar(45) DEFAULT NULL,
  `cartsCleanUpCondition` varchar(45) DEFAULT NULL,
  `cartsCleanUpObservation` varchar(45) DEFAULT NULL,
  `mobility` varchar(45) DEFAULT NULL,
  `mobilityCondition` varchar(45) DEFAULT NULL,
  `mobilityObservation` varchar(45) DEFAULT NULL,
  `integrity` varchar(45) DEFAULT NULL,
  `integrityCondition` varchar(45) DEFAULT NULL,
  `integrityObservation` varchar(45) DEFAULT NULL,
  `sewingPerformance` varchar(45) DEFAULT NULL,
  `sewingPerformanceCondition` varchar(45) DEFAULT NULL,
  `sewingPerformanceObservation` varchar(45) DEFAULT NULL,
  `cylinderCleanUp` varchar(45) DEFAULT NULL,
  `cylinderCleanUpCondition` varchar(45) DEFAULT NULL,
  `cylinderCleanUpObservation` varchar(45) DEFAULT NULL,
  `flaskCleanUp` varchar(45) DEFAULT NULL,
  `flaskCleanUpCondition` varchar(45) DEFAULT NULL,
  `flaskCleanUpObservation` varchar(45) DEFAULT NULL,
  `spatulaCleanUp` varchar(45) DEFAULT NULL,
  `spatulaCleanUpCondition` varchar(45) DEFAULT NULL,
  `spatulaCleanUpObservation` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortA2ID`),
  KEY `sugar_internalfortA2_ibfk_1` (`deviceCompNumber`),
  KEY `sugar_internalfortA2_ibfk_2` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalforta3`
--

CREATE TABLE `sugar_internalforta3` (
  `sugar_internalfortA3ID` int(11) NOT NULL AUTO_INCREMENT,
  `blenderDate` varchar(45) DEFAULT NULL,
  `blenderMaintenance` varchar(45) DEFAULT NULL,
  `blenderCalibration` varchar(45) DEFAULT NULL,
  `benderObservation` varchar(45) DEFAULT NULL,
  `blenderNextCalibration` varchar(45) DEFAULT NULL,
  `scalesDate` varchar(45) DEFAULT NULL,
  `scalesMaintenance` varchar(45) DEFAULT NULL,
  `scalesCalibration` varchar(45) DEFAULT NULL,
  `scalesObservation` varchar(45) DEFAULT NULL,
  `scalesNextCalibration` varchar(45) DEFAULT NULL,
  `balanceDate` varchar(45) DEFAULT NULL,
  `balanceMaintenance` varchar(45) DEFAULT NULL,
  `balanceCalibration` varchar(45) DEFAULT NULL,
  `balanceObservation` varchar(45) DEFAULT NULL,
  `balanceNextCalibration` varchar(45) DEFAULT NULL,
  `heatingBathDate` varchar(45) DEFAULT NULL,
  `heatingBathMaintenance` varchar(45) DEFAULT NULL,
  `heatingBathCalibration` varchar(45) DEFAULT NULL,
  `heatingBathObservation` varchar(45) DEFAULT NULL,
  `heatingBathNextCalibration` varchar(45) DEFAULT NULL,
  `electricStirrerDate` varchar(45) DEFAULT NULL,
  `electricStirrerMaintenance` varchar(45) DEFAULT NULL,
  `electricStirrerCalibration` varchar(45) DEFAULT NULL,
  `electricStirrerObservation` varchar(45) DEFAULT NULL,
  `electricStirrerNextCalibration` varchar(45) DEFAULT NULL,
  `nitrogenDeviceDate` varchar(45) DEFAULT NULL,
  `nitrogenDeviceMaintenance` varchar(45) DEFAULT NULL,
  `nitrogenDeviceCalibration` varchar(45) DEFAULT NULL,
  `nitrogenDeviceObservation` varchar(45) DEFAULT NULL,
  `nitrogenDeviceNextCalibration` varchar(45) DEFAULT NULL,
  `cartsDate` varchar(45) DEFAULT NULL,
  `cartsMaintenance` varchar(45) DEFAULT NULL,
  `cartsCalibration` varchar(45) DEFAULT NULL,
  `cartsObservation` varchar(45) DEFAULT NULL,
  `cartsNextCalibration` varchar(45) DEFAULT NULL,
  `sewingMachineDate` varchar(45) DEFAULT NULL,
  `sewingMachineMaintenance` varchar(45) DEFAULT NULL,
  `sewingMachineCalibration` varchar(45) DEFAULT NULL,
  `sewingMachineObservation` varchar(45) DEFAULT NULL,
  `sewingMachineNextCalibration` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortA3ID`),
  KEY `sugar_internalfortA3_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortb1`
--

CREATE TABLE `sugar_internalfortb1` (
  `sugar_internalfortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` varchar(45) DEFAULT NULL,
  `premixQuantity` double DEFAULT NULL,
  `sugarProduction` double DEFAULT NULL,
  `sugarInventory` double DEFAULT NULL,
  `sugarCost` double DEFAULT NULL,
  `vitaminAInventory` double DEFAULT NULL,
  `vitaminACost` double DEFAULT NULL,
  `antioxidantInventory` double DEFAULT NULL,
  `antioxidantCost` double DEFAULT NULL,
  `vegetableOilInventory` double DEFAULT NULL,
  `vegetableOilCost` double DEFAULT NULL,
  `polythyleneInventory` double DEFAULT NULL,
  `polythyleneCost` double DEFAULT NULL,
  `polypropyleneInventory` double DEFAULT NULL,
  `polypropyleneCost` double DEFAULT NULL,
  `nitrogenInventory` double DEFAULT NULL,
  `nitrogenCost` double DEFAULT NULL,
  `preparedBy` varchar(45) DEFAULT NULL,
  `preparedDate` varchar(45) DEFAULT NULL,
  `approvedBy` varchar(45) DEFAULT NULL,
  `approvedDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortB1ID`),
  KEY `sugar_internalfortB1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortc1`
--

CREATE TABLE `sugar_internalfortc1` (
  `sugar_internalfortC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `premixType` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `expirationDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `COA` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortC1ID`),
  KEY `sugar_intenalfortC1_ibfk_1` (`manufacturerCompName`),
  KEY `sugar_internalfortC1_ibfk_2` (`premixType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortc2`
--

CREATE TABLE `sugar_internalfortc2` (
  `sugar_internalfortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `vitaminABalance` double DEFAULT NULL,
  `vitaminAReceived` double DEFAULT NULL,
  `vitaminA1` double DEFAULT NULL,
  `vitaminA2` double DEFAULT NULL,
  `vitaminA3` double DEFAULT NULL,
  `vitaminA4` double DEFAULT NULL,
  `vitaminA5` double DEFAULT NULL,
  `vitaminA6` double DEFAULT NULL,
  `sugarBalance` double DEFAULT NULL,
  `sugarReceived` double DEFAULT NULL,
  `sugar1` double DEFAULT NULL,
  `sugar2` double DEFAULT NULL,
  `sugar3` double DEFAULT NULL,
  `sugar4` double DEFAULT NULL,
  `sugar5` double DEFAULT NULL,
  `sugar6` double DEFAULT NULL,
  `vegetableOilBalance` double DEFAULT NULL,
  `vegetableOilReceived` double DEFAULT NULL,
  `vegetableOil1` double DEFAULT NULL,
  `vegetableOil2` double DEFAULT NULL,
  `vegetableOil3` double DEFAULT NULL,
  `vegetableOil4` double DEFAULT NULL,
  `vegetableOil5` double DEFAULT NULL,
  `vegetableOil6` double DEFAULT NULL,
  `ronoxanBalance` double DEFAULT NULL,
  `ronoxanReceived` double DEFAULT NULL,
  `ronoxan1` double DEFAULT NULL,
  `ronoxan2` double DEFAULT NULL,
  `ronoxan3` double DEFAULT NULL,
  `ronoxan4` double DEFAULT NULL,
  `ronoxan5` double DEFAULT NULL,
  `ronoxan6` double DEFAULT NULL,
  `nitrogenBalance` double DEFAULT NULL,
  `nitrogenReceived` double DEFAULT NULL,
  `nitrogen1` double DEFAULT NULL,
  `nitrogen2` double DEFAULT NULL,
  `nitrogen3` double DEFAULT NULL,
  `nitrogen4` double DEFAULT NULL,
  `nitrogen5` double DEFAULT NULL,
  `nitrogen6` double DEFAULT NULL,
  `polythyleneBalance` double DEFAULT NULL,
  `polythyleneReceived` double DEFAULT NULL,
  `polythylene1` double DEFAULT NULL,
  `polythylene2` double DEFAULT NULL,
  `polythylene3` double DEFAULT NULL,
  `polythylene4` double DEFAULT NULL,
  `polythylene5` double DEFAULT NULL,
  `polythylene6` double DEFAULT NULL,
  `polypropyleneBalance` double DEFAULT NULL,
  `polypropyleneReceived` double DEFAULT NULL,
  `polypropylene1` double DEFAULT NULL,
  `polypropylene2` double DEFAULT NULL,
  `polypropylene3` double DEFAULT NULL,
  `polypropylene4` double DEFAULT NULL,
  `polypropylene5` double DEFAULT NULL,
  `polypropylene6` double DEFAULT NULL,
  `sewingThreadBalance` double DEFAULT NULL,
  `sewingThreadReceived` double DEFAULT NULL,
  `sewingThread1` double DEFAULT NULL,
  `sewingThread2` double DEFAULT NULL,
  `sewingThread3` double DEFAULT NULL,
  `sewingThread4` double DEFAULT NULL,
  `sewingThread5` double DEFAULT NULL,
  `sewingThread6` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortB2ID`),
  KEY `sugar_internalfortC2_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortc3`
--

CREATE TABLE `sugar_internalfortc3` (
  `sugar_internalfortC3ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `lotID` double DEFAULT NULL,
  `bagsProduced` double DEFAULT NULL,
  `deliveryNumber` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `dispatchedLotID` double DEFAULT NULL,
  `dispatchedBags` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `transactionDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortC3ID`),
  KEY `sugar_internalfortC3_factories` (`factoryName`),
  KEY `sugar_internalfortC3_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortd1`
--

CREATE TABLE `sugar_internalfortd1` (
  `sugar_internalfortD1ID` int(11) NOT NULL AUTO_INCREMENT,
  `lotsID` double DEFAULT NULL,
  `productionDate` varchar(45) DEFAULT NULL,
  `samplesDate` varchar(45) DEFAULT NULL,
  `laboratoryReport` varchar(45) DEFAULT NULL,
  `reportDate` varchar(45) DEFAULT NULL,
  `vitaminA` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortD1ID`),
  KEY `sugar_internalfortD1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqca1`
--

CREATE TABLE `sugar_internalqca1` (
  `sugar_internalQCA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `numberOfBags` double DEFAULT NULL,
  `lotID0` double DEFAULT NULL,
  `productionDate` varchar(45) DEFAULT NULL,
  `dispatchedBags` double DEFAULT NULL,
  `lotID1` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCA1ID`),
  KEY `sugar_internalQCA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqcb1`
--

CREATE TABLE `sugar_internalqcb1` (
  `sugar_internalQCB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `harvestYear` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `productionRate` double DEFAULT NULL,
  `theoreticalFeederFlow` double DEFAULT NULL,
  `feederFlow1` double DEFAULT NULL,
  `feederFlow2` double DEFAULT NULL,
  `feederFlow3` double DEFAULT NULL,
  `adjusted` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCB1ID`),
  KEY `sugar_internalQCB1_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqcb2`
--

CREATE TABLE `sugar_internalqcb2` (
  `sugar_internalQCB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `harvestYear` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `sugarProduced` double DEFAULT NULL,
  `bagNumbers` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `sugarPremixRatio` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCB2ID`),
  KEY `sugar_internalQCB2_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqcc1`
--

CREATE TABLE `sugar_internalqcc1` (
  `sugar_internalQCC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `shiftTime` varchar(45) DEFAULT NULL,
  `sugarProduced` double DEFAULT NULL,
  `premixUsed0` double DEFAULT NULL,
  `fortifiedSugar` varchar(45) DEFAULT NULL,
  `premixUsed1` double DEFAULT NULL,
  `sugarPremix` double DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCC1ID`),
  KEY `sugar_internalQCC1_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_markettable`
--

CREATE TABLE `sugar_markettable` (
  `SugarMarketID` int(11) NOT NULL AUTO_INCREMENT,
  `sample_no` varchar(100) NOT NULL,
  `date_collected` varchar(50) NOT NULL,
  `time_collected` varchar(50) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `collection_method` text NOT NULL,
  `collection_reason` text NOT NULL,
  `collector` varchar(250) NOT NULL,
  `dealer` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `sample_size` double NOT NULL,
  `date_dispatched` varchar(50) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `specimen_seal` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  PRIMARY KEY (`SugarMarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(45) NOT NULL,
  `supplier_email` varchar(45) NOT NULL,
  `supplier_location` varchar(45) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `manufacturer_id` (`manufacturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_rolers`
--

CREATE TABLE `user_rolers` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` bigint(20) NOT NULL AUTO_INCREMENT,
  `usersFullnames` varchar(80) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userPassword` varchar(45) NOT NULL,
  `userRights` tinyint(1) NOT NULL,
  `user_role` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `userEmail` varchar(45) NOT NULL,
  `activationcode` varchar(250) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`usersID`),
  KEY `user_role` (`user_role`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `vehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleName` varchar(100) NOT NULL,
  PRIMARY KEY (`vehicleId`),
  KEY `vehicleName` (`vehicleName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_oildata`
--
CREATE TABLE `view_oildata` (
`OilProductionID` int(11)
,`prod_month` varchar(20)
,`opening_balance` double
,`qty_delivered` double
,`supplier` varchar(250)
,`qty_rejected` double
,`qty_issued` double
,`closing_balance` double
,`dosage_rate1` double
,`theoretical_prod` double
,`actual_prod` double
,`production_unfort` double
,`exp_fats` double
,`exp_oil` double
,`company_id` int(250)
,`year` varchar(4)
,`dosage_rate2` double
);
-- --------------------------------------------------------

--
-- Table structure for table `wheat_externalfortb1`
--

CREATE TABLE `wheat_externalfortb1` (
  `wheat_externalFortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB1ID`),
  KEY `wheat_externalFortB1_manufacturerFortified` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_externalfortb2`
--

CREATE TABLE `wheat_externalfortb2` (
  `wheat_externalFortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packagingArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `wearingProtective` varchar(45) DEFAULT NULL,
  `trainnedInTasks` varchar(45) DEFAULT NULL,
  `receiptAndStorage` varchar(45) DEFAULT NULL,
  `premixDilutionApplicable` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `samplingOfWheatFlour` varchar(45) DEFAULT NULL,
  `ironSpotTest` varchar(45) DEFAULT NULL,
  `premixInventory` varchar(45) DEFAULT NULL,
  `COAReceived` varchar(45) DEFAULT NULL,
  `premixStored` varchar(45) DEFAULT NULL,
  `FIFOSystemPremix` varchar(45) DEFAULT NULL,
  `FIFOSystemFlour` varchar(45) DEFAULT NULL,
  `premixHandledWell` varchar(45) DEFAULT NULL,
  `premixDilution` varchar(45) DEFAULT NULL,
  `homogeneityAssessed` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `recordsOfFeeder` varchar(45) DEFAULT NULL,
  `premixLevel` varchar(45) DEFAULT NULL,
  `recordsOfFlour` varchar(45) DEFAULT NULL,
  `flourSamples` varchar(45) DEFAULT NULL,
  `ratioWheatProduced` varchar(45) DEFAULT NULL,
  `ironContent` varchar(45) DEFAULT NULL,
  `spotTestIron` varchar(45) DEFAULT NULL,
  `quantitativeMethodIron` varchar(45) DEFAULT NULL,
  `quantitativeMethodVitaminA` varchar(45) DEFAULT NULL,
  `dailyCompositeSamples` varchar(45) DEFAULT NULL,
  `labellingMeetsSpecifications` varchar(45) DEFAULT NULL,
  `fortifiedWheatFlour` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActionsTaken` varchar(45) DEFAULT NULL,
  `assessment` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestions` varchar(45) DEFAULT NULL,
  `typeOfIron` varchar(45) DEFAULT NULL,
  `compositeID` varchar(45) DEFAULT NULL,
  `factoryEstimatesIronMgPerKg` double DEFAULT NULL,
  `labResultsIronMgPerKg` double DEFAULT NULL,
  `inspectionVitaminMgPerKg0` double DEFAULT NULL,
  `IDOtherSamples` varchar(45) DEFAULT NULL,
  `ironMgPerKg2` double DEFAULT NULL,
  `vitaminAMgPerKg1` double DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB2ID`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_externalfortb3`
--

CREATE TABLE `wheat_externalfortb3` (
  `wheat_externalFortB3ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `dateOfInspection` varchar(45) DEFAULT NULL,
  `factoryRepresentative` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `inspectorDate` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB3ID`),
  KEY `wheat_externalFortB3_factories` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalforta1`
--

CREATE TABLE `wheat_internalforta1` (
  `wheat_internalFortA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(10) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `purchaseOrderNumber` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `integrityObservation` varchar(45) DEFAULT NULL,
  `lotNumber` varchar(10) DEFAULT NULL,
  `lotObservation` varchar(45) DEFAULT NULL,
  `productionDate` varchar(10) DEFAULT NULL,
  `productionObservation` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(10) DEFAULT NULL,
  `expiryObservation` varchar(45) DEFAULT NULL,
  `micronutrientLevelsInLabel` varchar(10) DEFAULT NULL,
  `micronutrientObservation` varchar(45) DEFAULT NULL,
  `certificateOfAnalysis` varchar(10) DEFAULT NULL,
  `coaObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortA1ID`),
  KEY `wheat_internalFortA1_premixType` (`productType`),
  KEY `wheat_internalFortA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalforta2`
--

CREATE TABLE `wheat_internalforta2` (
  `wheat_internalFortA2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `lotID0` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(45) DEFAULT NULL,
  `dispatchedQuantity` double DEFAULT NULL,
  `lotID1` varchar(45) DEFAULT NULL,
  `reportingDate` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortA2ID`),
  KEY `wheat_internalFortA2_ibfk_1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalfortb1`
--

CREATE TABLE `wheat_internalfortb1` (
  `wheat_internalFortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `productionRate` double DEFAULT NULL,
  `theoreticalFeederFlow` double DEFAULT NULL,
  `feederFlow1` double DEFAULT NULL,
  `feederFlow2` double DEFAULT NULL,
  `feederFlow3` double DEFAULT NULL,
  `adjusted` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortB1ID`),
  KEY `wheat_internalFortB1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalfortb2`
--

CREATE TABLE `wheat_internalfortb2` (
  `wheat_internalFortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `flourProduced` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortB2ID`),
  KEY `wheat_internalFortB2_iodizationCenter` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalfortc1`
--

CREATE TABLE `wheat_internalfortc1` (
  `wheat_internalFortC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `shiftTime` varchar(45) DEFAULT NULL,
  `wheatProduced` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `wheatFlourVSPremix` double DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortC1ID`),
  KEY `wheat_internalFortC1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_markettable`
--

CREATE TABLE `wheat_markettable` (
  `WheatMarketID` int(11) NOT NULL AUTO_INCREMENT,
  `sample_no` varchar(100) NOT NULL,
  `date_collected` varchar(50) NOT NULL,
  `time_collected` varchar(50) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `collection_method` text NOT NULL,
  `collection_reason` text NOT NULL,
  `collector` varchar(250) NOT NULL,
  `dealer` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `sample_size` double NOT NULL,
  `date_dispatched` varchar(50) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `specimen_seal` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(250) NOT NULL,
  `edited_by` varchar(250) NOT NULL,
  `time_edited` varchar(250) NOT NULL,
  PRIMARY KEY (`WheatMarketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_production`
--

CREATE TABLE `wheat_production` (
  `WheatProductionID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_month` varchar(20) NOT NULL,
  `opening_prmx_balance` double NOT NULL,
  `qty_prmx_delivered` double NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `qty_prmx_rejected` double NOT NULL,
  `qty_issued_o_f` double NOT NULL,
  `qty_issued_m` double NOT NULL,
  `closing_balance` double NOT NULL,
  `dosage_rate_o_f` double NOT NULL,
  `theoretical_prod` double NOT NULL,
  `actual_prod_oil` double NOT NULL,
  `actual_prod_fats` double NOT NULL,
  `dosage_rate_m` double NOT NULL,
  `theoretical_prod_m` double NOT NULL,
  `actual_prod_m` double NOT NULL,
  `production_unfort` double NOT NULL,
  `exp_fats` double NOT NULL,
  `exp_oil` double NOT NULL,
  `brands` text NOT NULL,
  PRIMARY KEY (`WheatProductionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wheat_productiontable`
--

CREATE TABLE `wheat_productiontable` (
  `WheatProductionID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_month` varchar(20) NOT NULL,
  `opening_balance` double NOT NULL,
  `qty_delivered` double NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `qty_rejected` double NOT NULL,
  `qty_issued` double NOT NULL,
  `closing_balance` double NOT NULL,
  `dosage_rate` double NOT NULL,
  `theoretical_prod` double NOT NULL,
  `actual_prod` double NOT NULL,
  `production_unfort` double NOT NULL,
  `exp_fort` double NOT NULL,
  `exp_unfort` double NOT NULL,
  `fort_brands` text NOT NULL,
  `unfort_brands` text NOT NULL,
  `fort_sales` double NOT NULL,
  `company_id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `time_added` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `edited_by` varchar(250) NOT NULL DEFAULT 'N/A',
  `time_edited` varchar(20) NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`WheatProductionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

-- --------------------------------------------------------

--
-- Structure for view `comp_vehicles`
--
DROP TABLE IF EXISTS `comp_vehicles`;

CREATE VIEW `comp_vehicles` AS select `a`.`company_id` AS `company_id`,`a`.`company_name` AS `company_name`,`c`.`vehicleName` AS `vehicle` from ((`company` `a` join `company_vehicles` `b`) join `foodtype` `c`) where ((`a`.`company_id` = `b`.`company_id`) and (`b`.`vehicle_id` = `c`.`vehicleId`));

-- --------------------------------------------------------

--
-- Structure for view `view_oildata`
--
DROP TABLE IF EXISTS `view_oildata`;

CREATE VIEW `view_oildata` AS select `oil_productiontable`.`OilProductionID` AS `OilProductionID`,`oil_productiontable`.`prod_month` AS `prod_month`,`oil_productiontable`.`opening_balance` AS `opening_balance`,`oil_productiontable`.`qty_delivered` AS `qty_delivered`,`oil_productiontable`.`supplier` AS `supplier`,`oil_productiontable`.`qty_rejected` AS `qty_rejected`,(`oil_productiontable`.`qty_issued_o_f` + `oil_productiontable`.`qty_issued_m`) AS `qty_issued`,`oil_productiontable`.`closing_balance` AS `closing_balance`,`oil_productiontable`.`dosage_rate_o_f` AS `dosage_rate1`,(`oil_productiontable`.`theoretical_prod` + `oil_productiontable`.`theoretical_prod_m`) AS `theoretical_prod`,((`oil_productiontable`.`actual_prod_oil` + `oil_productiontable`.`actual_prod_fats`) + `oil_productiontable`.`actual_prod_m`) AS `actual_prod`,`oil_productiontable`.`production_unfort` AS `production_unfort`,`oil_productiontable`.`exp_fats` AS `exp_fats`,`oil_productiontable`.`exp_oil` AS `exp_oil`,`oil_productiontable`.`company_id` AS `company_id`,`oil_productiontable`.`year` AS `year`,`oil_productiontable`.`dosage_rate_m` AS `dosage_rate2` from `oil_productiontable` group by `oil_productiontable`.`OilProductionID`,`oil_productiontable`.`prod_month`,`oil_productiontable`.`opening_balance`,`oil_productiontable`.`qty_delivered`,`oil_productiontable`.`supplier`,`oil_productiontable`.`qty_rejected`;
