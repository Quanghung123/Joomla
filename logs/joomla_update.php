#
#<?php die('Forbidden.'); ?>
2016-03-22T12:49:24+00:00	INFO 192.168.9.12	update	Update started by user Super User (614). Old version is 3.4.8.
2016-03-22T12:49:24+00:00	INFO 192.168.9.12	update	Downloading update file from https://github.com/joomla/joomla-cms/releases/download/3.5.0/Joomla_3.5.0-Stable-Update_Package.zip.
2016-03-22T12:49:47+00:00	INFO 192.168.9.12	update	File Joomla_3.5.0-Stable-Update_Package.zip successfully downloaded.
2016-03-22T12:49:48+00:00	INFO 192.168.9.12	update	Starting installation of new version.
2016-03-22T12:50:36+00:00	INFO 192.168.9.12	update	Finalising installation.
2016-03-22T12:50:40+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-07-01. Query text: ALTER TABLE `#__session` MODIFY `session_id` varchar(191) NOT NULL DEFAULT '';.
2016-03-22T12:50:42+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-07-01. Query text: ALTER TABLE `#__user_keys` MODIFY `series` varchar(191) NOT NULL;.
2016-03-22T12:50:42+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-10-13. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-03-22T12:50:42+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-10-26. Query text: ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_tag`;.
2016-03-22T12:50:42+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-10-26. Query text: ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_type`;.
2016-03-22T12:50:42+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-10-30. Query text: UPDATE `#__menu` SET `title` = 'com_contact_contacts' WHERE `id` = 8;.
2016-03-22T12:50:42+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-11-04. Query text: DELETE FROM `#__menu` WHERE `title` = 'com_messages_read' AND `client_id` = 1;.
2016-03-22T12:50:43+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-11-04. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-03-22T12:50:43+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-11-05. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-03-22T12:50:43+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2015-11-05. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2016-03-22T12:50:44+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-02-26. Query text: CREATE TABLE IF NOT EXISTS `#__utf8_conversion` (   `converted` tinyint(4) NOT N.
2016-03-22T12:50:44+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-02-26. Query text: INSERT INTO `#__utf8_conversion` (`converted`) VALUES (0);.
2016-03-22T12:50:45+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` DROP INDEX `idx_link_old`;.
2016-03-22T12:50:48+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` MODIFY `old_url` VARCHAR(2048) NOT NULL;.
2016-03-22T12:50:49+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048) NOT NULL;.
2016-03-22T12:50:50+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` MODIFY `referer` VARCHAR(2048) NOT NULL;.
2016-03-22T12:50:51+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` ADD INDEX `idx_old_url` (`old_url`(100));.
2016-03-22T12:50:51+00:00	INFO 192.168.9.12	update	Deleting removed files and folders.
2016-03-22T12:52:32+00:00	INFO 192.168.9.12	update	Cleaning up after installation.
2016-03-22T12:52:32+00:00	INFO 192.168.9.12	update	Update to version 3.5.0 is complete.
2016-05-12T08:16:24+00:00	INFO 192.168.9.12	update	Update started by user Super User (614). Old version is 3.5.0.
2016-05-12T08:16:25+00:00	INFO 192.168.9.12	update	Downloading update file from https://github.com/joomla/joomla-cms/releases/download/3.5.1/Joomla_3.5.x_to_3.5.1-Stable-Patch_Package.zip.
2016-05-12T08:16:27+00:00	INFO 192.168.9.12	update	File Joomla_3.5.x_to_3.5.1-Stable-Patch_Package.zip successfully downloaded.
2016-05-12T08:16:28+00:00	INFO 192.168.9.12	update	Starting installation of new version.
2016-05-12T08:16:32+00:00	INFO 192.168.9.12	update	Finalising installation.
2016-05-12T08:16:32+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.1-2016-03-25. Query text: ALTER TABLE `#__user_keys` MODIFY `user_id` varchar(150) NOT NULL;.
2016-05-12T08:16:33+00:00	INFO 192.168.9.12	update	Ran query from file 3.5.1-2016-03-29. Query text: UPDATE `#__utf8_conversion` SET `converted` = 0  WHERE (SELECT COUNT(*) FROM `#_.
2016-05-12T08:16:33+00:00	INFO 192.168.9.12	update	Deleting removed files and folders.
2016-05-12T08:17:16+00:00	INFO 192.168.9.12	update	Cleaning up after installation.
2016-05-12T08:17:16+00:00	INFO 192.168.9.12	update	Update to version 3.5.1 is complete.
