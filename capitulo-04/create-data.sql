# launch with mysql -h localhost -u user -p"password" db_test < create-data.sql
# change user,password and database for the ones you are using in your system

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `student` (`id`, `name`)
VALUES
	(1, 'JOSELUIS'),
	(2, 'ANGEL')
	ON DUPLICATE KEY UPDATE id=id;
