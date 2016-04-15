 /*========================================================= weixvip20160414数据库*/

/*================================= 建立表空间及对应dba*/
 -- create user
 GRANT USAGE ON *.* TO 'weixvip20160414'@'localhost' IDENTIFIED BY 'weixvip20160414' WITH GRANT OPTION;
 -- create database
 CREATE DATABASE weixvip20160414 CHARACTER SET  utf8  COLLATE utf8_general_ci;
 -- grant user 权限1,权限2,select,insert,update,delete,create,drop,index,alter,grant,references,reload,shutdown,process,file等14个权限
 GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,LOCK TABLES ON weixvip20160414.*  TO 'weixvip20160414'@'localhost' IDENTIFIED BY 'weixvip20160414';

 /*================================= 建立表、表主外键、多表关联等T-SQL*/
 -- 改变当前数据库
 USE weixvip20160414;

/*
用户表
*/
create table user (
id INT NOT NULL auto_increment COMMENT 'ID标识',
password VARCHAR(128) NOT NULL COMMENT '密码',
country VARCHAR(128) NOT NULL COMMENT '城市',
age VARCHAR(128) NOT NULL COMMENT '生日',
phone CHAR(11) NOT NULL COMMENT '电话号码',
email VARCHAR(128) NULL DEFAULT '' COMMENT '邮件',
adate VARCHAR(19) NOT NULL COMMENT '提交信息时间',
openid VARCHAR(50)  NOT NULL COMMENT 'openID',
headimgurl VARCHAR(256) NOT NULL COMMENT '微信用户头像',
nickname VARCHAR(256) NOT NULL COMMENT '微信用户昵称',
primary key (id) -- 主键
) ENGINE=InnoDB DEFAULT CHARSET=utf8;