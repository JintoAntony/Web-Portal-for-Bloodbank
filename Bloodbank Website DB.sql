Database Name : bloodbank
===========================user================================================
CREATE TABLE `user`(
  `user_id` int(64) NOT NULL auto_increment,
  `user_fullname` varchar(128) NOT NULL,
  `user_gender` varchar(128) NOT NULL,
  `user_dob` varchar(128) NOT NULL,
  `user_bloodgroup` varchar(30) NOT NULL,
  `user_mobilenumber` varchar(30) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_username` varchar(128) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_weight` int(30) NOT NULL,
  `user_lastdonated` varchar(128) NOT NULL,
  `user_district` varchar(128) NOT NULL,
  `user_taluk` varchar(128) NOT NULL,  
  `user_residencenumber` varchar(128) NOT NULL,  
  `user_address` varchar(256) NOT NULL,  
  `user_message` varchar(256) NOT NULL,  
  `user_community` varchar(128) NOT NULL,   
   PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===========================Blood Request=====================================
CREATE TABLE `blood_request` (
  `request_id` int(64) NOT NULL auto_increment,
  `request_patientname` varchar(128) NOT NULL,
  `request_patientdoctor` varchar(128) NOT NULL,
  `request_hospital` varchar(128) NOT NULL,
  `request_place` varchar(128) NOT NULL,
  `request_district` varchar(128) NOT NULL,
  `request_email` varchar(128) NOT NULL,
  `request_requiredon` date NOT NULL,
  `request_bloodgroup` varchar(30) NOT NULL,
  `request_contactperson` varchar(30) NOT NULL,
  
  `request_contactno` varchar(128) NOT NULL,  
   PRIMARY KEY  (`request_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
============================CONTACT============================================
CREATE TABLE `contact` (
  `contact_id` int(24) NOT NULL auto_increment,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(64) NOT NULL,
  `cont_message` varchar(300) NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
=================================ADMIN=========================================
CREATE TABLE `admin`(
  `username` varchar(128) NOT NULL, 
  `password` varchar(128) NOT NULL,
PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;

/*
===========================Buy Domain Table===================================
CREATE TABLE `buy_domain` (
  `domain_id` int(64) NOT NULL auto_increment,
  `domain_user_id` varchar(64) NOT NULL, //Here it is buyer
  `domain_name` varchar(128) NOT NULL,
  `domain_extension` varchar(128) NOT NULL,
  `domain_price` varchar(30) NOT NULL,
  PRIMARY KEY  (`domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
============================CONTACT===========================================

===========================Requested Domain Table=============================
CREATE TABLE `request_domain` (
  `request_id` int(64) NOT NULL auto_increment,
  `request_domain_id` varchar(64) NOT NULL,
  `request_user_id` varchar(64) NOT NULL,   
  PRIMARY KEY  (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;


===========================ShowCase Domain=====================================
CREATE TABLE `showcase_domain` (
  `showcase_domain_id` int(64) NOT NULL auto_increment, 
  `showcase_domain_name` varchar(128) NOT NULL,
  `showcase_domain_extension` varchar(128) NOT NULL,  
  `showcase_domain_price` varchar(30) NOT NULL,  
  PRIMARY KEY  (`showcase_domain_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

===============================================================================

//Not used presently
=====================================VALIDITY==================================
CREATE TABLE `validity`(
  `employer_id` int(4) NOT NULL auto_increment,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL, 
PRIMARY KEY  (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===============================================================================
*?
