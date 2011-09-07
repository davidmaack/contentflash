-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `fl_size` varchar(64) NOT NULL default '',
  `fl_transparent` char(1) NOT NULL default '',
  `fl_flashvars` varchar(255) NOT NULL default '',
  `fl_altContent` text NULL,
  `fl_source` varchar(32) NOT NULL default '',
  `singleSRC` varchar(255) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `fl_interactive` char(1) NOT NULL default '',
  `fl_flashID` varchar(64) NOT NULL default '',
  `fl_flashJS` text NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;