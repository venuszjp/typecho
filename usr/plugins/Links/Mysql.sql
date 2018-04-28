CREATE TABLE `typecho_links` (
  `lid` int(10) unsigned NOT NULL auto_increment COMMENT 'links表主键',
  `name` varchar(200) default NULL COMMENT 'links名称',
  `url` varchar(200) default NULL COMMENT 'links网址',
  `sort` varchar(200) default NULL COMMENT 'links分类',
  `image` varchar(200) default NULL COMMENT 'links图片',
  `description` varchar(200) default NULL COMMENT 'links描述',
  `user` varchar(200) default NULL COMMENT '自定义',
  `order` int(10) unsigned default '0' COMMENT 'links排序',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY  (`lid`)
) ENGINE=MYISAM  DEFAULT CHARSET=%charset%;
