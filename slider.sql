delimiter $$

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL auto_increment,
  `slider_title` varchar(100) default NULL,
  `begin_date` varchar(45) default NULL,
  `end_date` varchar(45) default NULL,
  `file_name` varchar(100) default NULL,
  `slider_anchor` varchar(100) default NULL,
  `slider_alt` varchar(100) default NULL,
  `order` int(4) default NULL,
  PRIMARY KEY  (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1$$

