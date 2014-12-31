-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2015 年 01 月 01 日 04:14
-- 服务器版本: 5.5.27
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_slgxzs`
--

-- --------------------------------------------------------

--
-- 表的结构 `dailysentence`
--

CREATE TABLE IF NOT EXISTS `dailysentence` (
  `sid` int(8) NOT NULL,
  `dateline` varchar(12) NOT NULL COMMENT '日期',
  `content` varchar(1024) NOT NULL COMMENT '原文',
  `note` varchar(1024) NOT NULL COMMENT '翻译',
  `translation` varchar(1024) NOT NULL COMMENT '补充',
  `picture` varchar(512) NOT NULL COMMENT '小图',
  `picture2` varchar(512) NOT NULL COMMENT '大图',
  `fenxiang_img` varchar(512) NOT NULL COMMENT '分享图',
  `tts` varchar(512) NOT NULL COMMENT '语音',
  `tags` varchar(512) NOT NULL COMMENT '标签',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `dailysentence`
--

