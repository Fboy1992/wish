-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2015 年 09 月 04 日 08:51
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `wish`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `sf_admin`
-- 

CREATE TABLE `sf_admin` (
  `aid` int(10) unsigned NOT NULL auto_increment COMMENT '后台用户主键',
  `username` varchar(20) NOT NULL default '' COMMENT '用户名',
  `password` char(32) NOT NULL default '' COMMENT '后台用户密码',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台用户表' AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `sf_admin`
-- 

INSERT INTO `sf_admin` VALUES (1, 'admin', '7fef6171469e80d32c0559f88b377245');

-- --------------------------------------------------------

-- 
-- 表的结构 `sf_wish`
-- 

CREATE TABLE `sf_wish` (
  `wid` int(10) unsigned NOT NULL auto_increment COMMENT '愿望主键ID',
  `content` varchar(200) NOT NULL default '' COMMENT '愿望内容',
  `name` varchar(20) NOT NULL default '' COMMENT '愿望人昵称',
  `time` int(10) unsigned NOT NULL default '0' COMMENT '许愿时间',
  PRIMARY KEY  (`wid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='愿望表' AUTO_INCREMENT=162 ;

-- 
-- 导出表中的数据 `sf_wish`
-- 

INSERT INTO `sf_wish` VALUES (159, '我是倔强的小强。[8][8][9]', '杀不死', 1436959728);
INSERT INTO `sf_wish` VALUES (158, '愿我学习进步，心想事成。[8][8][8]', '甜甜', 1436838350);
INSERT INTO `sf_wish` VALUES (157, '洋洋洋[6][6][6][7][7][8][9]', '小洋人', 1436838297);
INSERT INTO `sf_wish` VALUES (156, '这怎才能天天开心呢？[5][3][4]', '快乐人', 1436838255);
INSERT INTO `sf_wish` VALUES (2, '开心宝贝', '我要天天·开开心心的', 2015);
INSERT INTO `sf_wish` VALUES (155, '我要寻找我的爱情。[9][8]', '小鱼儿', 1436838224);
INSERT INTO `sf_wish` VALUES (154, '我要成为高级php工程师。[7]', '张世峰', 1436838196);
INSERT INTO `sf_wish` VALUES (153, '我要保卫地球[7][8][9]', '动感超人', 1436838168);
