<?php

/*

Data TYPE:
INT, BIGINT, TINYINT 整數
FLOAT 有小數點
VARCHAR(255) 文字(可以最長255個)
TIMESTAMP 日期和時間

AUTO_INCREMENT -->auto generate

CREATE TABLE:
    CREATE TABLE `name`(
        `rowName1` INT(11) NOT NULL AUTO_INCREMENT,
        `rowName2` VARCHAR(255) NOT NULL DEFAULT '0',
        `rowName3` TIMESTAMP 
    );

INSERT DATA:
    INSERT INTO tableName (`row1`, `row2`, `row3`)
    VALUES ('value1','value2','value3');

UPDATE DATA:
    UPDATE `tableName`
    SET `rowName` = 'VALUE1', `rowName2` = 'VALUE2'
    WHERE condition;
// condition can be = or LIKE;

SELECT DATA:
    SELECT * FROM `tableName` WHERE `rowName` = `value`;
//=, LIKE also can use after WHERE
OR
    SELECT `row1`,`row2` FROM `tableName`;

ORDER result:
    SELECT `row1`,`row2` FROM `tableName` 
    ORDER BY `row1` ASC;
//ASC is ascending, DESC is descending
*/
?>