<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//ENHANCE REQ20140328
ALTER TABLE `opt_keterangan` ADD `late_counted_no_in` TINYINT( 1 ) NOT NULL DEFAULT '0' COMMENT '"late_is_counted_with_no_intime",blank intime, late is counted' AFTER `late_is_counted`;
    UPDATE `presensi2`.`opt_keterangan` SET `late_counted_no_in` = '1' WHERE `opt_keterangan`.`opt_keterangan_id` =3;
