CREATE TABLE `comments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EntryId` int(11) DEFAULT NULL,
  `AuthorId` int(11) NOT NULL,
  `AuthorName` varchar(100) DEFAULT 'Anonymous',
  `Date` int(11) NOT NULL,
  `Body` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin2;